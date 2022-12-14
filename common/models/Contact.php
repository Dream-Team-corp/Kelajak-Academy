<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string|null $username
 * @property string|null $email
 * @property string|null $title
 * @property string|null $body
 * @property int|null $status
 * @property int|null $rating
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['username', 'email'], 'string', 'max' => 64],
            [['title'], 'string', 'max' => 32],
            [['body'], 'string', 'max' => 255],
            [['rating'],'integer', 'min'=>1,'max'=>10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Ism'),
            'email' => Yii::t('app', 'Elektron pochta'),
            'title' => Yii::t('app', 'Sarlavha'),
            'body' => Yii::t('app', 'Ma\'lumot'),
            'status' => Yii::t('app', 'Status'),
            'rating' => Yii::t('app', 'Rating'),
        ];
    }
}
