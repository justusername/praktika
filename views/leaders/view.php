<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Leaders */

$this->title = $model->NAME;
$this->params['breadcrumbs'][] = ['label' => 'Руководители практики', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="leaders-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->LCODE], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->LCODE], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить эту запись?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'FNAME',
            'NAME',
            'PATRONYMIC',
            'EMAIL:email',
            'PHONE',
        ],
    ]) ?>

</div>
