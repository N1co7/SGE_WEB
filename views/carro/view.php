<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Carro */

$this->title = "Actualizar Carro";
$this->params['breadcrumbs'][] = ['label' => 'Carros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>



    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_carro], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id_carro], [
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
            'codigo',
            'patente',
            [
               'attribute'=>'estado',
               'value'=> $model->estado0->nombre,             
            ],
            
            //'perfil', 
            [
               'attribute'=>'tipo_carro',
               'value'=> $model->tipoCarro->nombre,             
            ],
        ],
    ]) ?>

</div>
