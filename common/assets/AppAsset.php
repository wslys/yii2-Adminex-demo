<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl  = '@web';

    public $sourcePath = '@library';

    public $css = [
        'css/bootstrap.css',
        'css/bootstrap-fileupload.min.css',
        'css/bootstrap-reset.css',

        'css/jquery-ui-1.10.3.css',
        'css/jquery.stepy.css',

        'css/clndr.css',
        'css/custom-ico-fonts.css',

        'css/owl.carousel.css',
        'css/owl.theme.css',

        'css/style.css',
        'css/style-responsive.css',
        'css/table-responsive.css',

        'documentation/assets/css/documenter_style.css',
        'documentation/assets/js/google-code-prettify/prettify.css',
    ];
    public $js = [
        'documentation/assets/js/jquery.easing.js',
        'documentation/assets/js/google-code-prettify/prettify.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
