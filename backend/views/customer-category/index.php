<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CustomerCategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customer Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Customer Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cate_id',
            'category_description',
            'category_code',
            'maker_id',
            'maker_stamptime',
            // 'checker_id',
            // 'checker_stamptime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
