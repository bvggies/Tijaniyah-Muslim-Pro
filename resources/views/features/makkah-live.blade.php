<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div class="slide-in-left">
                <h2 class="text-3xl font-bold bg-gradient-to-r from-amber-600 to-amber-800 bg-clip-text text-transparent">
                    <i class="fas fa-video mr-3"></i>Makkah Live
                </h2>
                <p class="text-gray-600 mt-1">Watch live from the Holy Kaaba</p>
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
            <!-- Live Stream Header -->
            <div class="bg-gradient-to-r from-amber-500 to-amber-600 rounded-2xl p-8 mb-8 text-white text-center">
                <h3 class="text-3xl font-bold mb-4">
                    <i class="fas fa-video mr-3"></i>Live from Makkah
                </h3>
                <p class="text-xl text-amber-100">Watch live streaming from the Holy Kaaba and Masjid al-Haram</p>
            </div>

            <!-- YouTube Live Stream -->
            <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
                <div class="aspect-w-16 aspect-h-9 rounded-xl overflow-hidden shadow-2xl">
                    <iframe 
                        src="https://www.youtube.com/embed/LU__ICSvrtw?si=Ixkau0YMKY2Xyf4q&autoplay=1&mute=1" 
                        title="Makkah Live Stream" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen
                        class="w-full h-96 rounded-xl">
                    </iframe>
                </div>
            </div>

            <!-- Stream Information -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-gradient-to-br from-amber-50 to-amber-100 rounded-xl p-6 text-center">
                    <i class="fas fa-clock text-3xl text-amber-600 mb-4"></i>
                    <h4 class="text-lg font-bold text-amber-900 mb-2">Current Time</h4>
                    <p class="text-amber-800" id="makkah-time">Loading...</p>
                </div>
                
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 text-center">
                    <i class="fas fa-mosque text-3xl text-green-600 mb-4"></i>
                    <h4 class="text-lg font-bold text-green-900 mb-2">Prayer Status</h4>
                    <p class="text-green-800" id="prayer-status">Loading...</p>
                </div>
                
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6 text-center">
                    <i class="fas fa-users text-3xl text-blue-600 mb-4"></i>
                    <h4 class="text-lg font-bold text-blue-900 mb-2">Watching Live</h4>
                    <p class="text-blue-800">Thousands of believers worldwide</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Update Makkah time
        function updateMakkahTime() {
            const now = new Date();
            const makkahTime = new Date(now.toLocaleString("en-US", {timeZone: "Asia/Riyadh"}));
            document.getElementById('makkah-time').textContent = makkahTime.toLocaleTimeString();
        }

        // Update prayer status
        function updatePrayerStatus() {
            const now = new Date();
            const hour = now.getHours();
            
            let status = "Prayer time not available";
            if (hour >= 5 && hour < 6) status = "Fajr Prayer Time";
            else if (hour >= 12 && hour < 13) status = "Dhuhr Prayer Time";
            else if (hour >= 15 && hour < 16) status = "Asr Prayer Time";
            else if (hour >= 18 && hour < 19) status = "Maghrib Prayer Time";
            else if (hour >= 19 && hour < 20) status = "Isha Prayer Time";
            else status = "Between Prayers";
            
            document.getElementById('prayer-status').textContent = status;
        }

        // Update every minute
        setInterval(() => {
            updateMakkahTime();
            updatePrayerStatus();
        }, 60000);

        // Initial update
        updateMakkahTime();
        updatePrayerStatus();
    </script>
</x-app-layout>
