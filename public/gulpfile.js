var gulp = require('gulp');
var less = require('gulp-less');
var watch = require('gulp-watch');
var prefix = require('gulp-autoprefixer');
var plumber = require('gulp-plumber');
var livereload = require('gulp-livereload');
var path = require('path');
var jshint = require('gulp-jshint');

gulp.task('js', function () {
   return gulp.src('./js/**/*.js')
      .pipe(jshint())
      .pipe(jshint.reporter('default'))
      .pipe(livereload());
});
gulp.task('less', function() {
    return gulp.src('./less/*.less')
        .pipe(plumber())
        .pipe(less({
          paths: ['./', './overrides/', '!./bower/**']
        } ))
        .pipe(prefix("last 8 version", "> 1%", "ie 8", "ie 7"), {cascade:true})
        .pipe(gulp.dest('./css'))
        .pipe(livereload());
});
gulp.task('watch', function() {
    livereload.listen();
    gulp.watch(['./**/*.less', './js/**/*.js'], ['js', 'less']);  // Watch all the .less files, then run the less task
});

gulp.task('default', ['watch']); // Default will run the 'entry' watch task