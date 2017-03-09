process.env.DISABLE_NOTIFIER = true;

var elixir = require('laravel-elixir');
var npm = './node_modules/';
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */
elixir.config.sourcemaps = false; // Disable map file
elixir(function (mix) {
    //jQuery
    mix.scripts(npm + 'jquery/dist/jquery.min.js', './public/js/lib/jquery.min.js');

    //Bootstrap
    mix.sass(npm + 'bootstrap/dist/css/bootstrap.min.css', './public/css/lib/bootstrap.min.css');
    mix.scripts(npm + 'bootstrap/dist/js/bootstrap.min.js', './public/js/lib/bootstrap.min.js');

    //Nprogress 
    mix.copy('./node_modules/nprogress/nprogress.css', './public/css/lib/nprogress.min.css');
    mix.scripts('./node_modules/nprogress/nprogress.js', './public/js/lib/nprogress.min.js');

    // Font Awesome
    mix.sass('./node_modules/font-awesome/scss/font-awesome.scss', './public/css/lib/font-awesome.min.css');
    mix.copy('./node_modules/font-awesome/fonts', './public/css/fonts');

    //Bootstrap DateRangepicker
    mix.sass('./node_modules/bootstrap-daterangepicker/daterangepicker.scss', './public/css/lib/bootstrap-daterangepicker.min.css');
    mix.scripts('./node_modules/bootstrap-daterangepicker/daterangepicker.js', './public/js/lib/daterangepicker.min.js');


    //Gentelella Framework
    mix.sass('./node_modules/gentelella/build/css/custom.min.css', './public/css/lib/custom.min.css');

    //FastClick
    mix.scripts('./node_modules/fastclick/lib/fastclick.js', './public/js/lib/fastclick.min.js');
    //Raphael
    mix.scripts('./node_modules/raphael/raphael.min.js', './public/js/lib/raphael.min.js');
    //Morris.js
    mix.scripts('./node_modules/morris.js/morris.min.js', './public/js/lib/morris.min.js');
    //Bootstrap-progressbar
    mix.scripts('./node_modules/bootstrap-progressbar/bootstrap-progressbar.min.js', './public/js/lib/bootstrap-progressbar.min.js');

    //Moment
    mix.scripts('./node_modules/moment/min/moment.min.js', './public/js/lib/moment.min.js');
    //Echarts
    mix.scripts('./node_modules/echarts/dist/echarts.min.js', './public/js/lib/echarts.min.js');
    //chart.js
    mix.scripts('./node_modules/chart.js/dist/Chart.min.js', './public/js/lib/chart.min.js');






});
