<?php

namespace omny\yii2\page\module\actions;

use omny\yii2\page\module\models\Page;
use yii\base\Action;
use yii\data\ActiveDataProvider;

/**
 * Class ManageAction
 * @package omny\yii2\page\module\actions
 */
class ManageAction extends Action
{
    /** @var string */
    public $viewFile = '@vendor/omny/yii2-page-module/src/views/manage.php';
    /** @var string */
    public $viewUrl = 'view';

    /**
     * @return string
     */
    public function run(): string
    {
        $provider = new ActiveDataProvider([
            'query' => Page::find(),
        ]);
        $viewUrl = $this->viewUrl;

        return $this->controller->render($this->viewFile, compact('provider', 'viewUrl'));
    }
}
