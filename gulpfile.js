var elixir = require('laravel-elixir');

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

elixir(function(mix) {
    mix.styles([
        'dist/css/AdminLTE.min.css',
        'bootstrap/css/bootstrap.min.css',
        'bootstrap/css/pass.css',
        'plugins/datatables/dataTables.bootstrap.css',
        'dist/css/skins/_all-skins.min.css',
        'plugins/iCheck/flat/blue.css',
        'plugins/morris/morris.css',
        'plugins/jvectormap/jquery-jvectormap-1.2.2.css',
        'plugins/datepicker/datepicker3.css',
        'plugins/daterangepicker/daterangepicker-bs3.css',
        'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
        'fancy.css'

    ], 'public/output/final.css', 'public/component/');

    mix.scripts([
        'plugins/jQuery/jQuery-2.1.4.min.js',
        'bootstrap/js/bootstrap.min.js',
        'plugins/morris/morris.min.js',
        'plugins/sparkline/jquery.sparkline.min.js',
        'plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
        'plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
        'plugins/datatables/jquery.dataTables.min.js',
        'plugins/datatables/dataTables.bootstrap.min.js',
        'plugins/knob/jquery.knob.js',
        'plugins/daterangepicker/daterangepicker.js',
        'plugins/datepicker/bootstrap-datepicker.js',
        'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
        'plugins/iCheck/icheck.min.js',
        'plugins/slimScroll/jquery.slimscroll.min.js',
        'plugins/chartjs/Chart.min.js',
        'plugins/fastclick/fastclick.min.js',
        'dist/js/app.min.js',
        'dist/js/pages/dashboard.js',
        'dist/js/pages/dashboard2.js',
        'dist/js/demo.js',
        'jquery-ui.min.js',
        'raphael-min.js'

    ], 'public/output/final.js', 'public/component/')
});

