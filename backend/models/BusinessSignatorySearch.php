<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\BusinessSignatory;

/**
 * BusinessSignatorySearch represents the model behind the search form about `backend\models\BusinessSignatory`.
 */
class BusinessSignatorySearch extends BusinessSignatory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'business_no', 'signatory_id'], 'integer'],
            [['branch_code', 'signatory_name', 'signatory_title', 'signatory_photo'], 'safe'],
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
        $query = BusinessSignatory::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'business_no' => $this->business_no,
            'signatory_id' => $this->signatory_id,
        ]);

        $query->andFilterWhere(['like', 'branch_code', $this->branch_code])
            ->andFilterWhere(['like', 'signatory_name', $this->signatory_name])
            ->andFilterWhere(['like', 'signatory_title', $this->signatory_title])
            ->andFilterWhere(['like', 'signatory_photo', $this->signatory_photo]);

        return $dataProvider;
    }
}
