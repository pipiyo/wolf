'use strict';

// Include Gulp & Tools We'll Use
var gulp = require('gulp');
var $ = require('gulp-load-plugins')();
var browserSync = require("browser-sync").create();
var APP_PATH = 'Resources/';
// var uglify = require('gulp-uglify');
// var minify = require('gulp-minify');
var concatJs = require('gulp-concat');
var notify = require('gulp-notify');
var uglify = require('gulp-uglify');

var AUTOPREFIXER_BROWSERS = [
    'ie >= 8',
    'ie_mob >= 9',
    'ff >= 28',
    'chrome >= 34',
    'safari >= 7',
    'opera >= 23',
    'ios >= 7',
    'android >= 3',
    'bb >= 10'
];


gulp.task('styles', function() {
    return gulp.src([
        APP_PATH + '/Assets/Sass/*.scss',
        APP_PATH + '/Assets/Sass/*.css'
    ])
    .pipe($.changed('styles', { extension: '.scss'}))
    .pipe($.rubySass({ precision: 10 })
        .on('error', console.error.bind(console))
    )
    .pipe($.autoprefixer(AUTOPREFIXER_BROWSERS))
    .pipe(gulp.dest('.tmp/styles'))

    .pipe($.if('*.css', $.csso()))
    .pipe(gulp.dest('Public/css'))
    .pipe($.size({ title: 'styles'}))
    .pipe(notify("Ha finalizado css!"));
});

gulp.task('js', function() 
{
  gulp.src('Resources/Assets/js/*.js')
   .pipe(concatJs('concat.js'))
    .pipe(uglify())
    .pipe(gulp.dest('Public/js'))
    .pipe(notify("Ha finalizado la task js!"));
});

gulp.task('serve', ['styles'], function(){
    browserSync.init({ server: "./app" });
    gulp.watch("./Resources/Assets/Sass/*.scss", ['styles']);
    gulp.watch("./app/**/*").on('change', browserSync.reload);
});




