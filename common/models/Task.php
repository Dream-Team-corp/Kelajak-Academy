<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

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

    public function behaviors()
    {
        return[
            'class' => TimestampBehavior::class
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['text', 'required'],
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
            'id' => Yii::t('app', 'Tartib raqami'),
            'text' => Yii::t('app', 'Topshiriq'),
            'image' => Yii::t('app', 'Rasmi'),
            'video' => Yii::t('app', 'Videoni YouTube linki'),
            'teacher_id' => Yii::t('app', 'O\'qituvchi'),
            'group_id' => Yii::t('app', 'Guruh'),
            'course_id' => Yii::t('app', 'Kurs'),
            'created_at' => Yii::t('app', 'Yaratilgan sanasi'),
            'updated_at' => Yii::t('app', 'O\'zgartirilgan sanasi'),
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
