const gulp             = require('gulp'),
      del              = require('del'),
      rename           = require('gulp-rename'),
      imagemin         = require('gulp-imagemin'),
      imageminPngquant = require('imagemin-pngquant'),
      csso             = require('gulp-csso'),
      newer            = require('gulp-newer'),
      terser           = require('gulp-terser'),
      concat           = require('gulp-concat');

const paths = {
  css: {
    src : 'assets/dev/stylesheets/**/*.css',
    dest: 'assets/dist/stylesheets/'
  },
  images: {
    src : 'assets/dev/images/**/*',
    dest: 'assets/dist/images/'
  },
  scripts: {
    src : 'assets/dev/scripts/**/*.js',
    dest: 'assets/dist/scripts/'
  },
};

// Clean dist folder
function clean() {
  return del('assets/dist/');
}

function images() {
  return gulp
  .src('assets/dev/images/**/*')
  // Piping the source files to newer before imagemin ensures that only those images that have changed are minified
  .pipe(newer(paths.images.dest))
  .pipe(
    imagemin([
      imagemin.gifsicle({ interlaced: true }),
      imagemin.jpegtran({ progressive: true }),
      imageminPngquant({
        speed: 1,
        quality: [0.7, 0.8] //lossy settings
      }),
      imagemin.svgo({
        plugins: [
          {
            removeViewBox: false,
            collapseGroups: true
          }
        ]
      })
    ])
  )
  .pipe(gulp.dest(paths.images.dest));
}

function buildStyles() {
  return gulp
  .src(paths.css.src)
  .pipe(csso({
    comments : false
  }))
  .pipe(rename({
    suffix: '.min'
  }))
  .pipe(gulp.dest(paths.css.dest));
}

// Uglify vendor scripts
function uglifyVendorScripts() {
  return gulp
  .src([
    // 'assets/dev/scripts/**/*.js',
    // '!assets/dev/scripts/source/*',
    'assets/dev/scripts/vendor/*.js',
    '!assets/dev/scripts/source/*',
  ])
  .pipe(terser())
  .pipe(rename({
    suffix: '.min'
  }))
  .pipe(gulp.dest('assets/dist/scripts/vendor'))
}

// Concat scripts
function concatScripts() {
 return gulp
 .src([
  'assets/dev/scripts/core.js',
  'assets/dev/scripts/landing.js'
  ])
  .pipe(terser())
  .pipe(concat('main.js'))
  .pipe(rename({
    suffix: '.min'
  }))
  .pipe(gulp.dest(paths.scripts.dest));
}

// Watch assets
function watch() {
  gulp.watch(paths.css.src, buildStyles);
  gulp.watch(paths.scripts.src, gulp.series(uglifyVendorScripts, concatScripts));
  gulp.watch('assets/dev/images/**/*', images);
}

const js    = gulp.series(uglifyVendorScripts, concatScripts);
const build = gulp.series(clean, gulp.parallel(buildStyles, images, js, watch));

exports.clean   = clean;
exports.images  = images;
exports.scripts = js;
exports.default = build;
