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
function compress() {
  return gulp
  .src([
    'assets/dev/scripts/**/*.js',
    '!assets/dev/scripts/source/',
    '!assets/dev/scripts/dev_message.js'
  ])
  .pipe(uglify())
  .pipe(rename({
    suffix: '.min'
  }))
  .pipe(gulp.dest(paths.scripts.dest));
}

function watch() {
  return gulp
  .watch(paths.scripts.src, gulp.series(compress));
}

const js    = gulp.series(devMessage, compress);
const build = gulp.series(clean, gulp.parallel(js, watch));

exports.compress = compress;
exports.watch = watch
exports.default = build;