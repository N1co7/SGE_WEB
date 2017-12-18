<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\JsExpression;
use app\models\tipoEmergencia; 
use app\models\Voluntario;
use yii\helpers\ArrayHelper;
use yii\jui\AutoComplete;
use kartik\select2\Select2;  

/* @var $this yii\web\View */
/* @var $model app\models\Emergencia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="emergencia-form"> 

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'descripcion')->textarea(['style' => 'width:40%','rows' => 3,'id'=>'descrip']) ?>

    <?= $form->field($model, 'direccion')->textInput(['style' => 'width:40%','maxlength' => true,'id'=>'direc']) ?>

    <?php
        echo $form->field($model, 'nro_emergencia')->widget('\pigolab\locationpicker\CoordinatesPicker' , [
            'key' => 'AIzaSyCfsWKuQ-7swJlM76vBCX2TdONy5ztpSw0' ,   // optional , Your can also put your google map api key
            'valueTemplate' => '{latitude},{longitude}' , // Optional , this is default result format
            'options' => [

                'style' => 'width: 70%; height: 300px',
                 // map canvas width and height
            ] ,
            'enableSearchBox' => false , // Optional , default is true
            'searchBoxOptions' => [ // searchBox html attributes
                'style' => 'width: 300px;', // Optional , default width and height defined in css coordinates-picker.css
            ],
            'searchBoxPosition' => new JsExpression('google.maps.ControlPosition.TOP_LEFT'), // optional , default is TOP_LEFT
            'mapOptions' => [
                // google map options
                // visit https://developers.google.com/maps/documentation/javascript/controls for other options
                'mapTypeControl' => true, // Enable Map Type Control
                'mapTypeControlOptions' => [
                      'style'    => new JsExpression('google.maps.MapTypeControlStyle.HORIZONTAL_BAR'),
                      'position' => new JsExpression('google.maps.ControlPosition.TOP_LEFT'),


                ],
                'streetViewControl' => false, // Enable Street View Control

            ],
            'clientOptions' => [
                // jquery-location-picker options

                'location' => [
                        'latitude'  => -36.606643, 
                        'longitude' => -72.103415,
                    ],
                    //'draggable' => true,
                    //'markerVisible' => false, 
                    'radius'    => 1,
                    'zoom' => 17,
                    'enableAutocomplete' => true,
                    'inputBinding' => [
                    
                        'locationNameInput' => new JsExpression("$('#direc')"),
                        'latitudeInput'     => new JsExpression("$('#us2-lat')"),
                        'longitudeInput'    => new JsExpression("$('#us2-lon')"),
                        

                    ]
            ]
        ]);

    ?>

    <!--<?= $form->field($model, 'tipo_emergencia')->textInput() ?>-->

    <div class="row">
    <div class="col-sm-4">
    <?= 
        
            $form->field($model, 'tipo_emergencia')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(\app\models\tipoEmergencia::find()->asArray()->all(),
                    'id_tipo_emergencia',
                    function($model, $defaultValue) {
                        return $model['nombre'].' --> '.$model['clave'];
                    }
                ),
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccione un tipo de emergencia ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    ?>
    </div>
    </div>

    <!--<?= $form->field($model, 'voluntario')->textInput() ?>-->

    <div class="row">
    <div class="col-sm-4">
    <?=
            $form->field($model, 'voluntario')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(Voluntario::find()->all(),'id_voluntario','nombre'),
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccione un voluntario a cargo ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);

    ?>
    </div>
    </div>

     <?= $form->field($model, 'latitud')->textInput(['style' => 'width:30%','id'=>'us2-lat']) ?>

    <?= $form->field($model, 'longitud')->textInput(['style' => 'width:30%','id'=>'us2-lon']) ?>

    <!--<?= $form->field($model, 'nro_emergencia')->textInput() ?>-->

    <!--<?= $form->field($model, 'estado')->textInput() ?>-->

    <div class="row">
    <div class="col-sm-4">
    <?= 
        
            $form->field($model, 'estado')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(\app\models\estadoEmergencia::find()->asArray()->all(),
                    'id_estado_emergencia',
                    function($model, $defaultValue) {
                        return $model['nombre'];
                    }
                ),
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccione un estado de emergencia ...'],
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


