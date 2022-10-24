<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "course_category".
 *
 * @property int $id
 * @property string $title
 * @property string|null $image
 * @property string|null $tag
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class CourseCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'course_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['title', 'image', 'tag'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'image' => 'Image',
            'tag' => 'Tag',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\search\CourseCategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\search\CourseCategoryQuery(get_called_class());
    }
}
