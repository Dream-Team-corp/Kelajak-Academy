<?php

namespace common\models\search;

/**
 * This is the ActiveQuery class for [[\common\models\MetaTag]].
 *
 * @see \common\models\MetaTag
 */
class MetaTagQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\MetaTag[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\MetaTag|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
