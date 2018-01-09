<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TextSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="text-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'textid') ?>

    <?= $form->field($model, 'textpath') ?>

    <?= $form->field($model, 'created') ?>

    <?= $form->field($model, 'updated') ?>

    <?= $form->field($model, 'deleted') ?>

    <?php // echo $form->field($model, 'boxnoid') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
