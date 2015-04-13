<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\GeneralLedgerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'General Ledgers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="general-ledger-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('New GL', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'gl_code',
            'gl_description',
            'parent_gl',
            'leaf',
            'type',
            'customer',
            'category',
             'maker_id',
            'maker_stamptime',
            'checker_id',
            'checker_stamptime',
            'mod_no',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
