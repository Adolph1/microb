<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\CustomerCategory */

$this->title = $model->cate_id;
$this->params['breadcrumbs'][] = ['label' => 'Customer Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-category-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->cate_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->cate_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cate_id',
            'category_description',
            'category_code',
            'maker_id',
            'maker_stamptime',
            'checker_id',
            'checker_stamptime',
        ],
    ]) ?>

</div>
