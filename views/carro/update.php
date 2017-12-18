<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Carro */

$this->title = 'Actualizar Carro ';
$this->params['breadcrumbs'][] = ['label' => 'Carros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_carro, 'url' => ['view', 'id' => $model->id_carro]];
$this->params['breadcrumbs'][] = 'Update';
?>




    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
