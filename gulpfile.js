const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssSorter = require('css-declaration-sorter');
const mmq = require('gulp-merge-media-queries');
const browserSync = require('browser-sync');

function compileSass() {
    return gulp.src('./src/assets/sass/**/*.scss')
    .pipe(sass())
    .pipe(postcss([autoprefixer(), cssSorter()]))
    .pipe(mmq())
    .pipe(gulp.dest('./public/assets/css/'))
}

function browserInit() {
    browserSync.init({
        server: {
            baseDir: "./public/",
            index: "works.html",

        }
    });
}

function browserReload(done) {
    browserSync.reload();
    done();
}

function watch() {
    gulp.watch("./src/assets/sass/**/*.scss", gulp.series(compileSass, browserReload));
    gulp.watch("./public/**/*.html", gulp.series(browserReload));
  }

exports.dev = gulp.parallel(browserInit, watch);