<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TipoEmergencia */

$this->title = "Emergencia";
$this->params['breadcrumbs'][] = ['label' => 'Tipo Emergencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-emergencia-view">

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_tipo_emergencia], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id_tipo_emergencia], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nombre',
            'clave',
        ],
    ]) ?>

</div>
