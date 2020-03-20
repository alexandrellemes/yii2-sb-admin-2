<?php

namespace svit\sbAdmin\assets;

use yii\web\AssetBundle;

class ChartJSAsset extends AssetBundle
{
    public $sourcePath = '@npm/chart.js/dist';

    public $js = [
        'Chart.min.js',
    ];
}
