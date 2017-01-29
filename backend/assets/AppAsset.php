<?php

namespace backend\assets;

use yii\web\AssetBundle;
use Yii;

// set @themes alias so we do not have to update baseUrl every time we change themes
Yii::setAlias('@themes', Yii::$app->view->theme->baseUrl);

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    // public $basePath = '@webroot';
    // public $baseUrl = '@web';

    public $basePath = '@webroot';
    public $baseUrl = '@themes';

    public $css = [
        'css/AdminLTE.css',
        'css/skins/skin-red.min.css'
    ];

    public $cssOptions = ['type'=>'text/css'];  

    public $js = [
        'js/app.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
        'rmrevin\yii\ionicon\AssetBundle',
    ];
}
