<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "task".
 *
 * @property int $id
 * @property string|null $text
 * @property string|null $image
 * @property string|null $video
 * @property int|null $teacher_id
 * @property int|null $group_id
 * @property int|null $course_id
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property Course $course
 * @property Group $group
 * @property Member $teacher
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'task';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['teacher_id', 'group_id', 'course_id', 'created_at', 'updated_at'], 'integer'],
            [['text'], 'string', 'max' => 512],
            [['image', 'video'], 'string', 'max' => 128],
            [['course_id'], 'exist', 'skipOnError' => true, 'targetClass' => Course::class, 'targetAttribute' => ['course_id' => 'id']],
            [['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => Group::class, 'targetAttribute' => ['group_id' => 'id']],
            [['teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => Member::class, 'targetAttribute' => ['teacher_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'text' => Yii::t('app', 'Text'),
            'image' => Yii::t('app', 'Image'),
            'video' => Yii::t('app', 'Video'),
            'teacher_id' => Yii::t('app', 'Teacher ID'),
            'group_id' => Yii::t('app', 'Group ID'),
            'course_id' => Yii::t('app', 'Course ID'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
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
     * Gets query for [[Group]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(Group::class, ['id' => 'group_id']);
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
