var syntax        = 'sass'; // Syntax: sass or scss;

var gulp          = require('gulp'),
		gutil         = require('gulp-util' ),
		sass          = require('gulp-sass'),
		browsersync   = require('browser-sync'),
		concat        = require('gulp-concat'),
		uglify        = require('gulp-uglify'),
		cleancss      = require('gulp-clean-css'),
		rename        = require('gulp-rename'),
		autoprefixer  = require('gulp-autoprefixer'),
		notify        = require("gulp-notify"),
		rsync         = require('gulp-rsync'),
		svgstore      = require('gulp-svgstore'),
		svgmin        = require('gulp-svgmin'),
		cheerio       = require('gulp-cheerio'),
		rename        = require('gulp-rename'),
		plumber       = require('gulp-plumber');

gulp.task('browser-sync', function() {
	browsersync({
		proxy: "http://localhost:81/akira/",
		notify: false
	})
});

gulp.task('styles', function() {
	return gulp.src('akira/assets/'+syntax+'/**/*.'+syntax+'')
	.pipe(sass({ outputStyle: 'expand' }).on("error", notify.onError()))
	.pipe(rename({ suffix: '.min', prefix : '' }))
	.pipe(autoprefixer(['last 15 versions']))
	.pipe(cleancss( {level: { 1: { specialComments: 0 } } })) // Opt., comment out when debugging
	.pipe(gulp.dest('akira/assets/css'))
	.pipe(browsersync.reload( {stream: true} ))
});

gulp.task('js', function() {
	return gulp.src([
		'akira/assets/libs/jquery/dist/jquery.min.js',  			//----jquery
		'akira/assets/libs/jquery.validate.js', 					//----форма
		'akira/assets/libs/jquery.mask.min.js', 					//----форма
		'akira/assets/libs/jquery.popupoverlay.js', 				//----модалки
		'akira/assets/libs/flipster/jquery.flipster.min.js', 					//----слайдер
		'akira/assets/libs/slick/slick.js', 					//----слайдер
		'akira/assets/libs/swiper/swiper.min.js', 			//----слайдер
		'akira/assets/libs/fancybox/jquery.fancybox.js', 		//----картінка прикліку
		'akira/assets/libs/jquery.spincrement.min.js', 		//----цифри анімованні
		'akira/assets/libs/isotope.pkgd.min.js', 				//----сетка елементов + фильтр
		'akira/assets/libs/lazy-line-painter/lazy-line-painter-1.9.6.min.js', 				
		'akira/assets/js/common.js', // Always at the end
	])
	.pipe(plumber())
	.pipe(concat('scripts.min.js'))
	.pipe(uglify()) // Mifify js (opt.)
	.pipe(gulp.dest('akira/assets/js'))
	.pipe(browsersync.reload({ stream: true }))
});

gulp.task('rsync', function() {
	return gulp.src('akira/assets/**')
	.pipe(rsync({
		root: 'akira/assets/',
		hostname: 'username@yousite.com',
		destination: 'yousite/public_html/',
		// include: ['*.htaccess'], // Includes files to deploy
		exclude: ['**/Thumbs.db', '**/*.DS_Store'], // Excludes files from deploy
		recursive: true,
		archive: true,
		silent: false,
		compress: true
	}))
});


gulp.task('watch', ['styles', 'js', 'browser-sync'], function() {
	gulp.watch('akira/assets/'+syntax+'/**/*.'+syntax+'', ['styles']);
	gulp.watch(['libs/**/*.js', 'akira/assets/js/common.js'], ['js']);
	gulp.watch('akira/assets/*.html', browsersync.reload);
	gulp.watch('akira/**/*.php', browsersync.reload);
});

//--------------------------------svg-sprite-----------------------------
gulp.task('symbols', function() {
  return gulp.src('akira/img/icon/*.svg')
    .pipe(svgmin())
    .pipe(svgstore({
      inlineSvg: true
    }))
    .pipe(cheerio({
      run: function($) {
        $('[fill]').removeAttr('fill');
        $('[style]').removeAttr('style');
        $('[class]').removeAttr('class');
        $('title').remove();
        $('defs').remove();
        $('style').remove();
        $('svg').attr('style', 'display:none');
      }
    }))
    .pipe(rename('symbols.html'))
    .pipe(gulp.dest('akira/img'));
});

gulp.task('default', ['watch']);
