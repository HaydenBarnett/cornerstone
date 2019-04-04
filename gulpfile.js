const { watch, series, src, dest } = require("gulp");
const sass = require("gulp-sass");
const prefix = require("gulp-autoprefixer");
const plumber = require("gulp-plumber");

function styles(cb) {
    return src("style.scss")
        .pipe(plumber())
        .pipe(sass({ outputStyle: "compressed" }))
        .pipe(prefix())
        .pipe(dest("./"));
    cb();
}

exports.default = series(styles);

watch(["style.scss", "scss/**/*.scss"], styles);