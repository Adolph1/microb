<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CustomerPersonalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customer Personals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-personal-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Customer Personal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cust_no',
            'customer_prefix',
            'first_name',
            'middle_name',
            // 'last_name',
            // 'date_of_birth',
            // 'sex',
            // 'email:email',
            // 'address',
            // 'phone_number',
            // 'identification',
            // 'identification_number',
            // 'customer_photo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
