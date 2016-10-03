'use strict';

// Include Gulp & Tools We'll Use
var gulp = require('gulp');
var $ = require('gulp-load-plugins')();
var browserSync = require("browser-sync").create();
var APP_PATH = 'app/';
var uglify = require('gulp-uglify');
var minify = require('gulp-minify');

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
        APP_PATH + '/styles/*.scss',
        APP_PATH + '/styles/**/*.css'
    ])
    .pipe($.changed('styles', { extension: '.scss'}))
    .pipe($.rubySass({ precision: 10 })
        .on('error', console.error.bind(console))
    )
    .pipe($.autoprefixer(AUTOPREFIXER_BROWSERS))
    .pipe(gulp.dest('.tmp/styles'))

    // Concatenate And Minify Styles
    .pipe($.if('*.css', $.csso()))
    .pipe(gulp.dest( APP_PATH + '/css'))
    .pipe($.size({ title: 'styles'}));
});

gulp.task('compress', function() {
    gulp.src([
            APP_PATH + '/scripts/*.js',
            APP_PATH + '/scripts/libs/*.js',
            APP_PATH + '/scripts/libs/**/*.js',
            APP_PATH + '/scripts/**/*.js'
        ])
    .pipe(minify({
        ext:{
            src:'-debug.js',
            min:'.js'
        },
        exclude: ['tasks'],
        ignoreFiles: ['.combo.js', '-min.js']
    }))
    .pipe(gulp.dest('dist'))
});

gulp.task('serve', ['styles'], function(){
    browserSync.init({ server: "./app" });
    gulp.watch("./app/styles/**/*.scss", ['styles']);
    gulp.watch("./app/**/*").on('change', browserSync.reload);
});




