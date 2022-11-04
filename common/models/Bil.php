<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "bil".
 *
 * @property int $id
 * @property int|null $pupil_id
 * @property int|null $group_id
 * @property int|null $teacher_id
 * @property int|null $how_much
 * @property int|null $type
 * @property int|null $created_at
 *
 * @property Group $group
 * @property Member $pupil
 * @property Member $teacher
 */
class Bil extends \yii\db\ActiveRecord
{
    const CASH = 1;
    const ONLINE = 0;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bil';
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
            [['how_much'], 'required'],
            [['pupil_id', 'group_id', 'teacher_id', 'how_much', 'type', 'created_at'], 'integer'],
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
            'group_id' => 'Guruh nomi',
            'teacher_id' => 'O\'qituvchisi',
            'how_much' => 'To\'lov summasi',
            'type' => 'To\'lov turi',
            'created_at' => 'To\'lov vaqti',
        ];
    }
    public function getTypeLabel(){
        if ($this->type == self::CASH){
            return "<span class='badge badge-info'>Naqd pul</span>";
        } else{
            return "<span class='badge badge-primary'>Online</span>";
        }

    }
    /**
     * Gets query for [[Group]].
     *
     * @return \yii\db\ActiveQuery|\common\models\search\GroupQuery
     */
    public function getGroup()
    {
        return $this->hasOne(Group::class, ['id' => 'group_id']);
    }
    public function getGroupList(){
        return Group::findAll(['teacher_id' => Yii::$app->user->id]);
    }
    /**
     * Gets query for [[Pupil]].
     *
     * @return \yii\db\ActiveQuery|\common\models\search\MemberQuery
     */
    public function getPupil()
    {
        return $this->hasOne(Member::class, ['id' => 'pupil_id']);
    }



    /**
     * Gets query for [[Teacher]].
     *
     * @return \yii\db\ActiveQuery|\common\models\search\MemberQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(Member::class, ['id' => 'teacher_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\search\BilQuery the active query used by this AR class.
     */
    // public static function find()
    // {
    //     return new \common\models\search\BilQuery(get_called_class());
    // }
}
