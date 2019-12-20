var gulp = require('gulp');
var sass = require('gulp-sass'); //Sassコンパイル
var plumber = require('gulp-plumber'); //エラー時の強制終了を防止
var notify = require('gulp-notify'); //エラー発生時にデスクトップ通知する
var sassGlob = require('gulp-sass-glob'); //@importの記述を簡潔にする
var browserSync = require('browser-sync'); //ブラウザ反映
var postcss = require('gulp-postcss'); //autoprefixerとセット
var autoprefixer = require('autoprefixer'); //ベンダープレフィックス付与
var cssdeclsort = require('css-declaration-sorter'); //css並べ替え
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');
var mozjpeg = require('imagemin-mozjpeg');


// scssのコンパイル
gulp.task('sass', function () {
    return gulp
        .src('./scss/**/*.scss')
        .pipe(plumber({ errorHandler: notify.onError("Error: <%= error.message %>") }))//エラーチェック
        .pipe(sassGlob())//importの読み込みを簡潔にする
        .pipe(sass({
            outputStyle: 'expanded' //expanded, nested, campact, compressedから選択
        }))
        .pipe(postcss([autoprefixer(
            {
                // ☆IEは11以上、Androidは4.4以上
                // その他は最新2バージョンで必要なベンダープレフィックスを付与する
                browsers: ["last 2 versions", "ie >= 11", "Android >= 4"],
                cascade: false
            }
        )]))
        .pipe(postcss([cssdeclsort({ order: 'alphabetically' })]))//プロパティをソートし直す(アルファベット順)
        .pipe(gulp.dest('./css'));//コンパイル後の出力先
});

// 保存時のリロード
gulp.task('browser-sync', function (done) {
    browserSync.init({

        //ローカル開発
        server: {
            baseDir: "./",
            index: "index.php"
        }
    });
    done();
});

gulp.task('bs-reload', function (done) {
    browserSync.reload();
    done();
});



// 監視
gulp.task('watch', function (done) {
    gulp.watch('./scss/**/*.scss', gulp.task('sass')); //sassが更新されたらgulp sassを実行
    gulp.watch('./scss/**/*.scss', gulp.task('bs-reload')); //sassが更新されたらbs-reloadを実行
    gulp.watch('./js/*.js', gulp.task('bs-reload')); //jsが更新されたらbs-relaodを実行
});

// default
gulp.task('default', gulp.series(gulp.parallel('browser-sync', 'watch')));

//圧縮率の定義
var imageminOption = [
    pngquant({ quality: [0.7, 0.85], }),
    mozjpeg({ quality: 85 }),
    imagemin.gifsicle({
        interlaced: false,
        optimizationLevel: 1,
        colors: 256
    }),
    imagemin.jpegtran(),
    imagemin.optipng(),
    imagemin.svgo()
];
// 画像の圧縮
// $ gulp imageminで./src/img/base/フォルダ内の画像を圧縮し./src/img/フォルダへ
// .gifが入っているとエラーが出る
gulp.task('imagemin', function () {
    return gulp
        .src('./img/base/*.{png,jpg,gif,svg}')
        .pipe(imagemin(imageminOption))
        .pipe(gulp.dest('./img'));
});
