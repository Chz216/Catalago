function initMap() {

  var map = new google.maps.Map(document.getElementById('map'),{
    zoom: 10,
    center: {lat: 18.6709142, lng: -97.3986325}
  });

   var labels = ['R2','R3','R4','R5','R6','R7','R8'];

   var markers = locations.map(function(location, i) {
          return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
        });
    });

    var markerCluster = new MarkerClusterer(map, markers,{
      imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'
    });
}

var locations = [
  {lat: 18.4619616, lng:-97.3908513},
  {lat: 18.4595577, lng:-97.3907058},
  {lat: 18.4616389, lng:-97.3915107},
  {lat: 18.4601832, lng:-97.3906994},
  {lat: 18.8826558, lng:-97.7294901},
  {lat: 18.8836122, lng:-97.7285491},
  {lat: 18.849945, lng:-97.1065698}
]
