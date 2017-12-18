<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Carro */

$this->title = 'Agregar Carro';
$this->params['breadcrumbs'][] = ['label' => 'Carros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carro-create">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
