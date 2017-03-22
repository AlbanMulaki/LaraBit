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
    mix.copy(npm + 'bootstrap/dist/css/bootstrap.min.css', './public/css/lib/bootstrap.min.css');
    mix.scripts(npm + 'bootstrap/dist/js/bootstrap.min.js', './public/js/lib/bootstrap.min.js');
    mix.copy('./node_modules/bootstrap/dist/fonts/glyphicons-halflings-regular.eot', './public/css/fonts/glyphicons-halflings-regular.eot');
    mix.copy('./node_modules/bootstrap/dist/fonts/glyphicons-halflings-regular', './public/css/fonts/glyphicons-halflings-regular');
    mix.copy('./node_modules/bootstrap/dist/fonts/glyphicons-halflings-regular.ttf', './public/css/fonts/glyphicons-halflings-regular.ttf');
    mix.copy('./node_modules/bootstrap/dist/fonts/glyphicons-halflings-regular.woff', './public/css/fonts/glyphicons-halflings-regular.woff');
    mix.copy('./node_modules/bootstrap/dist/fonts/glyphicons-halflings-regular.woff2', './public/css/fonts/glyphicons-halflings-regular.woff2');


    //Nprogress
    mix.copy('./node_modules/nprogress/nprogress.css', './public/css/lib/nprogress.min.css');
    mix.scripts('./node_modules/nprogress/nprogress.js', './public/js/lib/nprogress.min.js');

    // Font Awesome
    mix.sass('./node_modules/font-awesome/scss/font-awesome.scss', './public/css/lib/font-awesome.min.css');
    mix.copy('./node_modules/font-awesome/fonts/fontawesome-webfont.woff', './public/css/fonts/fontawesome-webfont.woff');
    mix.copy('./node_modules/font-awesome/fonts/fontawesome-webfont.ttf', './public/css/fonts/fontawesome-webfont.ttf');

    //Bootstrap DateRangepicker
    mix.sass('./node_modules/bootstrap-daterangepicker/daterangepicker.scss', './public/css/lib/bootstrap-daterangepicker.min.css');
    mix.scripts('./node_modules/bootstrap-daterangepicker/daterangepicker.js', './public/js/lib/daterangepicker.min.js');


    //Gentelella Framework
    mix.sass('./node_modules/gentelella/build/css/custom.min.css', './public/css/lib/custom.min.css');
    mix.scripts('./node_modules/gentelella/build/js/custom.min.js', './public/js/lib/custom.min.js');

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
    //JQVmap
    mix.copy(npm + "jqvmap/dist/jqvmap.min.css", './public/css/lib/jqvmap.min.css');
    mix.scripts(npm + "jqvmap/dist/jquery.vmap.js", './public/js/lib/jquery.vmap.min.js');
    mix.scripts(npm + "jqvmap/dist/maps/jquery.vmap.world.js", './public/js/lib/jquery.vmap.world.min.js');

    //iCheck
    mix.sass(npm + "gentelella/vendors/iCheck/skins/square/green.css", './public/css/lib/icheck.min.css');
    mix.copy(npm + "gentelella/vendors/iCheck/skins/square/green.png", './public/css/lib/green.png');
    mix.copy(npm + "gentelella/vendors/iCheck/skins/square/green@2x.png", './public/css/lib/green@2x.png');
    mix.scripts(npm + "gentelella/vendors/iCheck/icheck.min.js", './public/js/lib/icheck.min.js');


    //skyCons - Weather
    mix.scripts(npm + "skycons/skycons.js", './public/js/lib/skycons.min.js');

    //Gauges
//    mix.scripts(npm + "gauges/index.js", './public/js/lib/gauges.min.js');

    //ionRangeslider
    mix.sass([npm + "ion-rangeslider/css/ion.rangeSlider.css", npm + "ion-rangeslider/css/ion.rangeSlider.skinFlat.css"], './public/css/lib/ion.rangeSlider.min.css');
    mix.scripts(npm + "ion-rangeslider/js/ion.rangeSlider.min.js", './public/js/lib/ion.rangeSlider.min.js');
    //Bootstrap-colorpicker
    mix.sass(npm + "bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css", './public/css/lib/bootstrap-colorpicker.min.css');
    mix.scripts(npm + "bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js", './public/js/lib/bootstrap-colorpicker.min.js');
    mix.copy(npm + "bootstrap-colorpicker/dist/img/bootstrap-colorpicker/alpha-horizontal.png", './public/css/lib/colorpicker/alpha-horizontal.png');
    mix.copy(npm + "bootstrap-colorpicker/dist/img/bootstrap-colorpicker/alpha.png", './public/css/lib/colorpicker/alpha.png');
    mix.copy(npm + "bootstrap-colorpicker/dist/img/bootstrap-colorpicker/hue-horizontal.png", './public/css/lib/colorpicker/hue-horizontal.png');
    mix.copy(npm + "bootstrap-colorpicker/dist/img/bootstrap-colorpicker/hue.png", './public/css/lib/colorpicker/hue.png');
    mix.copy(npm + "bootstrap-colorpicker/dist/img/bootstrap-colorpicker/saturation.png", './public/css/lib/colorpicker/saturation.png');


    //jQuery Input Mask
    mix.scripts(npm + "jquery-inputmask/index.js", './public/js/lib/jquery-inputmask.min.js');
    //jQuery knob
    mix.scripts(npm + "jquery-knob/dist/jquery.knob.min.js", './public/js/lib/jquery-knob.min.js');

    //LaraBit JS
    mix.sass("app.scss", './public/css/lib/app.min.css');
    mix.scripts("app.js", './public/js/lib/app.min.js');
    mix.scripts(npm + "vue/dist/vue.js", './public/js/lib/vue.min.js');

    mix.sass(npm + "gentelella/vendors/animate.css/animate.min.css", "./public/css/lib/animate.min.css");

});
