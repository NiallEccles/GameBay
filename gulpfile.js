const gulp = require('gulp');
const uglify = require('gulp-uglify');
const sass = require('gulp-sass');
const concat = require('gulp-concat');

//Logs message
gulp.task('message', function(){
	return console.log('Gulp is running...');
});
//Minify scripts
gulp.task('minify', function(){
	gulp.src('resources/assets/js/*.js')
		.pipe(uglify())
		.pipe(gulp.dest('resources/assets/dist/js'))
});

//Compile Sass
gulp.task('sass', function(){
	gulp.src('resources/assets/sass/*.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(gulp.dest('resources/assets/dist/css'))
});

//Concat scripts
gulp.task('scripts', function(){
	gulp.src('resources/assets/js/*.js')
		.pipe(concat('script.js'))
		.pipe(uglify())
		.pipe(gulp.dest('resources/assets/dist/js'))
});

//Run build tasks
gulp.task('build', ['sass', 'scripts']);

//Watch files for changes
gulp.task('watch', function(){
	gulp.watch('resources/assets/js/*.js', ['scripts']);
	gulp.watch('resources/assets/sass/*.scss', ['sass']);
});