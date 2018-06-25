<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 18-6-25
 * Time: 上午9:46
 */

namespace backend\assets;


use yii\web\AssetBundle;

class ColorAdminAsset extends AssetBundle
{
    public $baseUrl = '@web';
    public $sourcePath = '@library';

    public $js = [
        // 基础脚本
        'ColorAdmin/plugins/pace/pace.min.js',
        'ColorAdmin/plugins/jquery/jquery-1.9.1.min.js',

        'ColorAdmin/plugins/bootstrap/js/bootstrap.min.js',
        'ColorAdmin/plugins/jquery/jquery-migrate-1.1.0.min.js',
        'ColorAdmin/plugins/jquery-ui/ui/minified/jquery-ui.min.js',

        'ColorAdmin/crossbrowserjs/html5shiv.js',
        'ColorAdmin/crossbrowserjs/respond.min.js',
        'ColorAdmin/crossbrowserjs/excanvas.min.js',

        'ColorAdmin/plugins/jquery-cookie/jquery.cookie.js',
        'ColorAdmin/plugins/slimscroll/jquery.slimscroll.min.js',

        // 消息通知
        'ColorAdmin/plugins/gritter/js/jquery.gritter.js',

        // 时间选择器
        'ColorAdmin/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js',
        'ColorAdmin/plugins/bootstrap-datepicker/js/locales/bootstrap-datepicker.xxxxxxxxxx.js',

        // 下拉框
        'ColorAdmin/plugins/bootstrap-select-1.10/bootstrap-select.min.js',

        // 初始化脚本
        'ColorAdmin/js/apps.min.js',
    ];

    public $css = [
        // 基础样式
        'ColorAdmin/css/style.css',
        'ColorAdmin/css/style-responsive.min.css',

        'ColorAdmin/css/animate.min.css',
        'ColorAdmin/css/theme/default.css',

        'ColorAdmin/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css',
        'ColorAdmin/plugins/bootstrap/css/bootstrap.css',
        'ColorAdmin/plugins/font-awesome/css/font-awesome.min.css',

        // 消息通知
        'ColorAdmin/plugins/gritter/css/jquery.gritter.css',

        // 时间选择器
        'ColorAdmin/plugins/bootstrap-datepicker/css/datepicker.css',
        'ColorAdmin/plugins/bootstrap-datepicker/css/datepicker3.css',

        // 下拉框
        'ColorAdmin/plugins/bootstrap-select-1.10/bootstrap-select.min.css',
    ];

    public $depends = [
    ];
}
