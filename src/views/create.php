<?php

use omny\yii2\page\module\models\Page;
use yii\web\View;

/**
 * @var View $this
 * @var Page $model
 */

$this->title = 'Create page';

echo $this->render('_page-form', ['model' => $model]);
