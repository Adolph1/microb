<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CustomerIdentification */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-identification-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'identification_name')->textInput(['style'=>'width:500px']) ?>

    <?= $form->field($model, 'indicator')->textInput(['style'=>'width:150px']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
