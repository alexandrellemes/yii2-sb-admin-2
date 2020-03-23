<?php

namespace svit\sbAdmin\actions;

class ErrorAction extends \yii\web\ErrorAction
{
    protected function getViewRenderParams()
    {
        $params = parent::getViewRenderParams();
        $params['code'] = $this->getExceptionCode();

        return $params;
    }
}
