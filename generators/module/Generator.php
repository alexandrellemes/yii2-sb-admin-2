<?php

namespace svit\sbAdmin\generators\module;

use yii\gii\CodeFile;

/**
 * {@inheritdoc}
 */
class Generator extends \yii\gii\generators\module\Generator
{
    /**
     * {@inheritdoc}
     */
    public function requiredTemplates()
    {
        $templates = parent::requiredTemplates();
        $templates[] = 'error.php';

        return $templates;
    }

    /**
     * {@inheritdoc}
     */
    public function generate()
    {
        $files = parent::generate();
        $modulePath = $this->getModulePath();

        $files[] = new CodeFile(
            $modulePath . '/views/default/error.php',
            $this->render("error.php")
        );

        return $files;
    }
}
