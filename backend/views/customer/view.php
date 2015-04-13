<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\CustomerIdentification;
use backend\models\Account;
use backend\models\AccountClass;
use yii\bootstrap\Modal;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
use  yii\web\Session;
use kartik\checkbox\CheckboxX;
Yii::$app->session->set('branch',$model->branch_code);
Yii::$app->session->set('basenumber',$model->customer_no);
Yii::$app->session->set('cust_name',$model->customer_name);
$acc=Yii::$app->session->get('branch').Yii::$app->session->get('basenumber');
/* @var $this yii\web\View */
/* @var $model backend\models\Customer */


$this->title = $model->customer_name;
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<style type="text/css">
  ul#horizontal-list {
  min-width: 696px;
  list-style: none;
  padding-top: 20px;
  }
  ul#horizontal-list li {
    display: inline;
  }
</style>

<div class="customer-view">
<div class="col-lg-12">

<div class="row">
<div class="col-md-4"  style="font-size: 120%;">
<div class="panel panel-default">
   <div class="panel-heading">
                <b><?= Yii::t('app', 'Personal Details'); ?></b>
            </div>
            <div class="panel-body" style="background:#eee;padding:10px"> 
            <div class="form-group">
    <?php
if($model->photo!="")
{
    ?>
<?= Html::img(Yii::$app->request->baseUrl.'/Uploads/'.$model->photo, ['alt'=>'some', 'class'=>'thing','style'=>'width:180px;height:150px;border:5px solid #bbb;']);?> 

<?php
}
else
{
    ?>
<?= Html::img(Yii::$app->request->baseUrl.'/Uploads/avarta.png', ['alt'=>'some', 'class'=>'thing','style'=>'width:180px;height:150px;border:5px solid #bbb;']);?> 
</div>
<?php
}
    ?>
    <div class="form-group"  style="padding-top:10px"><b>Customer Name:</b> <?= $model->customer_name;?></div>
     <div class="form-group"><b>Short Name:</b> <?= $model->short_name;?></div>
     <div class="form-group"><b>Gender:</b> <?= $model->short_name;?></div>
    </div>
    </div>
</div>
</div>

<div class="col-md-8" style="font-size: 120%;">
        <div class="panel panel-default">
            <div class="panel-heading">
                <b><?= Yii::t('app', 'Basic Details'); ?></b>
            </div>
            <div class="panel-body" style="background:#eee;padding:10px"> 
            <div class="form-group">
            <div class="row">
            <div class="col-md-5">
            
            <div><b>Customer Number:</b> <?= $model->customer_no;?></div>
            <div><b>Branch code:</b> <?= $model->branch_code;?></div>
            <div ><b>Customer Category:</b> <?= $model->customerCategory->category_description;?></div>
           <div><b>Customer Type:</b> <?= $model->customerType->name;?></div>
            <div><b>Customer Status:</b>

           <?php
            if($model->record_stat=='O')
            {

               echo 'Active';
            }
            elseif($model->record_stat=='C')
            {
              echo 'Closed';
            }
            else
            {
              echo 'Wrong status';
            }
            ?>
            </div>
            <div ><b>Email: </b><?= $model->email;?></div>
            </div>
            
     <div class="col-md-7">
    
      <div><b>Customer Identification:</b><?= $model->customerIdentification->identification_name;?></div>
     <div ><b>Identification Number: </b>
     <?= $model->identification_number;?>
     </div>
     <div ><b>Identification Expire date:</b> <?= $model->identification_exp_date;?></div> 
   
     <div ><b>Mobile Number 1: </b><?= $model->mobile_no_1;?></div>
     <div><b>Mobile Number 2:</b> <?= $model->mobile_no_2;?></div> 
     
     <div><b>Customer Address:</b> <?= $model->customer_address;?></div>
</div>
</div>
<div class="row" style="padding-top:20px">
 <div class="col-lg-12">
