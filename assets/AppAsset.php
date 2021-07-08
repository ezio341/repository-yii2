<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',
        'assets/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css',
        'assets/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css',
        'assets/AdminLTE/bower_components/Ionicons/css/ionicons.min.css',
        'assets/AdminLTE/dist/css/AdminLTE.min.css',
        'assets/AdminLTE/dist/css/skins/_all-skins.min.css',
        'assets/AdminLTE/bower_components/morris.js/morris.css',
        'assets/AdminLTE/bower_components/jvectormap/jquery-jvectormap.css',
        'assets/AdminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
        'assets/AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.css',
        'assets/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
        'assets/AdminLTE/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic',
    ];
    public $js = [
        'assets/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js',
        'assets/AdminLTE/bower_components/raphael/raphael.min.js',
        'assets/AdminLTE/bower_components/morris.js/morris.min.js',
        'assets/AdminLTE/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js',
        'assets/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
        'assets/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
        'assets/AdminLTE/bower_components/jquery-knob/dist/jquery.knob.min.js',
        'assets/AdminLTE/bower_components/moment/min/moment.min.js',
        'assets/AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.js',
        'assets/AdminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
        'assets/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
        'assets/AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js',
        'assets/AdminLTE/bower_components/fastclick/lib/fastclick.js',
        'assets/AdminLTE/dist/js/adminlte.min.js',
        'assets/AdminLTE/dist/js/pages/dashboard.js',
        'assets/AdminLTE/dist/js/demo.js',
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap4\BootstrapAsset',
    ];
} 
