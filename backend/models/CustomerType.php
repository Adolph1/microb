<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_customer_type}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $indicator
 */
class CustomerType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tbl_customer_type}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'indicator'], 'required'],
            [['name'], 'string', 'max' => 200],
            [['indicator'], 'string', 'max' => 1]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'indicator' => 'Indicator',
        ];
    }
}
