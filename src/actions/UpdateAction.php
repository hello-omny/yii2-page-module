<?php

namespace omny\yii2\page\module\actions;

use omny\yii2\page\module\repositories\PageRepository;
use yii\base\Action;
use yii\base\InvalidConfigException;
use yii\di\NotInstantiableException;
use yii\web\NotFoundHttpException;
use yii\web\Response;

/**
 * Class UpdateAction
 * @package omny\yii2\page\module\actions
 */
class UpdateAction extends Action
{
    /** @var string */
    public $viewFile = '@vendor/omny/yii2-page-module/src/views/update.php';
    /** @var string */
    public $redirectUrl = 'manage';

    /**
     * @param int $id
     * @return string|Response
     * @throws InvalidConfigException
     * @throws NotFoundHttpException
     * @throws NotInstantiableException
     */
    public function run(int $id)
    {
        /** @var PageRepository $repository */
        $repository = \Yii::$container->get(PageRepository::class);
        $model = $repository->getById($id);

        if ($model->load(\Yii::$app->getRequest()->post()) && $model->save()) {
            return $this->controller->redirect([$this->redirectUrl]);
        }

        return $this->controller->render($this->viewFile, ['model' => $model]);
    }
}
