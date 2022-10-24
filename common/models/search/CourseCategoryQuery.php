<?php

namespace common\models\search;

/**
 * This is the ActiveQuery class for [[\common\models\CourseCategory]].
 *
 * @see \common\models\CourseCategory
 */
class CourseCategoryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\CourseCategory[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\CourseCategory|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
