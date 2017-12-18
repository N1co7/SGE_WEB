<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\JsExpression;

/* @var $this yii\web\View */
/* @var $model app\models\Grifo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grifo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'direccion')->textInput(['style' => 'width:40%','maxlength' => true]) ?>
    
    <?php
        if($model->isNewRecord){
            echo $form->field($model, 'nro_grifo')->widget('\pigolab\locationpicker\CoordinatesPicker' , [
            'key' => 'AIzaSyCfsWKuQ-7swJlM76vBCX2TdONy5ztpSw0' ,   // optional , Your can also put your google map api key
            'valueTemplate' => '{latitude},{longitude}' , // Optional , this is default result format
            'options' => [

                'style' => 'width: 80%; height: 440px',
                 // map canvas width and height
            ] ,
            'enableSearchBox' => false , // Optional , default is true
            'searchBoxOptions' => [ // searchBox html attributes
                'style' => 'width: 250px;', // Optional , default width and height defined in css coordinates-picker.css
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
                    	
                    	'locationNameInput' => new JsExpression("$('#grifo-direccion')"),
                        'latitudeInput'     => new JsExpression("$('#us2-lat')"),
                        'longitudeInput'    => new JsExpression("$('#us2-lon')"),
                        

                    ]
            ]
        ]);
        }

    ?>

    <?= $form->field($model, 'latitud')->textInput(['style' => 'width:30%','id'=>'us2-lat']) ?>

    <?= $form->field($model, 'longitud')->textInput(['style' => 'width:30%','id'=>'us2-lon']) ?>

   <!-- <?= $form->field($model, 'nro_grifo')->textInput() ?>-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Agregar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
