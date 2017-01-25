// var gulp = require ('gulp'),//подключение галп
// 	sass = require('gulp-sass'),
// 	pug = require('pug'),
// 	prefix = require('gulp-autoprefixer')
// 	jade = require('gulp-jade');

//создаем инструкцию, пример
// gulp.task('mytask', function(){
// 	//console.log('hello, im gulp');
// 	return gulp.src('source-files')//команда выборки файлов
// 	.pipe(plugin())//команда вызова плагина
// 	.pipe(gulp.dest('folder'))
// 	//dest - destination - путь назначения ку выгружаем
// 	//folder - папка

// 	//принцип галп: взять файлы, произвести действия с ними и куда-то выгрузить
// 	//это база. все что нужно знать о галп
// });

// компилация sass
// gulp.task('sass', function(){
// 	return gulp.src('app/sass/main.sass')
// 	.pipe(sass())
// 	.pipe(gulp.dest('app/css'))
// });

// 'use strict';

var gulp = require('gulp'),// подключение галп
	sass = require('gulp-sass'),
	//concatCss = require('gulp-concat-css'),//присоединяем все файлы css в один
	rename = require('gulp-rename'),//переименовываем конкат и миниф файл
	cleanCSS = require('gulp-clean-css'),//минифицируем
	autoprefixer = require('gulp-autoprefixer'),//автопрефикер
	livereload = require('gulp-livereload'),//
	connect = require('gulp-connect'),//соед с уд сервером
	notify = require("gulp-notify");//уведомление о действии

//livereload
	gulp.task('connect', function() {
  connect.server({
    root: 'app',
    livereload: true
  });
});
 
//sass и css
gulp.task('css', function () {
  return gulp.src('app/sass/main.sass')//путь к папке с файлами, м которыми будем работать
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

//html
gulp.task('html', function () {
	gulp.src('app/index.html')	
	.pipe(connect.reload());
});

//автом вызов галп при любом изменении css-файлов
gulp.task('watch', function () {
    gulp.watch('app/css/*css', ['css']) //следим за изменениями всех css, и при их изменении запускаем таск css
	gulp.watch('app/sass/main.sass', ['css']) //следим за изменениями всех css, и при их изменении запускаем таск css
	gulp.watch('app/index.html', ['html']);

});

//задачи по-умолчанию
gulp.task('default', ['connect', 'watch', 'html', 'css']);








