<x-mobile-layout headerTitle="Dashboard" :showBackButton="false">
    <div class="px-4 py-6">
        <!-- Welcome Section -->
        <div class="bg-gradient-to-r from-emerald-600 to-emerald-700 rounded-2xl p-6 mb-6 text-white">
            <div class="flex items-center justify-between mb-4">
                <div>
                    <h2 class="text-xl font-bold">Assalamu Alaikum</h2>
                    <p class="text-emerald-100 text-sm">Welcome to Tijaniyah Pro</p>
                </div>
                <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                    <i class="fas fa-moon text-xl"></i>
                </div>
            </div>
            
            <!-- Islamic Date -->
            <div class="bg-white bg-opacity-20 rounded-xl p-4">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-emerald-100">Today's Date</p>
                        <p class="font-semibold" id="islamic-date">Loading...</p>
                    </div>
                    <div class="text-right">
                        <p class="text-sm text-emerald-100">Next Prayer</p>
                        <p class="font-semibold" id="next-prayer">Loading...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="mb-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Quick Actions</h3>
            <div class="grid grid-cols-2 gap-3">
                <a href="{{ route('prayer-times') }}" class="bg-white rounded-xl p-4 shadow-sm border border-gray-200 hover:shadow-md transition-shadow">
                    <div class="flex items-center mb-2">
                        <i class="fas fa-clock text-emerald-600 text-xl mr-3"></i>
                        <span class="font-semibold text-gray-900">Prayer Times</span>
                    </div>
                    <p class="text-sm text-gray-600">Today's prayers</p>
                </a>
                
                <a href="{{ route('quran') }}" class="bg-white rounded-xl p-4 shadow-sm border border-gray-200 hover:shadow-md transition-shadow">
                    <div class="flex items-center mb-2">
                        <i class="fas fa-book-quran text-emerald-600 text-xl mr-3"></i>
                        <span class="font-semibold text-gray-900">Quran</span>
                    </div>
                    <p class="text-sm text-gray-600">Read & listen</p>
                </a>
                
                <a href="{{ route('ai-noor') }}" class="bg-white rounded-xl p-4 shadow-sm border border-gray-200 hover:shadow-md transition-shadow">
                    <div class="flex items-center mb-2">
                        <i class="fas fa-robot text-emerald-600 text-xl mr-3"></i>
                        <span class="font-semibold text-gray-900">AI Noor</span>
                    </div>
                    <p class="text-sm text-gray-600">Ask questions</p>
                </a>
                
                <a href="{{ route('tasbih') }}" class="bg-white rounded-xl p-4 shadow-sm border border-gray-200 hover:shadow-md transition-shadow">
                    <div class="flex items-center mb-2">
                        <i class="fas fa-circle text-emerald-600 text-xl mr-3"></i>
                        <span class="font-semibold text-gray-900">Tasbih</span>
                    </div>
                    <p class="text-sm text-gray-600">Digital counter</p>
                </a>
            </div>
        </div>

        <!-- Search Bar -->
        <div class="mb-6">
            <div class="relative">
                <input type="text" id="mobile-search" placeholder="Search features or ask AI Noor..." 
                       class="w-full p-4 pr-12 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-base">
                <button onclick="performMobileSearch()" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-emerald-600">
                    <i class="fas fa-search text-lg"></i>
                </button>
            </div>
        </div>

        <!-- Today's Features -->
        <div class="mb-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Today's Features</h3>
            <div class="space-y-3">
                <!-- Prayer Times Card -->
                <div class="bg-white rounded-xl p-4 shadow-sm border border-gray-200">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center">
                            <i class="fas fa-clock text-emerald-600 text-lg mr-3"></i>
                            <span class="font-semibold text-gray-900">Prayer Times</span>
                        </div>
                        <span class="text-sm text-gray-500" id="current-time">Loading...</span>
                    </div>
                    <div class="grid grid-cols-5 gap-2 text-center">
                        <div class="p-2 bg-gray-50 rounded-lg">
                            <p class="text-xs text-gray-600">Fajr</p>
                            <p class="text-sm font-semibold text-gray-900" id="fajr-time">--:--</p>
                        </div>
                        <div class="p-2 bg-gray-50 rounded-lg">
                            <p class="text-xs text-gray-600">Dhuhr</p>
                            <p class="text-sm font-semibold text-gray-900" id="dhuhr-time">--:--</p>
                        </div>
                        <div class="p-2 bg-gray-50 rounded-lg">
                            <p class="text-xs text-gray-600">Asr</p>
                            <p class="text-sm font-semibold text-gray-900" id="asr-time">--:--</p>
                        </div>
                        <div class="p-2 bg-gray-50 rounded-lg">
                            <p class="text-xs text-gray-600">Maghrib</p>
                            <p class="text-sm font-semibold text-gray-900" id="maghrib-time">--:--</p>
                        </div>
                        <div class="p-2 bg-gray-50 rounded-lg">
                            <p class="text-xs text-gray-600">Isha</p>
                            <p class="text-sm font-semibold text-gray-900" id="isha-time">--:--</p>
                        </div>
                    </div>
                </div>

                <!-- Daily Dua Card -->
                <div class="bg-white rounded-xl p-4 shadow-sm border border-gray-200">
                    <div class="flex items-center mb-3">
                        <i class="fas fa-hands-praying text-emerald-600 text-lg mr-3"></i>
                        <span class="font-semibold text-gray-900">Daily Dua</span>
                    </div>
                    <div class="bg-emerald-50 rounded-lg p-3">
                        <p class="text-sm text-gray-700 mb-2" id="daily-dua-arabic">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ</p>
                        <p class="text-xs text-gray-600" id="daily-dua-translation">In the name of Allah, the Most Gracious, the Most Merciful</p>
                    </div>
                </div>

                <!-- Progress Card -->
                <div class="bg-white rounded-xl p-4 shadow-sm border border-gray-200">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center">
                            <i class="fas fa-chart-line text-emerald-600 text-lg mr-3"></i>
                            <span class="font-semibold text-gray-900">Today's Progress</span>
                        </div>
                        <span class="text-sm text-emerald-600 font-semibold" id="progress-percentage">0%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2 mb-2">
                        <div class="bg-emerald-600 h-2 rounded-full transition-all duration-300" id="progress-bar" style="width: 0%"></div>
                    </div>
                    <div class="flex justify-between text-xs text-gray-600">
                        <span>Prayers: <span id="prayers-completed">0</span>/5</span>
                        <span>Dhikr: <span id="dhikr-count">0</span></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="mb-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Recent Activity</h3>
            <div class="space-y-3">
                <div class="bg-white rounded-xl p-4 shadow-sm border border-gray-200">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-emerald-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-book-quran text-emerald-600"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-semibold text-gray-900">Quran Reading</p>
                            <p class="text-xs text-gray-600">Last read: Surah Al-Fatihah</p>
                        </div>
                        <span class="text-xs text-gray-500">2h ago</span>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-4 shadow-sm border border-gray-200">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-circle text-blue-600"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-semibold text-gray-900">Tasbih</p>
                            <p class="text-xs text-gray-600">Completed 100 SubhanAllah</p>
                        </div>
                        <span class="text-xs text-gray-500">1d ago</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        // Mobile Dashboard JavaScript
        let currentLocation = null;
        let prayerTimes = null;

        // Initialize dashboard
        document.addEventListener('DOMContentLoaded', function() {
            updateCurrentTime();
            loadIslamicDate();
            loadPrayerTimes();
            loadDailyDua();
            loadProgress();
            loadRecentActivity();
            
            // Update time every minute
            setInterval(updateCurrentTime, 60000);
        });

        // Update current time
        function updateCurrentTime() {
            const now = new Date();
            const timeString = now.toLocaleTimeString('en-US', { 
                hour: '2-digit', 
                minute: '2-digit',
                hour12: true 
            });
            document.getElementById('current-time').textContent = timeString;
        }

        // Load Islamic date
        function loadIslamicDate() {
            const today = new Date();
            const islamicDate = getIslamicDate(today);
            document.getElementById('islamic-date').textContent = islamicDate;
        }

        // Get Islamic date (simplified)
        function getIslamicDate(date) {
            const islamicMonths = [
                'Muharram', 'Safar', 'Rabi\' al-awwal', 'Rabi\' al-thani',
                'Jumada al-awwal', 'Jumada al-thani', 'Rajab', 'Sha\'ban',
                'Ramadan', 'Shawwal', 'Dhu al-Qi\'dah', 'Dhu al-Hijjah'
            ];
            
            // Simplified calculation (in real app, use proper Islamic calendar library)
            const day = date.getDate();
            const month = islamicMonths[date.getMonth()];
            const year = 1445 + Math.floor((date.getFullYear() - 2023) * 0.97);
            
            return `${day} ${month} ${year} AH`;
        }

        // Load prayer times
        function loadPrayerTimes() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    function(position) {
                        currentLocation = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };
                        calculatePrayerTimes();
                    },
                    function() {
                        // Use default location (New York)
                        currentLocation = { lat: 40.7128, lng: -74.0060 };
                        calculatePrayerTimes();
                    }
                );
            } else {
                currentLocation = { lat: 40.7128, lng: -74.0060 };
                calculatePrayerTimes();
            }
        }

        // Calculate prayer times (simplified)
        function calculatePrayerTimes() {
            const today = new Date();
            const times = {
                fajr: '05:30',
                dhuhr: '12:15',
                asr: '15:45',
                maghrib: '18:20',
                isha: '19:45'
            };

            // Update prayer times display
            document.getElementById('fajr-time').textContent = times.fajr;
            document.getElementById('dhuhr-time').textContent = times.dhuhr;
            document.getElementById('asr-time').textContent = times.asr;
            document.getElementById('maghrib-time').textContent = times.maghrib;
            document.getElementById('isha-time').textContent = times.isha;

            // Find next prayer
            const now = new Date();
            const currentTime = now.getHours() * 60 + now.getMinutes();
            
            const prayerTimes = [
                { name: 'Fajr', time: times.fajr },
                { name: 'Dhuhr', time: times.dhuhr },
                { name: 'Asr', time: times.asr },
                { name: 'Maghrib', time: times.maghrib },
                { name: 'Isha', time: times.isha }
            ];

            let nextPrayer = 'Fajr';
            for (let prayer of prayerTimes) {
                const [hours, minutes] = prayer.time.split(':').map(Number);
                const prayerTime = hours * 60 + minutes;
                if (currentTime < prayerTime) {
                    nextPrayer = prayer.name;
                    break;
                }
            }

            document.getElementById('next-prayer').textContent = nextPrayer;
        }

        // Load daily dua
        function loadDailyDua() {
            const duas = [
                {
                    arabic: 'بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ',
                    translation: 'In the name of Allah, the Most Gracious, the Most Merciful'
                },
                {
                    arabic: 'رَبِّ اشْرَحْ لِي صَدْرِي وَيَسِّرْ لِي أَمْرِي',
                    translation: 'My Lord, expand for me my breast and make easy for me my task'
                },
                {
                    arabic: 'اللَّهُمَّ أَنْتَ رَبِّي لَا إِلَهَ إِلَّا أَنْتَ',
                    translation: 'O Allah, You are my Lord, there is no god but You'
                }
            ];

            const today = new Date().getDate();
            const selectedDua = duas[today % duas.length];
            
            document.getElementById('daily-dua-arabic').textContent = selectedDua.arabic;
            document.getElementById('daily-dua-translation').textContent = selectedDua.translation;
        }

        // Load progress
        function loadProgress() {
            const progress = JSON.parse(localStorage.getItem('dailyProgress') || '{"prayers": 0, "dhikr": 0}');
            const totalProgress = (progress.prayers * 20) + (Math.min(progress.dhikr / 10, 1) * 20);
            
            document.getElementById('progress-percentage').textContent = Math.round(totalProgress) + '%';
            document.getElementById('progress-bar').style.width = totalProgress + '%';
            document.getElementById('prayers-completed').textContent = progress.prayers;
            document.getElementById('dhikr-count').textContent = progress.dhikr;
        }

        // Load recent activity
        function loadRecentActivity() {
            // This would load from localStorage or API
            // For now, it's static content
        }

        // Mobile search functionality
        function performMobileSearch() {
            const searchTerm = document.getElementById('mobile-search').value.trim();
            if (!searchTerm) return;

            // Simple search logic
            const searchResults = {
                'prayer': '/prayer-times',
                'quran': '/quran',
                'dua': '/duas',
                'tasbih': '/tasbih',
                'wazifa': '/wazifa',
                'journal': '/journal',
                'mosque': '/mosques',
                'ai': '/ai-noor',
                'noor': '/ai-noor'
            };

            const lowerTerm = searchTerm.toLowerCase();
            for (let [keyword, route] of Object.entries(searchResults)) {
                if (lowerTerm.includes(keyword)) {
                    window.location.href = route;
                    return;
                }
            }

            // If no direct match, redirect to AI Noor
            window.location.href = '/ai-noor?q=' + encodeURIComponent(searchTerm);
        }

        // Add enter key support for search
        document.getElementById('mobile-search').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                performMobileSearch();
            }
        });
    </script>
    @endpush
</x-mobile-layout>
