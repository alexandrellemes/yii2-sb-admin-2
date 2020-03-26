<?php

namespace svit\sbAdmin\helpers;

class Html extends \yii\helpers\Html
{
    public static function icon($name, $options = [])
    {
        $options = array_merge_recursive(['class' => "fas fa-{$name}"], $options);

        return static::tag('i', '', $options);
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