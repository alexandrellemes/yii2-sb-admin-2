<?php
return [
    'crud' => [
        'class' => 'yii\gii\generators\crud\Generator',
        'templates' => [
            'SB Admin' => '@app/generators/crud/default',
        ]
    ],
    'model' => [
        'class' => 'svit\sbAdmin\generators\model\Generator',
        'templates' => [
            'SB Admin' => '@app/generators/model/default',
        ]
    ],
    'module' => [
        'class' => 'yii\gii\generators\module\Generator',
        'templates' => [
            'SB Admin' => '@app/generators/module/default',
        ]
    ],
];