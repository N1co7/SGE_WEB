<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TipoCarro */

$this->title = 'Agregar Tipo Carro';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Carros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-carro-create">

   

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
