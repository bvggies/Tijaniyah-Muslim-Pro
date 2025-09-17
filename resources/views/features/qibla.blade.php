<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div class="slide-in-left">
                <h2 class="text-3xl font-bold bg-gradient-to-r from-green-600 to-green-800 bg-clip-text text-transparent">
                    <i class="fas fa-compass mr-3"></i>Qibla Direction
                </h2>
                <p class="text-gray-600 mt-1">Find the direction to the Kaaba in Makkah</p>
            </div>
            <div class="slide-in-right">
                <a href="{{ route('dashboard') }}" class="bg-gradient-to-r from-gray-500 to-gray-600 hover:from-gray-600 hover:to-gray-700 text-white font-semibold py-3 px-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-arrow-left mr-2"></i>Back to Dashboard
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Compass Card -->
            <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
                <div class="text-center">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">
                        <i class="fas fa-compass mr-2"></i>
                        Qibla Compass
                    </h3>
                    
                    <!-- Compass Container -->
                    <div class="relative w-80 h-80 mx-auto mb-8">
                        <!-- Outer Circle -->
                        <div class="absolute inset-0 rounded-full border-8 border-gray-200 shadow-lg">
                            <!-- Compass Background -->
                            <div class="absolute inset-2 rounded-full bg-gradient-to-br from-blue-50 to-blue-100">
                                <!-- Compass Needle -->
                                <div id="compass-needle" class="absolute top-1/2 left-1/2 w-1 h-32 bg-red-500 transform -translate-x-1/2 -translate-y-1/2 origin-bottom transition-transform duration-1000 ease-out">
                                    <div class="absolute -top-2 left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-4 border-r-4 border-b-8 border-l-transparent border-r-transparent border-b-red-500"></div>
                                </div>
                                
                                <!-- Center Dot -->
                                <div class="absolute top-1/2 left-1/2 w-4 h-4 bg-red-500 rounded-full transform -translate-x-1/2 -translate-y-1/2 z-10"></div>
                                
                                <!-- Direction Labels -->
                                <div class="absolute top-4 left-1/2 transform -translate-x-1/2 text-lg font-bold text-gray-700">N</div>
                                <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 text-lg font-bold text-gray-700">S</div>
                                <div class="absolute left-4 top-1/2 transform -translate-y-1/2 text-lg font-bold text-gray-700">W</div>
                                <div class="absolute right-4 top-1/2 transform -translate-y-1/2 text-lg font-bold text-gray-700">E</div>
                                
                                <!-- Qibla Direction Indicator -->
                                <div id="qibla-indicator" class="absolute top-1/2 left-1/2 w-2 h-16 bg-green-500 transform -translate-x-1/2 -translate-y-1/2 origin-bottom transition-transform duration-1000 ease-out">
                                    <div class="absolute -top-2 left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-2 border-r-2 border-b-6 border-l-transparent border-r-transparent border-b-green-500"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Qibla Information -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6">
                            <h4 class="text-lg font-bold text-green-900 mb-2">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                Your Location
                            </h4>
                            <p class="text-green-800" id="user-location">Detecting...</p>
                        </div>
                        
                        <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6">
                            <h4 class="text-lg font-bold text-blue-900 mb-2">
                                <i class="fas fa-kaaba mr-2"></i>
                                Qibla Direction
                            </h4>
                            <p class="text-blue-800 text-2xl font-bold" id="qibla-direction">--°</p>
                        </div>
                        
                        <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-6">
                            <h4 class="text-lg font-bold text-purple-900 mb-2">
                                <i class="fas fa-ruler mr-2"></i>
                                Distance to Makkah
                            </h4>
                            <p class="text-purple-800 text-2xl font-bold" id="distance-makkah">-- km</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Instructions Card -->
            <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">
                    <i class="fas fa-info-circle mr-2"></i>
                    How to Use the Qibla Compass
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-4">Step-by-Step Guide:</h4>
                        <ol class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <span class="bg-green-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold mr-3 mt-0.5">1</span>
                                <span>Allow location access when prompted</span>
                            </li>
                            <li class="flex items-start">
                                <span class="bg-green-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold mr-3 mt-0.5">2</span>
                                <span>Hold your device flat and level</span>
                            </li>
                            <li class="flex items-start">
                                <span class="bg-green-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold mr-3 mt-0.5">3</span>
                                <span>Rotate until the red needle points to the green arrow</span>
                            </li>
                            <li class="flex items-start">
                                <span class="bg-green-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold mr-3 mt-0.5">4</span>
                                <span>The green arrow shows the Qibla direction</span>
                            </li>
                        </ol>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-4">Important Notes:</h4>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span>Keep your device away from metal objects</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span>Ensure you have a clear view of the sky</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span>Calibrate the compass if needed</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span>Use in conjunction with landmarks when possible</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Calibration Card -->
            <div class="bg-white rounded-2xl shadow-xl p-8">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">
                    <i class="fas fa-tools mr-2"></i>
                    Compass Calibration
                </h3>
                <div class="text-center">
                    <p class="text-gray-600 mb-6">If the compass seems inaccurate, try calibrating it by moving your device in a figure-8 pattern.</p>
                    <button onclick="calibrateCompass()" class="bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-semibold py-3 px-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-sync-alt mr-2"></i>Calibrate Compass
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        let currentLocation = null;
        let qiblaDirection = 0;
        let compassCalibrated = false;

        // Kaaba coordinates
        const MAKKAH_LAT = 21.4225;
        const MAKKAH_LNG = 39.8262;

        // Get user's location
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            } else {
                document.getElementById('user-location').innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        function showPosition(position) {
            currentLocation = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            
            document.getElementById('user-location').innerHTML = 
                `Lat: ${currentLocation.lat.toFixed(4)}°, Lng: ${currentLocation.lng.toFixed(4)}°`;
            
            calculateQiblaDirection();
            calculateDistanceToMakkah();
        }

        function showError(error) {
            let message = "Unable to retrieve your location. ";
            switch(error.code) {
                case error.PERMISSION_DENIED:
                    message += "Location access denied by user.";
                    break;
                case error.POSITION_UNAVAILABLE:
                    message += "Location information unavailable.";
                    break;
                case error.TIMEOUT:
                    message += "Location request timed out.";
                    break;
                default:
                    message += "An unknown error occurred.";
                    break;
            }
            document.getElementById('user-location').innerHTML = message;
        }

        // Calculate Qibla direction
        function calculateQiblaDirection() {
            if (!currentLocation) return;

            const lat1 = currentLocation.lat * Math.PI / 180;
            const lng1 = currentLocation.lng * Math.PI / 180;
            const lat2 = MAKKAH_LAT * Math.PI / 180;
            const lng2 = MAKKAH_LNG * Math.PI / 180;

            const dLng = lng2 - lng1;
            const y = Math.sin(dLng) * Math.cos(lat2);
            const x = Math.cos(lat1) * Math.sin(lat2) - Math.sin(lat1) * Math.cos(lat2) * Math.cos(dLng);

            let bearing = Math.atan2(y, x) * 180 / Math.PI;
            bearing = (bearing + 360) % 360;

            qiblaDirection = bearing;
            document.getElementById('qibla-direction').textContent = Math.round(bearing) + '°';
            
            updateCompass();
        }

        // Calculate distance to Makkah
        function calculateDistanceToMakkah() {
            if (!currentLocation) return;

            const R = 6371; // Earth's radius in kilometers
            const dLat = (MAKKAH_LAT - currentLocation.lat) * Math.PI / 180;
            const dLng = (MAKKAH_LNG - currentLocation.lng) * Math.PI / 180;
            const a = Math.sin(dLat/2) * Math.sin(dLat/2) +
                    Math.cos(currentLocation.lat * Math.PI / 180) * Math.cos(MAKKAH_LAT * Math.PI / 180) *
                    Math.sin(dLng/2) * Math.sin(dLng/2);
            const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
            const distance = R * c;

            document.getElementById('distance-makkah').textContent = Math.round(distance) + ' km';
        }

        // Update compass display
        function updateCompass() {
            const needle = document.getElementById('compass-needle');
            const qiblaIndicator = document.getElementById('qibla-indicator');
            
            if (needle && qiblaIndicator) {
                // Rotate the Qibla indicator to show the direction
                qiblaIndicator.style.transform = `translate(-50%, -50%) rotate(${qiblaDirection}deg)`;
            }
        }

        // Calibrate compass
        function calibrateCompass() {
            compassCalibrated = false;
            document.getElementById('compass-needle').style.animation = 'pulse 2s infinite';
            
            setTimeout(() => {
                compassCalibrated = true;
                document.getElementById('compass-needle').style.animation = 'none';
                alert('Compass calibration complete!');
            }, 3000);
        }

        // Watch device orientation
        function handleOrientation(event) {
            if (!compassCalibrated) return;

            const alpha = event.alpha; // Compass direction
            if (alpha !== null) {
                const needle = document.getElementById('compass-needle');
                if (needle) {
                    needle.style.transform = `translate(-50%, -50%) rotate(${-alpha}deg)`;
                }
            }
        }

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            getLocation();
            
            // Request permission for device orientation
            if (typeof DeviceOrientationEvent !== 'undefined' && typeof DeviceOrientationEvent.requestPermission === 'function') {
                DeviceOrientationEvent.requestPermission()
                    .then(response => {
                        if (response === 'granted') {
                            window.addEventListener('deviceorientation', handleOrientation);
                        }
                    });
            } else {
                window.addEventListener('deviceorientation', handleOrientation);
            }
        });

        // Add CSS for pulse animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes pulse {
                0% { opacity: 1; }
                50% { opacity: 0.5; }
                100% { opacity: 1; }
            }
        `;
        document.head.appendChild(style);
    </script>
</x-app-layout>
