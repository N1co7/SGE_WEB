<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\jui\AutoComplete;
use kartik\select2\Select2;  
use app\models\TipoCarro;
use app\models\EstadoCarro;

/* @var $this yii\web\View */
/* @var $model app\models\Carro */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carro-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'codigo')->textInput(['style' => 'width:30%','maxlength' => true]) ?>

    <?= $form->field($model, 'patente')->textInput(['style' => 'width:30%','maxlength' => true]) ?>

    <!--<?= $form->field($model, 'estado')->textInput() ?> -->
    <div class="row">
    <div class="col-sm-4">
    <?=
            $form->field($model, 'estado')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(EstadoCarro::find()->all(),'id_estado_carro','nombre'),
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccione un estado de carro ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);

    ?>
    </div>
    </div>

    <!--<?= $form->field($model, 'tipo_carro')->textInput() ?>-->
    <div class="row">
    <div class="col-sm-4">
    <?=
            $form->field($model, 'tipo_carro')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(TipoCarro::find()->all(),'id_tipo_carro','nombre'),
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccione un tipo de carro ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);

    ?>
    </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Agregar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
