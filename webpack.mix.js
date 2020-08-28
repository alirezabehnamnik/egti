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

mix
    .js([
      'resources/js/app.js',
      'node_modules/select2/dist/js/select2.min.js',
    ], 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/404.scss', 'public/css')
    .copy('resources/assets/images' , 'public/images', false)
    .copy('resources/assets/fonts' , 'public/fonts', false)
    ;
