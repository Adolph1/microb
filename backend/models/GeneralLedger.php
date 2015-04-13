<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_general_ledger".
 *
 * @property string $gl_code
 * @property string $gl_description
 * @property string $parent_gl
 * @property string $leaf
 * @property integer $type
 * @property integer $customer
 * @property integer $category
 * @property string $maker_id
 * @property string $maker_stamptime
 * @property string $checker_id
 * @property string $checker_stamptime
 * @property integer $mod_no
 */
class GeneralLedger extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_general_ledger';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gl_code', 'gl_description', 'parent_gl', 'leaf', 'type', 'customer', 'category', 'maker_id', 'maker_stamptime', 'checker_id', 'checker_stamptime', 'mod_no'], 'required'],
            [['type', 'customer', 'category', 'mod_no'], 'integer'],
            [['gl_code', 'parent_gl'], 'string', 'max' => 50],
            [['gl_description', 'maker_id', 'maker_stamptime', 'checker_id', 'checker_stamptime'], 'string', 'max' => 200],
            [['leaf'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gl_code' => 'Gl Code',
            'gl_description' => 'Gl Description',
            'parent_gl' => 'Parent Gl',
            'leaf' => 'Leaf',
            'type' => 'Type',
            'customer' => 'Customer',
            'category' => 'Category',
            'maker_id' => 'Maker ID',
            'maker_stamptime' => 'Maker Stamptime',
            'checker_id' => 'Checker ID',
            'checker_stamptime' => 'Checker Stamptime',
            'mod_no' => 'Mod No',
        ];
    }
}
