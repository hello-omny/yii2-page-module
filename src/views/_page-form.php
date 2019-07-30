<?php

use omny\yii2\page\module\models\Page;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/**
 * @var View $this
 * @var Page $model
 */


$form = ActiveForm::begin([]);

echo $form->field($model, 'title')->textInput();
echo $form->field($model, 'body')->textarea();

echo Html::submitButton('Save');

ActiveForm::end();