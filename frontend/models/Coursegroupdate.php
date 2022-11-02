<?php

namespace app\models;

use common\models\Course;
use common\models\CourseCategory;
use common\models\Group;
use Yii;

/**
 * This is the model class for table "coursegroupdate".
 *
 * @property int $id
 * @property int|null $dushanba
 * @property int|null $seshanba
 * @property int|null $chorshanba
 * @property int|null $payshanba
 * @property int|null $juma
 * @property int|null $shanba
 * @property int|null $yakshanba
 * @property int|null $course_id
 * @property int|null $group_id
 */
class Coursegroupdate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'coursegroupdate';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dushanba', 'seshanba', 'chorshanba', 'payshanba', 'juma', 'shanba', 'yakshanba', ], 'string'],
            [['course_id', 'group_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'dushanba' => Yii::t('app', 'Dushanba'),
            'seshanba' => Yii::t('app', 'Seshanba'),
            'chorshanba' => Yii::t('app', 'Chorshanba'),
            'payshanba' => Yii::t('app', 'Payshanba'),
            'juma' => Yii::t('app', 'Juma'),
            'shanba' => Yii::t('app', 'Shanba'),
            'yakshanba' => Yii::t('app', 'Yakshanba'),
            'course_id' => Yii::t('app', 'Course ID'),
            'group_id' => Yii::t('app', 'Group ID'),
        ];
    }
    public function getCname(){
        $course = Course::findOne($this->course_id);
        $kategory = CourseCategory::findOne($course->category_id);
        $group = Group::findOne($this->group_id);
        return $kategory->title. 'ning '. $group->name.' guruhi ';
    }
}
