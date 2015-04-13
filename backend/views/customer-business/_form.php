<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CustomerBusiness */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-business-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cust_no')->textInput() ?>

    <?= $form->field($model, 'business_name')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'incorporate_date')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'business_category')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'identification')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'identification_number')->textInput(['maxlength' => 200]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
