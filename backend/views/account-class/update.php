<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AccountClass */

$this->title = 'Update Account Class: ' . ' ' . $model->acc_class;
$this->params['breadcrumbs'][] = ['label' => 'Account Classes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->acc_class, 'url' => ['view', 'id' => $model->acc_class]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="account-class-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
