<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pupil_result".
 *
 * @property int $id
 * @property int|null $pupil_id
 * @property int|null $teacher_id
 * @property int|null $group_id
 * @property int|null $numbers_of_question
 * @property int|null $correct_answer
 * @property int|null $incorrect_answer
 * @property int|null $created_at
 *
 * @property Group $group
 * @property Member $pupil
 * @property Member $teacher
 */
class PupilResult extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pupil_result';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pupil_id', 'teacher_id', 'group_id', 'numbers_of_question', 'correct_answer', 'incorrect_answer', 'created_at'], 'default', 'value' => null],
            [['pupil_id', 'teacher_id', 'group_id', 'numbers_of_question', 'correct_answer', 'incorrect_answer', 'created_at'], 'integer'],
            [['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => Group::class, 'targetAttribute' => ['group_id' => 'id']],
            [['pupil_id'], 'exist', 'skipOnError' => true, 'targetClass' => Member::class, 'targetAttribute' => ['pupil_id' => 'id']],
            [['teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => Member::class, 'targetAttribute' => ['teacher_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pupil_id' => 'F.I.SH',
            'teacher_id' => 'O\'qituvchisi',
            'group_id' => 'Guruhi',
            'numbers_of_question' => 'Savollar soni',
            'correct_answer' => 'To\'gri javoblar soni',
            'incorrect_answer' => 'Not\'gri javoblar soni',
            'created_at' => 'Test vaqti',
        ];
    }

    /**
     * Gets query for [[Group]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(Group::class, ['id' => 'group_id']);
    }

    /**
     * Gets query for [[Pupil]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPupil()
    {
        return $this->hasOne(Member::class, ['id' => 'pupil_id']);
    }

    public function getResults()
    {
        $answer = ($this->correct_answer * 100) / $this->numbers_of_question;
        return $answer;
    }

    public function getRating()
    {
        if ($this->results >= 90) {
            return '<span class="badge badge-success">Alo</span>';
        } elseif ($this->results >= 80) {
            return '<span class="badge badge-warning">Yaxshi</span>';
        } else {
            return '<span class="badge badge-danger">Qoniqarsiz</span>';
        }
    }

    /**
     * Gets query for [[Teacher]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(Member::class, ['id' => 'teacher_id']);
    }
}
