<?php
/**
 * This is the template for generating a module class file.
 */

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\module\Generator */

$className = $generator->moduleClass;
$pos = strrpos($className, '\\');
$ns = ltrim(substr($className, 0, $pos), '\\');
$className = substr($className, $pos + 1);

echo "<?php\n";
?>

namespace <?= $ns ?>;

use yii\web\ErrorHandler;

/**
 * <?= $generator->moduleID ?> module definition class
 */
class <?= $className ?> extends \yii\base\Module
{
    public $layout = 'main';

    public function init()
    {
        parent::init();
        // custom error handler for module
        \Yii::configure($this, [
            'components' => [
                'errorHandler' => [
                    'class' => ErrorHandler::class,
                    'errorAction' => '<?= $generator->moduleID ?>/default/error',
                ]
            ],
        ]);

        /** @var ErrorHandler $handler */
        $handler = $this->get('errorHandler');
        \Yii::$app->set('errorHandler', $handler);
        $handler->register();
    }
}
