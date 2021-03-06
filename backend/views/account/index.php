<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AccountSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Accounts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="account-index">
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'branch_code',
            'cust_ac_no',
            'ac_desc',
            'cust_no',
            'account_class',
            // 'ac_stat_no_dr',
            // 'ac_stat_no_cr',
            // 'ac_stat_no_block',
            // 'ac_stat_stop_pay',
            // 'ac_stat_dormant',
            // 'acc_open_date',
            // 'ac_opening_bal',
            // 'dormancy_date',
            // 'dormancy_days',
            // 'acc_status',
            // 'maker_id',
            // 'maker_stamptime',
            // 'checker_id',
            // 'check_stamptime',
            // 'mod_no',
            // 'auth_stat',

            ['class' => 'yii\grid\ActionColumn','header'=>'Actions'],
        ],
    ]); ?>

</div>
