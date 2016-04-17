// ## Globals
var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer');

var minifyCss    = require('gulp-minify-css');
var watch   = require('gulp-watch');
var sass         = require('gulp-sass');




gulp.task('css',function(){
  gulp.src('assets/styles/main.scss')
     .pipe(sass())
     .pipe(autoprefixer('last 10 version'))
     //.pipe(minifyCss({compatibility: 'ie8'}))
     .pipe(gulp.dest('dist/styles'));

});


gulp.task('watch',function(){
 gulp.watch('assets/styles/**/*.scss',['css']);
});




gulp.task('default',['watch']);
