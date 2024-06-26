const mix = require("laravel-mix");
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

mix.js("resources/js/app.js", "public/js").sass(
    "resources/scss/app.scss",
    "public/css")
   .sass("resources/scss/home/index.scss", "public/css/home")
   .js("resources/js/home/index.js", "public/js/home")
   .sass("resources/scss/header/index.scss", "public/css/header")
   .sass("resources/scss/portfolio/index.scss", "public/css/portfolio")
   .js("resources/js/portfolio/index.js", "public/js/portfolio");

