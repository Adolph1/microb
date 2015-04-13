<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AccountClass */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="account-class-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'acc_class')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'dormancy')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'record_status')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'maker_id')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'maker_stamptime')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'checker_id')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'check_stamptime')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'auth_status')->textInput(['maxlength' => 20]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
