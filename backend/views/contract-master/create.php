<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ContractMaster */

$this->title = 'Customer Contract Form';
$this->params['breadcrumbs'][] = ['label' => 'Customer Contracts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contract-master-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
