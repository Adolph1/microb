<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_customer_identification".
 *
 * @property integer $id
 * @property string $identification_name
 * @property string $indicator
 */
class CustomerIdentification extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_customer_identification';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['identification_name', 'indicator'], 'required'],
            [['identification_name'], 'string', 'max' => 200],
            [['indicator'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'identification_name' => 'Identification Name',
            'indicator' => 'Indicator',
        ];
    }
}
