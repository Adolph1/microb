<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_customer_business".
 *
 * @property integer $id
 * @property integer $cust_no
 * @property string $business_name
 * @property string $incorporate_date
 * @property string $address
 * @property string $email
 * @property string $business_category
 * @property string $identification
 * @property string $identification_number
 */
class CustomerBusiness extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_customer_business';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cust_no', 'business_name', 'incorporate_date', 'address', 'email', 'business_category', 'identification', 'identification_number'], 'required'],
            [['cust_no'], 'integer'],
            [['business_name', 'incorporate_date', 'address', 'email', 'business_category', 'identification', 'identification_number'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cust_no' => 'Cust No',
            'business_name' => 'Business Name',
            'incorporate_date' => 'Incorporate Date',
            'address' => 'Address',
            'email' => 'Email',
            'business_category' => 'Business Category',
            'identification' => 'Identification',
            'identification_number' => 'Identification Number',
        ];
    }
}
