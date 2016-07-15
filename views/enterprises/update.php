<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Enterprises */

$this->title = 'Изменение данных: ' . $model->TITLE;
$this->params['breadcrumbs'][] = ['label' => 'Предприятия', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->TITLE, 'url' => ['view', 'id' => $model->CODE]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="enterprises-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
