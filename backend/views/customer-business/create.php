<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\CustomerBusiness */

$this->title = 'Create Customer Business';
$this->params['breadcrumbs'][] = ['label' => 'Customer Businesses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-business-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
