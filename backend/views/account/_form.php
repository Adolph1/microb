<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Account */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="account-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'branch_code')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'cust_ac_no')->textInput() ?>

    <?= $form->field($model, 'ac_desc')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'cust_no')->textInput() ?>

    <?= $form->field($model, 'account_class')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'ac_stat_no_dr')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'ac_stat_no_cr')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'ac_stat_no_block')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'ac_stat_stop_pay')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'ac_stat_dormant')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'acc_open_date')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'ac_opening_bal')->textInput() ?>

    <?= $form->field($model, 'dormancy_date')->textInput() ?>

    <?= $form->field($model, 'dormancy_days')->textInput() ?>

    <?= $form->field($model, 'acc_status')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'maker_id')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'maker_stamptime')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'checker_id')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'check_stamptime')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'mod_no')->textInput() ?>

    <?= $form->field($model, 'auth_stat')->textInput(['maxlength' => 20]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
