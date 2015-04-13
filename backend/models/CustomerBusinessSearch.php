<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\CustomerBusiness;

/**
 * CustomerBusinessSearch represents the model behind the search form about `backend\models\CustomerBusiness`.
 */
class CustomerBusinessSearch extends CustomerBusiness
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cust_no'], 'integer'],
            [['business_name', 'incorporate_date', 'address', 'email', 'business_category', 'identification', 'identification_number'], 'safe'],
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
        $query = CustomerBusiness::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'cust_no' => $this->cust_no,
        ]);

        $query->andFilterWhere(['like', 'business_name', $this->business_name])
            ->andFilterWhere(['like', 'incorporate_date', $this->incorporate_date])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'business_category', $this->business_category])
            ->andFilterWhere(['like', 'identification', $this->identification])
            ->andFilterWhere(['like', 'identification_number', $this->identification_number]);

        return $dataProvider;
    }
}
