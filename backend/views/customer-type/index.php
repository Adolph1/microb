<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CustomerTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customer Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Customer Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'indicator',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
