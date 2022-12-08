<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\web\UploadedFile;

/**
 * This is the model class for table "course".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string|null $image
 * @property int $price
 * @property int|null $category_id
 * @property int|null $user_id
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property CourseCategory $category
 * @property Member $user
 */
class Course extends \yii\db\ActiveRecord
{

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;


    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
            ],
            [
                'class' => BlameableBehavior::class,
                'createdByAttribute' => 'user_id',
                'updatedByAttribute' => false,
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'price'], 'required'],
            [['description'], 'string'],
            [['price', 'category_id', 'user_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['image'], 'image', 'extensions' => ['jpg', 'jpeg', 'png'], 'maxSize' => 1024 * 1024, 'minWidth' => 1000, 'minHeight' => 667],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => CourseCategory::class, 'targetAttribute' => ['category_id' => 'id']],
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
            'title' => 'Sarlavha',
            'description' => 'Tavsif',
            'image' => 'Rasm',
            'price' => 'Narxi',
            'category_id' => 'Kategoriyasi',
            'user_id' => 'O\'qituvchi',
            'status' => 'Holati',
            'created_at' => 'Qo\'shilagan vaqti',
            'updated_at' => 'Oxirgi o\'zgarish',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery|CourseCategoryQuery
     */
    public function getCategory()
    {
        return $this->hasOne(CourseCategory::class, ['id' => 'category_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery|\common\models\search\MemberQuery
     */
    public function getUser()
    {
        return $this->hasOne(Member::class, ['id' => 'user_id']);
    }

    public function saveImage()
    {
        $image = UploadedFile::getInstanceByName('Course[image]');

        if ($image->saveAs(Yii::getAlias('@saveImage') . '/' . time().'.'.$image->extension, true)){
            return time().'.'.$image->extension;
        } else {
            return false;
        }
    }
    
    public function getStatusLabel(){
        if($this->status = 1){
            return "<span class='badge badge-success'>Faol</span>";
        } 
        return "<span class='badge badge-danger'>Nofaol</span>";
    }
}
