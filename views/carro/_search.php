<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CarroSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carro-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_carro') ?>

    <?= $form->field($model, 'codigo') ?>

    <?= $form->field($model, 'patente') ?>

    <?= $form->field($model, 'estado') ?>

    <?= $form->field($model, 'tipo_carro') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
