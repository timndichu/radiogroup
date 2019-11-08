
<?php
include_once 'header.php';
include_once 'locations_model.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<div id="map"></div>

<!------ Include the above in your HEAD tag ---------->
<script>
    var map;
    var marker;
    var infowindow;
    var green_icon =  'http://maps.google.com/mapfiles/ms/icons/green-dot.png' ;
    var purple_icon =  'http://maps.google.com/mapfiles/ms/icons/purple-dot.png' ;



    function initMap() {

        var options = {
            zoom: 8,
            center:  {lat: 1.2921, lng: 36.8219}
        };

        var map = new google.maps.Map(document.getElementById('map'),options);


        /*

        */
        addMarker({lat: 1.2921, lng: 36.8219}, 'http://maps.google.com/mapfiles/ms/icons/green-dot.png', '<h1> It works </h1>');
        addMarker({lat: 2.3921, lng: 38.5219}, 'http://maps.google.com/mapfiles/ms/icons/red-dot.png', '<h1> Fail </h1>',google.maps.Animation.BOUNCE );

        function addMarker(coords, icon, content, animation){
            var marker = new google.maps.Marker({
                position:  coords,

                map: map,
                icon: icon,
                // IF THERE'S AN ERROR, BOUNCE IT
                animation: animation
            });

            var infoWindow = new google.maps.InfoWindow({
                content: content

            });

            marker.addListener('click', function() {
                infoWindow.open(map,marker);
            });
        }


    }



    function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
            if (request.readyState === 4) {
                callback(request.responseText, request.status);
            }
        };

        request.open('GET', url, true);
        request.send(null);
    }


</script>


<script async defer
        src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyA2FJ2acTYSPZTnjzL4bV5MJxxTY3xoLJ8&callback=initMap">
</script>