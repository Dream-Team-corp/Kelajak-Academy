<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%meta_tag}}`.
 */
class m221211_162650_create_meta_tag_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%meta_tag}}', [
            'id' => $this->primaryKey(),
            'keyword' => $this->text()->notNull(),
            'description' => $this->text()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%meta_tag}}');
    }
}
