<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Enterprises */

$this->title = 'Добавить предприятие';
$this->params['breadcrumbs'][] = ['label' => 'Предприятия', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enterprises-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
