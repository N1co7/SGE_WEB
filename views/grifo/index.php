<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GrifoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Listar grifos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grifo-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Agregar Grifo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_grifo',
            //'latitud',
            //'longitud',
            //'nro_grifo',
            'direccion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
