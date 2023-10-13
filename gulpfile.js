//npm install gulp-uglify gulp-sass gulp-changed gulp-imagemin gulp-clean-css del gulp-rename gulp-concat gulp-autoprefixer gulp --save-dev

var gulp = require('gulp'),
	concat = require('gulp-concat'),
	uglify = require('gulp-uglify'),
	rename = require('gulp-rename'),
	sass = require('gulp-sass'),
	cleanCSS = require('gulp-clean-css'),
	imagemin = require('gulp-imagemin'),
	changed  = require('gulp-changed');

var sassOptions = {
  errLogToConsole: true,
}

// SCRIPTS
gulp.task('scripts', gulp.series(function(done){
	gulp.src([
			'assets/js/jquery.js', 
			'assets/js/bootstrap.js',
			'assets/js/main.js'])
	    .pipe(concat('all.js'))
	    .pipe(rename({suffix:'.min'}))
		.pipe(uglify())
		.on('error', swallowError)
	    .pipe(gulp.dest('assets/js/'));
		done();
}));

function swallowError (error) {
  // If you want details of the error in the console
  console.log(error.toString())
  this.emit('end')
}

//SASS
gulp.task('sass', gulp.series(function(done){
	gulp.src('assets/css/sass/site.scss')
	    .pipe(sass(sassOptions).on('error', sass.logError))
	    .pipe(gulp.dest('assets/css/'));
		done();
}));

// CSS
gulp.task('css', gulp.series(function(done){
	gulp.src([
			'assets/css/bootstrap.css',
			'assets/css/site.css'])
	    .pipe(concat('all.css'))
	    .pipe(rename({suffix:'.min'}))
		.pipe(cleanCSS({compatibility: 'ie8'}))
	    .pipe(gulp.dest('assets/css/'));
		done();
}));

//IMAGES
gulp.task('images', gulp.series(function(done){
    gulp.src(['assets/img/dev/**/*.jpg', 'assets/img/dev/**/*.png'])
        .pipe(changed('assets/img/'))
        .pipe(imagemin({ optimizationLevel: 5, progressive: true, interlaced: true }))
        .pipe(gulp.dest('assets/img/'));
		done();
}));


//Watch Task
gulp.task('watch', gulp.series(function(done){
	gulp.watch('assets/js/main.js', gulp.parallel(['scripts']));
	gulp.watch('assets/css/sass/site.scss', gulp.parallel(['sass']));
	gulp.watch('assets/css/site.css', gulp.parallel(['css']));
}));


//Default task
gulp.task('default', gulp.series(['scripts', 'sass', 'css', 'watch']));