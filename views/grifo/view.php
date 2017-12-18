<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Grifo */

$this->title = "Grifo";
$this->params['breadcrumbs'][] = ['label' => 'Grifos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grifo-view">

   <p>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id_grifo], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id_grifo',
            //'latitud',
            //'longitud',
            //'nro_grifo',
            'direccion',
        ],
    ]) ?>

</div>
