<?php

namespace svit\sbAdmin\generators\model;

use svit\sbAdmin\generators\GeneratorTrait;

/**
 * {@inheritdoc}
 */
class Generator extends \yii\gii\generators\model\Generator
{
    use GeneratorTrait;

    /**
     * Fix deprecates in config
     * @param $values
     * @return mixed
     */
    protected function fixDeprecated($values)
    {
        array_walk_recursive($values, function (&$value) {
            str_replace('::className()', '::class', $value);
        });

        return $values;
    }

    /**
     * {@inheritdoc}
     */
    public function generateRules($table)
    {
        return $this->fixDeprecated(parent::generateRules($table));
    }

    /**
     * {@inheritdoc}
     */
    protected function generateRelations()
    {
        return $this->fixDeprecated(parent::generateRelations());
    }
}
