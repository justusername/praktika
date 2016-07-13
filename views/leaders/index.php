<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Leaders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="leaders-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Leaders', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'LCODE',
            'CODE',
            'FNAME',
            'NAME',
            'PATRONYMIC',
            // 'EMAIL:email',
            // 'PHONE',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
