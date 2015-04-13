<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_business_signatory".
 *
 * @property integer $id
 * @property integer $business_no
 * @property integer $signatory_id
 * @property string $branch_code
 * @property string $signatory_name
 * @property string $signatory_title
 * @property resource $signatory_photo
 */
class BusinessSignatory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_business_signatory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['business_no', 'signatory_id', 'branch_code', 'signatory_name', 'signatory_title', 'signatory_photo'], 'required'],
            [['business_no', 'signatory_id'], 'integer'],
            [['signatory_photo'], 'string'],
            [['branch_code'], 'string', 'max' => 20],
            [['signatory_name', 'signatory_title'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'business_no' => 'Business No',
            'signatory_id' => 'Signatory ID',
            'branch_code' => 'Branch Code',
            'signatory_name' => 'Signatory Name',
            'signatory_title' => 'Signatory Title',
            'signatory_photo' => 'Signatory Photo',
        ];
    }
}
