<x-mobile-layout headerTitle="Tijaniyah Pro" :showBackButton="false">
    <div class="px-4 py-6">
        <!-- Hero Section -->
        <div class="bg-gradient-to-br from-emerald-600 via-emerald-700 to-emerald-800 rounded-3xl p-8 mb-8 text-white relative overflow-hidden">
            <!-- Islamic Pattern Background -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-4 right-4 w-16 h-16 border-2 border-white rounded-full"></div>
                <div class="absolute top-12 right-12 w-8 h-8 border border-white rounded-full"></div>
                <div class="absolute bottom-8 left-8 w-12 h-12 border-2 border-white rounded-full"></div>
                <div class="absolute bottom-16 left-16 w-6 h-6 border border-white rounded-full"></div>
            </div>
            
            <div class="relative z-10">
                <div class="text-center mb-6">
                    <div class="w-20 h-20 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-moon text-3xl"></i>
                    </div>
                    <h1 class="text-2xl font-bold mb-2">Tijaniyah Muslim Pro</h1>
                    <p class="text-emerald-100 text-sm leading-relaxed">Your Comprehensive Islamic Companion</p>
                </div>
                
                <div class="bg-white bg-opacity-20 rounded-2xl p-4 mb-6">
                    <p class="text-sm text-emerald-100 text-center leading-relaxed">
                        Experience the beauty of Islam through prayer times, Quran reading, community connection, and spiritual guidance all in one place.
                    </p>
                </div>
                
                <div class="flex space-x-3">
                    <a href="{{ route('mobile-dashboard') }}" class="flex-1 bg-white text-emerald-700 font-semibold py-3 px-4 rounded-xl text-center hover:bg-emerald-50 transition-colors touch-target">
                        Start Your Journey
                    </a>
                    <button onclick="showDemoLogin()" class="flex-1 bg-emerald-500 text-white font-semibold py-3 px-4 rounded-xl hover:bg-emerald-400 transition-colors touch-target">
                        Demo Login
                    </button>
                </div>
            </div>
        </div>

        <!-- Islamic Calendar -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6 mb-8">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-gray-800">Islamic Calendar</h3>
                <i class="fas fa-calendar-alt text-emerald-600"></i>
            </div>
            <div class="text-center">
                <div class="text-2xl font-bold text-emerald-600 mb-1" id="islamic-date">Loading...</div>
                <div class="text-sm text-gray-600" id="gregorian-date">Loading...</div>
            </div>
        </div>

        <!-- Search Bar -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-4 mb-8">
            <div class="relative">
                <input type="text" id="mobile-welcome-search" placeholder="Search features or ask AI Noor..." 
                       class="w-full p-4 pr-12 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-base">
                <button onclick="performWelcomeSearch()" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-emerald-600">
                    <i class="fas fa-search text-lg"></i>
                </button>
            </div>
        </div>

        <!-- Feature Cards -->
        <div class="grid grid-cols-2 gap-4 mb-8">
            <a href="{{ route('prayer-times') }}" class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow touch-target">
                <div class="text-center">
                    <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-clock text-emerald-600 text-xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 text-sm mb-1">Prayer Times</h3>
                    <p class="text-xs text-gray-600">Today's prayers</p>
                </div>
            </a>
            
            <a href="{{ route('quran') }}" class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow touch-target">
                <div class="text-center">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-book-quran text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 text-sm mb-1">Quran</h3>
                    <p class="text-xs text-gray-600">Read & listen</p>
                </div>
            </a>
            
            <a href="{{ route('ai-noor') }}" class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow touch-target">
                <div class="text-center">
                    <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-robot text-purple-600 text-xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 text-sm mb-1">AI Noor</h3>
                    <p class="text-xs text-gray-600">Ask questions</p>
                </div>
            </a>
            
            <a href="{{ route('tasbih') }}" class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow touch-target">
                <div class="text-center">
                    <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-circle text-orange-600 text-xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 text-sm mb-1">Tasbih</h3>
                    <p class="text-xs text-gray-600">Digital counter</p>
                </div>
            </a>
        </div>

        <!-- Islamic Quote -->
        <div class="bg-gradient-to-r from-emerald-50 to-emerald-100 rounded-2xl p-6 mb-8">
            <div class="text-center">
                <i class="fas fa-quote-left text-emerald-600 text-2xl mb-4"></i>
                <p class="text-gray-800 font-medium leading-relaxed mb-4">
                    "And whoever relies upon Allah - then He is sufficient for him. Indeed, Allah will accomplish His purpose."
                </p>
                <p class="text-emerald-700 text-sm font-semibold">- Quran 65:3</p>
            </div>
        </div>

        <!-- More Features Button -->
        <div class="text-center">
            <button onclick="toggleMoreFeatures()" class="bg-white text-emerald-600 font-semibold py-3 px-8 rounded-xl border-2 border-emerald-200 hover:bg-emerald-50 transition-colors touch-target">
                <i class="fas fa-ellipsis-h mr-2"></i>More Features
            </button>
        </div>

        <!-- More Features Modal -->
        <div id="more-features-modal" class="mobile-modal hidden">
            <div class="mobile-modal-content p-6">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-lg font-semibold text-gray-900">All Features</h3>
                    <button onclick="toggleMoreFeatures()" class="touch-target p-2 -mr-2 text-gray-500">
                        <i class="fas fa-times text-lg"></i>
                    </button>
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <a href="{{ route('qibla') }}" class="flex flex-col items-center p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors touch-target">
                        <i class="fas fa-compass text-2xl text-emerald-600 mb-2"></i>
                        <span class="text-sm font-medium text-gray-900">Qibla</span>
                    </a>
                    <a href="{{ route('duas') }}" class="flex flex-col items-center p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors touch-target">
                        <i class="fas fa-hands-praying text-2xl text-emerald-600 mb-2"></i>
                        <span class="text-sm font-medium text-gray-900">Duas</span>
                    </a>
                    <a href="{{ route('wazifa') }}" class="flex flex-col items-center p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors touch-target">
                        <i class="fas fa-star text-2xl text-emerald-600 mb-2"></i>
                        <span class="text-sm font-medium text-gray-900">Wazifa</span>
                    </a>
                    <a href="{{ route('lazim') }}" class="flex flex-col items-center p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors touch-target">
                        <i class="fas fa-list-check text-2xl text-emerald-600 mb-2"></i>
                        <span class="text-sm font-medium text-gray-900">Lazim</span>
                    </a>
                    <a href="{{ route('journal') }}" class="flex flex-col items-center p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors touch-target">
                        <i class="fas fa-book text-2xl text-emerald-600 mb-2"></i>
                        <span class="text-sm font-medium text-gray-900">Journal</span>
                    </a>
                    <a href="{{ route('mosques') }}" class="flex flex-col items-center p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors touch-target">
                        <i class="fas fa-mosque text-2xl text-emerald-600 mb-2"></i>
                        <span class="text-sm font-medium text-gray-900">Mosques</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        // Mobile Welcome Page JavaScript
        document.addEventListener('DOMContentLoaded', function() {
            loadIslamicDate();
            updateCurrentTime();
            
            // Update time every minute
            setInterval(updateCurrentTime, 60000);
        });

        // Load Islamic date
        function loadIslamicDate() {
            const today = new Date();
            const islamicDate = getIslamicDate(today);
            const gregorianDate = today.toLocaleDateString('en-US', { 
                weekday: 'long', 
                year: 'numeric', 
                month: 'long', 
                day: 'numeric' 
            });
            
            document.getElementById('islamic-date').textContent = islamicDate;
            document.getElementById('gregorian-date').textContent = gregorianDate;
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

        // Update current time
        function updateCurrentTime() {
            // This could be used for prayer time countdown
        }

        // Welcome search functionality
        function performWelcomeSearch() {
            const searchTerm = document.getElementById('mobile-welcome-search').value.trim();
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
        document.getElementById('mobile-welcome-search').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                performWelcomeSearch();
            }
        });

        // Toggle more features modal
        function toggleMoreFeatures() {
            const modal = document.getElementById('more-features-modal');
            if (modal) {
                modal.classList.toggle('hidden');
                if (!modal.classList.contains('hidden')) {
                    modal.classList.add('show');
                } else {
                    modal.classList.remove('show');
                }
            }
        }

        // Show demo login (placeholder)
        function showDemoLogin() {
            alert('Demo login functionality would be implemented here');
        }
    </script>
    @endpush
</x-mobile-layout>
