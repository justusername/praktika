<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Leaders */

$this->title = 'Create Leaders';
$this->params['breadcrumbs'][] = ['label' => 'Leaders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="leaders-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
