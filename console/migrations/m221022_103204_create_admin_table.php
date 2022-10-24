<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%admin}}`.
 */
class m221022_103204_create_admin_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%admin}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string(40)->unique(),
            'password_hash' => $this->string(),
            'auth_key' => $this->string(),
            'status' => $this->smallInteger()->notNull()->defaultValue(9),
            'type' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
        $this->insert('{{%admin}}', [
            'username' => 'admin',
            'password_hash' => Yii::$app->security->generatePasswordHash(12345678),
            'auth_key' => Yii::$app->security->generateRandomString(32),
            'created_at' => time(),
            'updated_at' => time()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%admin}}');
    }
}
