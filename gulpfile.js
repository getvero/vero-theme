var gulp   = require('gulp'),
    del    = require('del'),
    uglify = require('gulp-uglify');

var paths = {
  scripts: {
    src : ['assets/dev/scripts/**/*.js', '!assets/dev/scripts/dev_message.js', '!assets/dev/scripts/source'],
    dest: 'assets/dist/scripts/'
  },
};

gulp.task('clean', function(done) {
  del(paths.scripts.dest);
  done();
});

gulp.task('scripts', function(done){
  gulp
  .src(paths.scripts.src)
	.pipe(uglify())
  .pipe(gulp.dest(paths.scripts.dest));
});

function watch() {
  gulp.watch(paths.scripts.src, gulp.series('scripts'));
}

gulp.task('build', gulp.series('clean',
  gulp.parallel(
    'scripts',
    watch)
  ));

gulp.task('default', gulp.series('build'));