<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BusinessSignatorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="business-signatory-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'business_no') ?>

    <?= $form->field($model, 'signatory_id') ?>

    <?= $form->field($model, 'branch_code') ?>

    <?= $form->field($model, 'signatory_name') ?>

    <?php // echo $form->field($model, 'signatory_title') ?>

    <?php // echo $form->field($model, 'signatory_photo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
