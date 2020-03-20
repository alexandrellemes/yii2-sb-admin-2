<?php

namespace svit\sbAdmin\helpers;

class Html extends \yii\helpers\Html
{
    public static function icon($name)
    {
        $class = "fas fa-{$name}";

        return static::tag('i', '', ['class' => $class]);
    }

    public static function iconButton($text, $url, $color, $icon)
    {
        $parts = [
            static::tag('span', static::icon($icon), ['class' => 'icon text-white-50']),
            static::tag('span', $text, ['class' => 'text']),
        ];

        $options = ['class' => "btn btn-{$color} btn-icon-split"];

        return static::a(implode(PHP_EOL, $parts), $url, $options);
    }
}