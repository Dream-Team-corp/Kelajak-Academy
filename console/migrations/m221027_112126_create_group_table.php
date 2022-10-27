<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%group}}`.
 */
class m221027_112126_create_group_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%group}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'teacher_id' => $this->integer(),
            'course_id' => $this->integer(),
            'status' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at'  => $this->integer()
        ]);
        $this->addForeignKey('fk-to-teacher', 'group', 'teacher_id', 'member', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk-to-course', 'group', 'course_id', 'course', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-to-teacher', 'group');
        $this->dropForeignKey('fk-to-course', 'group');
        $this->dropTable('{{%group}}');
    }
}
