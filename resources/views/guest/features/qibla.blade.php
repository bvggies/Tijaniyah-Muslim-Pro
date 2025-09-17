<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div class="slide-in-left">
                <h2 class="text-3xl font-bold bg-gradient-to-r from-green-600 to-green-800 bg-clip-text text-transparent">
                    <i class="fas fa-compass mr-3"></i>Qibla Direction (Guest Access)
                </h2>
                <p class="text-gray-600 mt-1">Find the direction to the Holy Kaaba</p>
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
                        <p class="text-yellow-700 mt-1">You're viewing a basic Qibla compass. <a href="{{ route('guest.login') }}" class="font-semibold underline hover:text-yellow-800">Login</a> for GPS-based accurate direction and location detection.</p>
                    </div>
                </div>
            </div>

            <!-- Basic Qibla Compass -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
                <!-- Compass Display -->
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8 text-center shadow-lg">
                    <h3 class="text-2xl font-bold text-green-900 mb-6">Qibla Compass</h3>
                    <div class="relative w-64 h-64 mx-auto mb-6">
                        <!-- Compass Background -->
                        <div class="w-full h-full rounded-full border-8 border-green-300 bg-white shadow-lg relative">
                            <!-- Compass Needle -->
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-1 h-24 bg-red-500 rounded-full origin-bottom" id="needle"></div>
                            <!-- Center Dot -->
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-4 h-4 bg-red-500 rounded-full"></div>
                            <!-- Direction Labels -->
                            <div class="absolute top-2 left-1/2 transform -translate-x-1/2 text-green-800 font-bold">N</div>
                            <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 text-green-800 font-bold">S</div>
                            <div class="absolute top-1/2 left-2 transform -translate-y-1/2 text-green-800 font-bold">W</div>
                            <div class="absolute top-1/2 right-2 transform -translate-y-1/2 text-green-800 font-bold">E</div>
                        </div>
                    </div>
                    <p class="text-green-800 text-lg font-semibold">Qibla Direction: <span class="text-red-600">Southeast</span></p>
                    <p class="text-green-700 text-sm mt-2">Approximate direction to Makkah</p>
                </div>

                <!-- Qibla Information -->
                <div class="space-y-6">
                    <div class="bg-white rounded-2xl p-6 shadow-lg">
                        <h4 class="text-xl font-bold text-gray-800 mb-4">
                            <i class="fas fa-info-circle text-blue-500 mr-2"></i>About Qibla
                        </h4>
                        <p class="text-gray-700 mb-4">The Qibla is the direction that Muslims face when performing their prayers. It points towards the Kaaba in Makkah, Saudi Arabia.</p>
                        <ul class="space-y-2 text-gray-600">
                            <li>• Face the Qibla during all five daily prayers</li>
                            <li>• The direction varies based on your location</li>
                            <li>• Use a compass or GPS for accuracy</li>
                            <li>• The Kaaba is the holiest site in Islam</li>
                        </ul>
                    </div>

                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-6">
                        <h4 class="text-xl font-bold text-blue-900 mb-4">
                            <i class="fas fa-map-marker-alt text-blue-500 mr-2"></i>Quick Reference
                        </h4>
                        <div class="space-y-3">
                            <div class="flex justify-between">
                                <span class="text-blue-800">From North America:</span>
                                <span class="text-blue-600 font-semibold">Northeast</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-blue-800">From Europe:</span>
                                <span class="text-blue-600 font-semibold">Southeast</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-blue-800">From Asia:</span>
                                <span class="text-blue-600 font-semibold">West</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-blue-800">From Africa:</span>
                                <span class="text-blue-600 font-semibold">North</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kaaba Information -->
            <div class="bg-gradient-to-r from-amber-500 to-orange-600 rounded-2xl p-8 mb-8 text-white">
                <div class="text-center">
                    <h3 class="text-3xl font-bold mb-4">
                        <i class="fas fa-kaaba mr-3"></i>The Holy Kaaba
                    </h3>
                    <p class="text-xl text-amber-100 mb-6">The House of Allah in Makkah, Saudi Arabia</p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-mosque text-white text-2xl"></i>
                            </div>
                            <h4 class="font-bold text-lg">Built by Prophet Ibrahim</h4>
                            <p class="text-amber-100 text-sm">Peace be upon him</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-globe text-white text-2xl"></i>
                            </div>
                            <h4 class="font-bold text-lg">Center of Islam</h4>
                            <p class="text-amber-100 text-sm">Direction for all Muslims</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-hajj text-white text-2xl"></i>
                            </div>
                            <h4 class="font-bold text-lg">Hajj Destination</h4>
                            <p class="text-amber-100 text-sm">Pilgrimage site</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Upgrade Notice -->
            <div class="bg-gradient-to-r from-gray-800 to-gray-900 rounded-2xl p-8 text-white">
                <div class="text-center">
                    <h3 class="text-2xl font-bold mb-4">
                        <i class="fas fa-crown mr-3 text-yellow-400"></i>Get Accurate Qibla Direction
                    </h3>
                    <p class="text-gray-300 mb-6">Login to get precise Qibla direction using GPS and your exact location with real-time compass.</p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gray-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-location-arrow text-white text-2xl"></i>
                            </div>
                            <h4 class="font-bold mb-2">GPS Accuracy</h4>
                            <p class="text-gray-300 text-sm">Precise direction using your location</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gray-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-compass text-white text-2xl"></i>
                            </div>
                            <h4 class="font-bold mb-2">Real-time Compass</h4>
                            <p class="text-gray-300 text-sm">Live compass with Qibla indicator</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gray-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-bell text-white text-2xl"></i>
                            </div>
                            <h4 class="font-bold mb-2">Prayer Reminders</h4>
                            <p class="text-gray-300 text-sm">Get notified before prayer times</p>
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
        // Simple compass animation
        function animateCompass() {
            const needle = document.getElementById('needle');
            let rotation = 0;
            setInterval(() => {
                rotation += 0.5;
                needle.style.transform = `translate(-50%, -50%) rotate(${rotation}deg)`;
            }, 50);
        }
        
        // Start compass animation
        animateCompass();
    </script>
</x-app-layout>
