<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Customer;

/**
 * CustomerSearch represents the model behind the search form about `backend\models\Customer`.
 */
class CustomerSearch extends Customer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
           // [['photo'], 'file', 'extensions' => 'gif, jpg'],
            [['customer_no', 'customer_type', 'customer_identification', 'customer_category', 'branch_code', 'mod_no'], 'integer'],
            [['customer_name','customer_address', 'identification_number', 'identification_exp_date', 'mobile_no_1', 'short_name', 'record_stat', 'auth_stat', 'maker_id', 'maker_dt_stamp', 'checker_id', 'checker_dt_stamp', 'mobile_no_2', 'email'], 'safe'],
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
        $query = Customer::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'customer_no' => $this->customer_no,
            'customer_type' => $this->customer_type,
            'customer_identification' => $this->customer_identification,
            'customer_category' => $this->customer_category,
            'branch_code' => $this->branch_code,
            'mod_no' => $this->mod_no,
        ]);

        $query->andFilterWhere(['like', 'customer_name', $this->customer_name])
             ->andFilterWhere(['like', 'customer_address', $this->customer_address])
            ->andFilterWhere(['like', 'identification_number', $this->identification_number])
            ->andFilterWhere(['like', 'identification_exp_date', $this->identification_exp_date])
            ->andFilterWhere(['like', 'mobile_no_1', $this->mobile_no_1])
            ->andFilterWhere(['like', 'short_name', $this->short_name])
            ->andFilterWhere(['like', 'record_stat', $this->record_stat])
           // ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'auth_stat', $this->auth_stat])
            ->andFilterWhere(['like', 'maker_id', $this->maker_id])
            ->andFilterWhere(['like', 'maker_dt_stamp', $this->maker_dt_stamp])
            ->andFilterWhere(['like', 'checker_id', $this->checker_id])
            ->andFilterWhere(['like', 'checker_dt_stamp', $this->checker_dt_stamp])
            ->andFilterWhere(['like', 'mobile_no_2', $this->mobile_no_2])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
