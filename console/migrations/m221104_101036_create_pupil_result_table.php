<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pupil_result}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%member}}`
 */
class m221104_101036_create_pupil_result_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pupil_result}}', [
            'id' => $this->primaryKey(),
            'pupil_id' => $this->integer(),
            'teacher_id' => $this->integer(),
            'group_id' => $this->integer(),
            'numbers_of_question' => $this->integer(),
            'correct_answer' => $this->integer(),
            'incorrect_answer' => $this->integer(),
            'created_at' => $this->integer()
        ]);

        // creates index for column `pupil_id`
        $this->createIndex(
            '{{%idx-pupil_result-pupil_id}}',
            '{{%pupil_result}}',
            'pupil_id'
        );

        $this->createIndex(
            '{{%idx-pupil_result-group_id}}',
            '{{%pupil_result}}',
            'group_id'
        );
        $this->createIndex(
            '{{%idx-pupil_result-teacher_id}}',
            '{{%pupil_result}}',
            'teacher_id'
        );
        // add foreign key for table `{{%member}}`
        $this->addForeignKey(
            '{{%fk-pupil_result-pupil_id}}',
            '{{%pupil_result}}',
            'pupil_id',
            '{{%member}}',
            'id',
            'CASCADE'
        );
        $this->addForeignKey(
            '{{%fk-pupil_result-group_id}}',
            '{{%pupil_result}}',
            'group_id',
            '{{%group}}',
            'id',
            'CASCADE'
        );
        $this->addForeignKey(
            '{{%fk-pupil_result-teacher_id}}',
            '{{%pupil_result}}',
            'teacher_id',
            '{{%member}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%member}}`
        $this->dropForeignKey(
            '{{%fk-pupil_result-pupil_id}}',
            '{{%pupil_result}}'
        );

        // drops index for column `pupil_id`
        $this->dropIndex(
            '{{%idx-pupil_result-pupil_id}}',
            '{{%pupil_result}}'
        );

        $this->dropTable('{{%pupil_result}}');
    }
}
