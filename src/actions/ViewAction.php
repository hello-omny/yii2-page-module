<?php

namespace omny\yii2\page\module\actions;

use omny\yii2\page\module\repositories\PageRepository;
use yii\base\Action;
use yii\base\InvalidConfigException;
use yii\di\NotInstantiableException;
use yii\web\NotFoundHttpException;

/**
 * Class ViewAction
 * @package omny\yii2\page\module\actions
 */
class ViewAction extends Action
{
    /** @var string */
    public $viewFile = '@vendor/omny/yii2-page-module/src/views/view.php';

    /**
     * @param string $slug
     * @return string
     * @throws NotFoundHttpException
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    public function run(string $slug): string
    {
        /** @var PageRepository $repository */
        $repository = \Yii::$container->get(PageRepository::class);
        $model = $repository->getBySlug($slug);

        return $this->controller->render($this->viewFile, ['model' => $model]);
    }
}
