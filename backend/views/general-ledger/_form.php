<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\GeneralLedger */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="general-ledger-form">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?= Yii::t('app', 'Customer Form'); ?>
            </div>
            <div class="panel-body">
                <div class="row">
                    <?php $form = ActiveForm::begin(); ?>
                    <div class="col-md-6">
                                <?= $form->field($model, 'gl_code')->textInput(['maxlength' => 50]) ?>
                    </div>

                    <div class="col-md-6">
                        <?= $form->field($model, 'parent_gl')->textInput(['maxlength' => 50]) ?>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-4">
                        <?= $form->field($model, 'gl_description')->textInput(['maxlength' => 200]) ?>
                    </div>
                    </div>

    <?= $form->field($model, 'leaf')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'type')->textInput() ?>

    <?= $form->field($model, 'customer')->textInput() ?>

    <?= $form->field($model, 'category')->textInput() ?>

    <?= $form->field($model, 'maker_id')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'maker_stamptime')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'checker_id')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'checker_stamptime')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'mod_no')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
    </div>
  </div>
 </div>
</div>
