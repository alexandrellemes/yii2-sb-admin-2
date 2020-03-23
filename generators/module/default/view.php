<?php
/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\module\Generator */

echo "<?php\n";
?>
/* @var $this yii\web\View */

$this->title = 'Module <?= $generator->moduleID ?> default page';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= "<?= " ?>$this->title ?></h1>

<div class="<?= $generator->moduleID . '-default-index' ?>">
    <p>
        This is the view content for action "<?= "<?= " ?>$this->context->action->id ?>".
        The action belongs to the controller "<?= "<?= " ?>get_class($this->context) ?>"
        in the "<?= "<?= " ?>$this->context->module->id ?>" module.
    </p>
    <p>
        You may customize this page by editing the following file:<br>
        <code><?= "<?= " ?>__FILE__ ?></code>
    </p>
</div>
