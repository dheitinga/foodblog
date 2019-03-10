var gulp = require('gulp'),
    less = require('gulp-less');

/* Task to compile less */
gulp.task('compile-less', function() {
  return gulp.src('../css/src/style.less')
    .pipe(less())
    .on('error', function(err){
      console.log(err.toString());
      this.emit('end');
    })
    .pipe(gulp.dest('../'));
});

/* Task to watch less changes */
gulp.task('watch-less', function() {
  gulp.watch('../css/src/**/*.less', ['compile-less']);
});

/* Task when running `gulp` from terminal */
gulp.task('default', ['watch-less']);
