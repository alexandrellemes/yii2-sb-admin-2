<?php

namespace svit\sbAdmin\assets;

use yii\web\AssetBundle;

class SBAdminAsset extends AssetBundle
{
    public $sourcePath = '@npm/startbootstrap-sb-admin-2';

    public $js = [
        'js/sb-admin-2.min.js',
    ];

    public $css = [
        'css/sb-admin-2.min.css',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
        'svit\sbAdmin\assets\FontAwesomeAsset',
    ];
}
