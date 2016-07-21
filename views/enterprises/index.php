<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView; // добавлена строка


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Предприятия';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="enterprises-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить предприятие', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_list',
     ]);
     ?>

</div>

