<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TipoEmergenciaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipo Emergencias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-emergencia-index">

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Agregar Tipo Emergencia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            'nombre',
            'clave',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
