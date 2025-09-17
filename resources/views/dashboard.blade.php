<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center space-y-4 lg:space-y-0">
            <div class="slide-in-left">
                <h2 class="text-3xl font-bold bg-gradient-to-r from-emerald-600 to-teal-600 bg-clip-text text-transparent">
                    {{ __('Welcome Back!') }}
            </h2>
                <p class="text-gray-600 mt-1">Manage your Islamic journey and community</p>
            </div>
            
            <!-- Search Bar -->
            <div class="w-full lg:w-96 slide-in-right">
                <div class="relative">
                    <input 
                        type="text" 
                        id="dashboard-search"
                        placeholder="Search features, content, or ask AI Noor..."
                        class="w-full px-6 py-3 pr-12 text-lg border border-gray-300 dark:border-[#3E3E3A] rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-transparent bg-white dark:bg-[#161615] text-[#1b1b18] dark:text-[#EDEDEC] placeholder-gray-500 dark:placeholder-[#A1A09A] shadow-lg"
                    >
                    <button 
                        onclick="performDashboardSearch()"
                        class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-emerald-500 hover:bg-emerald-600 text-white px-4 py-2 rounded-lg transition-colors"
                    >
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                <div id="dashboard-search-results" class="mt-4 hidden">
                    <!-- Search results will appear here -->
                </div>
            </div>
            
            <div class="slide-in-right">
            <form method="POST" action="{{ route('temp-logout') }}" class="inline">
                @csrf
                    <button type="submit" class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white font-semibold py-3 px-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-sign-out-alt mr-2"></i>Logout
                </button>
            </form>
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Card -->
                    @if(isset($user))
                <div class="bg-gradient-to-r from-emerald-500 to-teal-600 rounded-2xl p-8 mb-8 shadow-2xl scale-in">
                    <div class="flex items-center justify-between">
                        <div class="text-white">
                            <h3 class="text-2xl font-bold mb-2">Assalamu Alaikum, {{ $user['name'] }}!</h3>
                            <p class="text-emerald-100 text-lg">Welcome to your Islamic community dashboard</p>
                            <div class="flex items-center mt-4 space-x-6">
                                <div class="flex items-center">
                                    <i class="fas fa-envelope mr-2"></i>
                                    <span class="text-sm">{{ $user['email'] }}</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-user-tag mr-2"></i>
                                    <span class="text-sm">{{ ucfirst($user['role']) }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block">
                            <div class="w-24 h-24 bg-white/20 rounded-full flex items-center justify-center floating">
                                <i class="fas fa-mosque text-4xl text-white"></i>
                            </div>
                        </div>
                    </div>
                        </div>
                    @endif

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 scale-in">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm font-medium">Prayer Times</p>
                            <p class="text-2xl font-bold text-gray-900">5 Daily</p>
                        </div>
                        <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                            <i class="fas fa-mosque text-blue-600 text-xl"></i>
                        </div>
                    </div>
                    <div class="mt-4">
                        <span class="text-green-600 text-sm font-medium">Next: Maghrib</span>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 scale-in" style="animation-delay: 0.1s">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm font-medium">Quran Progress</p>
                            <p class="text-2xl font-bold text-gray-900">12%</p>
                        </div>
                        <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                            <i class="fas fa-quran text-green-600 text-xl"></i>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-green-600 h-2 rounded-full" style="width: 12%"></div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 scale-in" style="animation-delay: 0.2s">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm font-medium">Community</p>
                            <p class="text-2xl font-bold text-gray-900">1,234</p>
                        </div>
                        <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center">
                            <i class="fas fa-users text-purple-600 text-xl"></i>
                        </div>
                    </div>
                    <div class="mt-4">
                        <span class="text-green-600 text-sm font-medium">+12 this week</span>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 scale-in" style="animation-delay: 0.3s">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm font-medium">Donations</p>
                            <p class="text-2xl font-bold text-gray-900">$2,450</p>
                        </div>
                        <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center">
                            <i class="fas fa-heart text-red-600 text-xl"></i>
                        </div>
                    </div>
                    <div class="mt-4">
                        <span class="text-green-600 text-sm font-medium">+$150 this month</span>
                    </div>
                </div>
            </div>

            <!-- Horizontal Features Menu -->
            <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-6 mb-8 relative z-20">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">
                    <i class="fas fa-star text-yellow-500 mr-2"></i>
                    Islamic Features
                </h2>
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-4">
                    <!-- Prayer Times -->
                    <a href="{{ route('prayer-times') }}" class="feature-card group">
                        <div class="text-center p-4 rounded-xl bg-gradient-to-br from-blue-50 to-blue-100 hover:from-blue-100 hover:to-blue-200 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            <i class="fas fa-mosque text-3xl text-blue-600 mb-3 group-hover:scale-110 transition-transform duration-300"></i>
                            <h3 class="font-semibold text-gray-800 text-sm">Prayer Times</h3>
                        </div>
                    </a>

                    <!-- Qibla -->
                    <a href="{{ route('qibla') }}" class="feature-card group">
                        <div class="text-center p-4 rounded-xl bg-gradient-to-br from-green-50 to-green-100 hover:from-green-100 hover:to-green-200 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            <i class="fas fa-compass text-3xl text-green-600 mb-3 group-hover:scale-110 transition-transform duration-300"></i>
                            <h3 class="font-semibold text-gray-800 text-sm">Qibla</h3>
                        </div>
                    </a>

                    <!-- Duas -->
                    <a href="{{ route('duas') }}" class="feature-card group">
                        <div class="text-center p-4 rounded-xl bg-gradient-to-br from-purple-50 to-purple-100 hover:from-purple-100 hover:to-purple-200 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            <i class="fas fa-hands text-3xl text-purple-600 mb-3 group-hover:scale-110 transition-transform duration-300"></i>
                            <h3 class="font-semibold text-gray-800 text-sm">Duas</h3>
                        </div>
                    </a>

                    <!-- Quran -->
                    <a href="{{ route('quran') }}" class="feature-card group">
                        <div class="text-center p-4 rounded-xl bg-gradient-to-br from-emerald-50 to-emerald-100 hover:from-emerald-100 hover:to-emerald-200 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            <i class="fas fa-book-quran text-3xl text-emerald-600 mb-3 group-hover:scale-110 transition-transform duration-300"></i>
                            <h3 class="font-semibold text-gray-800 text-sm">Quran</h3>
                        </div>
                    </a>

                    <!-- Tasbih -->
                    <a href="{{ route('tasbih') }}" class="feature-card group">
                        <div class="text-center p-4 rounded-xl bg-gradient-to-br from-orange-50 to-orange-100 hover:from-orange-100 hover:to-orange-200 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            <i class="fas fa-circle text-3xl text-orange-600 mb-3 group-hover:scale-110 transition-transform duration-300"></i>
                            <h3 class="font-semibold text-gray-800 text-sm">Tasbih</h3>
                        </div>
                    </a>

                    <!-- Wazifa -->
                    <a href="{{ route('wazifa') }}" class="feature-card group">
                        <div class="text-center p-4 rounded-xl bg-gradient-to-br from-pink-50 to-pink-100 hover:from-pink-100 hover:to-pink-200 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            <i class="fas fa-star text-3xl text-pink-600 mb-3 group-hover:scale-110 transition-transform duration-300"></i>
                            <h3 class="font-semibold text-gray-800 text-sm">Wazifa</h3>
                        </div>
                    </a>

                    <!-- Lazim -->
                    <a href="{{ route('lazim') }}" class="feature-card group">
                        <div class="text-center p-4 rounded-xl bg-gradient-to-br from-indigo-50 to-indigo-100 hover:from-indigo-100 hover:to-indigo-200 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            <i class="fas fa-clock text-3xl text-indigo-600 mb-3 group-hover:scale-110 transition-transform duration-300"></i>
                            <h3 class="font-semibold text-gray-800 text-sm">Lazim</h3>
                        </div>
                    </a>

                    <!-- Zikr Jumma -->
                    <a href="{{ route('zikr-jumma') }}" class="feature-card group">
                        <div class="text-center p-4 rounded-xl bg-gradient-to-br from-teal-50 to-teal-100 hover:from-teal-100 hover:to-teal-200 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            <i class="fas fa-mosque text-3xl text-teal-600 mb-3 group-hover:scale-110 transition-transform duration-300"></i>
                            <h3 class="font-semibold text-gray-800 text-sm">Zikr Jumma</h3>
                        </div>
                    </a>

                    <!-- Journal -->
                    <a href="{{ route('journal') }}" class="feature-card group">
                        <div class="text-center p-4 rounded-xl bg-gradient-to-br from-yellow-50 to-yellow-100 hover:from-yellow-100 hover:to-yellow-200 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            <i class="fas fa-book text-3xl text-yellow-600 mb-3 group-hover:scale-110 transition-transform duration-300"></i>
                            <h3 class="font-semibold text-gray-800 text-sm">Journal</h3>
                        </div>
                    </a>

                    <!-- Scholars -->
                    <a href="{{ route('scholars') }}" class="feature-card group">
                        <div class="text-center p-4 rounded-xl bg-gradient-to-br from-red-50 to-red-100 hover:from-red-100 hover:to-red-200 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            <i class="fas fa-user-graduate text-3xl text-red-600 mb-3 group-hover:scale-110 transition-transform duration-300"></i>
                            <h3 class="font-semibold text-gray-800 text-sm">Scholars</h3>
                        </div>
                    </a>

                    <!-- Community -->
                    <a href="{{ route('community') }}" class="feature-card group">
                        <div class="text-center p-4 rounded-xl bg-gradient-to-br from-cyan-50 to-cyan-100 hover:from-cyan-100 hover:to-cyan-200 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            <i class="fas fa-users text-3xl text-cyan-600 mb-3 group-hover:scale-110 transition-transform duration-300"></i>
                            <h3 class="font-semibold text-gray-800 text-sm">Community</h3>
                        </div>
                    </a>

                    <!-- Mosques -->
                    <a href="{{ route('mosques') }}" class="feature-card group">
                        <div class="text-center p-4 rounded-xl bg-gradient-to-br from-lime-50 to-lime-100 hover:from-lime-100 hover:to-lime-200 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            <i class="fas fa-mosque text-3xl text-lime-600 mb-3 group-hover:scale-110 transition-transform duration-300"></i>
                            <h3 class="font-semibold text-gray-800 text-sm">Mosques</h3>
                        </div>
                    </a>

                    <!-- Makkah Live -->
                    <a href="{{ route('makkah-live') }}" class="feature-card group">
                        <div class="text-center p-4 rounded-xl bg-gradient-to-br from-amber-50 to-amber-100 hover:from-amber-100 hover:to-amber-200 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            <i class="fas fa-video text-3xl text-amber-600 mb-3 group-hover:scale-110 transition-transform duration-300"></i>
                            <h3 class="font-semibold text-gray-800 text-sm">Makkah Live</h3>
                        </div>
                    </a>

                    <!-- AI Noor -->
                    <a href="{{ route('ai-noor') }}" class="feature-card group">
                        <div class="text-center p-4 rounded-xl bg-gradient-to-br from-violet-50 to-violet-100 hover:from-violet-100 hover:to-violet-200 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            <i class="fas fa-robot text-3xl text-violet-600 mb-3 group-hover:scale-110 transition-transform duration-300"></i>
                            <h3 class="font-semibold text-gray-800 text-sm">AI Noor</h3>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Feature Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Prayer Times Card -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 scale-in">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-blue-500 rounded-2xl flex items-center justify-center shadow-lg">
                            <i class="fas fa-mosque text-white text-2xl"></i>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-xl font-bold text-blue-900">Prayer Times</h4>
                            <p class="text-blue-700 text-sm">Accurate prayer times</p>
                        </div>
                    </div>
                    <p class="text-blue-800 mb-6">Get precise prayer times for your location with beautiful Islamic calligraphy and notifications.</p>
                    <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-semibold transition-colors duration-300">
                        View Prayer Times <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                        </div>

                <!-- Quran Reader Card -->
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 scale-in" style="animation-delay: 0.1s">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-green-500 rounded-2xl flex items-center justify-center shadow-lg">
                            <i class="fas fa-quran text-white text-2xl"></i>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-xl font-bold text-green-900">Quran Reader</h4>
                            <p class="text-green-700 text-sm">Read with translation</p>
                        </div>
                    </div>
                    <p class="text-green-800 mb-6">Beautiful Quran reading experience with Arabic text, translation, and audio recitation.</p>
                    <a href="#" class="inline-flex items-center text-green-600 hover:text-green-800 font-semibold transition-colors duration-300">
                        Read Quran <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                        </div>

                <!-- Daily Adhkar Card -->
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 scale-in" style="animation-delay: 0.2s">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-purple-500 rounded-2xl flex items-center justify-center shadow-lg">
                            <i class="fas fa-star text-white text-2xl"></i>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-xl font-bold text-purple-900">Daily Adhkar</h4>
                            <p class="text-purple-700 text-sm">Islamic remembrances</p>
                        </div>
                    </div>
                    <p class="text-purple-800 mb-6">Daily Islamic quotes, remembrances, and spiritual guidance for your journey.</p>
                    <a href="#" class="inline-flex items-center text-purple-600 hover:text-purple-800 font-semibold transition-colors duration-300">
                        View Adhkar <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                        </div>

                <!-- Sermons Card -->
                <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 scale-in" style="animation-delay: 0.3s">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-yellow-500 rounded-2xl flex items-center justify-center shadow-lg">
                            <i class="fas fa-microphone text-white text-2xl"></i>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-xl font-bold text-yellow-900">Sermons</h4>
                            <p class="text-yellow-700 text-sm">Audio & video content</p>
                        </div>
                    </div>
                    <p class="text-yellow-800 mb-6">Listen to inspiring Islamic sermons and educational content from renowned scholars.</p>
                    <a href="#" class="inline-flex items-center text-yellow-600 hover:text-yellow-800 font-semibold transition-colors duration-300">
                        Browse Sermons <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                        </div>

                <!-- Donations Card -->
                <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 scale-in" style="animation-delay: 0.4s">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-red-500 rounded-2xl flex items-center justify-center shadow-lg">
                            <i class="fas fa-heart text-white text-2xl"></i>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-xl font-bold text-red-900">Donations</h4>
                            <p class="text-red-700 text-sm">Support Islamic causes</p>
                        </div>
                    </div>
                    <p class="text-red-800 mb-6">Support Islamic causes, charity campaigns, and community development projects.</p>
                    <a href="#" class="inline-flex items-center text-red-600 hover:text-red-800 font-semibold transition-colors duration-300">
                        Donate Now <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                        </div>

                <!-- Community Forum Card -->
                <div class="bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 scale-in" style="animation-delay: 0.5s">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-indigo-500 rounded-2xl flex items-center justify-center shadow-lg">
                            <i class="fas fa-comments text-white text-2xl"></i>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-xl font-bold text-indigo-900">Community Forum</h4>
                            <p class="text-indigo-700 text-sm">Connect with Muslims</p>
                        </div>
                    </div>
                    <p class="text-indigo-800 mb-6">Join discussions, ask questions, and connect with fellow Muslims worldwide.</p>
                    <a href="#" class="inline-flex items-center text-indigo-600 hover:text-indigo-800 font-semibold transition-colors duration-300">
                        Join Forum <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                        </div>
                    </div>

            <!-- Admin Panel Card -->
                    @if(isset($user) && $user['role'] === 'admin')
                <div class="mt-8 bg-gradient-to-r from-gray-800 to-gray-900 rounded-2xl p-8 shadow-2xl scale-in" style="animation-delay: 0.6s">
                    <div class="flex items-center justify-between">
                        <div class="text-white">
                            <h4 class="text-2xl font-bold mb-2">Admin Panel</h4>
                            <p class="text-gray-300 mb-4">Manage scholars, community, and platform settings</p>
                            <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-semibold py-3 px-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                                <i class="fas fa-cog mr-2"></i>Go to Admin Panel
                            </a>
                        </div>
                        <div class="hidden md:block">
                            <div class="w-20 h-20 bg-white/10 rounded-2xl flex items-center justify-center">
                                <i class="fas fa-shield-alt text-4xl text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <script>
        // Dashboard search functionality
        function performDashboardSearch() {
            const searchInput = document.getElementById('dashboard-search');
            const searchTerm = searchInput.value.trim();
            const searchResults = document.getElementById('dashboard-search-results');
            
            if (searchTerm === '') {
                searchResults.classList.add('hidden');
                return;
            }
            
            // Searchable content
            const searchableContent = [
                { title: 'Prayer Times', description: 'Get accurate prayer times for your location', url: '{{ route("prayer-times") }}', category: 'Prayer' },
                { title: 'Qibla Direction', description: 'Find the direction of the Kaaba', url: '{{ route("qibla") }}', category: 'Prayer' },
                { title: 'Duas', description: 'Collection of Islamic supplications', url: '{{ route("duas") }}', category: 'Spirituality' },
                { title: 'Quran', description: 'Read and listen to the Holy Quran', url: '{{ route("quran") }}', category: 'Quran' },
                { title: 'Tasbih Counter', description: 'Digital tasbih for dhikr', url: '{{ route("tasbih") }}', category: 'Spirituality' },
                { title: 'Wazifa', description: 'Islamic spiritual practices', url: '{{ route("wazifa") }}', category: 'Spirituality' },
                { title: 'Lazim', description: 'Daily Islamic routines', url: '{{ route("lazim") }}', category: 'Routine' },
                { title: 'Zikr Jumma', description: 'Friday remembrance practices', url: '{{ route("zikr-jumma") }}', category: 'Spirituality' },
                { title: 'Journal', description: 'Islamic journaling and reflection', url: '{{ route("journal") }}', category: 'Personal' },
                { title: 'Scholars', description: 'Learn from Islamic scholars', url: '{{ route("scholars") }}', category: 'Education' },
                { title: 'Community', description: 'Connect with Muslim community', url: '{{ route("community") }}', category: 'Social' },
                { title: 'Mosques', description: 'Find nearby mosques', url: '{{ route("mosques") }}', category: 'Location' },
                { title: 'Makkah Live', description: 'Live stream from Makkah', url: '{{ route("makkah-live") }}', category: 'Live' },
                { title: 'AI Noor', description: 'AI assistant for Islamic questions', url: '{{ route("ai-noor") }}', category: 'AI Assistant' }
            ];
            
            // Filter results
            const filteredResults = searchableContent.filter(item => 
                item.title.toLowerCase().includes(searchTerm.toLowerCase()) ||
                item.description.toLowerCase().includes(searchTerm.toLowerCase()) ||
                item.category.toLowerCase().includes(searchTerm.toLowerCase())
            );
            
            if (filteredResults.length > 0) {
                let resultsHTML = '<div class="bg-white dark:bg-[#161615] rounded-xl shadow-lg p-4 max-h-96 overflow-y-auto">';
                resultsHTML += '<h3 class="text-lg font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-3">Search Results</h3>';
                
                filteredResults.forEach(result => {
                    resultsHTML += `
                        <div class="p-3 hover:bg-gray-50 dark:hover:bg-[#3E3E3A] rounded-lg cursor-pointer transition-colors" onclick="window.location.href='${result.url}'">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">${result.title}</h4>
                                    <p class="text-sm text-gray-600 dark:text-[#A1A09A]">${result.description}</p>
                                </div>
                                <span class="px-2 py-1 bg-emerald-100 dark:bg-emerald-900 text-emerald-800 dark:text-emerald-200 text-xs font-semibold rounded-full">${result.category}</span>
                            </div>
                        </div>
                    `;
                });
                
                resultsHTML += '</div>';
                searchResults.innerHTML = resultsHTML;
                searchResults.classList.remove('hidden');
            } else {
                // No results found - redirect to AI Noor
                searchResults.innerHTML = `
                    <div class="bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-blue-900/20 dark:to-indigo-900/20 rounded-xl p-6 text-center">
                        <i class="fas fa-robot text-4xl text-blue-500 mb-4"></i>
                        <h3 class="text-lg font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-2">No results found</h3>
                        <p class="text-gray-600 dark:text-[#A1A09A] mb-4">Let AI Noor help you with your question</p>
                        <button onclick="window.location.href='{{ route("ai-noor") }}'" class="bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700 text-white font-semibold py-3 px-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                            <i class="fas fa-robot mr-2"></i>Ask AI Noor
                        </button>
                    </div>
                `;
                searchResults.classList.remove('hidden');
            }
        }

        // Allow search on Enter key
        document.getElementById('dashboard-search').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                performDashboardSearch();
            }
        });

        // Hide search results when clicking outside
        document.addEventListener('click', function(e) {
            const searchContainer = document.getElementById('dashboard-search-results');
            const searchInput = document.getElementById('dashboard-search');
            
            if (!searchContainer.contains(e.target) && !searchInput.contains(e.target)) {
                searchContainer.classList.add('hidden');
            }
        });
    </script>
</x-app-layout>
