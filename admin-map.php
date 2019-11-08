<?php
//
namespace Google\Cloud\Samples\Firestore;



require __DIR__.'/vendor/autoload.php';




include_once 'header.php';
include_once 'locations_model.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.2.3/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.2.3/firebase-firestore.js"></script>
<script src="login.js"></script>
<div id="map"></div>

<!------ Include the above in your HEAD tag ---------->
<script>
   // const { GeoCollectionReference, GeoFirestore, GeoQuery, GeoQuerySnapshot } = require('geofirestore');
   // const firebase = require("firebase/firebase-firestore");
    // Required for side-effects
    //require("firebase/firestore");
 //  import {LatLng} from "@firebase/firestore/dist/src/protos/firestore_proto_api";

  // import {ActionCodeInfo as documentSnapshot} from "firebase";

   firebase.initializeApp({
       apiKey: 'AIzaSyDGCErP9k-oNVYdIXPDtGXTZi3QTOs_wUg',
       authDomain: 'phpbase-3ffca.firebaseapp.com',
       projectId: 'phpbase-3ffca'
   });

   const db = firebase.firestore();
   db.settings({timestampsInSnapshots: true});




    var map;
    var marker;
    var infowindow;
    var green_icon =  'http://maps.google.com/mapfiles/ms/icons/green-dot.png' ;
    var purple_icon =  'http://maps.google.com/mapfiles/ms/icons/purple-dot.png' ;

    // function makeInfoBox(controlDiv, map) {
    //     // Set CSS for the control border.
    //     var controlUI = document.createElement('div');
    //     controlUI.style.boxShadow = 'rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px';
    //     controlUI.style.backgroundColor = '#fff';
    //     controlUI.style.border = '2px solid #fff';
    //     controlUI.style.borderRadius = '2px';
    //     controlUI.style.marginBottom = '22px';
    //     controlUI.style.marginTop = '10px';
    //     controlUI.style.textAlign = 'center';
    //     controlDiv.appendChild(controlUI);
    //
    //     // Set CSS for the control interior.
    //     var controlText = document.createElement('div');
    //     controlText.style.color = 'rgb(25,25,25)';
    //     controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
    //     controlText.style.fontSize = '100%';
    //     controlText.style.padding = '6px';
    //     controlText.innerText = 'The map shows all clicks made in the last 10 minutes.';
    //     controlUI.appendChild(controlText);
    // }


    function initMap() {

        var options = {
            zoom: 8,
            center:  {lat: 1.2921, lng: 36.8219}
        };

        var map = new google.maps.Map(document.getElementById('map'),options);
        // var infoBoxDiv = document.createElement('div');
        // var infoBox =  makeInfoBox(infoBoxDiv, map);
        // infoBoxDiv.index = 1;
        // map.controls[google.maps.ControlPosition.TOP_CENTER].push(infoBoxDiv);


        //google.maps.Animation.BOUNCE );

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
        db.collection('Stations').get().then((snapshot) => {

            // var data = snapshot.data();
            snapshot.docs.forEach(function(child){
            var name_loc = child.id;
            var loc = child.data().marker;
            var forwardpower = child.data().ForwardPower;
            var ups = child.data().UPSError;
            
            if(ups === 'true'){
                addMarker(
                    {lat: loc.latitude, lng: loc.longitude },
                    'http://maps.google.com/mapfiles/ms/icons/red-dot.png', '' +
                    `<h1> ${name_loc}</h1>` +  'Forward power: ' + forwardpower , google.maps.Animation.BOUNCE
                );
            }
                if(ups === 'false'){
                    addMarker(
                        {lat: loc.latitude, lng: loc.longitude },
                        'http://maps.google.com/mapfiles/ms/icons/green-dot.png', '' +
                        `<h1> ${name_loc}</h1>` +  'Forward power: ' + forwardpower
                    );
                }

                console.log(child.id, child.data());
            });

   })
   }





    // function downloadUrl(url, callback) {
    //     var request = window.ActiveXObject ?
    //         new ActiveXObject('Microsoft.XMLHTTP') :
    //         new XMLHttpRequest;
    //
    //     request.onreadystatechange = function() {
    //         if (request.readyState === 4) {
    //             callback(request.responseText, request.status);
    //         }
    //     };
    //
    //     request.open('GET', url, true);
    //     request.send(null);
    // }


</script>


<script async defer
        src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyA2FJ2acTYSPZTnjzL4bV5MJxxTY3xoLJ8&callback=initMap">
</script>