<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CustomerBusinessSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customer Businesses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-business-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Customer Business', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cust_no',
            'business_name',
            'incorporate_date',
            'address',
            // 'email:email',
            // 'business_category',
            // 'identification',
            // 'identification_number',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
