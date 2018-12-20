function initMap() {
  var location = {
    lat: 18.6709142,
    lng: -97.3986325
  };

  var map = new google.maps.Map(document.getElementById('map'),{
    zoom: 10,
    center: location
  });
}
