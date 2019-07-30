<?php

use omny\yii2\page\module\models\Page;
use yii\data\ActiveDataProvider;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\web\View;

/**
 * @var View $this
 * @var ActiveDataProvider $provider
 * @var string $viewUrl
 */

$this->title = 'Page manage';

echo Html::a('Create', ['create'], ['class' => 'btn btn-sm btn-success']);
echo Html::tag('br');
echo Html::tag('br');

echo GridView::widget([
    'dataProvider' => $provider,
    'columns' => [
        'id',
        [
            'attribute' => 'title',
            'content' => function (Page $model) use ($viewUrl) {
                return Html::a($model->title, [$viewUrl, 'id' => $model->id]);
            }
        ],
        'slug',
        'body',
        'user_id',
        'created',
        'updated',

        [
            'class' => \yii\grid\ActionColumn::class,
            'template' => '{update} {delete}',
            'buttons' => [
                'update' => function ($url, $model, $key) {
                    return Html::a('Update', $url, ['class' => 'btn btn-sm btn-success']);
                },
                'delete' => function ($url, $model, $key) {
                    return Html::a('Delete', $url, ['class' => 'ml-2 btn btn-sm btn-danger']);
                }
            ],
        ]
    ]
]);
