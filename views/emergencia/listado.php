<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<?php

/* @var $this yii\web\View */

$this->title = 'Sistema Gestión de Emergencia';
?>
<div class="site-index">
<h1>Emergencias activas</h1>
<div class="jumbotron">
<?php foreach ($emergencia as $item){
     
  ?>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h2><? echo $item ['clave'] ?></h2>
              <p><? echo $item ['descripcion'] ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-alert-circled"></i>
            </div>
            <a href="/grifo/web/index.php?r=emergencia%2Fview&id=<?echo $item['id_emergencia']?>" class="small-box-footer">
              Mas Información <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
    <div class="body-content">     
    </div>
<?php }?>
</div>
</div>