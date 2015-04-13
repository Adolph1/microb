<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CustomerPersonal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-personal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cust_no')->textInput() ?>

    <?= $form->field($model, 'customer_prefix')->textInput() ?>

    <?= $form->field($model, 'first_name')->textInput() ?>

    <?= $form->field($model, 'middle_name')->textInput() ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'date_of_birth')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'sex')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'phone_number')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'identification')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'identification_number')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'customer_photo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
