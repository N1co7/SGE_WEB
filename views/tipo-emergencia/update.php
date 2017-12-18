<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TipoEmergencia */

$this->title = 'Actualizar Tipo Emergencia: ';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Emergencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tipo_emergencia, 'url' => ['view', 'id' => $model->id_tipo_emergencia]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipo-emergencia-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
