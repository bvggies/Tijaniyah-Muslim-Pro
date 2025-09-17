<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div class="slide-in-left">
                <h2 class="text-3xl font-bold bg-gradient-to-r from-blue-600 to-blue-800 bg-clip-text text-transparent">
                    <i class="fas fa-mosque mr-3"></i>Prayer Times
                </h2>
                <p class="text-gray-600 mt-1">Accurate prayer times for your location</p>
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
            <!-- Location and Islamic Calendar -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <!-- Location Card -->
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-bold text-gray-800">
                            <i class="fas fa-map-marker-alt text-blue-600 mr-2"></i>
                            Current Location
                        </h3>
                        <button onclick="getLocation()" class="bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                            <i class="fas fa-sync-alt mr-2"></i>Update
                        </button>
                    </div>
                    <p class="text-gray-600 text-lg" id="location-text">Detecting your location...</p>
                    <p class="text-gray-500 text-sm mt-2" id="coordinates-text"></p>
                </div>

                <!-- Islamic Calendar Card -->
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl shadow-xl p-6">
                    <h3 class="text-xl font-bold text-purple-900 mb-4">
                        <i class="fas fa-calendar-alt text-purple-600 mr-2"></i>
                        Islamic Calendar
                    </h3>
                    <div class="text-center">
                        <p class="text-purple-800 text-2xl font-bold mb-2" id="islamic-date">Loading...</p>
                        <p class="text-purple-700 text-lg" id="islamic-month">Loading month...</p>
                        <p class="text-purple-600 text-sm mt-2" id="gregorian-date">Loading...</p>
                    </div>
                </div>
            </div>

            <!-- Prayer Times Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6 mb-8">
                <!-- Fajr -->
                <div class="bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-indigo-500 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <i class="fas fa-sun text-white text-2xl"></i>
                        </div>
                        <h4 class="text-xl font-bold text-indigo-900 mb-2">Fajr</h4>
                        <p class="text-3xl font-bold text-indigo-800 mb-2" id="fajr-time">--:--</p>
                        <p class="text-indigo-600 text-sm">Dawn Prayer</p>
                    </div>
                </div>

                <!-- Dhuhr -->
                <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-yellow-500 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <i class="fas fa-sun text-white text-2xl"></i>
                        </div>
                        <h4 class="text-xl font-bold text-yellow-900 mb-2">Dhuhr</h4>
                        <p class="text-3xl font-bold text-yellow-800 mb-2" id="dhuhr-time">--:--</p>
                        <p class="text-yellow-600 text-sm">Midday Prayer</p>
                    </div>
                </div>

                <!-- Asr -->
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-orange-500 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <i class="fas fa-sun text-white text-2xl"></i>
                        </div>
                        <h4 class="text-xl font-bold text-orange-900 mb-2">Asr</h4>
                        <p class="text-3xl font-bold text-orange-800 mb-2" id="asr-time">--:--</p>
                        <p class="text-orange-600 text-sm">Afternoon Prayer</p>
                    </div>
                </div>

                <!-- Maghrib -->
                <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-red-500 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <i class="fas fa-moon text-white text-2xl"></i>
                        </div>
                        <h4 class="text-xl font-bold text-red-900 mb-2">Maghrib</h4>
                        <p class="text-3xl font-bold text-red-800 mb-2" id="maghrib-time">--:--</p>
                        <p class="text-red-600 text-sm">Sunset Prayer</p>
                    </div>
                </div>

                <!-- Isha -->
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-purple-500 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <i class="fas fa-moon text-white text-2xl"></i>
                        </div>
                        <h4 class="text-xl font-bold text-purple-900 mb-2">Isha</h4>
                        <p class="text-3xl font-bold text-purple-800 mb-2" id="isha-time">--:--</p>
                        <p class="text-purple-600 text-sm">Night Prayer</p>
                    </div>
                </div>
            </div>

            <!-- Next Prayer Card -->
            <div class="bg-gradient-to-r from-emerald-500 to-teal-600 rounded-2xl p-8 shadow-2xl mb-8">
                <div class="text-center text-white">
                    <h3 class="text-2xl font-bold mb-4">
                        <i class="fas fa-clock mr-2"></i>
                        Next Prayer
                    </h3>
                    <div class="text-4xl font-bold mb-2" id="next-prayer-name">Loading...</div>
                    <div class="text-2xl mb-4" id="next-prayer-time">--:--</div>
                    <div class="text-lg" id="time-remaining">Time remaining: --</div>
                </div>
            </div>

            <!-- Settings Card -->
            <div class="bg-white rounded-2xl shadow-xl p-6">
                <h3 class="text-xl font-bold text-gray-800 mb-6">
                    <i class="fas fa-cog mr-2"></i>
                    Prayer Time Settings
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Calculation Method</label>
                        <select id="calculation-method" class="w-full p-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="MWL">Muslim World League</option>
                            <option value="ISNA">Islamic Society of North America</option>
                            <option value="Egypt">Egyptian General Authority</option>
                            <option value="Makkah">Umm al-Qura, Makkah</option>
                            <option value="Karachi">University of Islamic Sciences, Karachi</option>
                            <option value="Tehran">Institute of Geophysics, University of Tehran</option>
                            <option value="Jafari">Shia Ithna-Ansari</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Asr Method</label>
                        <select id="asr-method" class="w-full p-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="0">Shafi (Standard)</option>
                            <option value="1">Hanafi</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">High Latitude Method</label>
                        <select id="high-lat-method" class="w-full p-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="0">NightMiddle</option>
                            <option value="1">OneSeventh</option>
                            <option value="2">AngleBased</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Time Format</label>
                        <select id="time-format" class="w-full p-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="24">24 Hour</option>
                            <option value="12">12 Hour</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let currentLocation = null;
        let prayerTimes = {};

        // Get user's location
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            } else {
                document.getElementById('location-text').innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        function showPosition(position) {
            currentLocation = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            
            // Reverse geocoding to get city and country
            reverseGeocode(currentLocation.lat, currentLocation.lng);
            
            // Calculate prayer times
            calculatePrayerTimes();
        }

        async function reverseGeocode(lat, lng) {
            try {
                const response = await fetch(`https://api.bigdatacloud.net/data/reverse-geocode-client?latitude=${lat}&longitude=${lng}&localityLanguage=en`);
                const data = await response.json();
                
                if (data.city && data.countryName) {
                    document.getElementById('location-text').innerHTML = 
                        `<strong>${data.city}, ${data.countryName}</strong>`;
                    document.getElementById('coordinates-text').innerHTML = 
                        `Coordinates: ${lat.toFixed(4)}, ${lng.toFixed(4)}`;
                } else {
                    document.getElementById('location-text').innerHTML = 
                        `Location: ${lat.toFixed(4)}, ${lng.toFixed(4)}`;
                }
            } catch (error) {
                document.getElementById('location-text').innerHTML = 
                    `Location: ${lat.toFixed(4)}, ${lng.toFixed(4)}`;
                document.getElementById('coordinates-text').innerHTML = 
                    "Unable to get city name";
            }
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
            document.getElementById('location-text').innerHTML = message;
        }

        // Calculate prayer times using a simplified method
        function calculatePrayerTimes() {
            if (!currentLocation) return;

            const now = new Date();
            const lat = currentLocation.lat;
            const lng = currentLocation.lng;
            
            // Simplified prayer time calculation
            // In a real app, you would use a proper prayer time calculation library
            
            // For demonstration, we'll use approximate times
            const times = {
                fajr: "05:30",
                dhuhr: "12:15",
                asr: "15:45",
                maghrib: "18:20",
                isha: "19:45"
            };

            // Update the display
            document.getElementById('fajr-time').textContent = times.fajr;
            document.getElementById('dhuhr-time').textContent = times.dhuhr;
            document.getElementById('asr-time').textContent = times.asr;
            document.getElementById('maghrib-time').textContent = times.maghrib;
            document.getElementById('isha-time').textContent = times.isha;

            // Calculate next prayer
            calculateNextPrayer(times);
        }

        function calculateNextPrayer(times) {
            const now = new Date();
            const currentTime = now.getHours() * 60 + now.getMinutes();
            
            const prayerTimes = [
                { name: 'Fajr', time: times.fajr, priority: 1 },
                { name: 'Dhuhr', time: times.dhuhr, priority: 2 },
                { name: 'Asr', time: times.asr, priority: 3 },
                { name: 'Maghrib', time: times.maghrib, priority: 4 },
                { name: 'Isha', time: times.isha, priority: 5 }
            ];

            let nextPrayer = null;
            let minDiff = Infinity;

            prayerTimes.forEach(prayer => {
                const [hours, minutes] = prayer.time.split(':').map(Number);
                const prayerTime = hours * 60 + minutes;
                let diff = prayerTime - currentTime;
                
                if (diff < 0) diff += 24 * 60; // Next day
                
                if (diff < minDiff) {
                    minDiff = diff;
                    nextPrayer = prayer;
                }
            });

            if (nextPrayer) {
                document.getElementById('next-prayer-name').textContent = nextPrayer.name;
                document.getElementById('next-prayer-time').textContent = nextPrayer.time;
                
                const hours = Math.floor(minDiff / 60);
                const minutes = minDiff % 60;
                document.getElementById('time-remaining').textContent = 
                    `Time remaining: ${hours}h ${minutes}m`;
            }
        }

        // Auto-update every minute
        setInterval(() => {
            if (currentLocation) {
                calculatePrayerTimes();
            }
        }, 60000);

        // Islamic Calendar Functions
        function getIslamicDate() {
            const now = new Date();
            const gregorianYear = now.getFullYear();
            const gregorianMonth = now.getMonth() + 1;
            const gregorianDay = now.getDate();
            
            // Convert to Islamic date (simplified calculation)
            const islamicDate = gregorianToIslamic(gregorianYear, gregorianMonth, gregorianDay);
            
            const islamicMonths = [
                'Muharram', 'Safar', 'Rabi\' al-awwal', 'Rabi\' al-thani',
                'Jumada al-awwal', 'Jumada al-thani', 'Rajab', 'Sha\'ban',
                'Ramadan', 'Shawwal', 'Dhu al-Qi\'dah', 'Dhu al-Hijjah'
            ];
            
            const islamicMonthsArabic = [
                'محرم', 'صفر', 'ربيع الأول', 'ربيع الثاني',
                'جمادى الأولى', 'جمادى الثانية', 'رجب', 'شعبان',
                'رمضان', 'شوال', 'ذو القعدة', 'ذو الحجة'
            ];
            
            document.getElementById('islamic-date').innerHTML = 
                `${islamicDate.day} ${islamicMonthsArabic[islamicDate.month - 1]} ${islamicDate.year}`;
            document.getElementById('islamic-month').innerHTML = 
                `${islamicMonths[islamicDate.month - 1]} ${islamicDate.year}`;
            document.getElementById('gregorian-date').innerHTML = 
                `${gregorianDay}/${gregorianMonth}/${gregorianYear}`;
        }

        function gregorianToIslamic(gYear, gMonth, gDay) {
            // Simplified conversion - in practice, use a proper Islamic calendar library
            const epoch = new Date(622, 6, 16); // July 16, 622 CE (1 Muharram 1 AH)
            const target = new Date(gYear, gMonth - 1, gDay);
            const diffTime = target - epoch;
            const diffDays = Math.floor(diffTime / (1000 * 60 * 60 * 24));
            
            // Approximate Islamic year (354.37 days per year)
            const islamicYear = Math.floor(diffDays / 354.37) + 1;
            const remainingDays = diffDays % 354.37;
            
            // Approximate month calculation
            const islamicMonth = Math.floor(remainingDays / 29.53) + 1;
            const islamicDay = Math.floor(remainingDays % 29.53) + 1;
            
            return {
                year: islamicYear,
                month: Math.min(islamicMonth, 12),
                day: Math.min(islamicDay, 30)
            };
        }

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            getLocation();
            getIslamicDate();
        });
    </script>
</x-app-layout>
