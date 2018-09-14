var gulp = require("gulp");
var plumber = require("gulp-plumber");
var gutil = require("gulp-util");
var notify = require("gulp-notify");
var sass = require("gulp-sass");
var browserSync = require("browser-sync").create();
var cssnano = require("gulp-cssnano");
var autoprefixer = require("gulp-autoprefixer");
var sourcemaps = require("gulp-sourcemaps");
var rename = require("gulp-rename");

//Tarea para lanzar server por cada cambio
gulp.task("default", ["css"], function() {
	browserSync.init({
		proxy: "127.0.0.1:8000"
	});

	gulp.watch("resources/assets/sass/**/*.scss", ["css"]);
});

//Tarea para compilar archivos sass a css
gulp.task("css", function() {
	return gulp.src("resources/assets/sass/**/*.scss")
	.pipe(plumber(function(error) {
		gutil.log(gutil.colors.red(error.message));
		this.emit("end");
	}))
	.pipe(sourcemaps.init())
	.pipe(sass())//.on("error", notify.onError("Sass error"))
	.pipe(autoprefixer({
		browsers: ["last 10 versions"],
		cascade: false
	}))
	.pipe(gulp.dest("public/css"))
	.pipe(cssnano({
		zindex: false
	}))
	.pipe(rename({
		suffix: ".min"
	}))
	.pipe(sourcemaps.write("."))
	.pipe(gulp.dest("public/css"))
	.pipe(browserSync.stream());
});