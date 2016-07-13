<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Leaders */

$this->title = $model->NAME;
$this->params['breadcrumbs'][] = ['label' => 'Leaders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="leaders-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->LCODE], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->LCODE], [
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
            'LCODE',
            'CODE',
            'FNAME',
            'NAME',
            'PATRONYMIC',
            'EMAIL:email',
            'PHONE',
        ],
    ]) ?>

</div>
