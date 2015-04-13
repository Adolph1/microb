<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CustomerPersonal */

$this->title = 'Update Customer Personal: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Customer Personals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="customer-personal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
