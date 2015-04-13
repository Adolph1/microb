<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Product;

/**
 * ProductSearch represents the model behind the search form about `backend\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'product_descption', 'product_type', 'product_module', 'debit_account', 'credit_account', 'maker_id', 'maker_stamptime', 'checker_id', 'checker_stamptime'], 'safe'],
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
        $query = Product::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'product_id', $this->product_id])
            ->andFilterWhere(['like', 'product_descption', $this->product_descption])
            ->andFilterWhere(['like', 'product_type', $this->product_type])
            ->andFilterWhere(['like', 'product_module', $this->product_module])
            ->andFilterWhere(['like', 'debit_account', $this->debit_account])
            ->andFilterWhere(['like', 'credit_account', $this->credit_account])
            ->andFilterWhere(['like', 'maker_id', $this->maker_id])
            ->andFilterWhere(['like', 'maker_stamptime', $this->maker_stamptime])
            ->andFilterWhere(['like', 'checker_id', $this->checker_id])
            ->andFilterWhere(['like', 'checker_stamptime', $this->checker_stamptime]);

        return $dataProvider;
    }
}
