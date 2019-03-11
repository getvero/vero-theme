var gulp   = require('gulp'),
    uglify = require('gulp-uglify');

var paths = {
  scripts: {
    src : ['assets/src/scripts/**/*.js', '!assets/src/scripts/dev_message.js'],
    dest: 'assets/scripts/'
  },
};

function scripts() {
  return gulp
	.src(paths.scripts.src, {
		sourcemaps: true
	})
	.pipe(uglify())
	.pipe(gulp.dest(paths.scripts.dest));
}

function watch() {
  gulp.watch(paths.scripts.src, scripts);
}

var build = gulp.parallel(scripts, watch);

gulp.task(build);
gulp.task('default', build);