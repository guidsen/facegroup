var gulp = require('gulp');
var less = require('gulp-less');
var notify = require('gulp-notify');

gulp.task('build-less', function () {
    return gulp.src('resources/less/template.less')
        .pipe(less())
        .pipe(gulp.dest('public/styles'))
        .pipe(notify('Styles compiled!'))
});

gulp.task('default', ['build-less']);
gulp.task('watch', ['build-less'], function () {
    gulp.watch('resources/less/*.less', ['build-less'])
})