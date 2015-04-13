<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CustomerIdentification */

$this->title = 'Update Customer Identification: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Customer Identifications', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="customer-identification-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
