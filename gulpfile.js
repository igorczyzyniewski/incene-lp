var gulp        = require('gulp');
var sass        = require('gulp-sass');
var concat      = require('gulp-concat');
var browserSync = require('browser-sync').create();

// Compile SASS files on the folder css/scss and concat for and save on css/style.css
gulp.task('sass', function(){
    return gulp.src([
        './assets/css/vendor/animation.css',
        './assets/css/vendor/bootstrap.min.css',
        './assets/css/vendor/ekko-lightbox.min.css',
        './assets/css/scss/style.scss'])
        .pipe(sass())
        .pipe(concat('style.css'))
        .pipe(gulp.dest('./assets/css'))
        .pipe(browserSync.stream());
});

gulp.task('javascript', function() {
    return gulp.src([
        './assets/js/vendor/jquery-3.3.1.min.js',
        './assets/js/vendor/bootstrap.min.js',
        './assets/js/vendor/fontawesome-5.3.1.min.js',
        './assets/js/vendor/wow.min.js',
        './assets/js/vendor/ekko-lightbox.min.js',
        './assets/js/main.js'])
        .pipe(concat('all.js'))
        .pipe(gulp.dest('./assets/js'))
        .pipe(browserSync.stream());
});

// Initialize the project on server proxy for watching changes and execute automatic reloading
gulp.task('serve', function() {
    browserSync.init({
        proxy: "http://localhost/incene-lp/"
    });
    gulp.watch('./*.php').on('change', browserSync.reload);
    gulp.watch('./**/*.php').on('change', browserSync.reload);
    gulp.watch('./assets/css/scss/*.scss', ['sass']);
    gulp.watch('./assets/js*.js', ['javascript']);
});

gulp.task('default', ['serve', 'sass', 'javascript']);