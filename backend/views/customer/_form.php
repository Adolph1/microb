<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\CustomerType;
use backend\models\CustomerIdentification;
use backend\models\CustomerCategory;
use backend\models\Branch;
use yii\widgets\FileInput;

/* @var $this yii\web\View */
/* @var $model backend\models\Customer */
/* @var $form yii\widgets\ActiveForm */
?>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
 <?php
  $custtype=CustomerType::find()->all();

$listData=ArrayHelper::map($custtype,'id','name');
$form->field($model, 'customer_type')->dropDownList(
                                $listData,
                                ['prompt'=>'Select...']);

?>
 <?php
  $cusident=CustomerIdentification::find()->all();

$listData1=ArrayHelper::map($cusident,'id','identification_name');
$form->field($model, 'customer_identification')->dropDownList(
                                $listData1,
                                ['prompt'=>'Select...']);

?>

 <?php
  $category=CustomerCategory::find()->all();

$listcategory=ArrayHelper::map($category,'cate_id','category_description');
$form->field($model, 'customer_category')->dropDownList(
                                $listcategory,
                                ['prompt'=>'Select...']);

$branch=Branch::find()->all();

$listbranch=ArrayHelper::map($branch,'branch_id','branch_name');
$form->field($model, 'branch_code')->dropDownList(
                                $listbranch,
                                ['prompt'=>'Select...']);

?>


    
<div class="col-lg-11" style="font-size: 120%;">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?= Yii::t('app', 'Customer Form'); ?>
            </div>
            <div class="panel-body">
  
     <?= $form->field($model, 'customer_no')->textInput(['style'=>'width:100px']) ?>

    <div style="position: absolute;width: 200px;height: 100px;top: 54px;left: 50%;"><?= $form->field($model, 'customer_type')->dropDownList($listData,
                                ['prompt'=>'--Select--'],['style'=>'width:100px']) ?></div>
    
    

    <?= $form->field($model, 'customer_name')->textInput(['style'=>'width:700px']) ?>

    <?= $form->field($model, 'customer_address')->textArea(['style'=>'width:700px;height:100px']) ?>
    <div style="width: 200px;">
    <?= $form->field($model, 'customer_identification')->dropDownList($listData1,
                                ['prompt'=>'--Select--'],['style'=>'width:100px']) ?></div>

    <div style="position: absolute;width: 200px;height: 100px;top: 332px;left: 30%;"><?= $form->field($model, 'identification_number')->textInput(['style'=>'width:200px']) ?></div>

    <div style="position: absolute;width: 200px;height: 100px;top: 332px;left: 55%;"><?= $form->field($model, 'identification_exp_date')->textInput(['style'=>'width:200px']) ?></div>

   

    <div style="width: 300px;height:100px"><?= $form->field($model, 'short_name')->textInput(['style'=>'width:300px']) ?></div>

    <?= $form->field($model, 'mobile_no_1')->textInput(['style'=>'width:200px']) ?>
    <div style="position: absolute;width: 200px;height: 100px;top: 505px;left: 55%;">
    <?= $form->field($model, 'customer_category')->dropDownList($listcategory,
                                ['prompt'=>'--Select--'],['style'=>'width:100px']) ?></div>


    <div style="position: absolute;width: 200px;height: 100px;top: 505px;left: 30%;"><?= $form->field($model, 'mobile_no_2')->textInput(['style'=>'width:200px']) ?></div>

    <div style="position: absolute;width: 200px;height: 100px;top: 54px;left: 20%;">
    <?= $form->field($model, 'branch_code')->dropDownList($listbranch,
                                ['prompt'=>'--Select--'],['style'=>'width:100px']) ?>
    </div>
    <?= $form->field($model, 'email')->textInput(['style'=>'width:700px']) ?>
    <?= $form->field($model, 'customer_photo')->fileInput() ?>
               
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>


</div>
</div>
</div>



<?php ActiveForm::end(); ?>
