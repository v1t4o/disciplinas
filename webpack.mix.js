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

/*
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
*/

mix.autoload({
	'jquery': ['jQuery', '$'],
});

mix.styles([
	'node_modules/bootstrap/dist/css/bootstrap.css',
	'node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.css',
	'resources/assets/css/app.css',
], 'public/assets/app.css');

mix.js([
	'node_modules/jquery/dist/jquery.js',
	'node_modules/popper.js/dist/popper.js',
	'node_modules/bootstrap/dist/js/bootstrap.js',
	'node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.js',
	'node_modules/bootstrap-datepicker/js/locales/bootstrap-datepicker.pt-BR.js',
	'resources/assets/js/app.js',
], 'public/assets/app.js');
