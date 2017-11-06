function initMap() {
        var uluru = {lat: -8.061825, lng: -34.871674};
        var map = new google.maps.Map(document.getElementById('map-canvas'), {
          zoom: 18,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
}
