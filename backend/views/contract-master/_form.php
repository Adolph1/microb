<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use  yii\web\Session;
//$refno=Yii::$app->session->get('branchcode').Yii::$app->session->get('product_code');

/* @var $this yii\web\View */
/* @var $model backend\models\ContractMaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contract-master-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'contract_ref_no')->textInput(['maxlength' => 200,'value'=>$model->branch.$model->product]) ?>

    <?= $form->field($model, 'branch')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'product')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'product_type')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'module')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'payment_method')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'customer_number')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'amount')->textInput() ?>

    <?= $form->field($model, 'booking_date')->textInput() ?>

    <?= $form->field($model, 'value_date')->textInput() ?>

    <?= $form->field($model, 'maturity_date')->textInput() ?>

    <?= $form->field($model, 'main_component')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'settle_account')->textInput() ?>

    <?= $form->field($model, 'contract_status')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'main_component_rate')->textInput() ?>

    <?= $form->field($model, 'maker_id')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'maker_stamptime')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'checker_id')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'checker_stamptime')->textInput(['maxlength' => 200]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
