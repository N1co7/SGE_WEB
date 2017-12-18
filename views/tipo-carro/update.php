<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TipoCarro */

$this->title = 'Actualizar Tipo Carro ';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Carros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tipo_carro, 'url' => ['view', 'id' => $model->id_tipo_carro]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipo-carro-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
