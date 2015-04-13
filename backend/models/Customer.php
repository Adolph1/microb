<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "tbl_customer".
 *
 * @property integer $customer_no
 * @property integer $customer_type
 * @property string $customer_name
 * @property string $customer_address
 * @property integer $customer_identification
 * @property string $identification_number
 * @property string $identification_exp_date
 * @property string $mobile_no_1
 * @property string $short_name
 * @property integer $customer_category
 * @property string $record_stat
 * @property string $auth_stat
 * @property string $maker_id
 * @property string $maker_dt_stamp
 * @property string $checker_id
 * @property string $checker_dt_stamp
 * @property string $mobile_no_2
 * @property string $email
 * @property integer $branch_code
 * @property integer $mode_no
 *
 * @property TblCustomerType $customerType
 * @property TblCustomerCategory $customerCategory
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $customer_photo;
    public static function tableName()
    {
        return 'tbl_customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['photo'],'file','extensions' => 'gif, jpg','skipOnEmpty' => false],
            [['customer_no', 'customer_type', 'customer_name', 'customer_address', 'customer_identification', 'identification_number', 'identification_exp_date', 'mobile_no_1', 'short_name', 'customer_category','branch_code'], 'required'],
            [['customer_no', 'customer_type', 'customer_identification', 'customer_category','mod_no'], 'integer'],
            [['customer_name','customer_address', 'identification_number', 'identification_exp_date', 'mobile_no_1', 'short_name', 'record_stat', 'auth_stat', 'maker_id', 'maker_dt_stamp', 'checker_id', 'checker_dt_stamp', 'mobile_no_2', 'email'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'customer_no' => 'Customer No',
            'customer_type' => 'Customer Type',
            'customer_name' => 'Customer Name',
            'customer_address' => 'Customer Address',
            'customer_identification' => 'Customer Identification',
            'identification_number' => 'Identification Number',
            'identification_exp_date' => 'Identification Exp Date',
            'mobile_no_1' => 'Mobile No 1',
            'short_name' => 'Short Name',
            'customer_category' => 'Customer Category',
            'record_stat' => 'Record Stat',
            'auth_stat' => 'Auth Stat',
            'maker_id' => 'Maker ID',
            'maker_dt_stamp' => 'Maker Dt Stamp',
            'checker_id' => 'Checker ID',
            'checker_dt_stamp' => 'Checker Dt Stamp',
            'mobile_no_2' => 'Mobile No 2',
            'email' => 'Email',
            'branch_code' => 'Branch Code',
            'mod_no' => 'Mode No',
            'photo'=>'Photo',
            
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerType()
    {
        return $this->hasOne(CustomerType::className(), ['id' => 'customer_type']);
    }
      public function getBranch()
    {
        return $this->hasOne(Branch::className(), ['branch_id' => 'branch_code']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerCategory()
    {
        return $this->hasOne(CustomerCategory::className(), ['cate_id' => 'customer_category']);
    }

     public function getCustomerIdentification()
    {
        return $this->hasOne(CustomerIdentification::className(), ['id' => 'customer_identification']);
    }
}
