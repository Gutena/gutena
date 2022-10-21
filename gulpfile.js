const gulp = require( 'gulp' ),
    postcss = require( 'gulp-postcss' ),
    notify = require( 'gulp-notify' ),
    uglify = require( 'gulp-uglify' ),
    autoprefixer = require( 'autoprefixer' ),
    cssnano = require( 'cssnano' ),
    rename = require( 'gulp-rename' ),
    concat = require( 'gulp-concat' ),
    lec = require( 'gulp-line-ending-corrector' ),
    del = require( 'del' ),
    zip = require( 'gulp-zip' );
const {series, parallel} = require('gulp');
/**
 * Zip path : 
 * ignore style json file which is not a style variation
 * */
var zipPath = [ 
    './',
    './**',
    '!./node_modules',
    '!./node_modules/**',
    '!./inc/block_editor/node_modules',
    '!./inc/block_editor/node_modules/**',
    '!./inc/dashboard/admin-notice/node_modules',
    '!./inc/dashboard/admin-notice/node_modules/**',
    '!./inc/dashboard/view/node_modules',
    '!./inc/dashboard/view/node_modules/**',
    '!./build',
    '!./build/**',
    '!./gulpfile.js',
    '!./package.json', 
    '!./package-lock.json', 
    '!./inc/dashboard/admin-notice/package.json', 
    '!./inc/dashboard/admin-notice/package-lock.json', 
    '!./inc/dashboard/view/package.json', 
    '!./inc/dashboard/view/package-lock.json',
    // '!./styles/agency.json',
    // '!./styles/architecture.json',
    // '!./styles/blog.json',
    // '!./styles/consulting.json',
    // '!./styles/saas-company.json',
    '!./LICENSE',
    '!./README.md' 
];
//Clean CSS, JS and zip
function clean_files(){
    let cleanPath = ['./build/gutena.zip','./assets/js/gutena.min.js','./assets/css/gutena.min.css','./assets/editor/css/**/*.min.css'];
    return del( cleanPath, { force : true }); 
}
//CSS minification
function css_minification(){
    return gulp.src(['./assets/css/**/*.css','style.css'])
                .pipe(postcss([
                    autoprefixer(),
                    cssnano()
                ]))
                .pipe(lec())
                .pipe(concat('gutena.min.css'))
                .pipe(gulp.dest('./assets/css'))
                .pipe( notify( { 
                    message : 'Css Compilation successful',
                    onLast : true
                }));   
}

//CSS minification editor
function css_minification_editor(){
    return gulp.src(['./assets/editor/css/**/*.css'])
                .pipe(postcss([
                    autoprefixer(),
                    cssnano()
                ]))
                .pipe(lec())
                .pipe(rename({suffix : '.min'}))
                .pipe(gulp.dest('./assets/editor/css'))
                .pipe( notify( { 
                    message : 'Editor Css Compilation successful',
                    onLast : true
                }));   
}

//JS minification
function js_minification(){
    return  gulp.src( './assets/js/**/*.js' )
    .pipe(uglify())
    .pipe(lec())
    .pipe(concat('gutena.min.js'))
    .pipe(gulp.dest('./assets/js'))
    .pipe(notify( { 
        message : 'Js Compilation successful',
        onLast : true
    }));
}

//create zip file
function create_zip(){
 return gulp.src( zipPath, { base : '../' } )
        .pipe( zip( 'gutena.zip' ) )
        .pipe( gulp.dest( './build/' ) )
        .pipe( notify({
            message : 'Zip process complete! Build Successfull',
            onLast : true
        }) );
}

exports.default = series(clean_files, parallel(css_minification, css_minification_editor,js_minification),create_zip);