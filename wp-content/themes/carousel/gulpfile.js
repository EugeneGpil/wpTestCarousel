"use strict";

// modules
const gulp = require('gulp');
const cleanCss = require('gulp-clean-css');
const sass = require('gulp-sass');

//paths
const cssDest = 'public/css';
const sassSrc = 'src/sass/style.scss';
const jsDest = 'public/js';

gulp.task('production', () => {
    gulp.src(['node_modules/animate.css/animate.min.css',
            'node_modules/bootstrap/dist/css/bootstrap.min.css'])
        .pipe(gulp.dest(cssDest));

    gulp.src('node_modules/jquery/dist/jquery.min.js')
        .pipe(gulp.dest(jsDest));

    gulp.src('node_modules/bootstrap/dist/js/bootstrap.min.js')
        .pipe(gulp.dest(jsDest));

    gulp.src('node_modules/bootstrap/dist/fonts/*.*')
        .pipe(gulp.dest('public/fonts'));

    return gulp.src(sassSrc)
        .pipe(sass())
        .pipe(cleanCss())
        .pipe(gulp.dest(cssDest));
});

gulp.task('css', () => {
    return gulp.src(sassSrc)
        .pipe(sass())
        .pipe(gulp.dest(cssDest));
})

gulp.task('watch', function() {
    gulp.watch(sassSrc, gulp.series('css'));
})