<?php
return [
    'crud' => [
        'class' => 'yii\gii\generators\crud\Generator',
        'templates' => [
            'SB Admin' => '@vendor/svit-ws/yii2-sb-admin-2/generators/crud/default',
        ]
    ],
    'model' => [
        'class' => 'svit\sbAdmin\generators\model\Generator',
        'templates' => [
            'SB Admin' => '@vendor/svit-ws/yii2-sb-admin-2/generators/model/default',
        ]
    ],
    'module' => [
        'class' => 'svit\sbAdmin\generators\module\Generator',
        'templates' => [
            'SB Admin' => '@vendor/svit-ws/yii2-sb-admin-2/generators/module/default',
        ]
    ],
];