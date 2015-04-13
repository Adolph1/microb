<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\bootstrap\Modal;
use backend\models\CustomerType;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\CustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customers';
$this->params['breadcrumbs'][] = $this->title;
?>

 
<div class="customer-index" style="font-size: 120%;">
<div class="col-lg-8">
  <div class="panel panel-primary">
            <div class="panel-heading">
                <?= Yii::t('app', 'Search Customer'); ?>
            </div>
            <div class="panel-body">

<?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <?php
 $custtype=CustomerType::find()->all();

$listData=ArrayHelper::map($custtype,'id','name');
$form->field($searchModel, 'customer_type')->dropDownList(
                               $listData,
                                ['prompt'=>'--Select--']);

?>
    <?= $form->field($searchModel, 'customer_no')->textInput(['style'=>'width:400px']) ?>

    <?= $form->field($searchModel, 'customer_name')->textInput(['style'=>'width:150px']) ?>
 <div style="position: absolute;width: 200px;height: 100px;top: 120px;left: 30%;">
     
     <?= $form->field($searchModel, 'customer_type')->dropDownList($listData,
                                ['prompt'=>'--Select--'],['style'=>'width:100px']) ?>
 </div>
    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-warning']) ?>

    </div>

    <?php ActiveForm::end(); ?>
    </div>
    </div>
    </div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('New Customer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'customer_no',
             'customer_name',
            [
                'attribute' => 'customerType',
                'value' => 'customerType.name'
            ],
           
            //'customer_address',
        
            [
                'attribute' => 'customerIdentification',
                'value' => 'customerIdentification.identification_name'
              ],
             'identification_number',
             //'identification_exp_date',
            'mobile_no_1',
            // 'short_name',
              [
                'attribute' => 'customerCategory',
                'value' => 'customerCategory.category_description'
              ],
            // 'record_stat',
            // 'auth_stat',
            // 'maker_id',
            // 'maker_dt_stamp',
            // 'checker_id',
            // 'checker_dt_stamp',
            // 'mobile_no_2',
            // 'email:email',
            // 'branch_code',
            // 'mod_no',

            ['class' => 'yii\grid\ActionColumn','header'=>'Actions'],
        ],
    ]); ?>

</div>
