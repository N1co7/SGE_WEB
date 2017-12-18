<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Voluntario */

$this->title = 'Actualizar Voluntario: ';
$this->params['breadcrumbs'][] = ['label' => 'Voluntarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_voluntario, 'url' => ['view', 'id' => $model->id_voluntario]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="voluntario-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
