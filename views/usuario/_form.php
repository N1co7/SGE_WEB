<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Perfil;
use yii\helpers\ArrayHelper;
use yii\jui\AutoComplete;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Usuario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_usuario')->textInput(['style' => 'width:30%','maxlength' => true]) ?>

    <?= $form->field($model, 'login_usuario')->textInput(['style' => 'width:30%','maxlength' => true]) ?>

    <?= $form->field($model, 'contrasena_usuario')->textInput(['style' => 'width:30%','maxlength' => true]) ?>

    <!--<?= $form->field($model, 'perfil')->textInput() ?>-->
    <div class="row">
    <div class="col-sm-4">
    <?=
            $form->field($model, 'perfil')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(Perfil::find()->all(),'id_perfil','nombre_perfil'),
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccione un perfil ...'],
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
