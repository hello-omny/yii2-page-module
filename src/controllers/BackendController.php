<?php

namespace omny\yii2\page\module\controllers;

use omny\yii2\page\module\actions\CreateAction;
use omny\yii2\page\module\actions\ManageAction;
use omny\yii2\page\module\actions\UpdateAction;
use yii\web\Controller;

/**
 * Class DefaultController
 * @package omny\yii2\page\module\controllers\backend
 */
class BackendController extends Controller
{
    /**
     * @return array
     */
    public function actions(): array
    {
        return [
            'create' => [
                'class' => CreateAction::class,
            ],
            'manage' => [
                'class' => ManageAction::class,
            ],
            'update' => [
                'class' => UpdateAction::class,
            ]
        ];
    }
}
