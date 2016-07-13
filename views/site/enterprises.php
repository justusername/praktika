<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Enterprises */
/* @var $form ActiveForm */
?>
<div class="site-enterprises">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'TITLE') ?>
        <?= $form->field($model, 'REGION') ?>
        <?= $form->field($model, 'CITY') ?>
        <?= $form->field($model, 'ADDRESS') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-enterprises -->
