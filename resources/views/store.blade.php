<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Location</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap" async defer></script>
</head>
<body>

<div id="map" style="height: 500px; width: 100%;"></div>

<script>
    function initMap() {
        // User's location
        var userLatitude = @json($location['lat']);
        var userLongitude = @json($location['lon']);
        var userLocation = { lat: userLatitude, lng: userLongitude };

        // Initialize the map
        var map = new google.maps.Map(document.getElementById('map'), {
            center: userLocation,
            zoom: 12
        });

        // Marker for user's location
        var userMarker = new google.maps.Marker({
            position: userLocation,
            map: map,
            title: 'Your Location'
        });

        // Add markers for each nearby store
        @foreach ($stores as $store)
            var storeLocation = { lat: {{ $store->latitude }}, lng: {{ $store->longitude }} };
            var storeMarker = new google.maps.Marker({
                position: storeLocation,
                map: map,
                title: '{{ $store->name }}'
            });
        @endforeach
    }
</script>

</body>
</html>
