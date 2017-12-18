<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VoluntarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Voluntarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="voluntario-index">

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Agregar Voluntario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_voluntario',
            'nombre',
            'correo',
            'direccion',
            'telefono',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
