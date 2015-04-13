<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\widgets\ActiveForm;
use backend\models\Branch;
use backend\models\Product;
use yii\helpers\ArrayHelper;
use yii\web\Session;



/* @var $this yii\web\View */
/* @var $searchModel backend\models\ContractMasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->title = 'Customer Loans Contracts';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $form = ActiveForm::begin([
'options' => ['enctype' => 'multipart/form-data'],
'action' => ['contract-master/create']

]); ?>
<?php

$branch=Branch::find()->all();
$listbranch=ArrayHelper::map($branch,'branch_id','branch_name');
$product=Product::find()->all();
$listproduct=ArrayHelper::map($product,'product_id','product_descption');
$form->field($model, 'product')->dropDownList(
                                $listproduct,
                                ['prompt'=>'Select...']);

?>
<div class="contract-master-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<p style="float:left;font-size: 120%;">
<div>
<?php
//create account of the customer
Modal::begin([
    'header' => '<h2>Loan Initial Form</h2>',
    'toggleButton' => ['label' => 'New','class' => 'btn btn-success'],
   'size' => Modal::SIZE_SMALL,
   'options' => ['class'=>'slide'],
]);
?>
 <?= $model->branch=$form->field($model, 'branch')->dropDownList($listbranch,
['prompt'=>'--Select--'],['style'=>'width:100px']) ?>

 <?= $model->product=$form->field($model, 'product')->dropDownList($listproduct,
['prompt'=>'--Select--'],['style'=>'width:100px']) ?>

 <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<?php

Modal::end();
?>
</div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'contract_ref_no',
            'branch',
            'product',
            'product_type',
            'module',
            // 'payment_method',
            // 'customer_number',
            // 'amount',
            // 'booking_date',
            // 'value_date',
            // 'maturity_date',
            // 'main_component',
            // 'settle_account',
            // 'contract_status',
            // 'main_component_rate',
            // 'maker_id',
            // 'maker_stamptime',
            // 'checker_id',
            // 'checker_stamptime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
<?php ActiveForm::end(); ?>
