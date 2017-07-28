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
    mix.scripts(npm + 'jquery/dist/jquery.min.js', './public_html/js/lib/jquery.min.js');

    //Bootstrap
    mix.copy(npm + 'bootstrap/dist/css/bootstrap.min.css', './public_html/css/lib/bootstrap.min.css');
    mix.scripts(npm + 'bootstrap/dist/js/bootstrap.min.js', './public_html/js/lib/bootstrap.min.js');
    mix.copy('./node_modules/bootstrap/dist/fonts/glyphicons-halflings-regular.eot', './public_html/css/fonts/glyphicons-halflings-regular.eot');
    mix.copy('./node_modules/bootstrap/dist/fonts/glyphicons-halflings-regular', './public_html/css/fonts/glyphicons-halflings-regular');
    mix.copy('./node_modules/bootstrap/dist/fonts/glyphicons-halflings-regular.ttf', './public_html/css/fonts/glyphicons-halflings-regular.ttf');
    mix.copy('./node_modules/bootstrap/dist/fonts/glyphicons-halflings-regular.woff', './public_html/css/fonts/glyphicons-halflings-regular.woff');
    mix.copy('./node_modules/bootstrap/dist/fonts/glyphicons-halflings-regular.woff2', './public_html/css/fonts/glyphicons-halflings-regular.woff2');


    //Nprogress
    mix.copy('./node_modules/nprogress/nprogress.css', './public_html/css/lib/nprogress.min.css');
    mix.scripts('./node_modules/nprogress/nprogress.js', './public_html/js/lib/nprogress.min.js');

    // Font Awesome
    mix.sass('./node_modules/font-awesome/scss/font-awesome.scss', './public_html/css/lib/font-awesome.min.css');
    mix.copy('./node_modules/font-awesome/fonts/fontawesome-webfont.woff', './public_html/css/fonts/fontawesome-webfont.woff');
    mix.copy('./node_modules/font-awesome/fonts/fontawesome-webfont.ttf', './public_html/css/fonts/fontawesome-webfont.ttf');

    //Bootstrap DateRangepicker
    mix.sass('./node_modules/bootstrap-daterangepicker/daterangepicker.scss', './public_html/css/lib/bootstrap-daterangepicker.min.css');
    mix.scripts('./node_modules/bootstrap-daterangepicker/daterangepicker.js', './public_html/js/lib/daterangepicker.min.js');


    //Gentelella Framework
    mix.sass('./node_modules/gentelella/build/css/custom.min.css', './public_html/css/lib/custom.min.css');
    mix.scripts('./node_modules/gentelella/build/js/custom.min.js', './public_html/js/lib/custom.min.js');

    //FastClick
    mix.scripts('./node_modules/fastclick/lib/fastclick.js', './public_html/js/lib/fastclick.min.js');
    //Raphael
    mix.scripts('./node_modules/raphael/raphael.min.js', './public_html/js/lib/raphael.min.js');
    //Morris.js
    mix.scripts('./node_modules/morris.js/morris.min.js', './public_html/js/lib/morris.min.js');
    //Bootstrap-progressbar
    mix.scripts('./node_modules/bootstrap-progressbar/bootstrap-progressbar.min.js', './public_html/js/lib/bootstrap-progressbar.min.js');

    //Moment
    mix.scripts('./node_modules/moment/min/moment.min.js', './public_html/js/lib/moment.min.js');
    //Echarts
    mix.scripts('./node_modules/echarts/dist/echarts.min.js', './public_html/js/lib/echarts.min.js');
    //chart.js
    mix.scripts('./node_modules/chart.js/dist/Chart.min.js', './public_html/js/lib/chart.min.js');
    //JQVmap
    mix.copy(npm + "jqvmap/dist/jqvmap.min.css", './public_html/css/lib/jqvmap.min.css');
    mix.scripts(npm + "jqvmap/dist/jquery.vmap.js", './public_html/js/lib/jquery.vmap.min.js');
    mix.scripts(npm + "jqvmap/dist/maps/jquery.vmap.world.js", './public_html/js/lib/jquery.vmap.world.min.js');

    //iCheck
    mix.sass(npm + "gentelella/vendors/iCheck/skins/square/green.css", './public_html/css/lib/icheck.min.css');
    mix.copy(npm + "gentelella/vendors/iCheck/skins/square/green.png", './public_html/css/lib/green.png');
    mix.copy(npm + "gentelella/vendors/iCheck/skins/square/green@2x.png", './public_html/css/lib/green@2x.png');
    mix.scripts(npm + "gentelella/vendors/iCheck/icheck.min.js", './public_html/js/lib/icheck.min.js');


    //skyCons - Weather
    mix.scripts(npm + "skycons/skycons.js", './public_html/js/lib/skycons.min.js');

    //Gauges
