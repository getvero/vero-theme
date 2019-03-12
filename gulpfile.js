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

gulp.task('clean', function(done) {
  return del(paths.scripts.dest);
});

// Move dev message JS to dist folder
gulp.task('scripts', function() {
  return gulp
  .src('assets/dev/scripts/dev_message.js')
  .pipe(gulp.dest(paths.scripts.dest));
});

// Uglify scripts
gulp.task('compress', function() {
  return gulp
  .src(['assets/dev/scripts/**/*.js', '!assets/dev/scripts/source/', '!assets/dev/scripts/dev_message.js'])
  .pipe(uglify())
  .pipe(rename({
    suffix: '.min'
  }))
  .pipe(gulp.dest(paths.scripts.dest));
});

gulp.task('watch', function() {
  gulp
  .watch(paths.scripts.src, gulp.series('scripts'));
});

gulp.task('build', gulp.series('clean',
  gulp.parallel(
    'scripts',
    'compress',
    'watch')
  ));

gulp.task('default', gulp.series('build'));