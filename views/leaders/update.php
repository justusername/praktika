<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Leaders */

$this->title = 'Update Leaders: ' . $model->NAME;
$this->params['breadcrumbs'][] = ['label' => 'Leaders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NAME, 'url' => ['view', 'id' => $model->LCODE]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="leaders-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
