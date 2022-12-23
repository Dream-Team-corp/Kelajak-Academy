<?php

namespace frontend\models;

use common\models\Member;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "faq".
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $savol
 * @property string|null $image
 * @property string|null $javob
 * @property string|null $video
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property Member $user
 */
class Faq extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'faq';
    }
    public function behaviors()
    {
        return [
            'class'=> TimestampBehavior::class,
        ];
    }
        
    
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'created_at', 'updated_at'], 'integer'],
            [['savol', 'javob', 'video'], 'string', 'max' => 255],
            [['image'], 'string', 'max' => 128],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Member::class, 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'savol' => Yii::t('app', 'Savolingizni yozing.'),
            'image' => Yii::t('app', 'Ixtiyoriy.Xatolikni rasmini tashlang!'),
            'javob' => Yii::t('app', 'Javob'),
            'video' => Yii::t('app', 'Videosi'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
    public function getId(){
        return $this->user_id = Yii::$app->user->identity->id;
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
    public function getYoutube(){
        $video = '';
        $v= explode('watch?v=', $this->video);
        $video .= $v[0].'embed/'.end($v);
        return $video;
    }
}
