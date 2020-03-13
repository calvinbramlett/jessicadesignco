var gulp = require('gulp');
var sass = require('gulp-sass');

//compile
gulp.task('sass', function () {
return gulp.src('resources/scss/*.scss')
  .pipe(sass().on('error', sass.logError))
  .pipe(gulp.dest('resources/css'));
});

//compile and watch
gulp.task('watch', function() {
	gulp.watch('resources/scss/**/*.scss', gulp.series('sass'));
});