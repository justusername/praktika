<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Leaders */

$this->title = 'Изменение данных: ' . $model->NAME;
$this->params['breadcrumbs'][] = ['label' => 'Руководители практики', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NAME, 'url' => ['просмотр', 'id' => $model->LCODE]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="leaders-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
