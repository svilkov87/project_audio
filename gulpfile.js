// 'use strict';

var gulp = require('gulp'),// подключение галп
	sass = require('gulp-sass'),
	jade = require('gulp-jade'),
	//concatCss = require('gulp-concat-css'),//присоединяем все файлы css в один
	rename = require('gulp-rename'),//переименовываем конкат и миниф файл
	cleanCSS = require('gulp-clean-css'),//минифицируем
	autoprefixer = require('gulp-autoprefixer'),//автопрефикер
	livereload = require('gulp-livereload'),//
	connect = require('gulp-connect'),//соед с уд сервером
	concat = require('gulp-concat'),//конкатенация
	uglify = require('gulp-uglify'),
	notify = require("gulp-notify");//уведомление о действии

//livereload
	gulp.task('connect', function() {
  connect.server({
    root: 'app',
    livereload: true
  });
});

//jade
gulp.task('jade', function(){
	return gulp.src('app/jade/*.jade')
	.pipe(jade({
		pretty: true
	}))
	.pipe(gulp.dest('app/'));//куда выкладываем итоговый файл
});
 
//sass и css
gulp.task('css', function () {
  return gulp.src(['app/sass/**/*.sass', 'app/sass/**/*.scss'])//путь к папке с файлами, м которыми будем работать
    .pipe(autoprefixer({
        browsers: ['last 15 versions']
    }))
    //.pipe(concatCss('bundle.css'))//название файла после конкат, если есть sass, то не нужен
    .pipe(sass())//sass
    .pipe(cleanCSS()) //минифицируем css
    .pipe(rename('bundle.min.css'))//как назовем скомпилированный min- файл
    .pipe(gulp.dest('app/css'))//куда выкладываем итоговый файл
    .pipe(connect.reload());
    // .pipe(notify('Done!'));
});

//js
gulp.task('scripts', function() {
  return gulp.src('app/libs/*.js')
    .pipe(concat('all.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('app/js'))
    .pipe(connect.reload());
});

//html
gulp.task('html', function () {
	gulp.src('app/index.html')	
	.pipe(connect.reload());
});

//автом вызов галп при любом изменении css-файлов
gulp.task('watch', function () {
    gulp.watch('app/css/*css', ['css']) //следим за изменениями всех css, и при их изменении запускаем таск css
	gulp.watch(['app/sass/**/*.sass', 'app/sass/**/*.scss'], ['css']) //следим за изменениями всех css, и при их изменении запускаем таск css
	gulp.watch('app/jade/index.jade', ['jade']),
	gulp.watch('app/libs/*.js', ['scripts']),
	gulp.watch('app/index.html', ['html']);

});
//в продакшн
// gulp.task('', function () {

// });

//задачи по-умолчанию
gulp.task('default', ['connect', 'watch', 'html', 'css', 'jade', 'scripts']);








