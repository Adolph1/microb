<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BusinessSignatory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="business-signatory-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'business_no')->textInput() ?>

    <?= $form->field($model, 'signatory_id')->textInput() ?>

    <?= $form->field($model, 'branch_code')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'signatory_name')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'signatory_title')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'signatory_photo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
