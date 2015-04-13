<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CustomerCategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_description')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'category_code')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'maker_id')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'maker_stamptime')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'checker_id')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'checker_stamptime')->textInput(['maxlength' => 200]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
