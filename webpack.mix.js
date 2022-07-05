const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
    'resources/template-concept/css/bootstrap.min.css',
    'resources/template-concept/css/style.css',
    'resources/template-concept/css/styles.css',
    'resources/template-concept/css/fontawesome-all.css',
    'resources/template-concept/css/chartist.css',
    'resources/template-concept/css/morris.css',
    'resources/template-concept/css/materialdesignicons.min.css',
    'resources/template-concept/css/c3.css',
    'resources/template-concept/css/flag-icon.min.css',
],'public/css/app.css')
.scripts([
    'resources/template-concept/js/jquery-3.3.1.min.js',
    'resources/template-concept/js/bootstrap.bundle.js',
    'resources/template-concept/js/jquery.slimscroll.js',
    'resources/template-concept/js/main-js.js',
    'resources/template-concept/js/chartist.min.js',
    'resources/template-concept/js/jquery.sparkline.js',
    'resources/template-concept/js/raphael.min.js',
    'resources/template-concept/js/morris.js',
    'resources/template-concept/js/c3.min.js',
    'resources/template-concept/js/d3-5.4.0.min.js',
    'resources/template-concept/js/C3chartjs.js',
    'resources/template-concept/js/dashboard-ecommerce.js',
], 'public/js/app.js');