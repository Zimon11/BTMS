<x-route-sched-views>
    <form action="/submit-location" id="form" method="POST">
        @csrf
        <label for="latitude">Latitude:</label>
        <input type="text" id="latitude" name="latitude" readonly>

        <label for="longitude">Longitude:</label>
        <input type="text" id="longitude" name="longitude" readonly>

        <!-- Map Section -->
        <div id="map"></div>

        <button type="submit">Submit</button>
    </form>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    // Initialize the map
    var map = L.map('map').setView([51.505, -0.09], 13); // Default coordinates

    // Add OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
    }).addTo(map);

    // Add a marker
    var marker = L.marker([51.505, -0.09]).addTo(map);

    // Update form fields when the map is clicked
    function onMapClick(e) {
        marker.setLatLng(e.latlng);
        document.getElementById('latitude').value = e.latlng.lat;
        document.getElementById('longitude').value = e.latlng.lng;
    }

    map.on('click', onMapClick);
</script>
</x-route-sched-views>