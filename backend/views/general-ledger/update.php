<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\GeneralLedger */

$this->title = 'Update General Ledger: ' . ' ' . $model->gl_code;
$this->params['breadcrumbs'][] = ['label' => 'General Ledgers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->gl_code, 'url' => ['view', 'id' => $model->gl_code]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="general-ledger-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
