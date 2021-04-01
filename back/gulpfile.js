const {
  src,
  series,
  dest,
  parallel,
  watch
} = require('gulp');

var concat = require('gulp-concat');
const cleanCSS = require('gulp-clean-css');
var sass = require('gulp-sass');
const fileinclude = require('gulp-file-include');
var clean = require('gulp-clean');
var browserSync = require('browser-sync').create();

var sourcemaps = require('gulp-sourcemaps');
function sassStyle() {
  return src('dev/sass/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({
      outputStyle: "compressed"   // nested巢狀  // compressed壓縮  //expanded 原本
    }).on('error', sass.logError))
    .pipe(sourcemaps.write())
    .pipe(concat('all.css')) // 合併
    .pipe(cleanCSS()) //壓縮
    .pipe(dest('css/'))
}

exports.clean = function cleanfile() {
  return src('./*.html', { read: false, allowEmpty: true })
    .pipe(clean())
}

exports.html = function includeHTML(done) {
  return src('./original/*.html')
    .pipe(fileinclude({
      prefix: '@@',
      basepath: '@file'
    }))
    .pipe(dest('./'));
  done();
}

var concat = require('gulp-concat');

exports.concatfile = function all() {
  return src('./dec/layout/*.html')
    .pipe(concat('style.css'))
    .pipe(dest('css/all/'))
}

var sourcemaps = require('gulp-sourcemaps');
exports.w = function watchfile() {
  watch('./sass/*.scss', sassStyle);
  watch('./*.html', includeHTML);
}




