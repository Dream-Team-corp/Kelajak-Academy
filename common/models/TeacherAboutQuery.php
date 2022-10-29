<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[TeacherAbout]].
 *
 * @see TeacherAbout
 */
class TeacherAboutQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TeacherAbout[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TeacherAbout|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
