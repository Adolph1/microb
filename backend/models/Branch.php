<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_branch".
 *
 * @property string $branch_id
 * @property string $branch_name
 * @property string $opened_date
 * @property string $maker_id
 * @property string $maker_stamptime
 */
class Branch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_branch';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['branch_id', 'branch_name', 'opened_date', 'maker_id', 'maker_stamptime'], 'required'],
            [['opened_date'], 'safe'],
            [['branch_id'], 'string', 'max' => 20],
            [['branch_name', 'maker_id', 'maker_stamptime'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'branch_id' => 'Branch Code',
            'branch_name' => 'Branch Name',
            'opened_date' => 'Opened Date',
            'maker_id' => 'Maker ID',
            'maker_stamptime' => 'Maker Stamptime',
        ];
    }
}