<div class="row">
<div class="col-md-6"><b>Maker: </b><?= $model->maker_id;?></div>
<div class="col-md-6"><b>Maker stamp time:</b> <?= $model->maker_dt_stamp;?></div>
</div>
<div class="row">
<div class="col-md-6"><b>Checker: </b><?= $model->checker_id;?></div>
<div class="col-md-6"><b>Checker stamp time:</b> <?= $model->checker_dt_stamp;?></div>
</div>
<div><b>Auth Status:</b> <?= $model->auth_stat;?></div>
</div>
</div>
 </div>
</div>
</div>
</div>
</div>

</div>










    <p style="float:right; margin-right:15px;font-size: 120%;">
<?php
//create account of the customer
Modal::begin([
    'header' => '<h2>Account Form</h2>',
    'toggleButton' => ['label' => 'Create Account','class' => 'btn btn-warning'],
   'size' => Modal::SIZE_LARGE,
   'options' => ['class'=>'slide'],
]);
?>

<div class="account-form" style="font-size: 120%;">

    <?php 
    $form = ActiveForm::begin(
      [
        'action' => ['account/create']
      ]
      );

    ?>
    <?php
  $accountclas=AccountClass::find()->all();
  $actclass=ArrayHelper::map($accountclas,'acc_class','acc_class');
$form->field($model1, 'account_class')->dropDownList(
                                $actclass,
                                ['prompt'=>'Select...']);

?>

    <div style="width: 200px;"><?= $form->field($model1, 'branch_code')->textInput(['maxlength' => 5, 'value'=>Yii::$app->session->get('branch')]) ?></div>

   <div style="position: absolute;width: 200px;height: 100px;top: 10px;left: 35%;"><?= $form->field($model1, 'cust_ac_no')->textInput(['value'=>$acc]) ?></div>

   

     <div style="width: 200px;"><?= $form->field($model1, 'cust_no')->textInput(['value'=>Yii::$app->session->get('basenumber')]) ?></div>
    <div style="position: absolute;width: 200px;height: 100px;top: 10px;left: 70%;"><?= $form->field($model1, 'account_class')->dropDownList($actclass,
                                ['prompt'=>'--Select--'],['style'=>'width:100px']) ?></div>
      <div style="position: absolute;width: 550px;height: 100px;top: 80px;left: 35%;"><?= $form->field($model1, 'ac_desc')->textInput(['maxlength' => 200,'value'=>Yii::$app->session->get('cust_name')]) ?></div>

     <div class="col-lg-12" style="font-size: 120%;">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?= Yii::t('app', 'Account Status'); ?>
            </div>
            <div class="panel-body">
     <table class="table table-bordered" style="margin-top:40px">
     <tr>
      <td>
     <?= $form->field($model1, 'ac_stat_no_dr')->checkbox() ?>
     </td>
     <td>
     <?= $form->field($model1, 'ac_stat_no_cr')->checkbox();?>
     </td>
     <td>
    <?= $form->field($model1, 'ac_stat_no_block')->checkbox(); ?>
    </td>
    </tr>
    <tr>
     <td>
    <?= $form->field($model1, 'ac_stat_stop_pay')->checkbox(); ?>
    </td>
     <td>
    <?= $form->field($model1, 'ac_stat_dormant')->checkbox() ?>
    </td>
     <td>
    <?= $form->field($model1, 'ac_opening_bal')->textInput() ?>
    </td>
     </tr>
     </table>
     </div>
     </div>
    </div>
    <div style="width: 200px;">&nbsp;</div>
    <div class="form-group">
        <?= Html::submitButton($model1->isNewRecord ? 'Create' : 'Update', ['class' => $model1->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php

Modal::end();
?>

        </p>




    <p style="margin:15px;">
        <?= Html::a('Update', ['update', 'id' => $model->customer_no], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->customer_no], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],

        ]) ?>

    </p>


