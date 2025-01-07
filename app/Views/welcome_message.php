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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

    <div class="row">
        <div class="col-12 text-end">
            <a href="https://www.google.com/maps?q=-3.316694,114.590111" target="_blank" class="btn btn-primary">
                <i class="fas fa-map-marker-alt"></i> Google Maps
            </a>
        </div>
    </div>
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
        var customIcon = L.icon({
            iconUrl: 'image.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-shadow.png',
            shadowSize: [41, 41]
        });

        L.marker([-3.16694, 114.590111], {
            icon: customIcon
        }).addTo(map).bindPopup('Banjarmasin<br>CKB Banjarmasin');
        var bjm = L.marker([-3.316694, 114.590111]).addTo(map).bindPopup('Banjarmasin<br>CKB Banjarmasin');
        var satuiIcon = L.icon({
            iconUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-icon.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-shadow.png',
            shadowSize: [41, 41]
        });

        // var satui = L.marker([-3.80044, 115.20482], { icon: satuiIcon }).addTo(map).bindPopup('Tujuan:<br>CKB Satui');
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