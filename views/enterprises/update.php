<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Enterprises */

$this->title = 'Update Enterprises: ' . $model->TITLE;
$this->params['breadcrumbs'][] = ['label' => 'Enterprises', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->TITLE, 'url' => ['view', 'id' => $model->CODE]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="enterprises-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
