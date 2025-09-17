<x-mobile-layout headerTitle="Mosques Directory" :showBackButton="true">

    <div class="px-4 py-6">
        <!-- Search and Location -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-4 mb-6">
            <div class="space-y-3">
                <div>
                    <input type="text" id="mosque-search" placeholder="Search for mosques or enter location..." 
                           class="w-full p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-lime-500 focus:border-transparent text-base">
                </div>
                <div class="grid grid-cols-2 gap-3">
                    <button onclick="getCurrentLocation()" class="bg-gradient-to-r from-lime-500 to-lime-600 hover:from-lime-600 hover:to-lime-700 text-white font-semibold py-3 px-4 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 touch-target">
                        <i class="fas fa-location-arrow mr-2"></i>My Location
                    </button>
                    <button onclick="toggleMapView()" class="bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-semibold py-3 px-4 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 touch-target">
                        <i class="fas fa-map mr-2"></i>Map View
                    </button>
                </div>
            </div>
            <div class="mt-3">
                <p class="text-gray-600 text-sm" id="location-status">Click "My Location" to find nearby mosques</p>
            </div>
        </div>

        <!-- Map Container -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-4 mb-6" id="map-container" style="display: none;">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">
                <i class="fas fa-map text-lime-500 mr-2"></i>
                Nearby Mosques Map
            </h3>
            <div id="map" class="w-full h-64 rounded-xl"></div>
        </div>

        <!-- Mosque List -->
        <div class="space-y-4" id="mosques-container">
            <!-- Mosques will be loaded here -->
        </div>

        <!-- Mosque Detail Modal -->
        <div id="mosque-modal" class="mobile-modal hidden">
            <div class="mobile-modal-content p-6">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-bold text-gray-800" id="modal-mosque-name">Mosque Name</h3>
                    <button onclick="closeMosqueModal()" class="touch-target p-2 -mr-2 text-gray-500">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                
                <div class="space-y-6">
                    <!-- Mosque Info -->
                    <div>
                        <h4 class="text-lg font-semibold text-gray-700 mb-4">Mosque Information</h4>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <i class="fas fa-map-marker-alt text-lime-500 mr-3 mt-1"></i>
                                <div>
                                    <p class="font-medium text-gray-800">Address</p>
                                    <p class="text-gray-600" id="modal-address">Loading...</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <i class="fas fa-phone text-lime-500 mr-3 mt-1"></i>
                                <div>
                                    <p class="font-medium text-gray-800">Phone</p>
                                    <p class="text-gray-600" id="modal-phone">Loading...</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <i class="fas fa-globe text-lime-500 mr-3 mt-1"></i>
                                <div>
                                    <p class="font-medium text-gray-800">Website</p>
                                    <p class="text-gray-600" id="modal-website">Loading...</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <i class="fas fa-clock text-lime-500 mr-3 mt-1"></i>
                                <div>
                                    <p class="font-medium text-gray-800">Jummah Time</p>
                                    <p class="text-gray-600" id="modal-jummah">Loading...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Prayer Times -->
                    <div>
                        <h4 class="text-lg font-semibold text-gray-700 mb-4">Today's Prayer Times</h4>
                        <div class="space-y-3" id="modal-prayer-times">
                            <!-- Prayer times will be loaded here -->
                        </div>
                    </div>
                    
                    <!-- Events Section -->
                    <div>
                        <h4 class="text-lg font-semibold text-gray-700 mb-4">Upcoming Events</h4>
                        <div id="modal-events" class="space-y-3">
                            <!-- Events will be loaded here -->
                        </div>
                    </div>
                    
                    <!-- Actions -->
                    <div class="grid grid-cols-2 gap-3">
                        <button onclick="getDirections()" class="px-4 py-3 bg-lime-500 text-white rounded-lg hover:bg-lime-600 touch-target">
                            <i class="fas fa-directions mr-2"></i>Directions
                        </button>
                        <button onclick="checkIn()" class="px-4 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 touch-target">
                            <i class="fas fa-check-in mr-2"></i>Check In
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkH-7zxndUzUd3SlGX3Io5jDe8ZlKcXg4&libraries=places"></script>
    
    <script>
        let map;
        let userLocation = null;
        let mosques = [];
        let markers = [];
        let currentMosque = null;
        let isMapVisible = false;

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            initializeMap();
            setupEventListeners();
        });

        // Initialize Google Map
        function initializeMap() {
            const mapContainer = document.getElementById('map');
            if (mapContainer) {
                map = new google.maps.Map(mapContainer, {
                    zoom: 13,
                    center: { lat: 40.7128, lng: -74.0060 }, // Default to NYC
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                });
            }
        }

        // Setup event listeners
        function setupEventListeners() {
            // Search input
            const searchInput = document.getElementById('mosque-search');
            if (searchInput) {
                searchInput.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') {
                        searchMosques();
                    }
                });
            }
        }

        // Get current location
        function getCurrentLocation() {
            if (!navigator.geolocation) {
                updateLocationStatus('Geolocation is not supported by this browser.');
                return;
            }

            updateLocationStatus('Getting your location...');
            
            navigator.geolocation.getCurrentPosition(
                function(position) {
                    userLocation = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    
                    updateLocationStatus('Location found! Searching for nearby mosques...');
                    searchNearbyMosques();
                },
                function(error) {
                    let message = 'Unable to retrieve your location. ';
                    switch(error.code) {
                        case error.PERMISSION_DENIED:
                            message += 'Location access denied by user.';
                            break;
                        case error.POSITION_UNAVAILABLE:
                            message += 'Location information unavailable.';
                            break;
                        case error.TIMEOUT:
                            message += 'Location request timed out.';
                            break;
                        default:
                            message += 'An unknown error occurred.';
                            break;
                    }
                    updateLocationStatus(message);
                },
                {
                    enableHighAccuracy: true,
                    timeout: 10000,
                    maximumAge: 0
                }
            );
        }

        // Search nearby mosques using Google Places API
        function searchNearbyMosques() {
            if (!userLocation) {
                updateLocationStatus('Please enable location access first.');
                return;
            }

            const service = new google.maps.places.PlacesService(map);
            const request = {
                location: userLocation,
                radius: 5000, // 5km radius
                keyword: 'mosque',
                type: 'place_of_worship'
            };

            service.nearbySearch(request, function(results, status) {
                if (status === google.maps.places.PlacesServiceStatus.OK) {
                    mosques = results.filter(place => 
                        place.name.toLowerCase().includes('mosque') || 
                        place.name.toLowerCase().includes('masjid') ||
                        place.types.includes('place_of_worship')
                    );
                    
                    displayMosques();
                    updateMapWithMosques();
                    updateLocationStatus(`Found ${mosques.length} mosques nearby`);
                } else {
                    updateLocationStatus('No mosques found nearby. Try a different location.');
                }
            });
        }

        // Search mosques by text
        function searchMosques() {
            const searchTerm = document.getElementById('mosque-search').value;
            if (!searchTerm.trim()) return;

            const service = new google.maps.places.PlacesService(map);
            const request = {
                query: searchTerm + ' mosque',
                fields: ['name', 'geometry', 'formatted_address', 'place_id', 'rating', 'user_ratings_total']
            };

            service.textSearch(request, function(results, status) {
                if (status === google.maps.places.PlacesServiceStatus.OK) {
                    mosques = results.filter(place => 
                        place.name.toLowerCase().includes('mosque') || 
                        place.name.toLowerCase().includes('masjid')
                    );
                    
                    displayMosques();
                    updateMapWithMosques();
                    updateLocationStatus(`Found ${mosques.length} mosques for "${searchTerm}"`);
                } else {
                    updateLocationStatus('No mosques found for your search.');
                }
            });
        }

        // Display mosques in list view
        function displayMosques() {
            const container = document.getElementById('mosques-container');
            
            if (mosques.length === 0) {
                container.innerHTML = `
                    <div class="col-span-full text-center text-gray-500 py-16">
                        <i class="fas fa-mosque text-6xl mb-4"></i>
                        <p class="text-xl">No mosques found. Try searching or use your location.</p>
                    </div>
                `;
                return;
            }

            container.innerHTML = mosques.map((mosque, index) => `
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4 hover:shadow-md transition-all duration-300 cursor-pointer touch-target" onclick="showMosqueDetails(${index})">
                    <div class="flex items-start justify-between mb-3">
                        <div class="flex items-center flex-1">
                            <div class="w-10 h-10 bg-lime-500 rounded-lg flex items-center justify-center shadow-sm mr-3">
                                <i class="fas fa-mosque text-white text-lg"></i>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h3 class="text-base font-semibold text-gray-800 truncate">${mosque.name}</h3>
                                <p class="text-gray-600 text-sm truncate">${mosque.formatted_address || 'Address not available'}</p>
                            </div>
                        </div>
                        <div class="text-right ml-2">
                            ${mosque.rating ? `
                                <div class="flex items-center text-yellow-500 text-sm">
                                    <i class="fas fa-star mr-1"></i>
                                    <span>${mosque.rating}</span>
                                </div>
                            ` : ''}
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-3 gap-2 text-xs text-gray-600 mb-3">
                        <div class="flex items-center">
                            <i class="fas fa-clock text-lime-500 mr-1"></i>
                            <span>1:00 PM</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-users text-lime-500 mr-1"></i>
                            <span>Community</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-parking text-lime-500 mr-1"></i>
                            <span>Parking</span>
                        </div>
                    </div>
                    
                    <div class="flex justify-between items-center">
                        <span class="text-lime-600 text-sm font-medium">Tap for details</span>
                        <i class="fas fa-chevron-right text-lime-500 text-sm"></i>
                    </div>
                </div>
            `).join('');
        }

        // Update map with mosque markers
        function updateMapWithMosques() {
            if (!map) return;

            // Clear existing markers
            markers.forEach(marker => marker.setMap(null));
            markers = [];

            // Add user location marker
            if (userLocation) {
                const userMarker = new google.maps.Marker({
                    position: userLocation,
                    map: map,
                    title: 'Your Location',
                    icon: {
                        url: 'https://maps.google.com/mapfiles/ms/icons/blue-dot.png'
                    }
                });
                markers.push(userMarker);
            }

            // Add mosque markers
            mosques.forEach((mosque, index) => {
                const marker = new google.maps.Marker({
                    position: mosque.geometry.location,
                    map: map,
                    title: mosque.name,
                    icon: {
                        url: 'https://maps.google.com/mapfiles/ms/icons/green-dot.png'
                    }
                });

                marker.addListener('click', () => {
                    showMosqueDetails(index);
                });

                markers.push(marker);
            });

            // Fit map to show all markers
            if (markers.length > 0) {
                const bounds = new google.maps.LatLngBounds();
                markers.forEach(marker => bounds.extend(marker.getPosition()));
                map.fitBounds(bounds);
            }
        }

        // Show mosque details modal
        function showMosqueDetails(index) {
            currentMosque = mosques[index];
            if (!currentMosque) return;

            // Update modal content
            document.getElementById('modal-mosque-name').textContent = currentMosque.name;
            document.getElementById('modal-address').textContent = currentMosque.formatted_address || 'Address not available';
            document.getElementById('modal-phone').textContent = 'Phone not available';
            document.getElementById('modal-website').textContent = 'Website not available';
            document.getElementById('modal-jummah').textContent = '1:00 PM';

            // Load prayer times
            loadPrayerTimes();

            // Load events
            loadMosqueEvents();

            // Show modal
            const modal = document.getElementById('mosque-modal');
            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.classList.add('show');
            }, 10);
        }

        // Close mosque modal
        function closeMosqueModal() {
            const modal = document.getElementById('mosque-modal');
            modal.classList.remove('show');
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
            currentMosque = null;
        }

        // Load prayer times for current mosque
        function loadPrayerTimes() {
            const prayerTimes = [
                { name: 'Fajr', time: '05:30' },
                { name: 'Dhuhr', time: '12:15' },
                { name: 'Asr', time: '15:45' },
                { name: 'Maghrib', time: '18:20' },
                { name: 'Isha', time: '19:45' }
            ];

            const container = document.getElementById('modal-prayer-times');
            container.innerHTML = prayerTimes.map(prayer => `
                <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                    <span class="font-medium text-gray-800">${prayer.name}</span>
                    <span class="text-lime-600 font-semibold">${prayer.time}</span>
                </div>
            `).join('');
        }

        // Load mosque events
        function loadMosqueEvents() {
            const events = [
                {
                    title: 'Weekly Quran Class',
                    date: 'Every Saturday',
                    time: '7:00 PM - 8:30 PM',
                    type: 'Education'
                },
                {
                    title: 'Community Iftar',
                    date: 'This Friday',
                    time: '6:30 PM - 8:00 PM',
                    type: 'Community'
                },
                {
                    title: 'Youth Program',
                    date: 'Every Sunday',
                    time: '2:00 PM - 4:00 PM',
                    type: 'Youth'
                }
            ];

            const container = document.getElementById('modal-events');
            container.innerHTML = events.map(event => `
                <div class="p-4 bg-gradient-to-r from-lime-50 to-lime-100 rounded-lg">
                    <h5 class="font-semibold text-gray-800">${event.title}</h5>
                    <p class="text-gray-600 text-sm">${event.date} • ${event.time}</p>
                    <span class="inline-block px-2 py-1 bg-lime-200 text-lime-800 text-xs rounded-full mt-2">${event.type}</span>
                </div>
            `).join('');
        }

        // Get directions to mosque
        function getDirections() {
            if (!currentMosque) return;

            const destination = currentMosque.geometry.location;
            const url = `https://www.google.com/maps/dir/?api=1&destination=${destination.lat()},${destination.lng()}`;
            window.open(url, '_blank');
        }

        // Check in to mosque
        function checkIn() {
            if (!currentMosque) return;

            // Simulate check-in
            const checkInData = {
                mosqueId: currentMosque.place_id,
                mosqueName: currentMosque.name,
                timestamp: new Date().toISOString(),
                location: currentMosque.geometry.location
            };

            // Save to localStorage
            let checkIns = JSON.parse(localStorage.getItem('mosqueCheckIns') || '[]');
            checkIns.unshift(checkInData);
            localStorage.setItem('mosqueCheckIns', JSON.stringify(checkIns));

            showSuccessMessage(`Checked in to ${currentMosque.name}!`);
            closeMosqueModal();
        }

        // Toggle map view
        function toggleMapView() {
            const mapContainer = document.getElementById('map-container');
            isMapVisible = !isMapVisible;
            
            if (isMapVisible) {
                mapContainer.style.display = 'block';
                if (mosques.length > 0) {
                    updateMapWithMosques();
                }
            } else {
                mapContainer.style.display = 'none';
            }
        }

        // Update location status
        function updateLocationStatus(message) {
            const statusElement = document.getElementById('location-status');
            if (statusElement) {
                statusElement.textContent = message;
            }
        }

        // Show success message
        function showSuccessMessage(message) {
            const notification = document.createElement('div');
            notification.className = 'fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50';
            notification.innerHTML = `
                <div class="flex items-center">
                    <i class="fas fa-check-circle mr-2"></i>
                    <span>${message}</span>
                </div>
            `;
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.remove();
            }, 3000);
        }
    </script>
</x-app-layout>
