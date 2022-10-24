<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%member}}`.
 */
class m221023_160242_create_member_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%member}}', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string()->notNull(),
            'last_name' => $this->string()->notNull(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'tel_number' => $this->string()->notNull(),
            'photo' => $this->string(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'type' => $this->smallInteger(),
            'token' => $this->string(38),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%member}}');
    }
}
