<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Emergencia */

$this->title = 'Agregar Emergencia';
$this->params['breadcrumbs'][] = ['label' => 'Emergencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emergencia-create">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
