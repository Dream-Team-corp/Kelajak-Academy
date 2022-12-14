<?php

namespace common\models;

use app\models\Coursegroupdate;
use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "group".
 *
 * @property int $id
 * @property string $name
 * @property int|null $teacher_id
 * @property int|null $course_id
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property Course $course
 * @property GroupPupilList[] $groupPupilLists
 * @property Member $teacher
 */
class Group extends \yii\db\ActiveRecord
{
    const ACTIVE = 1;
    const INACTIVE = 0;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'group';
    }
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class
            ],
            [
                'class' => BlameableBehavior::class,
                'createdByAttribute' => 'teacher_id',
                'updatedByAttribute' => false,
            ]
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['teacher_id', 'course_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['course_id'], 'exist', 'skipOnError' => true, 'targetClass' => Course::class, 'targetAttribute' => ['course_id' => 'id']],
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
            'name' => 'Guruh nomi',
            'teacher_id' => 'O\'qituvchi',
            'course_id' => 'Kurs reklamasi',
            'status' => 'Holati',
            'created_at' => 'Yaratilgan vaqti',
            'updated_at' => 'Oxirgi o\'zgarish',
        ];
    }

    /**
     * Gets query for   [[Course]].
     *
     * @return \yii\db\ActiveQuery|\common\models\search\CourseQuery
     */
    public function getCourse()
    {
        return $this->hasOne(Course::class, ['id' => 'course_id']);
    }
    public function getResult()
    {
        return $abs = new ActiveDataProvider([
            'query' => PupilResult::find()->where(['group_id' => $this->id])
        ]);
    }
    /**
     * Gets query for [[GroupPupilLists]].
     *
     * @return \yii\db\ActiveQuery|\common\models\search\GroupPupilListQuery
     */
    public function getGroupPupilLists()
    {
        return $this->hasMany(GroupPupilList::class, ['group_id' => 'id']);
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

    public function getPupilCount()
    {
        $count = GroupPupilList::find()->where(['group_id' => $this->id])->count();

        if ($count != 0) {
            return "$count  nafar";
        } else {
            return "O'quvchilar qo'shilmagan!";
        }
    }

    public function getCourseList()
    {
        return Course::findAll(['status' => Course::STATUS_ACTIVE, 'user_id' => Yii::$app->user->id]);
    }
    public function getDate()
    {

        $date = Coursegroupdate::find()->where(['group_id' => $this->id])->one();
        $days = '';
        $days .= '<table class="table">';
        if ($date->dushanba != "") {
            $days .= '<tr>
                        <th>Dushanba</th>
                        <td>' . $date->dushanba . '</td>
                      </tr>';
        }
        if ($date->seshanba != "") {
            $days .= '<tr>
                        <th>Seshanba</th>
                        <td>' . $date->seshanba . '</td>
                      </tr>';
        }
        if ($date->chorshanba != "") {
            $days .= '<tr>
                        <th>Chorshanba</th>
                        <td>' . $date->chorshanba . '</td>
                      </tr>';
        }
        if ($date->payshanba != "") {
            $days .= '<tr>
                        <th>Payshanba</th>
                        <td>' . $date->payshanba . '</td>
                      </tr>';
        }
        if ($date->juma != "") {
            $days .= '<tr>
                        <th>Juma</th>
                        <td>' . $date->juma . '</td>
                      </tr>';
        }
        if ($date->shanba != "") {
            $days .= '<tr>
                        <th>Shanba</th>
                        <td>' . $date->shanba . '</td>
                      </tr>';
        }
        if ($date->yakshanba != "") {
            $days .= '<tr>
                        <th>Yakshanba</th>
                        <td>' . $date->yakshanba . '</td>
                      </tr>';
        }
        $days .= '</table>';
        return $days;
    }
}
