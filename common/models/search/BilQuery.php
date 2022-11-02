<?php

namespace common\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Bil;

/**
 * BilQuery represents the model behind the search form of `common\models\Bil`.
 */
class BilQuery extends Bil
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'pupil_id', 'group_id', 'teacher_id', 'how_much', 'type', 'created_at'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Bil::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'pupil_id' => $this->pupil_id,
            'group_id' => $this->group_id,
            'teacher_id' => $this->teacher_id,
            'how_much' => $this->how_much,
            'type' => $this->type,
            'created_at' => $this->created_at,
        ]);

        return $dataProvider;
    }
}
