<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CustomerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'customer_no') ?>

    <?= $form->field($model, 'customer_type') ?>

    <?= $form->field($model, 'customer_name') ?>

    <?= $form->field($model, 'customer_address') ?>

    <?= $form->field($model, 'customer_identification') ?>

    <?php // echo $form->field($model, 'identification_number') ?>

    <?php // echo $form->field($model, 'identification_exp_date') ?>

    <?php // echo $form->field($model, 'mobile_no_1') ?>

    <?php // echo $form->field($model, 'short_name') ?>

    <?php // echo $form->field($model, 'customer_category') ?>

    <?php // echo $form->field($model, 'record_stat') ?>

    <?php // echo $form->field($model, 'auth_stat') ?>

    <?php // echo $form->field($model, 'maker_id') ?>

    <?php // echo $form->field($model, 'maker_dt_stamp') ?>

    <?php // echo $form->field($model, 'checker_id') ?>

    <?php // echo $form->field($model, 'checker_dt_stamp') ?>

    <?php // echo $form->field($model, 'mobile_no_2') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'branch_code') ?>

    <?php // echo $form->field($model, 'mod_no') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
