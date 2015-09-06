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

var paths = {
	'jquery': './node_modules/jquery/',
	'bootstrap': './node_modules/bootstrap-sass/assets/',
	'fontawesome': './node_modules/font-awesome/'
}

elixir(function(mix) {


	mix.sass('*', 'public/css/', {
		includePaths: [
			paths.bootstrap + 'stylesheets',
			paths.fontawesome + 'scss'
		]
	})
		.copy(paths.bootstrap + 'fonts/bootstrap/**', 'public/fonts/bootstrap')
		.copy(paths.fontawesome + 'fonts/**', 'public/fonts/fontawesome')
		.styles([
			'public/css/*',
			'./resources/assets/css/style.css',

		], 'public/css/app.css', './')
		.scripts([
			paths.jquery + "dist/jquery.min.js",
			paths.bootstrap + "javascripts/bootstrap.min.js",
			'./resources/assets/javascript/**/*.js',
		], 'public/js/app.js', './')
        .version([
			'css/app.css',
			'js/app.js'
		])
});