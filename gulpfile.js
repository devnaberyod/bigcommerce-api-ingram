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
    mix.less('home.less');
});

elixir(function(mix) {
    mix.less('dashboard.less');
});

elixir(function(mix) {
    mix.copy('node_modules/angular/angular.min.js', 'resources/assets/js/angular.min.js');
});

elixir(function(mix) {
    mix.copy('node_modules/restangular/src/restangular.js', 'resources/assets/js/restangular.js');
});

elixir(function(mix) {
    mix.copy('node_modules/underscore/underscore-min.js', 'resources/assets/js/underscore-min.js');
});

elixir(function(mix) {
    mix.scripts([
    	"jquery-1.12.4.min.js",
    	"angular.min.js",
    	"underscore-min.js",
    	"restangular.js",
        "bootstrap.min.js",
        "amcharts/amcharts.js",
        "amcharts/serial.js",
        "boardcharts.js",
    ], 'public/build/js/vendor.js');
});

elixir(function(mix) {
    mix.scriptsIn("resources/assets/js/app-ingram");
});

elixir(function(mix) {
    mix.scripts([
        "common.js",
    ], 'public/build/js/common.js');
});

elixir(function(mix) {
    mix.styles([
        "fonts.css",
        "bootstrap.min.css",
        "ionicons.min.css",
    ], 'public/build/css/vendor.css');
});


elixir(function(mix) {
    mix.version(["build/css/vendor.css", "css/home.css", "js/all.js", "css/dashboard.css", "build/js/vendor.js", "build/js/common.js"]);
});
