var gulp   = require('gulp'),
    del    = require('del'),
    rename = require('gulp-rename'),
    uglify = require('gulp-uglify');

var paths = {
  scripts: {
    src : 'assets/dev/scripts/**/*.js',
    dest: 'assets/dist/scripts/'
  },
};

// Clean dist folder
function clean() {
  return del(paths.scripts.dest);
}

exports.clean = clean;

// Move dev message JS to dist folder
function scripts() {
  return gulp
  .src('assets/dev/scripts/dev_message.js')
  .pipe(gulp.dest(paths.scripts.dest));
}

exports.scripts = scripts;

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
  .watch(paths.scripts.src, gulp.series('scripts'));
}

exports.watch = watch

gulp.task('build', gulp.series(clean,
  gulp.parallel(
    scripts,
    compress,
    watch)
  ));

gulp.task('default', gulp.series('build'));