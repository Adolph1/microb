<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="col-lg-12" style="font-size: 120%;">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?= Yii::t('app', 'Loan Product Form'); ?>
            </div>
        <div class="panel-body">

                <?php $form = ActiveForm::begin(); ?>
        <div class="form-group">  
            <div class="row"> 
              <div class="col-md-4">
            <?= $form->field($model, 'product_id')->textInput(['class' => 'form-control']) ?>
             </div>
             <div class="col-md-4">
            <?= $form->field($model, 'product_type')->textInput(['class' => 'form-control']) ?>
            </div>
            <div class="col-md-4">
            <?= $form->field($model, 'product_module')->textInput(['class' => 'form-control']) ?>
            </div>
            <div class="col-md-4">
            <?= $form->field($model, 'product_descption')->textArea(['class' => 'form-control']) ?>
            </div>
            </div>
        </div>
    <div class="form-group">
        <div class="row">
        <div class="col-md-2">
        <?= Html::submitButton($model->isNewRecord ? 'Save Contract' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
        <div class="col-md-2">
        <?php
//create account of the customer
        Modal::begin([
        'header' => '<h2>Loan Initial Form</h2>',
        'toggleButton' => ['label' => 'Accounting Roles','class' => 'btn btn-success'],
        'size' => Modal::SIZE_LARGE,
        'options' => ['class'=>'slide'],
        ]);
        ?>
         <?php

        Modal::end();
        ?>
    </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>
</div>
</div>
