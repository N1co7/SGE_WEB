<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TipoEmergencia */

$this->title = 'Agregar Tipo Emergencia';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Emergencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-emergencia-create">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
