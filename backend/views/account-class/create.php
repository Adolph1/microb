<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\AccountClass */

$this->title = 'Create Account Class';
$this->params['breadcrumbs'][] = ['label' => 'Account Classes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="account-class-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
