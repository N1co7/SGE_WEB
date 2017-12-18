<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EstadoCarro */

$this->title = $model->id_estado_carro;
$this->params['breadcrumbs'][] = ['label' => 'Estado Carros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estado-carro-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_estado_carro], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id_estado_carro], [
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
            'id_estado_carro',
            'nombre',
        ],
    ]) ?>

</div>
