<?php

use omny\yii2\page\module\models\Page;
use yii\web\View;

/**
 * @var View $this
 * @var Page $model
 */

$this->title = sprintf('Update «%s»', $model->title);

echo $this->render('_page-form', ['model' => $model]);
