<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%bil}}`.
 */
class m221031_143113_create_bil_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%bil}}', [
            'id' => $this->primaryKey(),
            'pupil_id' => $this->integer(),
            'group_id' => $this->integer(),
            'teacher_id' => $this->integer(),
            'how_much' => $this->integer(),
            'type' => $this->smallInteger(),
            'created_at' => $this->integer()
        ]);
        $this->addForeignKey('fk-from-bil-to-pupil', 'bil', 'pupil_id', 'member', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk-from-bil-to-group', 'bil', 'group_id', 'group', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk-from-bil-to-teacher', 'bil', 'teacher_id', 'member', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-from-bil-to-pupil', 'bil');
        $this->dropForeignKey('fk-from-bil-to-group', 'bil');
        $this->dropForeignKey('fk-from-bil-to-teacher', 'bil');
        $this->dropTable('{{%bil}}');
    }
}
