const gulp   = require('gulp'),
      del    = require('del'),
      rename = require('gulp-rename'),
      uglify = require('gulp-uglify');

const paths = {
  scripts: {
    src : 'assets/dev/scripts/**/*.js',
    dest: 'assets/dist/scripts/'
  },
};

// Clean dist folder
function clean() {
  return del(paths.scripts.dest);
}

// Move dev message JS to dist folder
function devMessage() {
  return gulp
  .src('assets/dev/scripts/dev_message.js')
  .pipe(gulp.dest(paths.scripts.dest));
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

// Watch scripts and uglify
function watch() {
  return gulp
  .watch(paths.scripts.src, gulp.series(scripts));
}

const js    = gulp.series(devMessage, scripts);
const build = gulp.series(clean, gulp.parallel(js, watch));

exports.scripts = scripts;
exports.watch = watch
exports.default = build;