//    mix.scripts(npm + "gauges/index.js", './public_html/js/lib/gauges.min.js');

    //ionRangeslider
    mix.sass([npm + "ion-rangeslider/css/ion.rangeSlider.css", npm + "ion-rangeslider/css/ion.rangeSlider.skinFlat.css"], './public_html/css/lib/ion.rangeSlider.min.css');
    mix.scripts(npm + "ion-rangeslider/js/ion.rangeSlider.min.js", './public_html/js/lib/ion.rangeSlider.min.js');
    //Bootstrap-colorpicker
    mix.sass(npm + "bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css", './public_html/css/lib/bootstrap-colorpicker.min.css');
    mix.scripts(npm + "bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js", './public_html/js/lib/bootstrap-colorpicker.min.js');
    mix.copy(npm + "bootstrap-colorpicker/dist/img/bootstrap-colorpicker/alpha-horizontal.png", './public_html/css/lib/colorpicker/alpha-horizontal.png');
    mix.copy(npm + "bootstrap-colorpicker/dist/img/bootstrap-colorpicker/alpha.png", './public_html/css/lib/colorpicker/alpha.png');
    mix.copy(npm + "bootstrap-colorpicker/dist/img/bootstrap-colorpicker/hue-horizontal.png", './public_html/css/lib/colorpicker/hue-horizontal.png');
    mix.copy(npm + "bootstrap-colorpicker/dist/img/bootstrap-colorpicker/hue.png", './public_html/css/lib/colorpicker/hue.png');
    mix.copy(npm + "bootstrap-colorpicker/dist/img/bootstrap-colorpicker/saturation.png", './public_html/css/lib/colorpicker/saturation.png');


    //jQuery Input Mask
    mix.scripts(npm + "jquery-inputmask/index.js", './public_html/js/lib/jquery-inputmask.min.js');

    //jQuery knob
    mix.scripts(npm + "jquery-knob/dist/jquery.knob.min.js", './public_html/js/lib/jquery-knob.min.js');
    // Vue Js
    mix.scripts(npm + "vue/dist/vue.js", './public_html/js/lib/vue.min.js');


    //LaraBit JS
    mix.scripts("app.js", './public_html/js/lib/app.min.js');
    //Animate.CSS
    mix.sass(npm + "gentelella/vendors/animate.css/animate.min.css", "./public_html/css/lib/animate.min.css");

    //PNotify
    mix.scripts(npm + "pnotify/dist/pnotify.js", './public_html/js/lib/pnotify.min.js');
    mix.sass(npm + "pnotify/dist/pnotify.css", './public_html/css/lib/pnotify.min.css');
    //ParsleyJS
    mix.scripts(npm+"parsleyjs/dist/parsley.min.js", './public_html/js/lib/parsleyjs.min.js');
    mix.scripts(npm+"parsleyjs/dist/i18n/en.js", './public_html/js/lib/en.min.js');


    //Users Module
    mix.sass("app.scss", './public_html/css/lib/app.min.css');
    mix.sass("users/user-roles.scss", './public_html/css/lib/user-roles.min.css');
    mix.scripts("user/user-roles.js", './public_html/js/lib/user-roles.min.js');
    mix.scripts("user/user-profile.js", './public_html/js/lib/user-profile.min.js');


    //Fileinput
    mix.sass(npm+"jasny-bootstrap/dist/css/jasny-bootstrap.min.css", './public_html/css/lib/fileinput.min.css');
    mix.scripts(npm+"jasny-bootstrap/dist/js/jasny-bootstrap.min.js", './public_html/js/lib/fileinput.min.js');


    // mix.sass("users/user-roles.scss", './public_html/css/lib/user-roles.min.css');
    mix.scripts("dashboard/settings.js", './public_html/js/lib/settings.min.js');
//    mix.sass(npm+"dropzone/dist/dropzone.css", './public_html/css/lib/dropzone.min.css');
//    mix.scripts(npm+"dropzone/dist/dropzone.js", './public_html/js/lib/dropzone.min.js');

});
