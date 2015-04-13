<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\CustomerIdentification */

$this->title = 'Customer Identification';
$this->params['breadcrumbs'][] = ['label' => 'Customer Identifications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-identification-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
