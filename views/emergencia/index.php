<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EmergenciaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Listado de Emergencias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emergencia-index">

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Agregar Emergencia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_emergencia',
            [
                'header' => 'Descripcion', 
                'attribute' => 'descripcion',
                'contentOptions' => ['style' => 'width: 30%']
            ],
            //'direccion',
            [
                'header' => 'Dirección', 
                'attribute' => 'direccion',
                'contentOptions' => ['style' => 'width: 40%']
            ],
            //'tipo_emergencia',
            [
                'header' => 'Tipo Emergencia', 
                'attribute' => 'TipoEmergencianombre',
                'contentOptions' => ['style' => 'width: 15%']
            ],
            //'voluntario',
            [
                'header' => 'Voluntario a cargo', 
                'attribute' => 'Voluntarionombre',
                'contentOptions' => ['style' => 'width: 15%']
            ],
            // 'latitud',
            // 'longitud',
            // 'nro_emergencia',
            // 'estado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
