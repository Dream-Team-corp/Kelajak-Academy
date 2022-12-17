<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%faq}}`.
 */
class m221217_085048_create_faq_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%faq}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'savol' => $this->string(255),
            'image' => $this->string(128),
            'javob' => $this->string(255),
            'video' => $this->string(255),
            'created_at'=> $this->integer(),
            'updated_at' => $this->integer(),
        ]);
        $this->addForeignKey('fk-to-user-faq', 'faq', 'user_id', 'member', 'id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-to-user-faq','faq');
        $this->dropTable('{{%faq}}');
    }
}
