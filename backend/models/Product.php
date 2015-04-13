<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_product".
 *
 * @property string $product_id
 * @property string $product_descption
 * @property string $product_type
 * @property string $product_module
 * @property string $debit_account
 * @property string $credit_account
 * @property string $maker_id
 * @property string $maker_stamptime
 * @property string $checker_id
 * @property string $checker_stamptime
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'product_descption', 'product_type', 'product_module', 'debit_account', 'credit_account', 'maker_id', 'maker_stamptime', 'checker_id', 'checker_stamptime'], 'required'],
            [['product_id', 'product_descption', 'product_type', 'product_module', 'debit_account', 'credit_account', 'maker_id', 'maker_stamptime', 'checker_id', 'checker_stamptime'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product Code',
            'product_descption' => 'Product Descption',
            'product_type' => 'Product Type',
            'product_module' => 'Product Module',
            'debit_account' => 'Debit Account',
            'credit_account' => 'Credit Account',
            'maker_id' => 'Maker ID',
            'maker_stamptime' => 'Maker Stamptime',
            'checker_id' => 'Checker ID',
            'checker_stamptime' => 'Checker Stamptime',
        ];
    }
}
