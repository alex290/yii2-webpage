<?php


namespace alex290\admin\assets;

class Asset extends \yii\web\AssetBundle
{
    public $sourcePath = '@alex290/admin/assets/scr';

    public $css = [
        'css/main.css',
        'css/grapes.min.css',
    ];

    public $js = [
        'js/grapes.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapPluginAsset',
    ];
}
