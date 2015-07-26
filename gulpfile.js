var elixir = require('laravel-elixir');
require('laravel-elixir-livereload');

elixir(function(mix) {
    mix.sass('app.sass');
    mix.sass('materialize/materialize.scss');
    mix.browserify('app.js');
    mix.livereload();
});
