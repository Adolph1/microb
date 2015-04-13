<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CustomerIdentificationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customer Identifications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-identification-index">
<div class="col-lg-8">
  <div class="panel panel-primary">
            <div class="panel-heading">
                <?= Yii::t('app', 'Search Identification'); ?>
            </div>
            <div class="panel-body">
<?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($searchModel, 'identification_name')->textInput(['style'=>'width:400px']) ?>

    <?= $form->field($searchModel, 'indicator')->textInput(['style'=>'width:150px']) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-warning']) ?>
         
         <?php
Modal::begin([
    'header'=>'<h4>Branches</h4>',
    'id'=>'modal',
    'size'=>'modal-lg',
    ]);
    echo "<div id='modalContent'>test</div>";
    Modal::end();
?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
    </div>
    </div>
    <?= Html::a('Add New', ['create'],['class' => 'btn btn-success']) ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'identification_name',
            'indicator',

            [
            'class' => 'yii\grid\ActionColumn',
            'header'=>'Actions',
            ],
        ],
    ]); ?>

</div>
