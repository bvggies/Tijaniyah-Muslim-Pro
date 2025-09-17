<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prayer Times - Tijaniyah Muslim Pro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="bg-gradient-to-br from-blue-900 via-purple-900 to-indigo-900 min-h-screen">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-10 left-10 w-32 h-32 bg-yellow-300/10 rounded-full animate-pulse"></div>
        <div class="absolute top-32 right-20 w-24 h-24 bg-orange-300/10 rounded-full animate-bounce"></div>
        <div class="absolute bottom-20 left-1/4 w-40 h-40 bg-red-300/10 rounded-full animate-pulse"></div>
    </div>

    <div class="relative z-10 container mx-auto px-4 py-8">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl md:text-6xl font-bold bg-gradient-to-r from-yellow-300 via-orange-400 to-red-500 bg-clip-text text-transparent mb-4">
                Prayer Times
            </h1>
            <p class="text-xl text-yellow-100">Accurate prayer times for your location</p>
        </div>

        <!-- Settings Panel -->
        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-6 mb-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Location Settings -->
                <div>
                    <label class="block text-sm font-medium text-yellow-200 mb-2">Location</label>
                    <div class="flex space-x-2">
                        <input type="text" id="location-input" placeholder="Enter city name" class="flex-1 px-3 py-2 bg-white/20 border border-yellow-300/50 rounded-lg text-white placeholder-yellow-200 focus:ring-2 focus:ring-yellow-400 focus:border-transparent">
                        <button onclick="getCurrentLocation()" class="px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-white rounded-lg transition-colors">
                            <i class="fas fa-location-arrow"></i>
                        </button>
                    </div>
                </div>

                <!-- Calculation Method -->
                <div>
                    <label class="block text-sm font-medium text-yellow-200 mb-2">Calculation Method</label>
                    <select id="calculation-method" class="w-full px-3 py-2 bg-white/20 border border-yellow-300/50 rounded-lg text-white focus:ring-2 focus:ring-yellow-400 focus:border-transparent">
                        <option value="2">Muslim World League (MWL)</option>
                        <option value="4">Umm al-Qura, Makkah</option>
                        <option value="1">Shia Ithna-Ansari</option>
                        <option value="3">Islamic Society of North America (ISNA)</option>
                        <option value="5">Egyptian General Authority of Survey</option>
                        <option value="7">Institute of Geophysics, University of Tehran</option>
                        <option value="8">Gulf Region</option>
                        <option value="9">Kuwait</option>
                        <option value="10">Qatar</option>
                        <option value="11">Majlis Ugama Islam Singapura, Singapore</option>
                        <option value="12">Union Organization islamic de France</option>
                        <option value="13">Diyanet İşleri Başkanlığı, Turkey</option>
                        <option value="14">Spiritual Administration of Muslims of Russia</option>
                        <option value="15">Moonsighting Committee Worldwide (Moonsighting.com)</option>
                        <option value="16">Dubai (unofficial)</option>
                        <option value="17">Konsulat Negara Brunei Darussalam di Kuala Lumpur</option>
                        <option value="18">Kementerian Agama Republik Indonesia</option>
                        <option value="19">Jabatan Kemajuan Islam Malaysia (JAKIM)</option>
                        <option value="20">Majlis Agama Islam Wilayah Persekutuan</option>
                        <option value="21">Universiti Sains Islam Malaysia</option>
                        <option value="22">Islamic Religious Council of Singapore</option>
                        <option value="23">Majlis Ugama Islam Singapura</option>
                        <option value="24">Jabatan Kemajuan Islam Malaysia</option>
                        <option value="25">Kementerian Agama Republik Indonesia</option>
                        <option value="26">Majlis Agama Islam Wilayah Persekutuan</option>
                        <option value="27">Universiti Sains Islam Malaysia</option>
                        <option value="28">Islamic Religious Council of Singapore</option>
                        <option value="29">Majlis Ugama Islam Singapura</option>
                        <option value="30">Jabatan Kemajuan Islam Malaysia</option>
                        <option value="31">Kementerian Agama Republik Indonesia</option>
                        <option value="32">Majlis Agama Islam Wilayah Persekutuan</option>
                        <option value="33">Universiti Sains Islam Malaysia</option>
                        <option value="34">Islamic Religious Council of Singapore</option>
                        <option value="35">Majlis Ugama Islam Singapura</option>
                        <option value="36">Jabatan Kemajuan Islam Malaysia</option>
                        <option value="37">Kementerian Agama Republik Indonesia</option>
                        <option value="38">Majlis Agama Islam Wilayah Persekutuan</option>
                        <option value="39">Universiti Sains Islam Malaysia</option>
                        <option value="40">Islamic Religious Council of Singapore</option>
                        <option value="41">Majlis Ugama Islam Singapura</option>
                        <option value="42">Jabatan Kemajuan Islam Malaysia</option>
                        <option value="43">Kementerian Agama Republik Indonesia</option>
                        <option value="44">Majlis Agama Islam Wilayah Persekutuan</option>
                        <option value="45">Universiti Sains Islam Malaysia</option>
                        <option value="46">Islamic Religious Council of Singapore</option>
                        <option value="47">Majlis Ugama Islam Singapura</option>
                        <option value="48">Jabatan Kemajuan Islam Malaysia</option>
                        <option value="49">Kementerian Agama Republik Indonesia</option>
                        <option value="50">Majlis Agama Islam Wilayah Persekutuan</option>
                    </select>
                </div>

                <!-- Madhab -->
                <div>
                    <label class="block text-sm font-medium text-yellow-200 mb-2">Madhab</label>
                    <select id="madhab" class="w-full px-3 py-2 bg-white/20 border border-yellow-300/50 rounded-lg text-white focus:ring-2 focus:ring-yellow-400 focus:border-transparent">
                        <option value="0">Shafi (Default)</option>
                        <option value="1">Hanafi</option>
                    </select>
                </div>
            </div>

            <!-- Notification Settings -->
            <div class="mt-6 pt-6 border-t border-yellow-300/30">
                <h3 class="text-lg font-semibold text-yellow-100 mb-4">Notification Settings</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <label class="flex items-center space-x-2 text-yellow-200">
                        <input type="checkbox" id="fajr-notification" class="rounded text-yellow-500 focus:ring-yellow-400">
                        <span>Fajr</span>
                    </label>
                    <label class="flex items-center space-x-2 text-yellow-200">
                        <input type="checkbox" id="dhuhr-notification" class="rounded text-yellow-500 focus:ring-yellow-400">
                        <span>Dhuhr</span>
                    </label>
                    <label class="flex items-center space-x-2 text-yellow-200">
                        <input type="checkbox" id="asr-notification" class="rounded text-yellow-500 focus:ring-yellow-400">
                        <span>Asr</span>
                    </label>
                    <label class="flex items-center space-x-2 text-yellow-200">
                        <input type="checkbox" id="maghrib-notification" class="rounded text-yellow-500 focus:ring-yellow-400">
                        <span>Maghrib</span>
                    </label>
                    <label class="flex items-center space-x-2 text-yellow-200">
                        <input type="checkbox" id="isha-notification" class="rounded text-yellow-500 focus:ring-yellow-400">
                        <span>Isha</span>
                    </label>
                    <label class="flex items-center space-x-2 text-yellow-200">
                        <input type="checkbox" id="sunrise-notification" class="rounded text-yellow-500 focus:ring-yellow-400">
                        <span>Sunrise</span>
                    </label>
                </div>
            </div>
        </div>

        <!-- Current Prayer Widget -->
        <div class="bg-gradient-to-r from-yellow-400 via-orange-500 to-red-500 rounded-3xl p-6 mb-8 text-center shadow-2xl">
            <h2 class="text-2xl font-bold text-white mb-4">Next Prayer</h2>
            <div id="next-prayer-widget" class="text-white">
                <div class="text-4xl font-bold mb-2" id="next-prayer-name">Loading...</div>
                <div class="text-2xl mb-4" id="next-prayer-time">--:--</div>
                <div class="text-lg" id="countdown-timer">--:--:--</div>
            </div>
        </div>

        <!-- Today's Prayer Times -->
        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-6 mb-8">
            <h2 class="text-2xl font-bold text-yellow-100 mb-6 text-center">Today's Prayer Times</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4" id="prayer-times-container">
                <!-- Prayer times will be loaded here -->
            </div>
        </div>

        <!-- Weekly View -->
        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-6 mb-8">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold text-yellow-100">Weekly Prayer Times</h2>
                <div class="flex space-x-2">
                    <button onclick="previousWeek()" class="px-4 py-2 bg-white/20 text-white rounded-lg hover:bg-white/30 transition-colors">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button onclick="nextWeek()" class="px-4 py-2 bg-white/20 text-white rounded-lg hover:bg-white/30 transition-colors">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-white">
                    <thead>
                        <tr class="border-b border-yellow-300/30">
                            <th class="text-left py-3 px-4">Date</th>
                            <th class="text-center py-3 px-4">Fajr</th>
                            <th class="text-center py-3 px-4">Sunrise</th>
                            <th class="text-center py-3 px-4">Dhuhr</th>
                            <th class="text-center py-3 px-4">Asr</th>
                            <th class="text-center py-3 px-4">Maghrib</th>
                            <th class="text-center py-3 px-4">Isha</th>
                        </tr>
                    </thead>
                    <tbody id="weekly-prayer-times">
                        <!-- Weekly times will be loaded here -->
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Islamic Calendar -->
        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-6 text-center">
            <h2 class="text-2xl font-bold text-yellow-100 mb-4">
                <i class="fas fa-calendar-alt mr-2"></i>Islamic Calendar
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <p class="text-yellow-200 text-sm mb-2">Today's Islamic Date</p>
                    <p class="text-2xl font-bold text-yellow-100" id="islamic-date">Loading...</p>
                    <p class="text-yellow-300 text-sm" id="islamic-month">Loading month...</p>
                </div>
                <div>
                    <p class="text-yellow-200 text-sm mb-2">Gregorian Date</p>
                    <p class="text-2xl font-bold text-yellow-100" id="gregorian-date">Loading...</p>
                    <p class="text-yellow-300 text-sm" id="current-time">Loading time...</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        let userLocation = null;
        let prayerTimes = null;
        let currentWeek = 0;

        document.addEventListener('DOMContentLoaded', function() {
            // Load saved settings
            loadSettings();
            
            // Get user's location
            getCurrentLocation();
            
            // Initialize
            getIslamicDate();
            updateCurrentTime();
            setInterval(updateCurrentTime, 1000);
            setInterval(updateCountdown, 1000);
        });

        // Get current location
        function getCurrentLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    function(position) {
                        userLocation = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };
                        
                        // Reverse geocode to get city and country
                        reverseGeocode(userLocation.lat, userLocation.lng);
                        
                        // Get prayer times
                        getPrayerTimes();
                    },
                    function(error) {
                        console.error('Error getting location:', error);
                        document.getElementById('location-display').textContent = 'Location access denied';
                    }
                );
            } else {
                console.log('Geolocation not supported');
            }
        }

        // Reverse geocode function
        async function reverseGeocode(lat, lng) {
            try {
                const response = await fetch(`https://api.bigdatacloud.net/data/reverse-geocode-client?latitude=${lat}&longitude=${lng}&localityLanguage=en`);
                const data = await response.json();
                
                if (data.city && data.countryName) {
                    document.getElementById('location-input').value = `${data.city}, ${data.countryName}`;
                }
            } catch (error) {
                console.error('Reverse geocoding failed:', error);
            }
        }

        // Get prayer times
        async function getPrayerTimes() {
            if (!userLocation) return;

            const method = document.getElementById('calculation-method').value;
            const madhab = document.getElementById('madhab').value;
            
            try {
                const response = await fetch(`https://api.aladhan.com/v1/timings?latitude=${userLocation.lat}&longitude=${userLocation.lng}&method=${method}&school=${madhab}`);
                const data = await response.json();
                
                if (data.code === 200) {
                    prayerTimes = data.data.timings;
                    displayPrayerTimes();
                    updateNextPrayer();
                    getWeeklyPrayerTimes();
                }
            } catch (error) {
                console.error('Error fetching prayer times:', error);
            }
        }

        // Display prayer times
        function displayPrayerTimes() {
            if (!prayerTimes) return;

            const prayers = [
                { name: 'Fajr', time: prayerTimes.Fajr, icon: 'fas fa-sun', color: 'from-blue-500 to-blue-600' },
                { name: 'Sunrise', time: prayerTimes.Sunrise, icon: 'fas fa-sun', color: 'from-yellow-500 to-orange-500' },
                { name: 'Dhuhr', time: prayerTimes.Dhuhr, icon: 'fas fa-sun', color: 'from-orange-500 to-red-500' },
                { name: 'Asr', time: prayerTimes.Asr, icon: 'fas fa-sun', color: 'from-red-500 to-pink-500' },
                { name: 'Maghrib', time: prayerTimes.Maghrib, icon: 'fas fa-moon', color: 'from-purple-500 to-indigo-500' },
                { name: 'Isha', time: prayerTimes.Isha, icon: 'fas fa-moon', color: 'from-indigo-500 to-blue-600' }
            ];

            const container = document.getElementById('prayer-times-container');
            container.innerHTML = '';

            prayers.forEach(prayer => {
                const card = document.createElement('div');
                card.className = 'bg-white/20 backdrop-blur-lg rounded-2xl p-4 text-center hover:shadow-2xl transition-all duration-300 transform hover:scale-105';
                
                card.innerHTML = `
                    <div class="w-12 h-12 bg-gradient-to-r ${prayer.color} rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="${prayer.icon} text-white text-lg"></i>
                    </div>
                    <h3 class="text-lg font-bold text-yellow-100 mb-2">${prayer.name}</h3>
                    <p class="text-2xl font-bold text-white">${prayer.time}</p>
                `;
                
                container.appendChild(card);
            });
        }

        // Update next prayer widget
        function updateNextPrayer() {
            if (!prayerTimes) return;

            const now = new Date();
            const currentTime = now.getHours() * 60 + now.getMinutes();
            
            const prayerTimesArray = [
                { name: 'Fajr', time: prayerTimes.Fajr },
                { name: 'Sunrise', time: prayerTimes.Sunrise },
                { name: 'Dhuhr', time: prayerTimes.Dhuhr },
                { name: 'Asr', time: prayerTimes.Asr },
                { name: 'Maghrib', time: prayerTimes.Maghrib },
                { name: 'Isha', time: prayerTimes.Isha }
            ];

            let nextPrayer = null;
            let nextPrayerTime = null;

            for (let prayer of prayerTimesArray) {
                const [hours, minutes] = prayer.time.split(':').map(Number);
                const prayerTime = hours * 60 + minutes;
                
                if (prayerTime > currentTime) {
                    nextPrayer = prayer;
                    nextPrayerTime = prayerTime;
                    break;
                }
            }

            if (nextPrayer) {
                document.getElementById('next-prayer-name').textContent = nextPrayer.name;
                document.getElementById('next-prayer-time').textContent = nextPrayer.time;
            } else {
                // If no prayer found for today, show first prayer of next day
                document.getElementById('next-prayer-name').textContent = 'Fajr (Tomorrow)';
                document.getElementById('next-prayer-time').textContent = prayerTimes.Fajr;
            }
        }

        // Update countdown timer
        function updateCountdown() {
            if (!prayerTimes) return;

            const now = new Date();
            const currentTime = now.getHours() * 60 + now.getMinutes();
            
            const prayerTimesArray = [
                { name: 'Fajr', time: prayerTimes.Fajr },
                { name: 'Sunrise', time: prayerTimes.Sunrise },
                { name: 'Dhuhr', time: prayerTimes.Dhuhr },
                { name: 'Asr', time: prayerTimes.Asr },
                { name: 'Maghrib', time: prayerTimes.Maghrib },
                { name: 'Isha', time: prayerTimes.Isha }
            ];

            let nextPrayerTime = null;

            for (let prayer of prayerTimesArray) {
                const [hours, minutes] = prayer.time.split(':').map(Number);
                const prayerTime = hours * 60 + minutes;
                
                if (prayerTime > currentTime) {
                    nextPrayerTime = prayerTime;
                    break;
                }
            }

            if (nextPrayerTime) {
                const timeDiff = nextPrayerTime - currentTime;
                const hours = Math.floor(timeDiff / 60);
                const minutes = timeDiff % 60;
                const seconds = 60 - now.getSeconds();
                
                document.getElementById('countdown-timer').textContent = 
                    `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
            } else {
                document.getElementById('countdown-timer').textContent = '--:--:--';
            }
        }

        // Get weekly prayer times
        async function getWeeklyPrayerTimes() {
            if (!userLocation) return;

            const method = document.getElementById('calculation-method').value;
            const madhab = document.getElementById('madhab').value;
            const today = new Date();
            const startDate = new Date(today.getTime() + currentWeek * 7 * 24 * 60 * 60 * 1000);
            const endDate = new Date(startDate.getTime() + 6 * 24 * 60 * 60 * 1000);
            
            try {
                const response = await fetch(`https://api.aladhan.com/v1/calendar?latitude=${userLocation.lat}&longitude=${userLocation.lng}&method=${method}&school=${madhab}&start=${startDate.getDate()}-${startDate.getMonth() + 1}-${startDate.getFullYear()}&end=${endDate.getDate()}-${endDate.getMonth() + 1}-${endDate.getFullYear()}`);
                const data = await response.json();
                
                if (data.code === 200) {
                    displayWeeklyPrayerTimes(data.data);
                }
            } catch (error) {
                console.error('Error fetching weekly prayer times:', error);
            }
        }

        // Display weekly prayer times
        function displayWeeklyPrayerTimes(weeklyData) {
            const tbody = document.getElementById('weekly-prayer-times');
            tbody.innerHTML = '';

            weeklyData.forEach(day => {
                const row = document.createElement('tr');
                row.className = 'border-b border-yellow-300/20';
                
                const date = new Date(day.date.gregorian.date);
                const dayName = date.toLocaleDateString('en-US', { weekday: 'long' });
                const dayDate = date.toLocaleDateString('en-US', { month: 'short', day: 'numeric' });
                
                row.innerHTML = `
                    <td class="py-3 px-4">
                        <div class="font-semibold">${dayName}</div>
                        <div class="text-sm text-yellow-300">${dayDate}</div>
                    </td>
                    <td class="text-center py-3 px-4">${day.timings.Fajr}</td>
                    <td class="text-center py-3 px-4">${day.timings.Sunrise}</td>
                    <td class="text-center py-3 px-4">${day.timings.Dhuhr}</td>
                    <td class="text-center py-3 px-4">${day.timings.Asr}</td>
                    <td class="text-center py-3 px-4">${day.timings.Maghrib}</td>
                    <td class="text-center py-3 px-4">${day.timings.Isha}</td>
                `;
                
                tbody.appendChild(row);
            });
        }

        // Navigation functions
        function previousWeek() {
            currentWeek--;
            getWeeklyPrayerTimes();
        }

        function nextWeek() {
            currentWeek++;
            getWeeklyPrayerTimes();
        }

        // Settings functions
        function loadSettings() {
            const savedSettings = localStorage.getItem('prayerSettings');
            if (savedSettings) {
                const settings = JSON.parse(savedSettings);
                document.getElementById('calculation-method').value = settings.method || '2';
                document.getElementById('madhab').value = settings.madhab || '0';
                // Load notification settings
                Object.keys(settings.notifications || {}).forEach(prayer => {
                    const checkbox = document.getElementById(`${prayer}-notification`);
                    if (checkbox) {
                        checkbox.checked = settings.notifications[prayer];
                    }
                });
            }
        }

        function saveSettings() {
            const settings = {
                method: document.getElementById('calculation-method').value,
                madhab: document.getElementById('madhab').value,
                notifications: {
                    fajr: document.getElementById('fajr-notification').checked,
                    dhuhr: document.getElementById('dhuhr-notification').checked,
                    asr: document.getElementById('asr-notification').checked,
                    maghrib: document.getElementById('maghrib-notification').checked,
                    isha: document.getElementById('isha-notification').checked,
                    sunrise: document.getElementById('sunrise-notification').checked
                }
            };
            localStorage.setItem('prayerSettings', JSON.stringify(settings));
        }

        // Event listeners
        document.getElementById('calculation-method').addEventListener('change', function() {
            saveSettings();
            getPrayerTimes();
        });

        document.getElementById('madhab').addEventListener('change', function() {
            saveSettings();
            getPrayerTimes();
        });

        // Notification checkboxes
        ['fajr', 'dhuhr', 'asr', 'maghrib', 'isha', 'sunrise'].forEach(prayer => {
            document.getElementById(`${prayer}-notification`).addEventListener('change', saveSettings);
        });

        // Get Islamic date
        function getIslamicDate() {
            try {
                const today = new Date();
                const islamicDate = new Intl.DateTimeFormat('en-u-ca-islamic', {
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                }).format(today);
                
                document.getElementById('islamic-date').textContent = islamicDate;
                document.getElementById('islamic-month').textContent = 'Islamic Calendar';
            } catch (error) {
                document.getElementById('islamic-date').textContent = 'Islamic Date';
                document.getElementById('islamic-month').textContent = 'Loading...';
            }
        }

        // Update current time
        function updateCurrentTime() {
            const now = new Date();
            const timeString = now.toLocaleTimeString();
            const dateString = now.toLocaleDateString();
            
            document.getElementById('current-time').textContent = timeString;
            document.getElementById('gregorian-date').textContent = dateString;
        }
    </script>
</body>
</html>
