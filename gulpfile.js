var gulp = require('gulp'),
    sass = require('gulp-sass'),
    plumber = require('gulp-plumber'),
    bourbon = require('node-bourbon').includePaths,
    neat = require('node-neat').includePaths,
    minifyCss = require('gulp-minify-css'),
    livereload = require('gulp-livereload');

var paths = {
    scss: 'scss/**/*.scss'
};

gulp.task('styles', function () {
  return gulp.src(paths.scss)
    .pipe(plumber())
    .pipe(sass({
      includePaths: ['styles'].concat(neat),
      style: 'compressed',
      sourceComments: 'none'
    }))
    .pipe(gulp.dest('.'))
    .pipe(livereload());
});

gulp.task('default',function(){
    gulp.start('styles');
    gulp.watch('scss/**/*.scss', ['styles']);
});

gulp.task('minify-css', function() {
  return gulp.src('*.css')
    .pipe(minifyCss({compatibility: 'ie8'}))
    .pipe(gulp.dest('.'));
});

gulp.task('production',function(){
  gulp.start('styles');
  gulp.watch('scss/**/*.scss', ['styles']);
  gulp.start('minify-css');
});

gulp.task('watch',function(){
  livereload.listen();
  gulp.start('styles');
  gulp.watch('scss/**/*.scss', ['styles']);
  gulp.start('minify-css');
});
