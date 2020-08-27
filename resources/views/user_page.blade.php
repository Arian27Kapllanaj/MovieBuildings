<!DOCTYPE html>
<html>
  <head>
    <title>Custom Legend</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body {
        margin: 0;
        padding: 0;
        height: 100%;
        width: 100%;
      }
      #map {
        height: 400px;
        width: 100%;
      }
    </style>
  </head>
  <body>

  <h3>User Page</h3>

    <div id="map"></div>
    <!-- <div id="legend"><h3>Legend</h3></div> -->
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          //center: new google.maps.LatLng(40.902782, 20.657920),
          mapTypeId: 'roadmap'
        });
        google.maps.event.addListener(map, "dragend", function() {
            var center = this.getCenter();
            var latitude = center.lat();
            var longitude = center.lng();
            console.log("current latitude is: " + latitude);
            console.log("current longitude is: " + longitude);
          });

        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
        

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
        }

        var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
        var icons = {
          info: {
            name: 'Info',
            icon: iconBase + 'info-i_maps.png'
          }
        };
        var features = [
          {
            position: new google.maps.LatLng(40.901514, 20.672501),
            type: 'info'
          }
        ];
        // Create markers.
        features.forEach(function(feature) {
          var marker = new google.maps.Marker({
            position: feature.position,
            icon: icons[feature.type].icon,
            map: map
          });
        });
      }
    </script>
    <script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKt6Ikgg3SkflVMQqu_-QG-IRLia_deh4&callback=initMap">
    </script>
  <br>
  <a href="{{ url('logout') }}">Logout</a>

  </body>
</html>