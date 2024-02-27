// Grab our gulp packages
const { src, dest, watch, series } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const terser = require('gulp-terser');
const concat = require('gulp-concat');
const rename = require('gulp-rename');
//const path = require('path');
//const glob = require('glob');
//const filenames = require("gulp-filenames");
const svgSprite = require('gulp-svg-sprite');
const browsersync = require('browser-sync').create();

// File paths
const files = {
	scssPath: 'assets/scss/**/*.scss',
//	blockStylesPath: ['_assets/scss/blocks/*.scss', '!_assets/scss/blocks/_blocks.scss'],
	jsPath: 'assets/js/scripts/*.js',
	imgPath: 'assets/images/**/*.{png,jpg,gif,svg,webp}',
	svgPath: 'assets/svg/originals/*.svg',
	phpPath: '*.php',
	nestedPhpPath: '**/*.php',
};

// var blocks = glob.sync(files.blockStylesPath);

// Sass task: compiles the style.scss file into style.css
function stylesTask() {
	return src(files.scssPath) // set source and turn on sourcemaps
		.pipe(sass().on('error', sass.logError))
		.pipe(dest('assets/css'));
}


function scriptsTask() {
	return src(
		[
			files.jsPath,
			//,'!' + 'includes/js/jquery.min.js', // to exclude any specific files
		],
		{ sourcemaps: true }
	)
		.pipe(concat('scripts.js'))
		.pipe(terser())
		.pipe(dest('assets/js', { sourcemaps: '.' }));
}

function svgsTask(){
	var config = {
		mode: {
			symbol: { // symbol mode to build the SVG
				render: {
					css: false, // CSS output option for icon sizing
					scss: true // SCSS output option for icon sizing
				},
				dest: 'output', // destination folder
				prefix: '.icon-%s', // BEM-style prefix if styles rendered
				sprite: 'icons.svg', //generated sprite name
				example: true, // Build a sample page, please!
				svg:{
					xmlDeclaration: false,
					namespaceClassnames: false,
				}
			}
		}
	};

	return src( 'assets/svg/originals/*.svg' )

		.pipe( svgSprite( config ) )
		.pipe( dest( 'assets/svg' ) );
}

function browsersyncServe(cb){
	browsersync.init({
		proxy: "http://pkportal.local"
	});
	cb();
}

function browsersyncReload(cb){
	browsersync.reload();
	cb();
}


exports.default = series(
	stylesTask,
	scriptsTask,
	svgsTask,
	// browsersyncServe,
	// watchTask
);


// Watch Task
function watchTask(){
	watch(
		[files.scssPath, files.jsPath, files.imgPath, files.svgPath, files.phpPath, files.nestedPhpPath],
		{ interval: 1000, usePolling: true }, //Makes docker work
		series(stylesTask, scriptsTask, svgsTask, browsersyncReload)
	);
}

exports.watch = series(
	stylesTask,
	scriptsTask,
	svgsTask,
	browsersyncServe,
	watchTask
);
