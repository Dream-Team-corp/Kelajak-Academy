<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%courseGroupDate}}`.
 */
class m221031_102254_create_courseGroupDate_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%courseGroupDate}}', [
            'id' => $this->primaryKey(),
            'dushanba' => $this->string(32),
            'seshanba' => $this->string(32),
            'chorshanba' => $this->string(32),
            'payshanba' => $this->string(32),
            'juma' => $this->string(32),
            'shanba' => $this->string(32),
            'yakshanba' => $this->string(32),
            'course_id' => $this->integer(),
            'group_id' => $this->integer(),
        ]);
        $this->addForeignKey('fk-to-group', 'courseGroupDate', 'group_id', 'group', 'id', "CASCADE", "CASCADE");
        $this->addForeignKey('fk-to-course', 'courseGroupDate', 'course_id', 'course', 'id', "CASCADE", "CASCADE");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-to-group', 'courseGroupDate');
        $this->dropForeignKey('fk-to-course', 'courseGroupDate');
        $this->dropTable('{{%courseGroupDate}}');
    }
}
