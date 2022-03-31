const { src, dest, watch, series } = require('gulp');
const sass = require('gulp-sass')(require('node-sass'));
const minifyCSS = require('gulp-csso');
const babel = require('gulp-babel');
const concat = require('gulp-concat');
const image = require('gulp-image');
const browserSync = require('browser-sync').create();


const paths = {
    styles: {
        entry: './src/styles/*.scss',
        includes: './src/styles/**/*.scss',
        output: './build/styles'
    },
    scripts: {
        entry: './src/scripts/*.js',
        includes: './src/scripts/**/*.js',
        output: './build/scripts'
    },
    img: {
        entry: './src/images/*.*',
        output: './build/images',
    }
};

function css() {
    return src(paths.styles.entry, { sourcemaps: true })
        .pipe(sass())
        .pipe(minifyCSS())
        .pipe(dest(paths.styles.output), { sourcemaps: true })
        .pipe(browserSync.stream());
}

function js() {
    return src([paths.scripts.includes, paths.scripts.entry], { sourcemaps: false })
        .pipe(babel({
            presets: ['@babel/env']
        }))
        .pipe(concat('build.min.js'))
        .pipe(dest(paths.scripts.output, { sourcemaps: false }));
}

function images() {
    return src(paths.img.entry)
        .pipe(image())
        .pipe(dest(paths.img.output));
}

function browser() {
    browserSync.init({
        proxy: 'http://developer.test/articely/',
        files: [
            './**/*.php'
        ]
    });

    watch([paths.styles.entry, paths.styles.includes], css).on('change', browserSync.reload);
    watch([paths.scripts.entry, paths.scripts.includes], js).on('change', browserSync.reload);
    watch(paths.img.entry, images).on('change', browserSync.reload);
}

exports.css = css;
exports.js = js;
exports.images = images;
exports.default = series(css, js, images, browser);