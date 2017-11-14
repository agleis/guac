let mix = require('laravel-mix');

process.env.NODE_ENV = 'production';

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

mix.js('resources/assets/js/app.js', 'public/js')
   .js('resources/assets/js/chosen.js', 'public/js')
   .sass('resources/assets/sass/bootstrap.scss', 'public/css');
