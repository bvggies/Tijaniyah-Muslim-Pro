<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qibla Direction - Tijaniyah Muslim Pro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="bg-gradient-to-br from-green-900 via-emerald-900 to-teal-900 min-h-screen">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-10 left-10 w-32 h-32 bg-green-300/10 rounded-full animate-pulse"></div>
        <div class="absolute top-32 right-20 w-24 h-24 bg-emerald-300/10 rounded-full animate-bounce"></div>
        <div class="absolute bottom-20 left-1/4 w-40 h-40 bg-teal-300/10 rounded-full animate-pulse"></div>
    </div>

    <div class="relative z-10 container mx-auto px-4 py-8">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl md:text-6xl font-bold bg-gradient-to-r from-green-300 via-emerald-400 to-teal-500 bg-clip-text text-transparent mb-4">
                Qibla Direction
            </h1>
            <p class="text-xl text-green-100">Find the direction of the Kaaba</p>
        </div>

        <!-- Location and Info Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <!-- Location Card -->
            <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-xl font-bold text-green-100">
                        <i class="fas fa-map-marker-alt text-green-300 mr-2"></i>
                        Current Location
                    </h3>
                    <button onclick="getCurrentLocation()" class="bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 text-white font-semibold py-2 px-4 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-sync-alt mr-2"></i>Update
                    </button>
                </div>
                <p class="text-green-200 text-lg" id="location-text">Detecting your location...</p>
                <p class="text-green-300 text-sm mt-2" id="coordinates-text"></p>
            </div>

            <!-- Distance Card -->
            <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-6">
                <h3 class="text-xl font-bold text-green-100 mb-4">
                    <i class="fas fa-route text-green-300 mr-2"></i>
                    Distance to Kaaba
                </h3>
                <div class="text-center">
                    <p class="text-3xl font-bold text-green-100" id="distance-to-kaaba">--</p>
                    <p class="text-green-200 text-sm mt-2">kilometers</p>
                </div>
            </div>
        </div>

        <!-- Main Qibla Compass -->
        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 mb-8 text-center">
            <h2 class="text-2xl font-bold text-green-100 mb-6">Qibla Compass</h2>
            
            <!-- Compass Container -->
            <div class="relative mx-auto w-80 h-80 mb-6">
                <!-- Compass Background -->
                <div class="absolute inset-0 rounded-full border-4 border-green-300/50 bg-gradient-to-br from-green-200/20 to-emerald-200/20">
                    <!-- Compass Directions -->
                    <div class="absolute top-2 left-1/2 transform -translate-x-1/2 text-green-300 font-bold text-lg">N</div>
                    <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 text-green-300 font-bold text-lg">S</div>
                    <div class="absolute left-2 top-1/2 transform -translate-y-1/2 text-green-300 font-bold text-lg">W</div>
                    <div class="absolute right-2 top-1/2 transform -translate-y-1/2 text-green-300 font-bold text-lg">E</div>
                    
                    <!-- Compass Needle -->
                    <div id="compass-needle" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 transition-transform duration-500">
                        <div class="w-1 h-32 bg-gradient-to-t from-red-500 to-red-600 rounded-full relative">
                            <div class="absolute -top-2 left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-4 border-r-4 border-b-6 border-transparent border-b-red-500"></div>
                        </div>
                    </div>
                    
                    <!-- Qibla Direction Arrow -->
                    <div id="qibla-arrow" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 transition-transform duration-500">
                        <div class="w-1 h-24 bg-gradient-to-t from-green-500 to-green-600 rounded-full relative">
                            <div class="absolute -top-2 left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-4 border-r-4 border-b-6 border-transparent border-b-green-500"></div>
                        </div>
                    </div>
                    
                    <!-- Center Dot -->
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-4 h-4 bg-white rounded-full border-2 border-green-500"></div>
                </div>
            </div>

            <!-- Qibla Direction Info -->
            <div class="text-green-100">
                <p class="text-xl font-semibold mb-2">Qibla Direction</p>
                <p class="text-2xl font-bold" id="qibla-direction">--°</p>
                <p class="text-green-200 text-sm mt-2" id="qibla-direction-text">Loading...</p>
            </div>
        </div>

        <!-- Map Fallback -->
        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-6 mb-8">
            <h3 class="text-xl font-bold text-green-100 mb-4">
                <i class="fas fa-map text-green-300 mr-2"></i>
                Map View
            </h3>
            <div id="map-container" class="h-64 bg-gray-200 rounded-lg flex items-center justify-center">
                <div class="text-center text-gray-600">
                    <i class="fas fa-map-marked-alt text-4xl mb-2"></i>
                    <p>Map will be displayed here</p>
                    <p class="text-sm">Line from your location to Makkah</p>
                </div>
            </div>
        </div>

        <!-- Calibration Instructions -->
        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-6">
            <h3 class="text-xl font-bold text-green-100 mb-4">
                <i class="fas fa-info-circle text-green-300 mr-2"></i>
                Compass Calibration
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h4 class="text-lg font-semibold text-green-200 mb-2">For Best Accuracy:</h4>
                    <ul class="text-green-100 space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mr-2 mt-1"></i>
                            <span>Hold your device flat and level</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mr-2 mt-1"></i>
                            <span>Move your device in a figure-8 motion</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mr-2 mt-1"></i>
                            <span>Avoid metal objects and electronics</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mr-2 mt-1"></i>
                            <span>Use outdoors for better GPS signal</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-green-200 mb-2">Permissions Required:</h4>
                    <ul class="text-green-100 space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-location-arrow text-green-400 mr-2 mt-1"></i>
                            <span>Location access for GPS coordinates</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-compass text-green-400 mr-2 mt-1"></i>
                            <span>Device orientation for compass</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-shield-alt text-green-400 mr-2 mt-1"></i>
                            <span>All data stays on your device</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        let userLocation = null;
        let qiblaDirection = null;
        let compassCalibrated = false;

        // Kaaba coordinates
        const KAABA_LAT = 21.4225;
        const KAABA_LNG = 39.8262;

        document.addEventListener('DOMContentLoaded', function() {
            // Request permissions and get location
            requestPermissions();
            
            // Listen for device orientation changes
            if (window.DeviceOrientationEvent) {
                window.addEventListener('deviceorientation', handleOrientationChange);
            }
        });

        // Request necessary permissions
        function requestPermissions() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    function(position) {
                        userLocation = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };
                        
                        // Reverse geocode to get city and country
                        reverseGeocode(userLocation.lat, userLocation.lng);
                        
                        // Calculate Qibla direction
                        calculateQiblaDirection();
                        
                        // Calculate distance to Kaaba
                        calculateDistanceToKaaba();
                    },
                    function(error) {
                        console.error('Error getting location:', error);
                        document.getElementById('location-text').textContent = 'Location access denied';
                        document.getElementById('coordinates-text').textContent = 'Please enable location access for accurate Qibla direction';
                    },
                    {
                        enableHighAccuracy: true,
                        timeout: 10000,
                        maximumAge: 0
                    }
                );
            } else {
                document.getElementById('location-text').textContent = 'Geolocation not supported';
                document.getElementById('coordinates-text').textContent = 'Please use a device with GPS capabilities';
            }
        }

        // Get current location
        function getCurrentLocation() {
            requestPermissions();
        }

        // Reverse geocode function
        async function reverseGeocode(lat, lng) {
            try {
                const response = await fetch(`https://api.bigdatacloud.net/data/reverse-geocode-client?latitude=${lat}&longitude=${lng}&localityLanguage=en`);
                const data = await response.json();
                
                if (data.city && data.countryName) {
                    document.getElementById('location-text').textContent = `${data.city}, ${data.countryName}`;
                    document.getElementById('coordinates-text').textContent = `Lat: ${lat.toFixed(4)}, Lng: ${lng.toFixed(4)}`;
                } else {
                    document.getElementById('location-text').textContent = `Lat: ${lat.toFixed(4)}, Lng: ${lng.toFixed(4)}`;
                    document.getElementById('coordinates-text').textContent = 'Location detected';
                }
            } catch (error) {
                console.error('Reverse geocoding failed:', error);
                document.getElementById('location-text').textContent = `Lat: ${lat.toFixed(4)}, Lng: ${lng.toFixed(4)}`;
                document.getElementById('coordinates-text').textContent = 'Location detected';
            }
        }

        // Calculate Qibla direction using spherical trigonometry
        function calculateQiblaDirection() {
            if (!userLocation) return;

            const lat1 = userLocation.lat * Math.PI / 180;
            const lng1 = userLocation.lng * Math.PI / 180;
            const lat2 = KAABA_LAT * Math.PI / 180;
            const lng2 = KAABA_LNG * Math.PI / 180;

            const dLng = lng2 - lng1;
            const y = Math.sin(dLng) * Math.cos(lat2);
            const x = Math.cos(lat1) * Math.sin(lat2) - Math.sin(lat1) * Math.cos(lat2) * Math.cos(dLng);

            let bearing = Math.atan2(y, x) * 180 / Math.PI;
            bearing = (bearing + 360) % 360;

            qiblaDirection = bearing;
            
            // Update display
            document.getElementById('qibla-direction').textContent = `${Math.round(bearing)}°`;
            document.getElementById('qibla-direction-text').textContent = getDirectionText(bearing);
            
            // Update Qibla arrow
            updateQiblaArrow(bearing);
        }

        // Get direction text from bearing
        function getDirectionText(bearing) {
            const directions = ['N', 'NNE', 'NE', 'ENE', 'E', 'ESE', 'SE', 'SSE', 'S', 'SSW', 'SW', 'WSW', 'W', 'WNW', 'NW', 'NNW'];
            const index = Math.round(bearing / 22.5) % 16;
            return directions[index];
        }

        // Update Qibla arrow direction
        function updateQiblaArrow(bearing) {
            const arrow = document.getElementById('qibla-arrow');
            if (arrow) {
                arrow.style.transform = `translate(-50%, -50%) rotate(${bearing}deg)`;
            }
        }

        // Calculate distance to Kaaba
        function calculateDistanceToKaaba() {
            if (!userLocation) return;

            const R = 6371; // Earth's radius in kilometers
            const dLat = (KAABA_LAT - userLocation.lat) * Math.PI / 180;
            const dLng = (KAABA_LNG - userLocation.lng) * Math.PI / 180;
            const a = Math.sin(dLat/2) * Math.sin(dLat/2) +
                    Math.cos(userLocation.lat * Math.PI / 180) * Math.cos(KAABA_LAT * Math.PI / 180) *
                    Math.sin(dLng/2) * Math.sin(dLng/2);
            const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
            const distance = R * c;

            document.getElementById('distance-to-kaaba').textContent = Math.round(distance);
        }

        // Handle device orientation changes
        function handleOrientationChange(event) {
            if (!compassCalibrated) {
                // Show calibration message
                document.getElementById('qibla-direction-text').textContent = 'Calibrating compass...';
                setTimeout(() => {
                    compassCalibrated = true;
                    document.getElementById('qibla-direction-text').textContent = getDirectionText(qiblaDirection);
                }, 2000);
            }

            // Update compass needle based on device orientation
            if (event.alpha !== null) {
                const needle = document.getElementById('compass-needle');
                if (needle) {
                    needle.style.transform = `translate(-50%, -50%) rotate(${-event.alpha}deg)`;
                }
            }
        }

        // Calibrate compass
        function calibrateCompass() {
            compassCalibrated = false;
            document.getElementById('qibla-direction-text').textContent = 'Move your device in a figure-8 motion...';
            
            setTimeout(() => {
                compassCalibrated = true;
                document.getElementById('qibla-direction-text').textContent = getDirectionText(qiblaDirection);
            }, 5000);
        }
    </script>
</body>
</html>
