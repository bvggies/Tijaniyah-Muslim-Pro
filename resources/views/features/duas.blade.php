<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div class="slide-in-left">
                <h2 class="text-3xl font-bold bg-gradient-to-r from-purple-600 to-purple-800 bg-clip-text text-transparent">
                    <i class="fas fa-hands mr-3"></i>Duas & Supplications
                </h2>
                <p class="text-gray-600 mt-1">Collection of authentic Islamic prayers and supplications</p>
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
            <!-- Search and Filter -->
            <div class="bg-white rounded-2xl shadow-xl p-6 mb-8">
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1">
                        <input type="text" id="search-duas" placeholder="Search duas..." 
                               class="w-full p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                    </div>
                    <div class="flex gap-2">
                        <select id="category-filter" class="p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                            <option value="">All Categories</option>
                            <option value="daily">Daily Duas</option>
                            <option value="prayer">Prayer Duas</option>
                            <option value="protection">Protection</option>
                            <option value="forgiveness">Forgiveness</option>
                            <option value="guidance">Guidance</option>
                            <option value="healing">Healing</option>
                            <option value="travel">Travel</option>
                        </select>
                        <button onclick="toggleArabic()" class="bg-gradient-to-r from-purple-500 to-purple-600 hover:from-purple-600 hover:to-purple-700 text-white font-semibold py-3 px-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                            <i class="fas fa-language mr-2"></i>Toggle Arabic
                        </button>
                    </div>
                </div>
            </div>

            <!-- Duas Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="duas-container">
                <!-- Daily Duas -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105" data-category="daily">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-500 rounded-xl flex items-center justify-center shadow-lg">
                            <i class="fas fa-sun text-white text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-blue-900">Morning Dua</h3>
                            <p class="text-blue-700 text-sm">Daily morning supplication</p>
                        </div>
                    </div>
                    <div class="arabic-text text-right text-2xl font-bold text-blue-800 mb-4" dir="rtl">
                        أَصْبَحْنَا وَأَصْبَحَ الْمُلْكُ لِلَّهِ
                    </div>
                    <p class="text-blue-700 mb-4">"We have reached the morning and the kingdom belongs to Allah."</p>
                    <div class="flex justify-between items-center">
                        <button onclick="playAudio('morning')" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors duration-300">
                            <i class="fas fa-play mr-2"></i>Play
                        </button>
                        <button onclick="addToFavorites('morning')" class="text-blue-600 hover:text-blue-800 transition-colors duration-300">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                </div>

                <!-- Evening Dua -->
                <div class="bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105" data-category="daily">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-indigo-500 rounded-xl flex items-center justify-center shadow-lg">
                            <i class="fas fa-moon text-white text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-indigo-900">Evening Dua</h3>
                            <p class="text-indigo-700 text-sm">Daily evening supplication</p>
                        </div>
                    </div>
                    <div class="arabic-text text-right text-2xl font-bold text-indigo-800 mb-4" dir="rtl">
                        أَمْسَيْنَا وَأَمْسَى الْمُلْكُ لِلَّهِ
                    </div>
                    <p class="text-indigo-700 mb-4">"We have reached the evening and the kingdom belongs to Allah."</p>
                    <div class="flex justify-between items-center">
                        <button onclick="playAudio('evening')" class="bg-indigo-500 hover:bg-indigo-600 text-white px-4 py-2 rounded-lg transition-colors duration-300">
                            <i class="fas fa-play mr-2"></i>Play
                        </button>
                        <button onclick="addToFavorites('evening')" class="text-indigo-600 hover:text-indigo-800 transition-colors duration-300">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                </div>

                <!-- Before Eating -->
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105" data-category="daily">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-green-500 rounded-xl flex items-center justify-center shadow-lg">
                            <i class="fas fa-utensils text-white text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-green-900">Before Eating</h3>
                            <p class="text-green-700 text-sm">Dua before meals</p>
                        </div>
                    </div>
                    <div class="arabic-text text-right text-2xl font-bold text-green-800 mb-4" dir="rtl">
                        بِسْمِ اللَّهِ
                    </div>
                    <p class="text-green-700 mb-4">"In the name of Allah."</p>
                    <div class="flex justify-between items-center">
                        <button onclick="playAudio('eating')" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition-colors duration-300">
                            <i class="fas fa-play mr-2"></i>Play
                        </button>
                        <button onclick="addToFavorites('eating')" class="text-green-600 hover:text-green-800 transition-colors duration-300">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                </div>

                <!-- Ayat al-Kursi -->
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105" data-category="protection">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-purple-500 rounded-xl flex items-center justify-center shadow-lg">
                            <i class="fas fa-shield-alt text-white text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-purple-900">Ayat al-Kursi</h3>
                            <p class="text-purple-700 text-sm">The Throne Verse</p>
                        </div>
                    </div>
                    <div class="arabic-text text-right text-lg font-bold text-purple-800 mb-4" dir="rtl">
                        اللَّهُ لَا إِلَٰهَ إِلَّا هُوَ الْحَيُّ الْقَيُّومُ
                    </div>
                    <p class="text-purple-700 mb-4">"Allah! There is no god but He, the Ever-Living, the Sustainer of existence."</p>
                    <div class="flex justify-between items-center">
                        <button onclick="playAudio('kursi')" class="bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded-lg transition-colors duration-300">
                            <i class="fas fa-play mr-2"></i>Play
                        </button>
                        <button onclick="addToFavorites('kursi')" class="text-purple-600 hover:text-purple-800 transition-colors duration-300">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                </div>

                <!-- Istighfar -->
                <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105" data-category="forgiveness">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-red-500 rounded-xl flex items-center justify-center shadow-lg">
                            <i class="fas fa-hands-praying text-white text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-red-900">Istighfar</h3>
                            <p class="text-red-700 text-sm">Seeking forgiveness</p>
                        </div>
                    </div>
                    <div class="arabic-text text-right text-2xl font-bold text-red-800 mb-4" dir="rtl">
                        أَسْتَغْفِرُ اللَّهَ
                    </div>
                    <p class="text-red-700 mb-4">"I seek forgiveness from Allah."</p>
                    <div class="flex justify-between items-center">
                        <button onclick="playAudio('istighfar')" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition-colors duration-300">
                            <i class="fas fa-play mr-2"></i>Play
                        </button>
                        <button onclick="addToFavorites('istighfar')" class="text-red-600 hover:text-red-800 transition-colors duration-300">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                </div>

                <!-- Travel Dua -->
                <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105" data-category="travel">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-yellow-500 rounded-xl flex items-center justify-center shadow-lg">
                            <i class="fas fa-plane text-white text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-yellow-900">Travel Dua</h3>
                            <p class="text-yellow-700 text-sm">Dua for safe journey</p>
                        </div>
                    </div>
                    <div class="arabic-text text-right text-lg font-bold text-yellow-800 mb-4" dir="rtl">
                        سُبْحَانَ الَّذِي سَخَّرَ لَنَا هَٰذَا
                    </div>
                    <p class="text-yellow-700 mb-4">"Glory to Him who has subjected this to us."</p>
                    <div class="flex justify-between items-center">
                        <button onclick="playAudio('travel')" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg transition-colors duration-300">
                            <i class="fas fa-play mr-2"></i>Play
                        </button>
                        <button onclick="addToFavorites('travel')" class="text-yellow-600 hover:text-yellow-800 transition-colors duration-300">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Favorites Section -->
            <div class="bg-white rounded-2xl shadow-xl p-8 mt-8">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">
                    <i class="fas fa-heart text-red-500 mr-2"></i>
                    My Favorite Duas
                </h3>
                <div id="favorites-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="text-center text-gray-500 py-8">
                        <i class="fas fa-heart text-4xl mb-4"></i>
                        <p>No favorite duas yet. Click the heart icon to add duas to your favorites.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let showArabic = true;
        let favorites = JSON.parse(localStorage.getItem('duaFavorites') || '[]');

        // Search functionality
        document.getElementById('search-duas').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const duas = document.querySelectorAll('[data-category]');
            
            duas.forEach(dua => {
                const text = dua.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    dua.style.display = 'block';
                } else {
                    dua.style.display = 'none';
                }
            });
        });

        // Category filter
        document.getElementById('category-filter').addEventListener('change', function(e) {
            const category = e.target.value;
            const duas = document.querySelectorAll('[data-category]');
            
            duas.forEach(dua => {
                if (!category || dua.dataset.category === category) {
                    dua.style.display = 'block';
                } else {
                    dua.style.display = 'none';
                }
            });
        });

        // Toggle Arabic display
        function toggleArabic() {
            showArabic = !showArabic;
            const arabicTexts = document.querySelectorAll('.arabic-text');
            
            arabicTexts.forEach(text => {
                text.style.display = showArabic ? 'block' : 'none';
            });
        }

        // Play audio (placeholder function)
        function playAudio(duaId) {
            // In a real app, you would play the actual audio
            alert(`Playing audio for ${duaId} dua`);
        }

        // Add to favorites
        function addToFavorites(duaId) {
            if (!favorites.includes(duaId)) {
                favorites.push(duaId);
                localStorage.setItem('duaFavorites', JSON.stringify(favorites));
                updateFavoritesDisplay();
                alert('Added to favorites!');
            } else {
                alert('Already in favorites!');
            }
        }

        // Update favorites display
        function updateFavoritesDisplay() {
            const container = document.getElementById('favorites-container');
            
            if (favorites.length === 0) {
                container.innerHTML = `
                    <div class="text-center text-gray-500 py-8 col-span-full">
                        <i class="fas fa-heart text-4xl mb-4"></i>
                        <p>No favorite duas yet. Click the heart icon to add duas to your favorites.</p>
                    </div>
                `;
            } else {
                // In a real app, you would display the actual favorite duas
                container.innerHTML = `
                    <div class="text-center text-gray-500 py-8 col-span-full">
                        <i class="fas fa-heart text-4xl mb-4 text-red-500"></i>
                        <p>You have ${favorites.length} favorite duas!</p>
                    </div>
                `;
            }
        }

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            updateFavoritesDisplay();
        });
    </script>
</x-app-layout>
