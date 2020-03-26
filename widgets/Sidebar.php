<?php

namespace svit\sbAdmin\widgets;

use svit\sbAdmin\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\widgets\Menu;

class Sidebar extends Menu
{
    public $itemOptions = ['class' => 'nav-item'];
    public $linkTemplate = '<a href="{url}" class="nav-link">{icon}<span>{label}</span></a>';
    public $labelTemplate = '<a href="" class="nav-link collapsed" data-toggle="collapse">{icon}<span>{label}</span></a>';
    public $submenuTemplate = '<div class="collapse"><div class="bg-white py-2 collapse-inner rounded">{items}</div></div>';

    public $submenuLinkTemplate = '<a href="{url}" class="collapse-item">{label}</a>';
    public $submenuLabelTemplate = '<h6 class="collapse-header">{label}</h6>';
    public $dividerTemplate = '<hr class="sidebar-divider">';

    public function init()
    {
        parent::init();
        // set top level
        array_walk($this->items, function (&$item) {
            $item['top'] = true;
        });
    }

    protected function renderItem($item)
    {
        $icon = isset($item['icon']) ? Html::icon($item['icon'], ['class' => 'fa-fw']) : '';

        if (isset($item['url'])) {
            $template = ArrayHelper::getValue($item, 'template', $this->linkTemplate);

            return strtr($template, [
                '{url}' => Html::encode(Url::to($item['url'])),
                '{label}' => $item['label'],
                '{icon}' => $icon,
            ]);
        }

        $template = ArrayHelper::getValue($item, 'template', $this->labelTemplate);

        return strtr($template, [
            '{label}' => $item['label'],
            '{icon}' => $icon,
        ]);
    }
}
