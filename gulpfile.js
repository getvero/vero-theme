const gulp             = require('gulp'),
      del              = require('del'),
      rename           = require('gulp-rename'),
      csso             = require('gulp-csso'),
      terser           = require('gulp-terser'),
      concat           = require('gulp-concat');

const paths = {
  css: {
    src : 'assets/dev/stylesheets/**/*.css',
    dest: 'assets/dist/stylesheets/'
  },
  scripts: {
    src : 'assets/dev/scripts/**/*.js',
    dest: 'assets/dist/scripts/'
  },
};

// Clean dist folder
function clean() {
  return del([paths.css.dest, paths.scripts.dest]);
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
    'assets/dev/scripts/**/*.js', // All scripts
    '!assets/dev/scripts/source/*', // Ignore coffeescript in /source
    '!assets/dev/scripts/core.js', // Ignore core and landing as they only get minified when concating
    '!assets/dev/scripts/landing.js' // Above
  ])
  .pipe(terser())
  .pipe(rename({
    suffix: '.min'
  }))
  .pipe(gulp.dest('assets/dist/scripts'))
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

const js    = gulp.series(uglifyVendorScripts, concatScripts);
const build = gulp.series(clean, gulp.parallel(buildStyles, js));

exports.clean   = clean;
exports.scripts = js;
exports.dev     = build;