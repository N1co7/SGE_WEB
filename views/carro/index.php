<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CarroSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Listado de Carros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carro-index">

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Agregar Carro', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_carro',
            //'codigo',
            [
                'header' => 'Código',
                'attribute' => 'codigo',
                'contentOptions' => ['style' => 'width: 15%']
            ],
            //'patente',
            [
                'header' => 'Patente',
                'attribute' => 'patente',
                'contentOptions' => ['style' => 'width: 15%']
            ],
            //'estado',
            [
                'header' => 'Estado',
                'attribute' => 'Estadonombre',
                'contentOptions' => ['style' => 'width: 20%']
            ],
            //'TipoCarronombre',
            [
                'header' => 'Nombre Carro',
                'attribute' => 'TipoCarronombre',
                'contentOptions' => ['style' => 'width: 20%']
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
