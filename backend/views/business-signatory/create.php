<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\BusinessSignatory */

$this->title = 'Create Business Signatory';
$this->params['breadcrumbs'][] = ['label' => 'Business Signatories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="business-signatory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
