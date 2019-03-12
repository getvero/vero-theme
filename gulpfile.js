var gulp     = require('gulp'),
    del      = require('del'),
    uglify   = require('gulp-uglify');

var paths = {
  scripts: {
    src : 'assets/dev/scripts/**/*.js',
    dest: 'assets/dist/scripts/'
  },
};

gulp.task('clean', function(done) {
  del(paths.scripts.dest);
  done();
});

// Move dev message JS to dist folder
gulp.task('scripts', function(done) {
  return gulp
  .src('assets/dev/scripts/dev_message.js')
  .pipe(gulp.dest(paths.scripts.dest));
  done();
});

// Uglify scripts
gulp.task('compress', function(done) {
  return gulp
  .src(['assets/dev/scripts/**/*.js', '!assets/dev/scripts/dev_message.js', '!assets/dev/source'])
  .pipe(uglify())
  .pipe(gulp.dest(paths.scripts.dest));
  done();
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