// Gulp.js настройки
'use strict';

const

  // исходная папка и папка билда
  dir = {
 src : '/Users/evgenij/Sites/prodecor/wp-content/themes/ProDecorClub/',
 build : '/Users/evgenij/Sites/prodecor/wp-content/themes/ProDecorClub/'
  },

  // Gulp и плагины
  gulp = require('gulp'),
  gutil = require('gulp-util'),
  newer = require('gulp-newer'),
  imagemin = require('gulp-imagemin'),
  sass = require('gulp-sass'),
  postcss = require('gulp-postcss'),
  deporder = require('gulp-deporder'),
  concat = require('gulp-concat'),
  stripdebug = require('gulp-strip-debug'),
  uglify = require('gulp-uglify')
;

// Browser-sync
var browsersync = false;


// PHP-настройки
const php = {
  src : dir.src + 'template/**/*.php',
  build : dir.build
};

// копирование PHP-файлов
gulp.task('php', () => {
  return gulp.src(php.src)
 .pipe(newer(php.build))
 .pipe(gulp.dest(php.build));
});