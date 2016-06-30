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
	'bootstrap': './node_modules/bootstrap-sass/assets/'
 }

elixir(function(mix) {
    mix.sass('app.scss', 'public/css/', {
		includePaths: [
			paths.bootstrap + 'stylesheets/'
		]
    })

    .copy(paths.bootstrap + 'fonts/bootstrap/**', 'public/fonts')

    .styles([

    	'public/css/app.css',
    	'./resources/assets/css/font-awesome.min.css',
		'./resources/assets/css/ionicons.min.css',
		'./resources/assets/css/simpletextrotator.css',
		'./resources/assets/css/magnific-popup.css',
		'./resources/assets/css/owl.carousel.css',
		'./resources/assets/css/superslides.css',
		'./resources/assets/css/vertical.css',
		'./resources/assets/css/animate.css',
		'./resources/assets/css/style.css'

    ], 'public/css/app.css','./')


    .scripts([

    	'public/css/app.css',
    	'./resources/assets/js/',

    ], 'public/js/app.js','./')

    .version([

    	'css/app.css',

    	'js/app.js'

    ]);

});
