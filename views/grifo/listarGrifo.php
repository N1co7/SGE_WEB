<html>
    <head>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfsWKuQ-7swJlM76vBCX2TdONy5ztpSw0"></script>
        
        <script>
            var map;
            var grifos = [];
            function cargarParaderos() {
                var mapOptions = {
                    zoom: 14,
                    center: new google.maps.LatLng(-36.6069881, -72.1005983)
                }
                map = new google.maps.Map(document.getElementById('mapa'), mapOptions);


            }
            function addMarkerParadero(lat, long) {
                var image = "http://icon-icons.com/icons2/520/PNG/512/Faucet_icon-icons.com_52102.png";
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(lat, long),
                    map: map,
                    draggable: false,
                    icon: image,
                    title: titulo
                });
                grifos.push(marker);
            }
            function inicializarParadero() {
                cargarParaderos();
                addMarkerParadero(-36.610694, -72.102357, 'Mercado');
                addMarkerParadero(-36.610458, -72.101475, 'Frente al Mercado');
                addMarkerParadero(-36.608838, -72.100013, 'BlockBuster');
                addMarkerParadero(-36.609675, -72.099095, 'El Roble');
                addMarkerParadero(-36.612417, -72.101322, 'Fruna');
                addMarkerParadero(-36.609608, -72.104965, 'Shell');
                addMarkerParadero(-36.607463, -72.102679, 'Frente patio Las Terrazas');
                addMarkerParadero(-36.605618, -72.103804, 'Al lado de Registro Civil');
                addMarkerParadero(-36.605762, -72.104107, 'Plaza');
                addMarkerParadero(-36.605413, -72.105580, 'Esquina Libertad Carrera');
                addMarkerParadero(-36.608557, -72.109292, 'Frente Plaza Victoria');
                addMarkerParadero(-36.609789, -72.109718, 'Frente Iglesia San Vicente');
                addMarkerParadero(-36.611204, -72.103867, 'Arturo Prat con Arauco');
                addMarkerParadero(-36.615641, -72.102349, 'Frente Cecinas Pincheira');
                addMarkerParadero(-36.609602, -72.093966, 'Constitucion con Argentina');
                addMarkerParadero(-36.608328, -72.093829, 'Frente InmunoMedica');
                addMarkerParadero(-36.607531, -72.112834, 'Brasil con Maipon');
                addMarkerParadero(-36.605271, -72.112001, 'Terminal Linea Azul');
                addMarkerParadero(-36.604049, -72.111265, 'Libertad con Brasil');
                addMarkerParadero(-36.598438, -72.106377, 'Ecuador con Ohiggins');
                addMarkerParadero(-36.598036, -72.105869, 'Frente Terminal Maria Teresa');
                addMarkerParadero(-36.599859, -72.100085, 'Homecenter');
                addMarkerParadero(-36.599572, -72.101827, 'Ecuador con 18 de Septiembre');
                addMarkerParadero(-36.602253, -72.091015, 'Ecuador con Av Argentina');
                addMarkerParadero(-36.602087, -72.091125, 'Frente Ecuador con Av Argentina');
                addMarkerParadero(-36.598577, -72.106309, 'Ecuador con Ohiggins');
            }

            $(document).ready(function () {
                
            });

        </script>
    </head>
    <body onload="inicializarParadero();">
        <div id="mapa" style="width: 600px; height: 300px; border: 2px solid #000000;"></div>
    </body>
</html>