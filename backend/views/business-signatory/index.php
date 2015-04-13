<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BusinessSignatorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Business Signatories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="business-signatory-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Business Signatory', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'business_no',
            'signatory_id',
            'branch_code',
            'signatory_name',
            // 'signatory_title',
            // 'signatory_photo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
