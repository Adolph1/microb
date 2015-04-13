<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_customer_personal".
 *
 * @property integer $id
 * @property integer $cust_no
 * @property integer $customer_prefix
 * @property integer $first_name
 * @property integer $middle_name
 * @property string $last_name
 * @property string $date_of_birth
 * @property string $sex
 * @property string $email
 * @property string $address
 * @property string $phone_number
 * @property string $identification
 * @property string $identification_number
 * @property resource $customer_photo
 */
class CustomerPersonal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_customer_personal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cust_no', 'customer_prefix', 'first_name', 'middle_name', 'last_name', 'date_of_birth', 'sex', 'email', 'address', 'phone_number', 'identification', 'identification_number', 'customer_photo'], 'required'],
            [['cust_no', 'customer_prefix', 'first_name', 'middle_name'], 'integer'],
            [['customer_photo'], 'string'],
            [['last_name', 'date_of_birth', 'email', 'address', 'phone_number', 'identification', 'identification_number'], 'string', 'max' => 200],
            [['sex'], 'string', 'max' => 20]
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
            'customer_prefix' => 'Customer Prefix',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
            'date_of_birth' => 'Date Of Birth',
            'sex' => 'Sex',
            'email' => 'Email',
            'address' => 'Address',
            'phone_number' => 'Phone Number',
            'identification' => 'Identification',
            'identification_number' => 'Identification Number',
            'customer_photo' => 'Customer Photo',
        ];
    }
}
