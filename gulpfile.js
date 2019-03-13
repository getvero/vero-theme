const gulp     = require('gulp'),
      del      = require('del'),
      rename   = require('gulp-rename'),
      imagemin = require('gulp-imagemin'),
      newer    = require('gulp-newer'),
      uglify   = require('gulp-uglify');

const paths = {
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
  return del('assets/dist/**/*');
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
  gulp.watch(paths.scripts.src, gulp.series(scripts))
  gulp.watch('assets/dev/images/**/*', images);
}

const js    = gulp.series(devMessage, scripts);
const build = gulp.series(clean, gulp.parallel(images, js, watch));

exports.clean   = clean;
exports.images  = images;
exports.scripts = scripts;
exports.watch   = watch
exports.local   = build;
exports.default = build;