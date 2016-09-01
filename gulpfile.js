/**
 * Created by Руслан on 15.08.2016.
 */
var gulp   = require('gulp');
var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync');
var sass = require('gulp-sass');
var plumber = require('gulp-plumber');
var upmodul = require("gulp-update-modul");
// var connectPHP = require('gulp-connect-php');


// Static Server + watching scss/html files
gulp.task('serve', ['sass','css','svg|png|jpg','js','php'], function() {

    browserSync.init({
        port: 8080,
        open: true,
        notify: false,
        proxy:"g-home"
    });

    gulp.watch('home/*.scss', ['sass']);
    gulp.watch('home/css/*.css', ['css']);
    gulp.watch('home/*.php', ['php']);
    gulp.watch('home/js/*.js', ['js']);
    gulp.watch("home/img/*.+(svg|png|jpg)", ['svg|png|jpg']);
    // gulp.watch('.*.html').on('change', browserSync.reload);

});


// gulp.task('browserSync', function() {
//     browserSync({
//         server: {
//             baseDir: "./g-home"
//         },
//         port: 8080,
//         open: true,
//         notify: false
//     });
// });

// gulp.task('php', function(){
//     connectPHP.server({ base: './', keepalive:true, hostname: 'localhost', port:8080, open: false});
// });

gulp.task('sass',function () {
   gulp.src('home/*.scss')
       .pipe(plumber())
       .pipe(sass({errLogToConsole:true}))
       .pipe(sass({outputStyle:'compressed'}))
       .pipe(autoprefixer({
           browsers:['last 2 versions'],
           cascade:false
       }))
       .pipe(gulp.dest('wp-content/themes/garnet-theme/'))
       .pipe(browserSync.reload({stream:true}));
});

gulp.task('css',function () {
    gulp.src('home/css/*.css')
        .pipe(plumber())
        .pipe(sass({errLogToConsole:true}))
        .pipe(gulp.dest('wp-content/themes/garnet-theme/css/'))
        .pipe(browserSync.reload({stream:true}));
});


gulp.task('svg|png|jpg',function () {
    return gulp.src('home/img/*.+(svg|png|jpg)')
        .pipe(gulp.dest('wp-content/themes/garnet-theme/img/'))
        .pipe(browserSync.reload({stream:true}));
});

gulp.task('php',function () {
    return gulp.src('home/*.php')
        .pipe(gulp.dest('wp-content/themes/garnet-theme/'))
        .pipe(browserSync.reload({stream:true}));
});

gulp.task('js',function () {
    return gulp.src("home/js/*.js")
        .pipe(gulp.dest("wp-content/themes/garnet-theme/js/"))
        .pipe(browserSync.reload({stream:true}));
});

//watch
gulp.task('watch', function () {
    gulp.start('update-modul');
});

gulp.task('update-modul', function () {
    gulp.src('package.json')
        .pipe(upmodul('latest', 'true')); //update all modules latest version.
});

gulp.task('default', ['serve']);