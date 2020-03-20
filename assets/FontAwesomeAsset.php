<?php

namespace svit\sbAdmin\assets;

use yii\web\AssetBundle;

class FontAwesomeAsset extends AssetBundle
{
    public $sourcePath = '@npm/fortawesome--fontawesome-free';

    public $css = [
        'css/all.min.css',
    ];
}
