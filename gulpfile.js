var gulp = require('gulp');
var minifyCss = require('gulp-minify-css');
var rename = require('gulp-rename');

gulp.task('minify', function () {
	gulp.src('public/css/*.css')
		.pipe(minifyCss({
			keepBreaks: true
		}))
		.pipe(rename({
			suffix: '.min'
		}))
		.pipe(gulp.dest('public/css/min'));
});

gulp.task('default', ['minify'], function () {

});
