function initMap() {

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 3,
          center: {lat: 18.6709142, lng: -97.3986325}
        });

        // Create an array of alphabetical characters used to label the markers.
        var labels = 'ABCDEFG';

        // Add some markers to the map.
        // Note: The code uses the JavaScript Array.prototype.map() method to
        // create an array of markers based on a given "locations" array.
        // The map() method here has nothing to do with the Google Maps API.
        var markers = locations.map(function(location, i) {
          return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
          });
        });

        // Add a marker clusterer to manage the markers.
        var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
      }
      var locations = [
        {18.4620896, -97.3930482},
        {18.4595577, -97.3907058},
        {18.4616389, -97.3915107},
        {18.4601832, -97.3906994},
        {18.8826558, -97.7294901},
        {18.8836122, -97.7285491},
        {18.849945, -97.1065698}
      ]
