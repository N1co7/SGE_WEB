<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EstadoCarro */

$this->title = 'Agregar Estado Carro';
$this->params['breadcrumbs'][] = ['label' => 'Estado Carros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estado-carro-create">

     

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
