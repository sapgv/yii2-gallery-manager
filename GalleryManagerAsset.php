<?php

namespace sapgv\yii2\galleryManager;

use Yii;
use yii\web\AssetBundle;

class GalleryManagerAsset extends AssetBundle
{
    public $sourcePath = '@sapgv/yii2/galleryManager/assets';
    public $js = [
        'jquery.iframe-transport.js',
        'jquery.galleryManager.js',
        // 'jquery.iframe-transport.min.js',
        // 'jquery.galleryManager.min.js',
    ];
    public $css = [
        'galleryManager.css'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\jui\JuiAsset'
    ];

}
