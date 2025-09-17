<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div class="slide-in-left">
                <h2 class="text-3xl font-bold bg-gradient-to-r from-blue-600 to-blue-800 bg-clip-text text-transparent">
                    <i class="fas fa-mosque mr-3"></i>Prayer Times (Guest Access)
                </h2>
                <p class="text-gray-600 mt-1">Basic prayer times for your location</p>
            </div>
            <div class="slide-in-right">
                <a href="{{ route('guest-dashboard') }}" class="bg-gradient-to-r from-gray-500 to-gray-600 hover:from-gray-600 hover:to-gray-700 text-white font-semibold py-3 px-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-arrow-left mr-2"></i>Back to Dashboard
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Guest Limitation Notice -->
            <div class="bg-gradient-to-r from-yellow-50 to-orange-50 border-l-4 border-yellow-400 p-6 mb-8 rounded-r-xl">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <i class="fas fa-info-circle text-yellow-400 text-2xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-yellow-800">Guest Access - Limited Features</h3>
                        <p class="text-yellow-700 mt-1">You're viewing basic prayer times. <a href="{{ route('guest.login') }}" class="font-semibold underline hover:text-yellow-800">Login</a> for accurate location-based times, notifications, and Qibla direction.</p>
                    </div>
                </div>
            </div>

            <!-- Basic Prayer Times -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6 mb-8">
                <!-- Fajr -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-6 text-center shadow-lg">
                    <div class="w-16 h-16 bg-blue-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-sun text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2">Fajr</h3>
                    <p class="text-3xl font-bold text-blue-800 mb-2">5:30 AM</p>
                    <p class="text-blue-700 text-sm">Dawn Prayer</p>
                </div>

                <!-- Dhuhr -->
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-6 text-center shadow-lg">
                    <div class="w-16 h-16 bg-green-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-sun text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-green-900 mb-2">Dhuhr</h3>
                    <p class="text-3xl font-bold text-green-800 mb-2">12:15 PM</p>
                    <p class="text-green-700 text-sm">Midday Prayer</p>
                </div>

                <!-- Asr -->
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-6 text-center shadow-lg">
                    <div class="w-16 h-16 bg-orange-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-sun text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-orange-900 mb-2">Asr</h3>
                    <p class="text-3xl font-bold text-orange-800 mb-2">3:45 PM</p>
                    <p class="text-orange-700 text-sm">Afternoon Prayer</p>
                </div>

                <!-- Maghrib -->
                <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-2xl p-6 text-center shadow-lg">
                    <div class="w-16 h-16 bg-red-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-moon text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-red-900 mb-2">Maghrib</h3>
                    <p class="text-3xl font-bold text-red-800 mb-2">6:20 PM</p>
                    <p class="text-red-700 text-sm">Sunset Prayer</p>
                </div>

                <!-- Isha -->
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-6 text-center shadow-lg">
                    <div class="w-16 h-16 bg-purple-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-moon text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-purple-900 mb-2">Isha</h3>
                    <p class="text-3xl font-bold text-purple-800 mb-2">7:45 PM</p>
                    <p class="text-purple-700 text-sm">Night Prayer</p>
                </div>
            </div>

            <!-- Current Time -->
            <div class="bg-gradient-to-r from-blue-500 to-blue-600 rounded-2xl p-8 mb-8 text-white text-center">
                <h3 class="text-2xl font-bold mb-4">Current Time</h3>
                <p class="text-4xl font-bold mb-2" id="current-time">Loading...</p>
                <p class="text-blue-100">Next prayer: <span class="font-semibold">Fajr (5:30 AM)</span></p>
            </div>

            <!-- Upgrade Notice -->
            <div class="bg-gradient-to-r from-gray-800 to-gray-900 rounded-2xl p-8 text-white">
                <div class="text-center">
                    <h3 class="text-2xl font-bold mb-4">
                        <i class="fas fa-crown mr-3 text-yellow-400"></i>Get Accurate Prayer Times
                    </h3>
                    <p class="text-gray-300 mb-6">Login to get precise prayer times for your exact location with automatic timezone detection and notifications.</p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gray-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-map-marker-alt text-white text-2xl"></i>
                            </div>
                            <h4 class="font-bold mb-2">Location-Based Times</h4>
                            <p class="text-gray-300 text-sm">Accurate times for your exact location</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gray-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-bell text-white text-2xl"></i>
                            </div>
                            <h4 class="font-bold mb-2">Prayer Notifications</h4>
                            <p class="text-gray-300 text-sm">Get notified before each prayer time</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gray-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-compass text-white text-2xl"></i>
                            </div>
                            <h4 class="font-bold mb-2">Qibla Direction</h4>
                            <p class="text-gray-300 text-sm">Find the direction to the Kaaba</p>
                        </div>
                    </div>
                    <div class="flex justify-center gap-4">
                        <a href="{{ route('guest.login') }}" class="bg-gradient-to-r from-emerald-500 to-teal-600 hover:from-emerald-600 hover:to-teal-700 text-white font-semibold py-4 px-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                            <i class="fas fa-sign-in-alt mr-2"></i>Login Now
                        </a>
                        <a href="{{ route('guest.register') }}" class="bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-semibold py-4 px-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                            <i class="fas fa-user-plus mr-2"></i>Create Account
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Update current time
        function updateCurrentTime() {
            const now = new Date();
            const timeString = now.toLocaleTimeString();
            document.getElementById('current-time').textContent = timeString;
        }

        // Update every second
        setInterval(updateCurrentTime, 1000);
        updateCurrentTime();
    </script>
</x-app-layout>
