<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%task}}`.
 */
class m230107_112524_create_task_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%task}}', [
            'id' => $this->primaryKey(),
            'text'=> $this->string(512),
            'image'=> $this->string(128),
            'video' => $this->string(128),
            'teacher_id'=> $this->integer(),
            'group_id'=>$this->integer(),
            'course_id'=>$this->integer(),
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer()
        ]);
        $this->addForeignKey('fk-from-task-to-teacher', 'task', 'teacher_id', 'member', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk-from-task-to-group', 'task', 'group_id', 'group', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk-from-task-to-course', 'task', 'course_id', 'course', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-from-task-to-teacher', 'task');
        $this->dropForeignKey('fk-from-task-to-group', 'task');
        $this->dropForeignKey('fk-from-task-to-course', 'task');
        $this->dropTable('{{%task}}');
    }
}
