<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ContractMasterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contract-master-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'contract_ref_no') ?>

    <?= $form->field($model, 'branch') ?>

    <?= $form->field($model, 'product') ?>

    <?= $form->field($model, 'product_type') ?>

    <?= $form->field($model, 'module') ?>

    <?php // echo $form->field($model, 'payment_method') ?>

    <?php // echo $form->field($model, 'customer_number') ?>

    <?php // echo $form->field($model, 'amount') ?>

    <?php // echo $form->field($model, 'booking_date') ?>

    <?php // echo $form->field($model, 'value_date') ?>

    <?php // echo $form->field($model, 'maturity_date') ?>

    <?php // echo $form->field($model, 'main_component') ?>

    <?php // echo $form->field($model, 'settle_account') ?>

    <?php // echo $form->field($model, 'contract_status') ?>

    <?php // echo $form->field($model, 'main_component_rate') ?>

    <?php // echo $form->field($model, 'maker_id') ?>

    <?php // echo $form->field($model, 'maker_stamptime') ?>

    <?php // echo $form->field($model, 'checker_id') ?>

    <?php // echo $form->field($model, 'checker_stamptime') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
