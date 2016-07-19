"use strict";

// TODO: integrate uncss one way or another

var gulp         = require('gulp'),
    csso         = require('gulp-csso'),
    uncss        = require('gulp-uncss'),
    elixir       = require('laravel-elixir'),
    gulpif       = require('gulp-if'),
    autoprefixer = require('gulp-autoprefixer'),
    util         = require('laravel-elixir/ingredients/commands/Utilities'),
    notify       = new (require('laravel-elixir/ingredients/commands/Notification')),
    taskName     = 'cssmin';

elixir.extend(taskName, function (src, output) {
  var config = this,
      baseDir = config.cssOutput || 'public/css';

  src = util.buildGulpSrc(src, baseDir, '**/*.css');

  gulp.task(taskName, function () {
    return gulp.src(src)
      .pipe(autoprefixer())
      .pipe(gulpif(config.production, csso()))
      .pipe(gulp.dest(output || baseDir))
      .pipe(notify.message('css compiled'));
  });

  return config.queueTask(taskName);
});