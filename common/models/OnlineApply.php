<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "online_apply".
 *
 * @property int $id
 * @property int|null $course_id
 * @property int|null $teacher_id
 * @property string|null $location
 * @property int|null $user_id
 * @property int|null $created_at
 *
 * @property Course $course
 * @property Member $teacher
 * @property Member $user
 */
class OnlineApply extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'online_apply';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'updatedAtAttribute' => false
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['course_id', 'location'], 'required'],
            [['course_id', 'teacher_id', 'user_id', 'created_at'], 'default', 'value' => null],
            [['course_id', 'teacher_id', 'user_id', 'created_at'], 'integer'],
            [['location'], 'string', 'max' => 255],
            [['course_id'], 'exist', 'skipOnError' => true, 'targetClass' => Course::class, 'targetAttribute' => ['course_id' => 'id']],
            [['teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => Member::class, 'targetAttribute' => ['teacher_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Member::class, 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'course_id' => 'O\'qimoqchi bo\'lgan kursi',
            'teacher_id' => 'Teacher ID',
            'location' => 'Yashash joyi',
            'user_id' => 'User ID',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Course]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCourse()
    {
        return $this->hasOne(Course::class, ['id' => 'course_id']);
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

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Member::class, ['id' => 'user_id']);
    }

    /**
     * @return Course[]
     */
    public function getCourseList(): array
    {
        return Course::findAll(['status' => Course::STATUS_ACTIVE]);
    }

}
