<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%online_apply}}`.
 */
class m221113_153836_create_online_apply_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%online_apply}}', [
            'id' => $this->primaryKey(),
            'course_id' => $this->integer(),
            'teacher_id' => $this->integer(),
            'location' => $this->string(),
            'user_id' => $this->integer(),
            'created_at' => $this->integer()
        ]);
        $this->addForeignKey('fk-to-user-from-online_apply', 'online_apply', 'user_id', 'member', 'id', 'CASCADE');
        $this->addForeignKey('fk-to-course-from-online_apply', 'online_apply', 'course_id', 'course', 'id');
        $this->addForeignKey('fk-to-teacher-from-online_apply', 'online_apply', 'teacher_id', 'member', 'id');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-to-user-from-online_apply', 'online_apply');
        $this->dropForeignKey('fk-to-course-from-online_apply', 'online_apply');
        $this->dropForeignKey('fk-to-teacher-from-online_apply', 'online_apply');
        $this->dropTable('{{%online_apply}}');
    }
}