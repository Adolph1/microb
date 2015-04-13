<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\AccountClass */

$this->title = $model->acc_class;
$this->params['breadcrumbs'][] = ['label' => 'Account Classes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="account-class-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->acc_class], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->acc_class], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'acc_class',
            'description',
            'dormancy',
            'record_status',
            'maker_id',
            'maker_stamptime',
            'checker_id',
            'check_stamptime',
            'auth_status',
        ],
    ]) ?>

</div>
