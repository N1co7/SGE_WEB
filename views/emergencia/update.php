<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Emergencia */

$this->title = 'Actualizar Emergencia ';
$this->params['breadcrumbs'][] = ['label' => 'Emergencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_emergencia, 'url' => ['view', 'id' => $model->id_emergencia]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="emergencia-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
