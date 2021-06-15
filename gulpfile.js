const gulp             = require('gulp'),
      del              = require('del'),
      rename           = require('gulp-rename'),
      csso             = require('gulp-csso'),
      terser           = require('gulp-terser'),
      concat           = require('gulp-concat');

const paths = {
  css: {
    src : 'src/assets/dev/stylesheets/**/*.css',
    dest: 'src/assets/dist/stylesheets/'
  },
  scripts: {
    src : 'src/assets/dev/scripts/**/*.js',
    dest: 'src/assets/dist/scripts/'
  },
};

// Clean dist folder
function clean() {
  return del([paths.css.dest, paths.scripts.dest]);
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
    'src/assets/dev/scripts/**/*.js', // All scripts
    '!src/assets/dev/scripts/source/*', // Ignore coffeescript in /source
    '!src/assets/dev/scripts/core.js', // Ignore core and landing as they only get minified when concating
    '!src/assets/dev/scripts/landing.js' // Above
  ])
  .pipe(terser())
  .pipe(rename({
    suffix: '.min'
  }))
  .pipe(gulp.dest('src/assets/dist/scripts'))
}

// Concat scripts
function concatScripts() {
 return gulp
 .src([
  'src/assets/dev/scripts/core.js',
  'src/assets/dev/scripts/landing.js'
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
}

const js    = gulp.series(uglifyVendorScripts, concatScripts);
const build = gulp.series(clean, gulp.parallel(buildStyles, js, watch));

exports.clean   = clean;
exports.scripts = js;
exports.dev     = build;