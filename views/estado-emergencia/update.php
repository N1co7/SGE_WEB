<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EstadoEmergencia */

$this->title = 'Update Estado Emergencia: ' . $model->id_estado_emergencia;
$this->params['breadcrumbs'][] = ['label' => 'Estado Emergencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_estado_emergencia, 'url' => ['view', 'id' => $model->id_estado_emergencia]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="estado-emergencia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
