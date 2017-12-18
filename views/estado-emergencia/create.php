<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EstadoEmergencia */

$this->title = 'Agregar Estado Emergencia';
$this->params['breadcrumbs'][] = ['label' => 'Estado Emergencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estado-emergencia-create">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
