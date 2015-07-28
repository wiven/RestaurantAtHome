var gulp = require('gulp');
var minifyCss = require('gulp-minify-css');
var rename = require('gulp-rename');
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');

gulp.task('minify', function () {
	gulp.src('public/css/*.css')
		.pipe(minifyCss({
			keepBreaks: true
		}))
		.pipe(rename({
			suffix: '.min'
		}))
		.pipe(gulp.dest('public/css/min'));

	return gulp.src('public/img/optim/*')
		.pipe(imagemin({
			progressive: true,
			svgoPlugins: [{
				removeViewBox: false
			}],
			use: [pngquant()]
		}))
		.pipe(gulp.dest('public/img/'));
});

gulp.task('default', ['minify'], function () {

});
