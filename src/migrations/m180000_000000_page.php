<?php

use omny\yii2\page\module\models\Page;
use yii\db\Migration;

/**
 * Class m180000_000000_page
 */
class m180000_000000_page extends Migration
{
    const INDEX_TEMPLATE = 'idx__%s__%s';

    const CURRENT_TIMESTAMP_EXPRESSION = 'current_timestamp()';
    const DEFAULT_ON_UPDATE_EXPRESSION = "'0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP";

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(
            Page::tableName(),
            [
                'id' => $this->bigPrimaryKey()->unsigned(),
                'title' => $this->string()->notNull(),
                'slug' => $this->string()->unique()->notNull(),
                'body' => $this->text(),
                'user_id' => $this->bigInteger()->unsigned()->null()->defaultValue(null),
                'created' => $this->timestamp()->defaultExpression(self::CURRENT_TIMESTAMP_EXPRESSION),
                'updated' => $this->timestamp()->defaultExpression(self::DEFAULT_ON_UPDATE_EXPRESSION),
            ]
        );
        $this->createIndex(
            sprintf(self::INDEX_TEMPLATE, Page::tableName(), 'slug'),
            Page::tableName(),
            'slug',
            true
        );
        $this->createIndex(
            sprintf(self::INDEX_TEMPLATE, Page::tableName(), 'user_id'),
            Page::tableName(),
            'user_id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable(Page::tableName());
    }
}
