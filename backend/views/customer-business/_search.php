<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CustomerBusinessSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-business-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'cust_no') ?>

    <?= $form->field($model, 'business_name') ?>

    <?= $form->field($model, 'incorporate_date') ?>

    <?= $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'business_category') ?>

    <?php // echo $form->field($model, 'identification') ?>

    <?php // echo $form->field($model, 'identification_number') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
