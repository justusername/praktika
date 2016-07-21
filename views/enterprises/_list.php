<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>

<div class="news-item">
    <?= Html::encode($model->CODE) ?>
    <br>Название предприятия: <?= HtmlPurifier::process($model->TITLE) ?>
    <br>Область: <?= HtmlPurifier::process($model->REGION) ?>
    <br>Город: <?= HtmlPurifier::process($model->CITY) ?>
    <br>Адрес: <?= HtmlPurifier::process($model->ADDRESS) ?>
    <br>
    <?= Html::a('Просмотр', ['view', 'id' => $model->CODE], ['class' => 'btn btn-primary']) ?>
    <?= Html::a('Изменить', ['update', 'id' => $model->CODE], ['class' => 'btn btn-primary']) ?>
    <?= Html::a('Удалить', ['delete', 'id' => $model->CODE], [
        'class' => 'btn btn-danger',
        'data' => [
            'confirm' => 'Вы уверены, что хотите удалить это предприятие?',
            'method' => 'post',
        ],
    ]) ?>
</div>