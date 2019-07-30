<?php

namespace omny\yii2\page\module\models;

use yii\behaviors\SluggableBehavior;
use yii\db\ActiveRecord;

/**
 * Class Page
 * @package omny\yii2\page\module\models
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $body
 * @property int $user_id
 * @property string $created
 * @property string $updated
 */
class Page extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName(): string
    {
        return 'page_page';
    }

    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            [['title', 'body', 'slug', 'created', 'updated'], 'string'],
            [['user_id'], 'integer'],
        ];
    }

    /**
     * @return array
     */
    public function behaviors(): array
    {
        $behaviors = parent::behaviors();
        $behaviors['slug'] = [
            'class' => SluggableBehavior::class,
            'attribute' => 'title',
            'immutable' => true,
        ];

        return $behaviors;
    }
}
