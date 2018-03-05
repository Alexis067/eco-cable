require('es6-promise').polyfill();
var gulp            = require('gulp');
var sass            = require('gulp-sass');
var autoprefixer    = require('gulp-autoprefixer');
var rename          = require('gulp-rename');
var plumber         = require('gulp-plumber');
var gutil           = require('gulp-util');
var concat          = require('gulp-concat');
var jshint          = require('gulp-jshint');
var uglify          = require('gulp-uglify');

var onError = function (err) {
    console.log('An error occurred:', gutil.colors.red(err.message));
    gutil.beep();
    this.emit('end');
};

gulp.task('sass', function() {
    return gulp.src('./sass/*.scss')
    .pipe(plumber({ errorHandler: onError }))
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(gulp.dest('./'))              // Output LTR stylesheets (style.css)
});

gulp.task('watch', function() {
    gulp.watch('./sass/**/*.scss', ['sass']);
});

gulp.task('default', ['sass']);