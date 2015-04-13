<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\CustomerPersonal */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Customer Personals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-personal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'cust_no',
            'customer_prefix',
            'first_name',
            'middle_name',
            'last_name',
            'date_of_birth',
            'sex',
            'email:email',
            'address',
            'phone_number',
            'identification',
            'identification_number',
            'customer_photo',
        ],
    ]) ?>

</div>
