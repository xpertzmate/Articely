const {
    series,
    parallel,
    watch,
    src,
    dest
} = require('gulp');
const browserify = require('browserify');
const babelify = require('babelify');
const source = require('vinyl-source-stream');
const buffer = require('vinyl-buffer');
const uglify = require('gulp-uglify');
const postcss = require('gulp-postcss');
const cssnano = require('cssnano');
const del = require('del');
const browserSync = require('browser-sync').create();
const sass = require('gulp-sass');
sass.compiler = require('node-sass');


function browserSyncCallback() {
    browserSync.init({
        proxy: 'https://articely.local/',
        port: 3000
    })
}

function bSyncReload(done) {
    browserSync.reload();
    done();

}

// To prevent rewriting the source and build folder locations
const paths = {
    source: './src',
    build: './assets'
};

// Let's write our task in a function to keep things clean
function buildScript() {
    // Start by calling browserify with our entry pointing to our main javascript file

    return (
        browserify({
            entries: [`${paths.source}/scripts/global.js`],
            transform: ['require-globify', babelify.configure({
                presets: ['@babel/preset-env']
            })]
        })
            .bundle()
            .pipe(source('global.js'))
            // Turn it into a buffer!
            .pipe(buffer())
            // And uglify
            .pipe(uglify())
            .pipe(dest(`${paths.build}/scripts`))
    );

}

function buildStyle() {
    return (
        src(`${paths.source}/styles/*.scss`)
            .pipe(sass().on('error', sass.logError))
            .pipe(postcss([cssnano()]))
            .pipe(dest(`${paths.build}/styles`))
    );

}


function cleanup() {
    // Simply execute del with the build folder path
    return del([paths.build])
}

function watching() {
    watch([`${paths.source}/styles/*.scss`, `${paths.source}/styles/**/*.scss`], series(buildStyle, bSyncReload()))
    watch([`${paths.source}/scripts/*.js`, `${paths.source}/scripts/**/*.js`], series(buildScript, bSyncReload()))
}


exports.build = series(cleanup, parallel(buildScript, buildStyle))
exports.watch = parallel(buildScript, buildStyle, browserSyncCallback, watching)
exports.default = series(cleanup, parallel(buildScript, buildStyle), browserSyncCallback, watching)
