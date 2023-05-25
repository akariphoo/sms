const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css')
//     .sourceMaps();

mix.scripts([
    'public/js/admin-site/vendors/base/vendor.bundle.base.js',
    'public/js/admin-site/off-canvas.js',
    'public/js/admin-site/hoverable-collapse.js',
    'public/js/toastr.min.js',
    'public/js/sweetalert2@10.js',
    'public/js/admin-site/template.js',
    'public/js/admin-site/vendors/chart.js/Chart.min.js',
    'public/js/admin-site/vendors/jquery-bar-rating/jquery.barrating.min.js',
    'public/js/admin-site/dashboard.js',
    'public/js/app.js',
], 'public/js/all.js');

mix.styles([
    'public/css/admin-site/vendors/mdi/css/materialdesignicons.min.css',
    'public/css/admin-site/vendors/feather/feather.css',
    'public/css/admin-site/vendors/base/vendor.bundle.base.css',
    'public/css/admin-site/vendors/flag-icon-css/css/flag-icon.min.css',
    'public/css/admin-site/vendors/font-awesome/css/font-awesome.min.css',
    'public/css/admin-site/vendors/jquery-bar-rating/fontawesome-stars-o.css',    
    'public/css/admin-site/vendors/jquery-bar-rating/fontawesome-stars.css',
    'public/css/toastr.min.css',
    'public/css/admin-site/style.css',
], 'public/css/all.css');

mix.sass('resources/sass/app.scss', 'public/css/all.css');
