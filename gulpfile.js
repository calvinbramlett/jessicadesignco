var gulp = require('gulp');
var sass = require('gulp-sass');


gulp.task('sass', function () {
  return gulp
    .src('web/app/themes/jessicadesignco/assets/scss/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('web/app/themes/jessicadesignco/assets/css'));
});


//compile and watch
gulp.task('watch', function() {
	gulp.watch('web/app/themes/jessicadesignco/assets/scss/**/*.scss', gulp.series('sass'));
});