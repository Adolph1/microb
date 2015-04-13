<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Branch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="col-lg-11" style="font-size: 120%;">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?= Yii::t('app', 'Branch Form'); ?>
            </div>
            <div class="panel-body">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'branch_id')->textInput(['style' => 'width:200px'])?>

    <?= $form->field($model, 'branch_name')->textInput(['style' => 'width:400px']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
    </div>

</div>
