<link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<?php
use yii\helpers\Html;
$this->title = 'Listado de todos los Grifos';
?>

<html>
    <head>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfsWKuQ-7swJlM76vBCX2TdONy5ztpSw0"></script>
        
        <script>
            var map;
            var grifos = [];
            function cargarParaderos() {
                var mapOptions = {
                    zoom: 15,
                    center: new google.maps.LatLng(-36.6069881, -72.1005983)
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
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(lat, long),
                    map: map,
                    draggable: false,
                    icon: image,
                    
                });
                grifos.push(marker);
            }
            function inicializarParadero() {
                cargarParaderos();
                <?php foreach($grifos as $item){?>
                addMarkerParadero( <?php echo $item->latitud ?>,  <?php echo $item->longitud ?>);
            	<?php }?>
                
            }
            $(document).ready(function () {
                
            });

        </script>
    </head>
    <body onload="inicializarParadero();">
        <div id="mapa" style="width: 100%; height: 70%; border: 2px solid #000000;"></div>
    </body>
</html>