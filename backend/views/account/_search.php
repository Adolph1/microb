<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AccountSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-index" style="font-size: 120%;">
<div class="col-lg-12">
  <div class="panel panel-primary">
            <div class="panel-heading">
                <?= Yii::t('app', 'Search Account'); ?>
            </div>
            <div class="panel-body">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'cust_ac_no') ?>

    <?= $form->field($model, 'ac_desc') ?>

    <?= $form->field($model, 'cust_no') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
</div>
