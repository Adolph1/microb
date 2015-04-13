<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Branch;

/**
 * BranchSearch represents the model behind the search form about `backend\models\Branch`.
 */
class BranchSearch extends Branch
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['branch_id', 'branch_name', 'opened_date', 'maker_id', 'maker_stamptime'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Branch::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'opened_date' => $this->opened_date,
        ]);

        $query->andFilterWhere(['like', 'branch_id', $this->branch_id])
            ->andFilterWhere(['like', 'branch_name', $this->branch_name])
            ->andFilterWhere(['like', 'maker_id', $this->maker_id])
            ->andFilterWhere(['like', 'maker_stamptime', $this->maker_stamptime]);

        return $dataProvider;
    }
}
