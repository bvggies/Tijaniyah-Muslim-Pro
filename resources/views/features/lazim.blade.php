<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div class="slide-in-left">
                <h2 class="text-3xl font-bold bg-gradient-to-r from-indigo-600 to-indigo-800 bg-clip-text text-transparent">
                    <i class="fas fa-clock mr-3"></i>Lazim Tracker
                </h2>
                <p class="text-gray-600 mt-1">Track your daily spiritual practices and habits</p>
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
            <!-- Today's Progress -->
            <div class="bg-gradient-to-r from-indigo-500 to-purple-600 rounded-2xl p-8 mb-8 text-white">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-2xl font-bold">Today's Progress</h3>
                    <div class="text-right">
                        <div class="text-3xl font-bold" id="today-completion">0%</div>
                        <div class="text-indigo-200">Completed</div>
                    </div>
                </div>
                <div class="w-full bg-indigo-300 rounded-full h-4">
                    <div id="progress-bar" class="bg-white h-4 rounded-full transition-all duration-500" style="width: 0%"></div>
                </div>
            </div>

            <!-- Routine Management -->
            <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-2xl font-bold text-gray-800">My Routines</h3>
                    <button onclick="showAddRoutineModal()" class="bg-gradient-to-r from-indigo-500 to-purple-600 hover:from-indigo-600 hover:to-purple-700 text-white font-semibold py-3 px-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                        <i class="fas fa-plus mr-2"></i>Add Routine
                    </button>
                </div>
                
                <!-- Routine Templates -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-6">
                    <button onclick="createRoutineFromTemplate('morning')" class="template-btn p-4 border-2 border-gray-200 rounded-xl hover:border-indigo-400 transition-colors text-left">
                        <h4 class="font-semibold text-gray-800">Morning Routine</h4>
                        <p class="text-sm text-gray-600">Fajr, Dhikr, Quran, Dua</p>
                    </button>
                    <button onclick="createRoutineFromTemplate('evening')" class="template-btn p-4 border-2 border-gray-200 rounded-xl hover:border-indigo-400 transition-colors text-left">
                        <h4 class="font-semibold text-gray-800">Evening Routine</h4>
                        <p class="text-sm text-gray-600">Maghrib, Dhikr, Reflection</p>
                    </button>
                    <button onclick="createRoutineFromTemplate('weekly')" class="template-btn p-4 border-2 border-gray-200 rounded-xl hover:border-indigo-400 transition-colors text-left">
                        <h4 class="font-semibold text-gray-800">Weekly Routine</h4>
                        <p class="text-sm text-gray-600">Jummah, Charity, Family</p>
                    </button>
                </div>
            </div>

            <!-- Daily Practices -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8" id="routines-container">
                <!-- Fajr Prayer -->
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-blue-500 rounded-xl flex items-center justify-center shadow-lg">
                                <i class="fas fa-sun text-white text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-bold text-gray-800">Fajr Prayer</h4>
                                <p class="text-gray-600 text-sm">Dawn Prayer</p>
                            </div>
                        </div>
                        <button onclick="togglePractice('fajr')" class="practice-btn w-12 h-12 rounded-full border-2 border-gray-300 flex items-center justify-center transition-all duration-300" id="fajr-btn">
                            <i class="fas fa-check text-white"></i>
                        </button>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-gray-800 mb-2" id="fajr-time">05:30</div>
                        <div class="text-sm text-gray-600">Next in 2h 15m</div>
                    </div>
                </div>

                <!-- Dhuhr Prayer -->
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-yellow-500 rounded-xl flex items-center justify-center shadow-lg">
                                <i class="fas fa-sun text-white text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-bold text-gray-800">Dhuhr Prayer</h4>
                                <p class="text-gray-600 text-sm">Midday Prayer</p>
                            </div>
                        </div>
                        <button onclick="togglePractice('dhuhr')" class="practice-btn w-12 h-12 rounded-full border-2 border-gray-300 flex items-center justify-center transition-all duration-300" id="dhuhr-btn">
                            <i class="fas fa-check text-white"></i>
                        </button>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-gray-800 mb-2" id="dhuhr-time">12:15</div>
                        <div class="text-sm text-gray-600">Next in 1h 30m</div>
                    </div>
                </div>

                <!-- Asr Prayer -->
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-orange-500 rounded-xl flex items-center justify-center shadow-lg">
                                <i class="fas fa-sun text-white text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-bold text-gray-800">Asr Prayer</h4>
                                <p class="text-gray-600 text-sm">Afternoon Prayer</p>
                            </div>
                        </div>
                        <button onclick="togglePractice('asr')" class="practice-btn w-12 h-12 rounded-full border-2 border-gray-300 flex items-center justify-center transition-all duration-300" id="asr-btn">
                            <i class="fas fa-check text-white"></i>
                        </button>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-gray-800 mb-2" id="asr-time">15:45</div>
                        <div class="text-sm text-gray-600">Next in 4h 15m</div>
                    </div>
                </div>

                <!-- Maghrib Prayer -->
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-red-500 rounded-xl flex items-center justify-center shadow-lg">
                                <i class="fas fa-moon text-white text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-bold text-gray-800">Maghrib Prayer</h4>
                                <p class="text-gray-600 text-sm">Sunset Prayer</p>
                            </div>
                        </div>
                        <button onclick="togglePractice('maghrib')" class="practice-btn w-12 h-12 rounded-full border-2 border-gray-300 flex items-center justify-center transition-all duration-300" id="maghrib-btn">
                            <i class="fas fa-check text-white"></i>
                        </button>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-gray-800 mb-2" id="maghrib-time">18:20</div>
                        <div class="text-sm text-gray-600">Next in 6h 50m</div>
                    </div>
                </div>

                <!-- Isha Prayer -->
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-purple-500 rounded-xl flex items-center justify-center shadow-lg">
                                <i class="fas fa-moon text-white text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-bold text-gray-800">Isha Prayer</h4>
                                <p class="text-gray-600 text-sm">Night Prayer</p>
                            </div>
                        </div>
                        <button onclick="togglePractice('isha')" class="practice-btn w-12 h-12 rounded-full border-2 border-gray-300 flex items-center justify-center transition-all duration-300" id="isha-btn">
                            <i class="fas fa-check text-white"></i>
                        </button>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-gray-800 mb-2" id="isha-time">19:45</div>
                        <div class="text-sm text-gray-600">Next in 8h 15m</div>
                    </div>
                </div>

                <!-- Quran Reading -->
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-green-500 rounded-xl flex items-center justify-center shadow-lg">
                                <i class="fas fa-book-quran text-white text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-bold text-gray-800">Quran Reading</h4>
                                <p class="text-gray-600 text-sm">Daily Recitation</p>
                            </div>
                        </div>
                        <button onclick="togglePractice('quran')" class="practice-btn w-12 h-12 rounded-full border-2 border-gray-300 flex items-center justify-center transition-all duration-300" id="quran-btn">
                            <i class="fas fa-check text-white"></i>
                        </button>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-gray-800 mb-2" id="quran-progress">0/1</div>
                        <div class="text-sm text-gray-600">Pages read today</div>
                    </div>
                </div>
            </div>

            <!-- Weekly Statistics -->
            <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">
                    <i class="fas fa-chart-line mr-2"></i>
                    Weekly Statistics
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-7 gap-4">
                    <div class="text-center p-4 bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl">
                        <div class="text-sm text-blue-600 font-semibold mb-2">Monday</div>
                        <div class="text-2xl font-bold text-blue-800">85%</div>
                    </div>
                    <div class="text-center p-4 bg-gradient-to-br from-green-50 to-green-100 rounded-xl">
                        <div class="text-sm text-green-600 font-semibold mb-2">Tuesday</div>
                        <div class="text-2xl font-bold text-green-800">92%</div>
                    </div>
                    <div class="text-center p-4 bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-xl">
                        <div class="text-sm text-yellow-600 font-semibold mb-2">Wednesday</div>
                        <div class="text-2xl font-bold text-yellow-800">78%</div>
                    </div>
                    <div class="text-center p-4 bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl">
                        <div class="text-sm text-purple-600 font-semibold mb-2">Thursday</div>
                        <div class="text-2xl font-bold text-purple-800">88%</div>
                    </div>
                    <div class="text-center p-4 bg-gradient-to-br from-pink-50 to-pink-100 rounded-xl">
                        <div class="text-sm text-pink-600 font-semibold mb-2">Friday</div>
                        <div class="text-2xl font-bold text-pink-800">95%</div>
                    </div>
                    <div class="text-center p-4 bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-xl">
                        <div class="text-sm text-indigo-600 font-semibold mb-2">Saturday</div>
                        <div class="text-2xl font-bold text-indigo-800">82%</div>
                    </div>
                    <div class="text-center p-4 bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl">
                        <div class="text-sm text-gray-600 font-semibold mb-2">Today</div>
                        <div class="text-2xl font-bold text-gray-800" id="today-percentage">0%</div>
                    </div>
                </div>
            </div>

            <!-- Reminders -->
            <div class="bg-white rounded-2xl shadow-xl p-8">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">
                    <i class="fas fa-bell mr-2"></i>
                    Reminders
                </h3>
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-4 bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl">
                        <div class="flex items-center">
                            <i class="fas fa-sun text-blue-500 text-xl mr-4"></i>
                            <div>
                                <h4 class="font-semibold text-blue-900">Fajr Prayer Reminder</h4>
                                <p class="text-blue-700 text-sm">Remind me 15 minutes before Fajr</p>
                            </div>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer" checked>
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                        </label>
                    </div>
                    
                    <div class="flex items-center justify-between p-4 bg-gradient-to-r from-green-50 to-green-100 rounded-xl">
                        <div class="flex items-center">
                            <i class="fas fa-book-quran text-green-500 text-xl mr-4"></i>
                            <div>
                                <h4 class="font-semibold text-green-900">Quran Reading Reminder</h4>
                                <p class="text-green-700 text-sm">Remind me to read Quran daily at 8 PM</p>
                            </div>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer" checked>
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-green-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-600"></div>
                        </label>
                    </div>
                    
                    <div class="flex items-center justify-between p-4 bg-gradient-to-r from-purple-50 to-purple-100 rounded-xl">
                        <div class="flex items-center">
                            <i class="fas fa-hands-praying text-purple-500 text-xl mr-4"></i>
                            <div>
                                <h4 class="font-semibold text-purple-900">Dhikr Reminder</h4>
                                <p class="text-purple-700 text-sm">Remind me to do dhikr every 2 hours</p>
                            </div>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-purple-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-purple-600"></div>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Add Routine Modal -->
            <div id="add-routine-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4 hidden">
                <div class="bg-white rounded-2xl p-8 max-w-2xl w-full max-h-[90vh] overflow-y-auto">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-2xl font-bold text-gray-800">Add New Routine</h3>
                        <button onclick="closeAddRoutineModal()" class="text-gray-500 hover:text-gray-700">
                            <i class="fas fa-times text-xl"></i>
                        </button>
                    </div>
                    
                    <form id="routine-form">
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Routine Name</label>
                            <input type="text" id="routine-name" class="w-full p-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent" placeholder="e.g., Morning Dhikr">
                        </div>
                        
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                            <textarea id="routine-description" rows="3" class="w-full p-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent" placeholder="Describe your routine..."></textarea>
                        </div>
                        
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Routine Items</label>
                            <div id="routine-items">
                                <div class="flex items-center space-x-2 mb-2">
                                    <input type="text" class="flex-1 p-2 border border-gray-300 rounded-lg" placeholder="e.g., Recite Ayat al-Kursi">
                                    <button type="button" onclick="removeRoutineItem(this)" class="text-red-500 hover:text-red-700">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="button" onclick="addRoutineItem()" class="text-indigo-600 hover:text-indigo-800 text-sm font-medium">
                                <i class="fas fa-plus mr-1"></i>Add Item
                            </button>
                        </div>
                        
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Reminder Time</label>
                            <input type="time" id="routine-reminder" class="w-full p-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        </div>
                        
                        <div class="flex justify-end space-x-3">
                            <button type="button" onclick="closeAddRoutineModal()" class="px-6 py-2 text-gray-600 hover:text-gray-800">Cancel</button>
                            <button type="submit" class="px-6 py-2 bg-indigo-500 text-white rounded-lg hover:bg-indigo-600">
                                <i class="fas fa-save mr-2"></i>Create Routine
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        let practices = {
            fajr: false,
            dhuhr: false,
            asr: false,
            maghrib: false,
            isha: false,
            quran: false
        };

        let routines = JSON.parse(localStorage.getItem('lazimRoutines') || '[]');
        let reminders = JSON.parse(localStorage.getItem('lazimReminders') || '{}');

        // Routine templates
        const routineTemplates = {
            morning: {
                name: 'Morning Routine',
                description: 'Start your day with spiritual practices',
                items: ['Fajr Prayer', 'Morning Dhikr', 'Quran Reading', 'Morning Dua'],
                reminder: '06:00'
            },
            evening: {
                name: 'Evening Routine',
                description: 'End your day with reflection and gratitude',
                items: ['Maghrib Prayer', 'Evening Dhikr', 'Reflection', 'Evening Dua'],
                reminder: '19:00'
            },
            weekly: {
                name: 'Weekly Routine',
                description: 'Weekly spiritual activities',
                items: ['Jummah Prayer', 'Charity', 'Family Time', 'Weekly Reflection'],
                reminder: '14:00'
            }
        };

        function togglePractice(practice) {
            practices[practice] = !practices[practice];
            const btn = document.getElementById(practice + '-btn');
            
            if (practices[practice]) {
                btn.classList.add('bg-green-500', 'border-green-500');
                btn.classList.remove('border-gray-300');
            } else {
                btn.classList.remove('bg-green-500', 'border-green-500');
                btn.classList.add('border-gray-300');
            }
            
            updateProgress();
            savePractices();
        }

        function updateProgress() {
            const completed = Object.values(practices).filter(p => p).length;
            const total = Object.keys(practices).length;
            const percentage = Math.round((completed / total) * 100);
            
            document.getElementById('today-completion').textContent = percentage + '%';
            document.getElementById('today-percentage').textContent = percentage + '%';
            document.getElementById('progress-bar').style.width = percentage + '%';
        }

        function savePractices() {
            localStorage.setItem('lazimPractices', JSON.stringify(practices));
        }

        function loadPractices() {
            const saved = localStorage.getItem('lazimPractices');
            if (saved) {
                practices = JSON.parse(saved);
                // Update UI to reflect saved state
                Object.keys(practices).forEach(practice => {
                    if (practices[practice]) {
                        const btn = document.getElementById(practice + '-btn');
                        if (btn) {
                            btn.classList.add('bg-green-500', 'border-green-500');
                            btn.classList.remove('border-gray-300');
                        }
                    }
                });
            }
        }

        function showAddRoutineModal() {
            document.getElementById('add-routine-modal').classList.remove('hidden');
        }

        function closeAddRoutineModal() {
            document.getElementById('add-routine-modal').classList.add('hidden');
            document.getElementById('routine-form').reset();
        }

        function createRoutineFromTemplate(templateName) {
            const template = routineTemplates[templateName];
            if (!template) return;

            const routine = {
                id: Date.now(),
                name: template.name,
                description: template.description,
                items: template.items,
                reminder: template.reminder,
                completed: false,
                createdAt: new Date().toISOString()
            };

            routines.push(routine);
            localStorage.setItem('lazimRoutines', JSON.stringify(routines));
            loadRoutines();
            showSuccessMessage('Routine created successfully!');
        }

        function addRoutineItem() {
            const container = document.getElementById('routine-items');
            const itemDiv = document.createElement('div');
            itemDiv.className = 'flex items-center space-x-2 mb-2';
            itemDiv.innerHTML = `
                <input type="text" class="flex-1 p-2 border border-gray-300 rounded-lg" placeholder="e.g., Recite Ayat al-Kursi">
                <button type="button" onclick="removeRoutineItem(this)" class="text-red-500 hover:text-red-700">
                    <i class="fas fa-trash"></i>
                </button>
            `;
            container.appendChild(itemDiv);
        }

        function removeRoutineItem(button) {
            button.parentElement.remove();
        }

        function loadRoutines() {
            const container = document.getElementById('routines-container');
            
            if (routines.length === 0) {
                container.innerHTML = `
                    <div class="col-span-full text-center text-gray-500 py-16">
                        <i class="fas fa-clock text-6xl mb-4"></i>
                        <p class="text-xl">No routines yet. Create your first routine!</p>
                    </div>
                `;
                return;
            }

            container.innerHTML = routines.map(routine => `
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-indigo-500 rounded-xl flex items-center justify-center shadow-lg">
                                <i class="fas fa-list-check text-white text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-bold text-gray-800">${routine.name}</h4>
                                <p class="text-gray-600 text-sm">${routine.description}</p>
                            </div>
                        </div>
                        <button onclick="toggleRoutine(${routine.id})" class="routine-btn w-12 h-12 rounded-full border-2 border-gray-300 flex items-center justify-center transition-all duration-300 ${routine.completed ? 'bg-green-500 border-green-500' : ''}" id="routine-${routine.id}-btn">
                            <i class="fas fa-check text-white"></i>
                        </button>
                    </div>
                    
                    <div class="mb-4">
                        <h5 class="text-sm font-semibold text-gray-700 mb-2">Routine Items:</h5>
                        <ul class="space-y-1">
                            ${routine.items.map(item => `
                                <li class="text-sm text-gray-600 flex items-center">
                                    <i class="fas fa-circle text-indigo-400 text-xs mr-2"></i>
                                    ${item}
                                </li>
                            `).join('')}
                        </ul>
                    </div>
                    
                    <div class="flex items-center justify-between text-sm text-gray-500">
                        <span><i class="fas fa-clock mr-1"></i>Reminder: ${routine.reminder}</span>
                        <button onclick="deleteRoutine(${routine.id})" class="text-red-500 hover:text-red-700">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            `).join('');
        }

        function toggleRoutine(routineId) {
            const routine = routines.find(r => r.id === routineId);
            if (!routine) return;

            routine.completed = !routine.completed;
            const btn = document.getElementById(`routine-${routineId}-btn`);
            
            if (routine.completed) {
                btn.classList.add('bg-green-500', 'border-green-500');
                btn.classList.remove('border-gray-300');
            } else {
                btn.classList.remove('bg-green-500', 'border-green-500');
                btn.classList.add('border-gray-300');
            }
            
            localStorage.setItem('lazimRoutines', JSON.stringify(routines));
            updateProgress();
        }

        function deleteRoutine(routineId) {
            if (confirm('Are you sure you want to delete this routine?')) {
                routines = routines.filter(r => r.id !== routineId);
                localStorage.setItem('lazimRoutines', JSON.stringify(routines));
                loadRoutines();
                showSuccessMessage('Routine deleted successfully!');
            }
        }

        function saveReminderSettings() {
            const reminderSettings = {
                fajr: document.getElementById('fajr-reminder').value,
                dhuhr: document.getElementById('dhuhr-reminder').value,
                asr: document.getElementById('asr-reminder').value,
                maghrib: document.getElementById('maghrib-reminder').value
            };
            
            localStorage.setItem('lazimReminders', JSON.stringify(reminderSettings));
            showSuccessMessage('Reminder settings saved!');
        }

        function loadReminderSettings() {
            const saved = localStorage.getItem('lazimReminders');
            if (saved) {
                const settings = JSON.parse(saved);
                Object.keys(settings).forEach(key => {
                    const element = document.getElementById(`${key}-reminder`);
                    if (element) {
                        element.value = settings[key];
                    }
                });
            }
        }

        function showSuccessMessage(message) {
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

        // Form submission for new routine
        document.getElementById('routine-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const name = document.getElementById('routine-name').value;
            const description = document.getElementById('routine-description').value;
            const reminder = document.getElementById('routine-reminder').value;
            
            const items = Array.from(document.querySelectorAll('#routine-items input')).map(input => input.value).filter(item => item.trim());
            
            if (!name || items.length === 0) {
                alert('Please fill in the routine name and add at least one item.');
                return;
            }
            
            const routine = {
                id: Date.now(),
                name: name,
                description: description,
                items: items,
                reminder: reminder,
                completed: false,
                createdAt: new Date().toISOString()
            };
            
            routines.push(routine);
            localStorage.setItem('lazimRoutines', JSON.stringify(routines));
            loadRoutines();
            closeAddRoutineModal();
            showSuccessMessage('Routine created successfully!');
        });

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            loadPractices();
            loadRoutines();
            loadReminderSettings();
            updateProgress();
        });
    </script>
</x-app-layout>
