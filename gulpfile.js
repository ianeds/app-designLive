var elixir = require('laravel-elixir');


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

elixir(function(mix) {
    mix.sass('main.scss');

});

elixir(function(mix) {
    mix.copy('resources/images', 'public/images');
});

elixir(function(mix) {
    mix.copy('resources/scripts/javascript.js', 'public/js/javascript.js');
});