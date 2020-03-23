<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $code mixed */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="text-center">
    <div class="error mx-auto" data-text="<?= $code ?>"><?= $code ?></div>
    <p class="lead text-gray-800 mb-5"><?= nl2br(Html::encode($message)) ?></p>
    <p class="text-gray-500 mb-0"><?= Yii::t('app', 'It looks like you found a glitch in the matrix...') ?></p>
    <?= Html::a(Yii::t('app', '&larr; Back to Dashboard'), ['index']) ?>
</div>
