<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div class="slide-in-left">
                <h2 class="text-3xl font-bold bg-gradient-to-r from-pink-600 to-pink-800 bg-clip-text text-transparent">
                    <i class="fas fa-star mr-3"></i>Wazifa Collection
                </h2>
                <p class="text-gray-600 mt-1">Islamic supplications and spiritual practices</p>
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
                        <input type="text" id="search-wazifa" placeholder="Search wazifas..." 
                               class="w-full p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-transparent">
                    </div>
                    <div class="flex gap-2">
                        <select id="category-filter" class="p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-transparent">
                            <option value="">All Categories</option>
                            <option value="protection">Protection</option>
                            <option value="healing">Healing</option>
                            <option value="guidance">Guidance</option>
                            <option value="forgiveness">Forgiveness</option>
                            <option value="prosperity">Prosperity</option>
                            <option value="family">Family</option>
                        </select>
                        <button onclick="showMyWazifas()" class="bg-gradient-to-r from-pink-500 to-pink-600 hover:from-pink-600 hover:to-pink-700 text-white font-semibold py-3 px-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                            <i class="fas fa-heart mr-2"></i>My Wazifas
                        </button>
                    </div>
                </div>
            </div>

            <!-- My Wazifas Progress -->
            <div class="bg-white rounded-2xl shadow-xl p-8 mb-8" id="progress-section" style="display: none;">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">
                    <i class="fas fa-chart-line text-pink-500 mr-2"></i>
                    My Wazifa Progress
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <div class="bg-gradient-to-r from-pink-50 to-pink-100 rounded-xl p-4">
                        <h4 class="text-lg font-bold text-pink-900">Current Streak</h4>
                        <p class="text-3xl font-bold text-pink-600" id="current-streak">0</p>
                        <p class="text-pink-700 text-sm">days</p>
                    </div>
                    <div class="bg-gradient-to-r from-purple-50 to-purple-100 rounded-xl p-4">
                        <h4 class="text-lg font-bold text-purple-900">Completed Today</h4>
                        <p class="text-3xl font-bold text-purple-600" id="completed-today">0</p>
                        <p class="text-purple-700 text-sm">wazifas</p>
                    </div>
                    <div class="bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl p-4">
                        <h4 class="text-lg font-bold text-blue-900">Total Completed</h4>
                        <p class="text-3xl font-bold text-blue-600" id="total-completed">0</p>
                        <p class="text-blue-700 text-sm">wazifas</p>
                    </div>
                </div>
                <div id="streak-calendar" class="grid grid-cols-7 gap-2 mb-4">
                    <!-- Calendar will be populated by JavaScript -->
                </div>
            </div>

            <!-- Wazifas Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="wazifas-container">
                <!-- Protection Wazifa -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105" data-category="protection">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-500 rounded-xl flex items-center justify-center shadow-lg">
                            <i class="fas fa-shield-alt text-white text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-blue-900">Protection Wazifa</h3>
                            <p class="text-blue-700 text-sm">Ayat al-Kursi</p>
                        </div>
                    </div>
                    <div class="arabic-text text-right text-xl font-bold text-blue-800 mb-4" dir="rtl">
                        اللَّهُ لَا إِلَٰهَ إِلَّا هُوَ الْحَيُّ الْقَيُّومُ
                    </div>
                    <p class="text-blue-700 mb-4">Recite Ayat al-Kursi 3 times after each prayer for protection from evil.</p>
                    <div class="flex justify-between items-center">
                        <button onclick="startWazifa('protection')" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors duration-300">
                            <i class="fas fa-play mr-2"></i>Start
                        </button>
                        <div class="flex items-center space-x-2">
                            <button onclick="markComplete('protection')" class="text-green-600 hover:text-green-800 transition-colors duration-300" title="Mark as Complete">
                                <i class="fas fa-check-circle"></i>
                            </button>
                            <button onclick="addToFavorites('protection')" class="text-blue-600 hover:text-blue-800 transition-colors duration-300">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="flex items-center justify-between text-sm text-blue-700">
                            <span>Progress</span>
                            <span id="protection-progress">0/3</span>
                        </div>
                        <div class="w-full bg-blue-200 rounded-full h-2 mt-1">
                            <div id="protection-bar" class="bg-blue-500 h-2 rounded-full transition-all duration-300" style="width: 0%"></div>
                        </div>
                    </div>
                </div>

                <!-- Healing Wazifa -->
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105" data-category="healing">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-green-500 rounded-xl flex items-center justify-center shadow-lg">
                            <i class="fas fa-heart text-white text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-green-900">Healing Wazifa</h3>
                            <p class="text-green-700 text-sm">Surah Al-Fatihah</p>
                        </div>
                    </div>
                    <div class="arabic-text text-right text-lg font-bold text-green-800 mb-4" dir="rtl">
                        بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ
                    </div>
                    <p class="text-green-700 mb-4">Recite Surah Al-Fatihah 7 times and blow on water, then drink for healing.</p>
                    <div class="flex justify-between items-center">
                        <button onclick="startWazifa('healing')" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition-colors duration-300">
                            <i class="fas fa-play mr-2"></i>Start
                        </button>
                        <button onclick="addToFavorites('healing')" class="text-green-600 hover:text-green-800 transition-colors duration-300">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                </div>

                <!-- Guidance Wazifa -->
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105" data-category="guidance">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-purple-500 rounded-xl flex items-center justify-center shadow-lg">
                            <i class="fas fa-lightbulb text-white text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-purple-900">Guidance Wazifa</h3>
                            <p class="text-purple-700 text-sm">Istighfar</p>
                        </div>
                    </div>
                    <div class="arabic-text text-right text-xl font-bold text-purple-800 mb-4" dir="rtl">
                        أَسْتَغْفِرُ اللَّهَ الْعَظِيمَ
                    </div>
                    <p class="text-purple-700 mb-4">Recite Istighfar 100 times daily for guidance and wisdom.</p>
                    <div class="flex justify-between items-center">
                        <button onclick="startWazifa('guidance')" class="bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded-lg transition-colors duration-300">
                            <i class="fas fa-play mr-2"></i>Start
                        </button>
                        <button onclick="addToFavorites('guidance')" class="text-purple-600 hover:text-purple-800 transition-colors duration-300">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                </div>

                <!-- Forgiveness Wazifa -->
                <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105" data-category="forgiveness">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-red-500 rounded-xl flex items-center justify-center shadow-lg">
                            <i class="fas fa-hands-praying text-white text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-red-900">Forgiveness Wazifa</h3>
                            <p class="text-red-700 text-sm">La Ilaha Illa Allah</p>
                        </div>
                    </div>
                    <div class="arabic-text text-right text-lg font-bold text-red-800 mb-4" dir="rtl">
                        لَا إِلَٰهَ إِلَّا اللَّهُ
                    </div>
                    <p class="text-red-700 mb-4">Recite "La Ilaha Illa Allah" 1000 times for forgiveness of sins.</p>
                    <div class="flex justify-between items-center">
                        <button onclick="startWazifa('forgiveness')" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition-colors duration-300">
                            <i class="fas fa-play mr-2"></i>Start
                        </button>
                        <button onclick="addToFavorites('forgiveness')" class="text-red-600 hover:text-red-800 transition-colors duration-300">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                </div>

                <!-- Prosperity Wazifa -->
                <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105" data-category="prosperity">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-yellow-500 rounded-xl flex items-center justify-center shadow-lg">
                            <i class="fas fa-coins text-white text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-yellow-900">Prosperity Wazifa</h3>
                            <p class="text-yellow-700 text-sm">Surah Al-Waqi'ah</p>
                        </div>
                    </div>
                    <div class="arabic-text text-right text-lg font-bold text-yellow-800 mb-4" dir="rtl">
                        إِذَا وَقَعَتِ الْوَاقِعَةُ
                    </div>
                    <p class="text-yellow-700 mb-4">Recite Surah Al-Waqi'ah daily for prosperity and sustenance.</p>
                    <div class="flex justify-between items-center">
                        <button onclick="startWazifa('prosperity')" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg transition-colors duration-300">
                            <i class="fas fa-play mr-2"></i>Start
                        </button>
                        <button onclick="addToFavorites('prosperity')" class="text-yellow-600 hover:text-yellow-800 transition-colors duration-300">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                </div>

                <!-- Family Wazifa -->
                <div class="bg-gradient-to-br from-pink-50 to-pink-100 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105" data-category="family">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-pink-500 rounded-xl flex items-center justify-center shadow-lg">
                            <i class="fas fa-home text-white text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-pink-900">Family Wazifa</h3>
                            <p class="text-pink-700 text-sm">Surah Al-Baqarah</p>
                        </div>
                    </div>
                    <div class="arabic-text text-right text-lg font-bold text-pink-800 mb-4" dir="rtl">
                        الَّذِينَ يُؤْمِنُونَ بِالْغَيْبِ
                    </div>
                    <p class="text-pink-700 mb-4">Recite the last 2 verses of Surah Al-Baqarah for family protection.</p>
                    <div class="flex justify-between items-center">
                        <button onclick="startWazifa('family')" class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded-lg transition-colors duration-300">
                            <i class="fas fa-play mr-2"></i>Start
                        </button>
                        <button onclick="addToFavorites('family')" class="text-pink-600 hover:text-pink-800 transition-colors duration-300">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- My Wazifas Section -->
            <div class="bg-white rounded-2xl shadow-xl p-8 mt-8">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">
                    <i class="fas fa-heart text-pink-500 mr-2"></i>
                    My Wazifas
                </h3>
                <div id="my-wazifas-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="text-center text-gray-500 py-8">
                        <i class="fas fa-heart text-4xl mb-4"></i>
                        <p>No wazifas added yet. Click the heart icon to add wazifas to your collection.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let favorites = JSON.parse(localStorage.getItem('wazifaFavorites') || '[]');
        let wazifaProgress = JSON.parse(localStorage.getItem('wazifaProgress') || '{}');
        let wazifaStats = JSON.parse(localStorage.getItem('wazifaStats') || '{"streak": 0, "completedToday": 0, "totalCompleted": 0, "lastCompleted": null}');

        // Wazifa data with completion requirements
        const wazifaData = {
            'protection': { name: 'Protection Wazifa', target: 3, current: 0 },
            'healing': { name: 'Healing Wazifa', target: 7, current: 0 },
            'guidance': { name: 'Guidance Wazifa', target: 100, current: 0 },
            'forgiveness': { name: 'Forgiveness Wazifa', target: 1000, current: 0 },
            'prosperity': { name: 'Prosperity Wazifa', target: 1, current: 0 },
            'family': { name: 'Family Wazifa', target: 1, current: 0 }
        };

        // Search functionality
        document.getElementById('search-wazifa').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const wazifas = document.querySelectorAll('[data-category]');
            
            wazifas.forEach(wazifa => {
                const text = wazifa.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    wazifa.style.display = 'block';
                } else {
                    wazifa.style.display = 'none';
                }
            });
        });

        // Category filter
        document.getElementById('category-filter').addEventListener('change', function(e) {
            const category = e.target.value;
            const wazifas = document.querySelectorAll('[data-category]');
            
            wazifas.forEach(wazifa => {
                if (!category || wazifa.dataset.category === category) {
                    wazifa.style.display = 'block';
                } else {
                    wazifa.style.display = 'none';
                }
            });
        });

        // Start wazifa
        function startWazifa(wazifaId) {
            showWazifaInstructions(wazifaId);
        }

        // Show detailed wazifa instructions
        function showWazifaInstructions(wazifaId) {
            const wazifa = wazifaData[wazifaId];
            if (!wazifa) return;

            const instructions = {
                'protection': {
                    steps: [
                        'Perform Wudu (ablution)',
                        'Recite Ayat al-Kursi 3 times',
                        'Blow on your hands and wipe over your body',
                        'Repeat after each of the 5 daily prayers'
                    ],
                    arabic: 'اللَّهُ لَا إِلَٰهَ إِلَّا هُوَ الْحَيُّ الْقَيُّومُ',
                    transliteration: 'Allahu la ilaha illa huwa al-hayyu al-qayyum',
                    meaning: 'Allah - there is no deity except Him, the Ever-Living, the Sustainer of existence'
                },
                'healing': {
                    steps: [
                        'Perform Wudu (ablution)',
                        'Recite Surah Al-Fatihah 7 times',
                        'Blow on water',
                        'Drink the water with intention of healing'
                    ],
                    arabic: 'بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ',
                    transliteration: 'Bismillahi ar-rahman ar-rahim',
                    meaning: 'In the name of Allah, the Entirely Merciful, the Especially Merciful'
                }
            };

            const instruction = instructions[wazifaId] || instructions['protection'];
            
            const modal = document.createElement('div');
            modal.className = 'fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4';
            modal.innerHTML = `
                <div class="bg-white rounded-2xl p-8 max-w-2xl w-full max-h-[90vh] overflow-y-auto">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-2xl font-bold text-gray-800">${wazifa.name} Instructions</h3>
                        <button onclick="this.closest('.fixed').remove()" class="text-gray-500 hover:text-gray-700">
                            <i class="fas fa-times text-xl"></i>
                        </button>
                    </div>
                    
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold text-gray-700 mb-3">Arabic Text:</h4>
                        <div class="text-right text-2xl font-bold text-gray-800 mb-2" dir="rtl">${instruction.arabic}</div>
                        <p class="text-gray-600 mb-1"><strong>Transliteration:</strong> ${instruction.transliteration}</p>
                        <p class="text-gray-600"><strong>Meaning:</strong> ${instruction.meaning}</p>
                    </div>
                    
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold text-gray-700 mb-3">Steps:</h4>
                        <ol class="list-decimal list-inside space-y-2 text-gray-700">
                            ${instruction.steps.map(step => `<li>${step}</li>`).join('')}
                        </ol>
                    </div>
                    
                    <div class="flex justify-end space-x-3">
                        <button onclick="this.closest('.fixed').remove()" class="px-6 py-2 text-gray-600 hover:text-gray-800">Close</button>
                        <button onclick="markComplete('${wazifaId}'); this.closest('.fixed').remove();" class="px-6 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600">
                            <i class="fas fa-check mr-2"></i>Mark Complete
                        </button>
                    </div>
                </div>
            `;
            document.body.appendChild(modal);
        }

        // Mark wazifa as complete
        function markComplete(wazifaId) {
            const wazifa = wazifaData[wazifaId];
            if (!wazifa) return;

            wazifa.current = wazifa.target;
            updateProgress(wazifaId);
            updateStats();
            showCompletionMessage(wazifaId);
        }

        // Update progress display
        function updateProgress(wazifaId) {
            const wazifa = wazifaData[wazifaId];
            if (!wazifa) return;

            const progressElement = document.getElementById(`${wazifaId}-progress`);
            const barElement = document.getElementById(`${wazifaId}-bar`);
            
            if (progressElement) {
                progressElement.textContent = `${wazifa.current}/${wazifa.target}`;
            }
            
            if (barElement) {
                const percentage = (wazifa.current / wazifa.target) * 100;
                barElement.style.width = `${percentage}%`;
            }
        }

        // Update statistics
        function updateStats() {
            const today = new Date().toDateString();
            const lastCompleted = wazifaStats.lastCompleted;
            
            // Check if this is a new day
            if (lastCompleted !== today) {
                if (lastCompleted && new Date(lastCompleted).toDateString() === new Date(Date.now() - 86400000).toDateString()) {
                    // Consecutive day
                    wazifaStats.streak++;
                } else if (lastCompleted !== today) {
                    // Streak broken
                    wazifaStats.streak = 1;
                }
                wazifaStats.completedToday = 0;
            }
            
            wazifaStats.completedToday++;
            wazifaStats.totalCompleted++;
            wazifaStats.lastCompleted = today;
            
            localStorage.setItem('wazifaStats', JSON.stringify(wazifaStats));
            updateStatsDisplay();
        }

        // Update stats display
        function updateStatsDisplay() {
            document.getElementById('current-streak').textContent = wazifaStats.streak;
            document.getElementById('completed-today').textContent = wazifaStats.completedToday;
            document.getElementById('total-completed').textContent = wazifaStats.totalCompleted;
        }

        // Show completion message
        function showCompletionMessage(wazifaId) {
            const wazifa = wazifaData[wazifaId];
            const message = `Masha Allah! You completed the ${wazifa.name}. Barakallahu feeki!`;
            
            // Show success notification
            const notification = document.createElement('div');
            notification.className = 'fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50';
            notification.innerHTML = `
                <div class="flex items-center">
                    <i class="fas fa-check-circle mr-2"></i>
                    <span>${message}</span>
                </div>
            `;
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.remove();
            }, 3000);
        }

        // Add to favorites
        function addToFavorites(wazifaId) {
            if (!favorites.includes(wazifaId)) {
                favorites.push(wazifaId);
                localStorage.setItem('wazifaFavorites', JSON.stringify(favorites));
                updateMyWazifasDisplay();
                alert('Added to your wazifas!');
            } else {
                alert('Already in your wazifas!');
            }
        }

        // Show my wazifas
        function showMyWazifas() {
            const progressSection = document.getElementById('progress-section');
            if (progressSection.style.display === 'none') {
                progressSection.style.display = 'block';
                updateStatsDisplay();
                generateStreakCalendar();
            } else {
                progressSection.style.display = 'none';
            }
        }

        // Generate streak calendar
        function generateStreakCalendar() {
            const calendar = document.getElementById('streak-calendar');
            const today = new Date();
            const days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
            
            // Clear existing calendar
            calendar.innerHTML = '';
            
            // Add day headers
            days.forEach(day => {
                const dayHeader = document.createElement('div');
                dayHeader.className = 'text-center text-sm font-semibold text-gray-600';
                dayHeader.textContent = day;
                calendar.appendChild(dayHeader);
            });
            
            // Add calendar days (simplified - showing last 30 days)
            for (let i = 29; i >= 0; i--) {
                const date = new Date(today);
                date.setDate(date.getDate() - i);
                
                const dayElement = document.createElement('div');
                dayElement.className = 'h-8 w-8 rounded-full flex items-center justify-center text-xs';
                
                // Check if this day had completed wazifas (simplified logic)
                const hasCompleted = Math.random() > 0.7; // Random for demo
                
                if (hasCompleted) {
                    dayElement.className += ' bg-green-500 text-white';
                } else {
                    dayElement.className += ' bg-gray-200 text-gray-600';
                }
                
                dayElement.textContent = date.getDate();
                calendar.appendChild(dayElement);
            }
        }

        // Update my wazifas display
        function updateMyWazifasDisplay() {
            const container = document.getElementById('my-wazifas-container');
            
            if (favorites.length === 0) {
                container.innerHTML = `
                    <div class="text-center text-gray-500 py-8 col-span-full">
                        <i class="fas fa-heart text-4xl mb-4"></i>
                        <p>No wazifas added yet. Click the heart icon to add wazifas to your collection.</p>
                    </div>
                `;
            } else {
                // In a real app, you would display the actual favorite wazifas
                container.innerHTML = `
                    <div class="text-center text-gray-500 py-8 col-span-full">
                        <i class="fas fa-heart text-4xl mb-4 text-pink-500"></i>
                        <p>You have ${favorites.length} wazifas in your collection!</p>
                    </div>
                `;
            }
        }

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            updateMyWazifasDisplay();
            updateStatsDisplay();
            
            // Initialize progress for all wazifas
            Object.keys(wazifaData).forEach(wazifaId => {
                updateProgress(wazifaId);
            });
        });
    </script>
</x-app-layout>
