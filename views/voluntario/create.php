<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Voluntario */

$this->title = 'Agregar Voluntario';
$this->params['breadcrumbs'][] = ['label' => 'Voluntarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="voluntario-create">

 

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
