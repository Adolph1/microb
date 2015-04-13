<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_customer_category}}".
 *
 * @property integer $cate_id
 * @property string $category_description
 * @property string $category_code
 * @property string $maker_id
 * @property string $maker_stamptime
 * @property string $checker_id
 * @property string $checker_stamptime
 *
 * @property TblCustomer[] $tblCustomers
 */
class CustomerCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tbl_customer_category}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_description', 'category_code', 'maker_id', 'maker_stamptime', 'checker_id', 'checker_stamptime'], 'required'],
            [['category_description', 'category_code', 'maker_id', 'maker_stamptime', 'checker_id', 'checker_stamptime'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cate_id' => 'Cate ID',
            'category_description' => 'Category Description',
            'category_code' => 'Category Code',
            'maker_id' => 'Maker ID',
            'maker_stamptime' => 'Maker Stamptime',
            'checker_id' => 'Checker ID',
            'checker_stamptime' => 'Checker Stamptime',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblCustomers()
    {
        return $this->hasMany(TblCustomer::className(), ['customer_category' => 'cate_id']);
    }
}
