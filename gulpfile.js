const gulp     = require('gulp'),
      del      = require('del'),
      rename   = require('gulp-rename'),
      imagemin = require('gulp-imagemin'),
      csso     = require('gulp-csso'),
      newer    = require('gulp-newer'),
      uglify   = require('gulp-uglify');

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

// Move dev message JS to dist folder
function devMessage() {
  return gulp
  .src('assets/dev/scripts/dev_message.js')
  .pipe(gulp.dest(paths.scripts.dest));
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
      imagemin.optipng({ optimizationLevel: 5 }),
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

function css() {
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

// Uglify scripts
function scripts() {
  return gulp
  .src([
    'assets/dev/scripts/**/*.js',
    '!assets/dev/scripts/source/*',
    '!assets/dev/scripts/dev_message.js'
  ])
  .pipe(uglify())
  .pipe(rename({
    suffix: '.min'
  }))
  .pipe(gulp.dest(paths.scripts.dest));
}

// Watch assets
function watch() {
  gulp.watch(paths.css.src, css);
  gulp.watch(paths.scripts.src, scripts);
  gulp.watch('assets/dev/images/**/*', images);
}

const js    = gulp.series(devMessage, scripts);
const build = gulp.series(clean, gulp.parallel(css, images, js, watch));

exports.clean   = clean;
exports.images  = images;
exports.scripts = scripts;
exports.default = build;