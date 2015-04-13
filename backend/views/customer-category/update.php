<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CustomerCategory */

$this->title = 'Update Customer Category: ' . ' ' . $model->cate_id;
$this->params['breadcrumbs'][] = ['label' => 'Customer Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cate_id, 'url' => ['view', 'id' => $model->cate_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="customer-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
