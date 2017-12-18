<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EstadoCarro */

$this->title = 'Update Estado Carro: ' . $model->id_estado_carro;
$this->params['breadcrumbs'][] = ['label' => 'Estado Carros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_estado_carro, 'url' => ['view', 'id' => $model->id_estado_carro]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="estado-carro-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
