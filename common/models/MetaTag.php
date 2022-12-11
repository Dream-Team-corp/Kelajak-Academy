<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "meta_tag".
 *
 * @property int $id
 * @property string $keyword
 * @property string $description
 */
class MetaTag extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'meta_tag';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['keyword', 'description'], 'required'],
            [['keyword', 'description'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'keyword' => 'Keyword',
            'description' => 'Description',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\search\MetaTagQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\search\MetaTagQuery(get_called_class());
    }
}
