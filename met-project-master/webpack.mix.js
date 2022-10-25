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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
//
// mix.styles([
//     'resources/front/css/slick.css',
//     'resources/front/css/animate.css',
//     'resources/front/css/nice-select.css',
//     'resources/front/css/jquery.nice-number.min.css',
//     'resources/front/css/magnific-popup.css',
//     'resources/front/css/bootstrap.min.css',
//     'resources/front/css/font-awesome.min.css',
//     'resources/front/css/default.css',
//     'resources/front/css/style.css',
//     'resources/front/css/responsive.css',
// ], 'public/css/front.css');
//
// mix.scripts([
//     'resources/front/js/vendor/modernizr-3.6.0.min.js',
//     'resources/front/js/vendor/jquery-1.12.4.min.js',
//     'resources/front/js/bootstrap.min.js',
//     'resources/front/js/slick.min.js',
//     'resources/front/js/jquery.magnific-popup.min.js',
//     'resources/front/js/waypoints.min.js',
//     'resources/front/js/jquery.counterup.min.js',
//     'resources/front/js/jquery.nice-select.min.js',
//     'resources/front/js/jquery.nice-number.min.js',
//     'resources/front/js/jquery.countdown.min.js',
//     'resources/front/js/validator.min.js',
//     'resources/front/js/ajax-contact.js',
//     'resources/front/js/main.js',
//     'resources/front/js/map-script.js',
// ], 'public/js/front.js');
//
// mix.copy('resources/front/fonts','public/fonts');
// mix.copy('resources/front/images','public/images');
