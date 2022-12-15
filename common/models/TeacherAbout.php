<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\web\UploadedFile;

/**
 * This is the model class for table "teacher_about".
 *
 * @property int $id
 * @property string|null $image
 * @property string $job
 * @property string $about
 * @property string $education
 * @property string $experience
 * @property string|null $telegram
 * @property string|null $email
 * @property string|null $instagram
 * @property string|null $youtube
 * @property string|null $facebook
 * @property string|null $others
 * @property int|null $teacher_id
 *
 * @property Member $teacher
 */
class TeacherAbout extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teacher_about';
    }

    public function behaviors()
    {
        return [
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
            [['job', 'about', 'education', 'experience'], 'required'],
            [['about', 'education', 'experience'], 'string', 'min' => 100],
            [['teacher_id'], 'integer'],
            [['telegram', 'email', 'instagram', 'youtube', 'facebook', 'others'], 'string', 'max' => 255],
            [['job'], 'string', 'max' => 50],
            [['teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => Member::class, 'targetAttribute' => ['teacher_id' => 'id']],
            [['image'], 'image', 'extensions' => ['jpg', 'jpeg', 'png'], 'maxSize' => 1024 * 1024 * 1024, 'minWidth' => 800]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Rasm',
            'job' => 'Yo\'nalish',
            'about' => 'O\'zingiz haqingizda',
            'education' => 'Ta\'lim',
            'experience' => 'Tajribangiz',
            'telegram' => 'Telegram',
            'email' => 'Email',
            'instagram' => 'Instagram',
            'youtube' => 'Youtube',
            'facebook' => 'Facebook',
            'others' => 'Boshqalar',
            'teacher_id' => 'Teacher ID',
        ];
    }

    /**
     * Gets query for [[Teacher]].
     *
     * @return \yii\db\ActiveQuery|MemberQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(Member::class, ['id' => 'teacher_id']);
    }

    public function saveImage()
    {
        $image = UploadedFile::getInstanceByName('TeacherAbout[image]');
        if (!empty($image)) {
            if ($image->saveAs(Yii::getAlias('@saveImage') . '/' . time() . '.' . $image->extension, true)) {
                return time() . '.' . $image->extension;
            } else {
                return false;
            }
        } else {
            return $this->getOldAttribute('image');
        }
    }

    public function getSocialLink()
    {

        $contact = [
            'facebook' => $this->facebook,
            'instagram' => $this->instagram,
            'youtube' => $this->youtube,
            'telegram' => $this->telegram,
        ];
        $arr = [];
        foreach ($contact as $k => $v) {
            if (!empty($contact[$k])) {
                $arr[] = "<a href='" . $v . "' target='_blank'><i class='fab fsx fa-" . $k . "'> </i></a>\n";
            }
        }
        if (!empty($this->email)) {
            array_push($arr, "<a href='mailto:" . $this->email . "' target='_blank'><i class='fab fsx fa-google'> </i></a>\n");
        }
        return implode(' ', $arr);
    }

    public function getSocialLinkFront()
    {

        $contact = [
            'facebook' => $this->facebook,
            'instagram' => $this->instagram,
            'youtube' => $this->youtube,
            'telegram' => $this->telegram,
        ];
        $arr = [];
        foreach ($contact as $k => $v) {
            if (!empty($contact[$k])) {
                $arr[] = "<li class='ftco-animate'><a href='" . $v . "' target='_blank'><i class='fab fsx fa-" . $k . "'> </i></a></li>\n";
            }
        }
        if (!empty($this->email)) {
            array_push($arr, "<li class='ftco-animate'><a href='mailto:" . $this->email . "' target='_blank'><i class='fab fsx fa-google'> </i></a></li>\n");
        }
        return implode(' ', $arr);
    }

    /**
     * {@inheritdoc}
     * @return TeacherAboutQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TeacherAboutQuery(get_called_class());
    }
}
