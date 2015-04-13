<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Account */

$this->title = 'Update Account: ' . ' ' . $model->cust_ac_no;
$this->params['breadcrumbs'][] = ['label' => 'Accounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cust_ac_no, 'url' => ['view', 'id' => $model->cust_ac_no]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="account-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
