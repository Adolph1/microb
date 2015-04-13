<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\CustomerPersonal */

$this->title = 'Create Customer Personal';
$this->params['breadcrumbs'][] = ['label' => 'Customer Personals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-personal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
