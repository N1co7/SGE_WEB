
<?php
/* @var $this yii\web\View */

$connection = Yii::$app->getDb();
        $sql = "SELECT id_emergencia,descripcion,clave FROM emergencia JOIN tipo_emergencia WHERE emergencia.estado= 1 AND emergencia.tipo_emergencia=tipo_emergencia.id_tipo_emergencia ORDER BY id_emergencia DESC";
        $command = $connection->createCommand($sql);
        $dataReader = $command->query();
        $rows = $dataReader->readAll();

$this->title = 'Sistema Gestión de Emergencia';
?>

<div class="site-index">
<h1>Emergencias activas</h1>
<div class="jumbotron">
<?php foreach ($rows as $item){?>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h2><?php echo $item ['clave'] ?></h2>
              <p><?php echo $item ['descripcion'] ?></p>
            </div>         
            <a href="/crgajard/grifo/web/index.php?r=emergencia%2Fview&id=<?php echo $item['id_emergencia']?>" class="small-box-footer">
              Mas Información <i class="fa fa-arrow-circle-right"></i>

            </a>
          </div>
        </div>
    <div class="body-content">     
    </div>
<?php }?>

</div>
</div>