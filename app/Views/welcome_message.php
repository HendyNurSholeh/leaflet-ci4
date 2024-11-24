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
    <!-- STYLES -->

</head>

<body>
    <div class="row">
        <div class="col-6">

        </div>
        <div class="col-6">
            <div id="map" style="height: 500px;"></div>
        </div>
    </div>

    <script {csp-script-nonce}>
    document.addEventListener('DOMContentLoaded', function() {
        var map = L.map('map').setView([-3.316694, 114.590111], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([-3.316694, 114.590111]).addTo(map)
            .bindPopup('Lokasi Saya')
            .openPopup();
    });
    </script>
</body>

</html>