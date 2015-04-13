<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CustomerBusiness */

$this->title = 'Update Customer Business: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Customer Businesses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="customer-business-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
