<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsuarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lista de usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-index">

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Agregar Usuario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            //'id_usuario',
            [
                'header' => 'Nombre Usuario',
                'attribute' => 'nombre_usuario',
                'contentOptions' => ['style' => 'width: 30%']
            ],
            //'nombre_usuario',
            [
                'header' => 'Login Usuario',
                'attribute' => 'login_usuario',
                'contentOptions' => ['style' => 'width: 30%']
            ],
            //'login_usuario',
            [
                'header' => 'Contraseña Usuario',
                'attribute' => 'contrasena_usuario',
                'contentOptions' => ['style' => 'width: 30%']
            ],
            //'contrasena_usuario',
            [
                'header' => 'Perfil',
                'attribute' => 'Perfilnombre',
                'contentOptions' => ['style' => 'width: 30%']
            ],
            //'Perfilnombre', 

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
