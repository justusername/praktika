<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Enterprises */

$this->title = $model->TITLE;
$this->params['breadcrumbs'][] = ['label' => 'Предприятия', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="enterprises-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'TITLE',
            'REGION',
            'CITY',
            'ADDRESS',
        ],
    ]) ?>
    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->CODE], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->CODE], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить это предприятие?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    </div>
