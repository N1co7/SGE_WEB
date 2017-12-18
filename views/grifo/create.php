<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Grifo */

$this->title = 'Agregar Grifo';
$this->params['breadcrumbs'][] = ['label' => 'Grifos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grifo-create">

   

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
