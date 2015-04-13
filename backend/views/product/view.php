<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */

$this->title ='Product Code '. $model->product_id;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">
    <p style="float:right;margin-right:15px">
        <?= Html::a('Update', ['update', 'id' => $model->product_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->product_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
<div class="col-lg-12" style="font-size: 120%;">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?= Yii::t('app', 'Product Details'); ?>
            </div>
            <div class="panel-body">
            <div class="row">
            <div class="col-md-10">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'product_id',
            'product_descption',
            'product_type',
            'product_module',
            'debit_account',
            'credit_account',
            'maker_id',
            'maker_stamptime',
            'checker_id',
            'checker_stamptime',
        ],
    ]) ?>
    </div>
    <div class="col-md-2">
    <div class="form-group">
     <?= Html::a('Accounting Roles', ['update', 'id' => $model->product_id], ['class' => 'btn btn-success']) ?>
    </div>
     <div class="form-group">
     <?= Html::a('Events', ['update', 'id' => $model->product_id], ['class' => 'btn btn-warning']) ?>
    </div>
    </div>

</div>
