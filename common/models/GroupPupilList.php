<?php

namespace common\models;

use Symfony\Component\CssSelector\Exception\InternalErrorException;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "group_pupil_list".
 *
 * @property int $id
 * @property int|null $group_id
 * @property int|null $pupil_id
 *
 * @property Group $group
 * @property Member $pupil
 */
class GroupPupilList extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'group_pupil_list';
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
            [['group_id', 'pupil_id', 'created_at'], 'integer'],
            [['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => Group::class, 'targetAttribute' => ['group_id' => 'id']],
            [['pupil_id'], 'exist', 'skipOnError' => true, 'targetClass' => Member::class, 'targetAttribute' => ['pupil_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'group_id' => 'Guruhi',
            'pupil_id' => 'O\'quvchi',
            'created_at' => 'Qo\'shilgan vaqti'
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

    public function add($gr_id, $pupil_id)
    {
        $pupil = Member::findOne($pupil_id);

        if ($pupil->status == $pupil::STATUS_INACTIVE) {
            $pupil->status = $pupil::STATUS_ACTIVE;

            $this->pupil_id = $pupil->id;
            $this->group_id = $gr_id;
            if ($pupil->save() && $this->save()) {
                return true;
            } else {
                throw new InternalErrorException("Serverning ichki xatosi!!!", 500);
            }
        } else {
            $this->pupil_id = $pupil->id;
            $this->group_id = $gr_id;
            if ($this->save()) {
                return true;
            } else {
                throw new InternalErrorException("Serverning ichki xatosi!!!", 500);
            }
        }
    }

    /**
     * Gets query for [[Pupil]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPupil()
    {
        return $this->hasOne(UseMember::class, ['id' => 'pupil_id']);
    }

    public function getPupilList()
    {
        $pupils = UseMember::findAll(['type' => Member::PUPIL]);
        $result = ArrayHelper::map($pupils, 'id', 'username');

        return $result;
    }

}
