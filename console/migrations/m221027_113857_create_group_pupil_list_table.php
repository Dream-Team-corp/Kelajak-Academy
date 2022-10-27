<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%group_pupil_list}}`.
 */
class m221027_113857_create_group_pupil_list_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%group_pupil_list}}', [
            'id' => $this->primaryKey(),
            'group_id' => $this->integer(),
            'pupil_id' => $this->integer()
        ]);
        $this->addForeignKey('fk-to-group', 'group_pupil_list', 'group_id', 'group', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk-to-pupil', 'group_pupil_list', 'pupil_id', 'member', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-to-group', 'group_pupil_list');
        $this->dropForeignKey('fk-to-pupil', 'group_pupil_list');
        $this->dropTable('{{%group_pupil_list}}');
    }
}
