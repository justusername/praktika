<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Leaders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="leaders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?=
    $form->field($model, 'CODE')->dropDownList([
    $ID=\app\controllers\LeadersController::findCODE() => $NAME=\app\controllers\LeadersController::findTITLE(),
            '2' => 'Var 2',
            '3' => 'Var 3',
        ],
            [
                'prompt' => 'Выберите один вариант'
            ]);
    ?>

    <?= $form->field($model, 'FNAME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NAME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PATRONYMIC')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EMAIL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PHONE')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
