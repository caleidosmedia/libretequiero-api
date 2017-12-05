@extends('layouts.app1')

@section('content')
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 90%;
        width:  100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <div id="map"></div>
    <script>
      var json = {!!$markers!!}
    function initMap() {

        var latlng = new google.maps.LatLng(-12.046373,-77.042754);
        var myOptions = {
            zoom: 13,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false
        };

        var map = new google.maps.Map(document.getElementById("map"),myOptions);
        for( var o in json ){
            lat=parseFloat(json[ o ].lat);
            lng=parseFloat(json[ o ].lng);
            id=json[ o ].id;
            var position = {lat: lat, lng: lng};
            var marker = new google.maps.Marker({
              position: position,
              map: map,
              id: id 
            });
          google.maps.event.addListener(marker, 'click', function() {
              window.location.href = '/denuncias/'+this.id+'/ver';
          });
        }
    }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKLJlQ0RxbqL67lXO14Pbxod3kuu5zGnM&callback=initMap">
    </script>
@endsection