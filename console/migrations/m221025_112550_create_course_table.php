<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%course}}`.
 */
class m221025_112550_create_course_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%course}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'description' => $this->text()->notNull(),
            'image' => $this->string(),
            'price' => $this->integer()->notNull(),
            'category_id' => $this->integer(),
            'user_id' => $this->integer(),
            'status' => $this->boolean()->defaultValue(false),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
        $this->addForeignKey('fk-to-category', 'course', 'category_id', 'course_category', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk-to-member', 'course', 'user_id', 'member', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-to-category', 'course');
        $this->dropForeignKey('fk-to-member', 'course');
        $this->dropTable('{{%course}}');
    }
}
