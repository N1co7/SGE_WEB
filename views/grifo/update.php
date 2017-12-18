<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Grifo */

$this->title = 'Actualizar Grifo: ' . $model->id_grifo;
$this->params['breadcrumbs'][] = ['label' => 'Grifos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_grifo, 'url' => ['view', 'id' => $model->id_grifo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="grifo-update">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
