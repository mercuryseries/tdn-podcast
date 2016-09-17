const elixir = require('laravel-elixir');

require('laravel-elixir-vue');
require('laravel-elixir-minify-html');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.sass('app.scss')
       .webpack('app.js')
       .html('storage/framework/views/*', 'storage/framework/views/', {collapseWhitespace: true, removeAttributeQuotes: true, removeComments: true, minifyJS: true});
});
