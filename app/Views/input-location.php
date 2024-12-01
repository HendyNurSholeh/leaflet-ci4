<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="node_modules/leaflet/dist/leaflet.css" />
    <script src="node_modules/leaflet/dist/leaflet.js"></script>
    <link rel="stylesheet" href="node_modules/leaflet-routing-machine/dist/leaflet-routing-machine.css" />
    <script src="node_modules/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>

</head>

<body>
    <div class="row">
      <div class="col-6">
          <label for="latitude">Latitude:</label>
          <input type="text" id="latitude" name="latitude" class="form-control">
          <label for="longitude">Longitude:</label>
          <input type="text" id="longitude" name="longitude" class="form-control">
      </div>
      <div class="col-6">
        <div id="map" style="height: 500px;"></div>
      </div>
    </div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize the map and set its view to the specified bounds
    var map = L.map('map').fitBounds([
        [-3.316694, 114.590111], // Banjarmasin
        [-3.80044, 115.20482] // Satui
    ], {
        padding: [50, 50]
    });

    // Add OpenStreetMap tiles to the map
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Add a marker on map click and update latitude and longitude inputs
    // Add a marker on map click and update latitude and longitude inputs
    map.on('click', function(e) {
        var lat = e.latlng.lat;
        var lng = e.latlng.lng;

        // Update input fields
        document.getElementById('latitude').value = lat;
        document.getElementById('longitude').value = lng;

        // Remove existing markers
        map.eachLayer(function(layer) {
            if (layer instanceof L.Marker) {
                map.removeLayer(layer);
            }
        });

        // Add marker to the map
        L.marker([lat, lng]).addTo(map);
    });
});
</script>

</body>

</html>