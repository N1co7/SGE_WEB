<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\web\JsExpression;
use yii\widgets\ActiveForm;
use bigpaulie\social\share\Share;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Emergencia */

$this->title = 'Emergencia activa';
$this->params['breadcrumbs'][] = ['label' => 'Emergencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emergencia-view">

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_emergencia], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id_emergencia], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    <p>

    <?= \imanilchaudhari\socialshare\ShareButton::widget([
        'style'=>'horizontal',
        'networks' => ['facebook'],
         //twitter username (for twitter only, if exists else leave empty)
    ]); ?>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [          
            'descripcion:ntext',
            /*'direccion',
            'tipo_emergencia',
            'voluntario',
            'carro',
            'latitud',
            'longitud',
            'nro_emergencia',*/

             //'tipo_emergencia',
            [
               'attribute'=>'tipo_emergencia',
               'value'=> $model->tipoEmergencia->nombre,             
            ],   
            //'voluntario',
            [
               'attribute'=>'voluntario',
               'value'=> $model->voluntario0->nombre,             
            ],

            //'estado',
            [
               'attribute'=>'estado',
               'value'=> $model->estado0->nombre,             
            ],
        ],
    ]) ?>

    <!-- Inicio envio de correo-->

    <?php
        require '../PHPMailerAutoload.php';

        $mail = new PHPMailer;

        //Enable SMTP debugging. 
       // $mail->SMTPDebug = 3;                               
        //Set PHPMailer to use SMTP.
        $mail->isSMTP();            
        //Set SMTP host name                          
        $mail->Host = "smtp.gmail.com";
        //Set this to true if SMTP host requires authentication to send email
        $mail->SMTPAuth = true;                          
        //Provide username and password     
        $mail->Username = "sgechillan@gmail.com";                 
        $mail->Password = "Bomberos1";                           
        //If SMTP requires TLS encryption then set it
        $mail->SMTPSecure = "tls";                           
        //Set TCP port to connect to 
        $mail->Port = 587;                                   

        $mail->From = "sgechillan@gmail.com";
        $mail->FromName = "SEG Chillán";

        $mail->isHTML(true);

        /*Ciclo busqueda de correos*/

        $connection2 = Yii::$app->getDb(); 
        $sql2 = "SELECT correo, nombre FROM voluntario";
        $command2 = $connection2->createCommand($sql2);
        $dataReader2 = $command2->query();
        $correos = $dataReader2->readAll();

        foreach ($correos as $item) {
            $mail->addAddress($item['correo'], $item['nombre']);
            $mail->Subject = "Nueva Emergencia";
            $mail->Body = "Descripcion: ".$model->descripcion ."<br />". "Dirección: ". $model->direccion ."<br />". "Tipo de emergencia: ". $model->tipoEmergencia->nombre."<br />". "Voluntario a cargo: ". $model->voluntario0->nombre. "<br />" ;            
        }
        //$mail->AltBody = "This is the plain text version of the email content";

        if(!$mail->send()) 
        {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } 
        else 
        {
            echo " ";
        }
    ?>  
    <!-- Fin envio de correo-->

    <?php   
        $connection = Yii::$app->getDb(); 
        $sql = "SELECT latitud, longitud FROM grifo";
        $command = $connection->createCommand($sql);
        $dataReader = $command->query();
        $grifos = $dataReader->readAll();   
    ?>
<html>
    <head>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfsWKuQ-7swJlM76vBCX2TdONy5ztpSw0"></script>
        <script>
            var map;
            var grifos = [];
            var emergencia=[];
            function cargarParaderos() {
                var mapOptions = {
                    zoom: 17,
                    center: new google.maps.LatLng(<?php echo $model->latitud ?>, <?php echo $model->longitud ?>)
                }
                map = new google.maps.Map(document.getElementById('mapa'), mapOptions);

            }
            function addMarkerParadero(lat, long) {
                var image = {
                              url: "images/grifo.png",
                              size: new google.maps.Size(71, 71),
                              origin: new google.maps.Point(0, 0),
                              anchor: new google.maps.Point(17, 34),
                              scaledSize: new google.maps.Size(25, 25)
                            };
                var image2 = {
                              url: "images/incendio.png",
                              size: new google.maps.Size(71, 71),
                              origin: new google.maps.Point(0, 0),
                              anchor: new google.maps.Point(17, 34),
                              scaledSize: new google.maps.Size(25, 25)
                            };           
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(lat, long),
                    map: map,
                    draggable: false,
                    icon: image,
                    
                });
                grifos.push(marker);
                var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(<?php echo $model->latitud ?>, <?php echo $model->longitud ?>),
                    map: map,
                    draggable: false,
                    icon: image2,
                    
                });
                emergencia.push(marker2);
                
            }
            function inicializarParadero() {
                cargarParaderos();

                <?php foreach($grifos as $item){ ?>
                addMarkerParadero( <?php echo $item['latitud'] ?>,  <?php echo $item['longitud'] ?>);
                <?php } ?>

                //addMarkerParadero( <? echo $model->latitud ?>,  <? echo $model->longitud ?>);
                
            }
            $(document).ready(function () {
                
            });

        </script>
    </head>
    <body onload="inicializarParadero();">
        <div id="mapa" style="width: 80%; height: 50%; border: 2px solid #000000;"></div>
    </body>
</html>
    
</div>
