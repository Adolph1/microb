<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\CustomerPersonal;

/**
 * CustomerPersonalSearch represents the model behind the search form about `backend\models\CustomerPersonal`.
 */
class CustomerPersonalSearch extends CustomerPersonal
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cust_no', 'customer_prefix', 'first_name', 'middle_name'], 'integer'],
            [['last_name', 'date_of_birth', 'sex', 'email', 'address', 'phone_number', 'identification', 'identification_number', 'customer_photo'], 'safe'],
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
        $query = CustomerPersonal::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'cust_no' => $this->cust_no,
            'customer_prefix' => $this->customer_prefix,
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
        ]);

        $query->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'date_of_birth', $this->date_of_birth])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'phone_number', $this->phone_number])
            ->andFilterWhere(['like', 'identification', $this->identification])
            ->andFilterWhere(['like', 'identification_number', $this->identification_number])
            ->andFilterWhere(['like', 'customer_photo', $this->customer_photo]);

        return $dataProvider;
    }
}
