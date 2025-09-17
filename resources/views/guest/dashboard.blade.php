<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div class="slide-in-left">
                <h2 class="text-3xl font-bold bg-gradient-to-r from-emerald-600 to-teal-600 bg-clip-text text-transparent">
                    <i class="fas fa-user mr-3"></i>Welcome, Guest User
                </h2>
                <p class="text-gray-600 mt-1">Explore limited features - <a href="{{ route('guest.login') }}" class="text-emerald-600 hover:text-emerald-700 font-semibold">Login for full access</a></p>
            </div>
            <div class="slide-in-right">
                <a href="{{ route('guest.login') }}" class="bg-gradient-to-r from-emerald-500 to-teal-600 hover:from-emerald-600 hover:to-teal-700 text-white font-semibold py-3 px-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-sign-in-alt mr-2"></i>Login for Full Access
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Guest Limitations Notice -->
            <div class="bg-gradient-to-r from-yellow-50 to-orange-50 border-l-4 border-yellow-400 p-6 mb-8 rounded-r-xl">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <i class="fas fa-info-circle text-yellow-400 text-2xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-yellow-800">Guest Access Limitations</h3>
                        <p class="text-yellow-700 mt-1">You're browsing as a guest. Some features are limited. <a href="{{ route('guest.login') }}" class="font-semibold underline hover:text-yellow-800">Login</a> or <a href="{{ route('guest.register') }}" class="font-semibold underline hover:text-yellow-800">Register</a> for full access to all Islamic features.</p>
                    </div>
                </div>
            </div>

            <!-- Limited Features for Guests -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <!-- Prayer Times (Limited) -->
                <a href="{{ route('guest.prayer-times') }}" class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-mosque text-white text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-blue-900 mb-2">Prayer Times</h3>
                        <p class="text-blue-700 text-sm mb-3">Basic prayer times for your location</p>
                        <span class="text-xs bg-blue-200 text-blue-800 px-2 py-1 rounded-full">Limited</span>
                    </div>
                </a>

                <!-- Qibla (Limited) -->
                <a href="{{ route('guest.qibla') }}" class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-green-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-compass text-white text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-green-900 mb-2">Qibla Direction</h3>
                        <p class="text-green-700 text-sm mb-3">Find direction to Kaaba</p>
                        <span class="text-xs bg-green-200 text-green-800 px-2 py-1 rounded-full">Limited</span>
                    </div>
                </a>

                <!-- Duas (Limited) -->
                <a href="{{ route('guest.duas') }}" class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-purple-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-hands text-white text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-purple-900 mb-2">Duas</h3>
                        <p class="text-purple-700 text-sm mb-3">Basic daily duas</p>
                        <span class="text-xs bg-purple-200 text-purple-800 px-2 py-1 rounded-full">Limited</span>
                    </div>
                </a>

                <!-- Quran (Limited) -->
                <a href="{{ route('guest.quran') }}" class="bg-gradient-to-br from-emerald-50 to-emerald-100 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-emerald-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-book-quran text-white text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-emerald-900 mb-2">Quran Reader</h3>
                        <p class="text-emerald-700 text-sm mb-3">Read first 3 Surahs only</p>
                        <span class="text-xs bg-emerald-200 text-emerald-800 px-2 py-1 rounded-full">Limited</span>
                    </div>
                </a>
            </div>

            <!-- Makkah Live (Available) -->
            <div class="bg-gradient-to-br from-amber-50 to-orange-100 rounded-2xl p-8 mb-8 shadow-lg">
                <div class="text-center mb-6">
                    <h3 class="text-2xl font-bold text-amber-900 mb-2">
                        <i class="fas fa-video mr-3"></i>Makkah Live Stream
                    </h3>
                    <p class="text-amber-700">Watch live from the Holy Kaaba - Available for all users</p>
                </div>
                <div class="text-center">
                    <a href="{{ route('guest.makkah-live') }}" class="bg-gradient-to-r from-amber-500 to-orange-600 hover:from-amber-600 hover:to-orange-700 text-white font-semibold py-4 px-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 inline-block">
                        <i class="fas fa-play mr-2"></i>Watch Live Stream
                    </a>
                </div>
            </div>

            <!-- Premium Features Preview -->
            <div class="bg-gradient-to-r from-gray-800 to-gray-900 rounded-2xl p-8 text-white">
                <h3 class="text-2xl font-bold mb-6 text-center">
                    <i class="fas fa-crown mr-3 text-yellow-400"></i>Premium Features Available After Login
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-gray-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-circle text-white text-2xl"></i>
                        </div>
                        <h4 class="font-bold mb-2">Digital Tasbih</h4>
                        <p class="text-gray-300 text-sm">Full counter with history</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-gray-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-star text-white text-2xl"></i>
                        </div>
                        <h4 class="font-bold mb-2">Wazifa Collection</h4>
                        <p class="text-gray-300 text-sm">Complete collection</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-gray-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-book text-white text-2xl"></i>
                        </div>
                        <h4 class="font-bold mb-2">Islamic Journal</h4>
                        <p class="text-gray-300 text-sm">Personal reflections</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-gray-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-users text-white text-2xl"></i>
                        </div>
                        <h4 class="font-bold mb-2">Community</h4>
                        <p class="text-gray-300 text-sm">Full community access</p>
                    </div>
                </div>
                <div class="text-center mt-8">
                    <a href="{{ route('guest.register') }}" class="bg-gradient-to-r from-yellow-500 to-yellow-600 hover:from-yellow-600 hover:to-yellow-700 text-white font-semibold py-4 px-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 inline-block">
                        <i class="fas fa-user-plus mr-2"></i>Create Free Account
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
