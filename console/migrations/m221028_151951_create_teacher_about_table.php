<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%teacher_about_}}`.
 */
class m221028_151951_create_teacher_about_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%teacher_about}}', [
            'id' => $this->primaryKey(),
            'image' => $this->string(),
            'job' => $this->string(50)->notNull(),
            'about' => $this->text()->notNull(),
            'education' => $this->text()->notNull(),
            'experience' => $this->text()->notNull(),
            'telegram' => $this->string(),
            'email' => $this->string(),
            'instagram' => $this->string(),
            'youtube' => $this->string(),
            'facebook' => $this->string(),
            'others' => $this->string(),
            'teacher_id' => $this->integer()
        ]);
        $this->addForeignKey('fk-to-teacher-about', 'teacher_about', 'teacher_id', 'member', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-to-teacher-about', 'teacher_about');
        $this->dropTable('{{%teacher_about}}');
    }
}
