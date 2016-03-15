'use strict';
 
var gulp = require('gulp'),
	compass = require('gulp-compass');

 
gulp.task('compass', function() {
  gulp.src('./scss/**/*.scss')
    .pipe(compass({
      config_file: './config.rb',
      css: './css',
      sass: './scss'
    }))
    .pipe(gulp.dest('./css'));
});

gulp.task('compass:watch', function () {
  gulp.watch('./scss/**/*.scss', ['compass']);
});

gulp.task('default', ['compass', 'compass:watch']);