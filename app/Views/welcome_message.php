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

        </div>
        <div class="col-6">
            <div id="map" style="height: 500px;"></div>
        </div>
    </div>

    <!-- <script>
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

        // Add markers for Banjarmasin and Satui
        var bjm = L.marker([-3.316694, 114.590111]).addTo(map).bindPopup('Banjarmasin<br>CKB Banjarmasin');
        var satui = L.marker([-3.80044, 115.20482]).addTo(map).bindPopup('Destination:<br>CKB Satui');

        // Open popups for both markers
        bjm.openPopup();
        satui.openPopup();

        // Adjust the map view to ensure both markers are visible
        map.fitBounds([
            [-3.316694, 114.590111], // Banjarmasin
            [-3.80044, 115.20482] // Satui
        ], {
            padding: [50, 50],
            maxZoom: 10 // Set the maximum zoom level to ensure the route is visible
        });
    });
    </script> -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Inisialisasi peta dan atur tampilan ke batas yang ditentukan
        var map = L.map('map').fitBounds([
            [-3.316694, 114.590111], // Banjarmasin
            [-3.80044, 115.20482] // Satui
        ], {
            padding: [50, 50]
        });

        // Tambahkan ubin OpenStreetMap ke peta
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> kontributor'
        }).addTo(map);

        // Tambahkan penanda untuk Banjarmasin dan Satui
        var bjm = L.marker([-3.316694, 114.590111]).addTo(map).bindPopup('Banjarmasin<br>CKB Banjarmasin');
        var satui = L.marker([-3.80044, 115.20482]).addTo(map).bindPopup('Tujuan:<br>CKB Satui');

        // Tambahkan kontrol rute ke peta
        L.Routing.control({
            waypoints: [
                L.latLng(-3.316694, 114.590111), // Banjarmasin (mulai)
                L.latLng(-3.80044, 115.20482) // Satui (tujuan)
            ],
            routeWhileDragging: true
        }).addTo(map);

        // Buka popup untuk kedua penanda
        bjm.openPopup();
        satui.openPopup();

        // Sesuaikan tampilan peta untuk memastikan kedua penanda dan rute terlihat
        map.fitBounds([
            [-3.316694, 114.590111], // Banjarmasin
            [-3.80044, 115.20482] // Satui
        ], {
            padding: [50, 50],
            maxZoom: 10 // Atur tingkat zoom maksimum untuk memastikan rute terlihat
        });
    });
    </script>
</body>

</html>