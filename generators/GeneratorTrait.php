<?php

namespace svit\sbAdmin\generators;

use ReflectionClass;

trait GeneratorTrait
{
    public function defaultTemplate()
    {
        $class = new ReflectionClass(parent::class);

        return dirname($class->getFileName()) . '/default';
    }
}
