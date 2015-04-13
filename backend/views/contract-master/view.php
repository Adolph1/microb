<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ContractMaster */

$this->title = $model->contract_ref_no;
$this->params['breadcrumbs'][] = ['label' => 'Contract Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contract-master-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->contract_ref_no], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->contract_ref_no], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'contract_ref_no',
            'branch',
            'product',
            'product_type',
            'module',
            'payment_method',
            'customer_number',
            'amount',
            'booking_date',
            'value_date',
            'maturity_date',
            'main_component',
            'settle_account',
            'contract_status',
            'main_component_rate',
            'maker_id',
            'maker_stamptime',
            'checker_id',
            'checker_stamptime',
        ],
    ]) ?>

</div>
