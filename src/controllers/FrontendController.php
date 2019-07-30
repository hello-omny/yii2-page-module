<?php

namespace omny\yii2\page\module\controllers;

use omny\yii2\page\module\actions\ViewAction;
use yii\web\Controller;

/**
 * Class DefaultController
 * @package omny\yii2\page\module\controllers\frontend
 */
class FrontendController extends Controller
{
    /**
     * @return array
     */
    public function actions()
    {
        return [
            'view' => [
                'class' => ViewAction::class
            ]
        ];
    }
}
