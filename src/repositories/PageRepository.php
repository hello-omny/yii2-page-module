<?php


namespace omny\yii2\page\module\repositories;

use omny\yii2\page\module\models\Page;
use yii\web\NotFoundHttpException;

/**
 * Class PageRepository
 * @package omny\yii2\page\module\repositories
 */
class PageRepository
{
    /**
     * @param int $id
     * @return Page
     * @throws NotFoundHttpException
     */
    public function getById(int $id): Page
    {
        $model = Page::findOne(['id' => $id]);

        if ($model !== null) {
            return $model;
        }

        throw new NotFoundHttpException('Page not found.');
    }

    /**
     * @param string $slug
     * @return Page
     * @throws NotFoundHttpException
     */
    public function getBySlug(string $slug): Page
    {
        $model = Page::findOne(['slug' => $slug]);

        if ($model !== null) {
            return $model;
        }

        throw new NotFoundHttpException('Page not found.');
    }
}
