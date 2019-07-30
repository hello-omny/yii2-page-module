<?php

namespace omny\yii2\page\module\actions;

use omny\yii2\page\module\models\Page;
use yii\base\Action;
use yii\web\Response;

/**
 * Class CreateAction
 * @package omny\yii2\page\module\actions
 */
class CreateAction extends Action
{
    /** @var string */
    public $viewFile = '@vendor/omny/yii2-page-module/src/views/create.php';
    /** @var string */
    public $redirectUrl = 'manage';

    /**
     * @return string|Response
     */
    public function run()
    {
        $model = new Page([
            'user_id' => \Yii::$app->getUser()->getId()
        ]);

        if ($model->load(\Yii::$app->getRequest()->post()) && $model->save()) {
            return $this->controller->redirect([$this->redirectUrl]);
        }

        return $this->controller->render($this->viewFile, ['model' => $model]);
    }
}
