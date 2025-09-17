<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div class="slide-in-left">
                <h2 class="text-3xl font-bold bg-gradient-to-r from-teal-600 to-teal-800 bg-clip-text text-transparent">
                    <i class="fas fa-mosque mr-3"></i>Zikr Jumma
                </h2>
                <p class="text-gray-600 mt-1">Friday remembrance and supplications</p>
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
            <!-- Friday Greeting -->
            <div class="bg-gradient-to-r from-teal-500 to-cyan-600 rounded-2xl p-8 mb-8 text-white text-center">
                <h3 class="text-3xl font-bold mb-4">Jumu'ah Mubarak!</h3>
                <p class="text-xl text-teal-100">May this blessed Friday bring you peace and blessings</p>
                <div class="mt-4">
                    <p class="text-teal-200" id="friday-date">Loading...</p>
                    <p class="text-teal-300 text-sm" id="khutbah-time">Khutbah Time: 1:00 PM</p>
                </div>
            </div>

            <!-- Friday Checklist -->
            <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">
                    <i class="fas fa-list-check text-teal-500 mr-2"></i>
                    Friday Sunnah Checklist
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="flex items-center p-4 bg-gradient-to-r from-teal-50 to-teal-100 rounded-xl">
                        <button onclick="toggleChecklist('ghusl')" class="checklist-btn w-8 h-8 rounded-full border-2 border-teal-300 flex items-center justify-center transition-all duration-300 mr-4" id="ghusl-btn">
                            <i class="fas fa-check text-white"></i>
                        </button>
                        <div>
                            <h4 class="font-semibold text-teal-900">Ghusl (Bath)</h4>
                            <p class="text-teal-700 text-sm">Take a complete bath before Jummah</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center p-4 bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl">
                        <button onclick="toggleChecklist('white-clothes')" class="checklist-btn w-8 h-8 rounded-full border-2 border-blue-300 flex items-center justify-center transition-all duration-300 mr-4" id="white-clothes-btn">
                            <i class="fas fa-check text-white"></i>
                        </button>
                        <div>
                            <h4 class="font-semibold text-blue-900">White Clothes</h4>
                            <p class="text-blue-700 text-sm">Wear clean, white clothes</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center p-4 bg-gradient-to-r from-green-50 to-green-100 rounded-xl">
                        <button onclick="toggleChecklist('perfume')" class="checklist-btn w-8 h-8 rounded-full border-2 border-green-300 flex items-center justify-center transition-all duration-300 mr-4" id="perfume-btn">
                            <i class="fas fa-check text-white"></i>
                        </button>
                        <div>
                            <h4 class="font-semibold text-green-900">Perfume</h4>
                            <p class="text-green-700 text-sm">Apply good perfume (men only)</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center p-4 bg-gradient-to-r from-purple-50 to-purple-100 rounded-xl">
                        <button onclick="toggleChecklist('early-arrival')" class="checklist-btn w-8 h-8 rounded-full border-2 border-purple-300 flex items-center justify-center transition-all duration-300 mr-4" id="early-arrival-btn">
                            <i class="fas fa-check text-white"></i>
                        </button>
                        <div>
                            <h4 class="font-semibold text-purple-900">Early Arrival</h4>
                            <p class="text-purple-700 text-sm">Arrive early to the mosque</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center p-4 bg-gradient-to-r from-yellow-50 to-yellow-100 rounded-xl">
                        <button onclick="toggleChecklist('salawat')" class="checklist-btn w-8 h-8 rounded-full border-2 border-yellow-300 flex items-center justify-center transition-all duration-300 mr-4" id="salawat-btn">
                            <i class="fas fa-check text-white"></i>
                        </button>
                        <div>
                            <h4 class="font-semibold text-yellow-900">Send Salawat</h4>
                            <p class="text-yellow-700 text-sm">Send blessings upon the Prophet (PBUH)</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center p-4 bg-gradient-to-r from-red-50 to-red-100 rounded-xl">
                        <button onclick="toggleChecklist('surah-kahf')" class="checklist-btn w-8 h-8 rounded-full border-2 border-red-300 flex items-center justify-center transition-all duration-300 mr-4" id="surah-kahf-btn">
                            <i class="fas fa-check text-white"></i>
                        </button>
                        <div>
                            <h4 class="font-semibold text-red-900">Surah Al-Kahf</h4>
                            <p class="text-red-700 text-sm">Recite Surah Al-Kahf</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-6 p-4 bg-gradient-to-r from-teal-100 to-cyan-100 rounded-xl">
                    <div class="flex items-center justify-between">
                        <span class="text-teal-800 font-semibold">Progress: <span id="checklist-progress">0/6</span> completed</span>
                        <div class="w-32 bg-teal-200 rounded-full h-2">
                            <div id="checklist-bar" class="bg-teal-500 h-2 rounded-full transition-all duration-300" style="width: 0%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Community Highlights -->
            <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">
                    <i class="fas fa-users text-teal-500 mr-2"></i>
                    Friday Community Highlights
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-gradient-to-r from-teal-50 to-teal-100 rounded-xl p-4">
                        <h4 class="font-semibold text-teal-900 mb-2">Local Mosque Events</h4>
                        <p class="text-teal-700 text-sm mb-2">Jummah Prayer: 1:00 PM</p>
                        <p class="text-teal-700 text-sm mb-2">Khutbah: "The Importance of Community"</p>
                        <p class="text-teal-600 text-xs">Masjid Al-Noor, Downtown</p>
                    </div>
                    
                    <div class="bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl p-4">
                        <h4 class="font-semibold text-blue-900 mb-2">Charity Drive</h4>
                        <p class="text-blue-700 text-sm mb-2">Help the needy this Friday</p>
                        <p class="text-blue-700 text-sm mb-2">Collection after Jummah prayer</p>
                        <p class="text-blue-600 text-xs">All donations welcome</p>
                    </div>
                    
                    <div class="bg-gradient-to-r from-green-50 to-green-100 rounded-xl p-4">
                        <h4 class="font-semibold text-green-900 mb-2">Youth Program</h4>
                        <p class="text-green-700 text-sm mb-2">Friday Youth Gathering</p>
                        <p class="text-green-700 text-sm mb-2">Time: 2:30 PM - 4:00 PM</p>
                        <p class="text-green-600 text-xs">Ages 12-18</p>
                    </div>
                </div>
            </div>

            <!-- Audio Player -->
            <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">
                    <i class="fas fa-volume-up text-teal-500 mr-2"></i>
                    Friday Audio Collection
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-gradient-to-r from-purple-50 to-purple-100 rounded-xl p-6">
                        <h4 class="font-semibold text-purple-900 mb-4">Khutbah Audio</h4>
                        <div class="flex items-center space-x-4">
                            <button onclick="playAudio('khutbah')" class="bg-purple-500 hover:bg-purple-600 text-white p-3 rounded-full transition-colors">
                                <i class="fas fa-play"></i>
                            </button>
                            <div class="flex-1">
                                <p class="text-purple-700 text-sm">Weekly Khutbah by Imam Ahmad</p>
                                <div class="w-full bg-purple-200 rounded-full h-2 mt-2">
                                    <div class="bg-purple-500 h-2 rounded-full" style="width: 0%" id="khutbah-progress"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-gradient-to-r from-indigo-50 to-indigo-100 rounded-xl p-6">
                        <h4 class="font-semibold text-indigo-900 mb-4">Surah Al-Kahf Recitation</h4>
                        <div class="flex items-center space-x-4">
                            <button onclick="playAudio('kahf')" class="bg-indigo-500 hover:bg-indigo-600 text-white p-3 rounded-full transition-colors">
                                <i class="fas fa-play"></i>
                            </button>
                            <div class="flex-1">
                                <p class="text-indigo-700 text-sm">Recited by Sheikh Mishary</p>
                                <div class="w-full bg-indigo-200 rounded-full h-2 mt-2">
                                    <div class="bg-indigo-500 h-2 rounded-full" style="width: 0%" id="kahf-progress"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Friday Zikr Collection -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Surah Al-Kahf -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-500 rounded-xl flex items-center justify-center shadow-lg">
                            <i class="fas fa-book text-white text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-blue-900">Surah Al-Kahf</h3>
                            <p class="text-blue-700 text-sm">The Cave</p>
                        </div>
                    </div>
                    <div class="arabic-text text-right text-lg font-bold text-blue-800 mb-4" dir="rtl">
                        الْحَمْدُ لِلَّهِ الَّذِي أَنزَلَ عَلَىٰ عَبْدِهِ الْكِتَابَ
                    </div>
                    <p class="text-blue-700 mb-4">Recite Surah Al-Kahf on Friday for protection and light.</p>
                    <button onclick="startZikr('kahf')" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors duration-300">
                        <i class="fas fa-play mr-2"></i>Start Reading
                    </button>
                </div>

                <!-- Salawat -->
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-green-500 rounded-xl flex items-center justify-center shadow-lg">
                            <i class="fas fa-star text-white text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-green-900">Salawat</h3>
                            <p class="text-green-700 text-sm">Blessings on Prophet</p>
                        </div>
                    </div>
                    <div class="arabic-text text-right text-lg font-bold text-green-800 mb-4" dir="rtl">
                        اللَّهُمَّ صَلِّ عَلَى مُحَمَّدٍ
                    </div>
                    <p class="text-green-700 mb-4">Send blessings upon Prophet Muhammad (PBUH) abundantly on Friday.</p>
                    <button onclick="startZikr('salawat')" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition-colors duration-300">
                        <i class="fas fa-play mr-2"></i>Start Salawat
                    </button>
                </div>

                <!-- Istighfar -->
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-purple-500 rounded-xl flex items-center justify-center shadow-lg">
                            <i class="fas fa-hands-praying text-white text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-purple-900">Istighfar</h3>
                            <p class="text-purple-700 text-sm">Seeking Forgiveness</p>
                        </div>
                    </div>
                    <div class="arabic-text text-right text-lg font-bold text-purple-800 mb-4" dir="rtl">
                        أَسْتَغْفِرُ اللَّهَ الْعَظِيمَ
                    </div>
                    <p class="text-purple-700 mb-4">Seek forgiveness from Allah abundantly on this blessed day.</p>
                    <button onclick="startZikr('istighfar')" class="bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded-lg transition-colors duration-300">
                        <i class="fas fa-play mr-2"></i>Start Istighfar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        let checklist = {
            ghusl: false,
            'white-clothes': false,
            perfume: false,
            'early-arrival': false,
            salawat: false,
            'surah-kahf': false
        };

        let currentAudio = null;
        let isPlaying = false;

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            loadChecklist();
            updateChecklistProgress();
            updateFridayDate();
        });

        // Update Friday date
        function updateFridayDate() {
            const today = new Date();
            const options = { 
                weekday: 'long', 
                year: 'numeric', 
                month: 'long', 
                day: 'numeric' 
            };
            document.getElementById('friday-date').textContent = today.toLocaleDateString('en-US', options);
        }

        // Toggle checklist item
        function toggleChecklist(item) {
            checklist[item] = !checklist[item];
            const btn = document.getElementById(item + '-btn');
            
            if (checklist[item]) {
                btn.classList.add('bg-teal-500', 'border-teal-500');
                btn.classList.remove('border-teal-300');
            } else {
                btn.classList.remove('bg-teal-500', 'border-teal-500');
                btn.classList.add('border-teal-300');
            }
            
            updateChecklistProgress();
            saveChecklist();
        }

        // Update checklist progress
        function updateChecklistProgress() {
            const completed = Object.values(checklist).filter(item => item).length;
            const total = Object.keys(checklist).length;
            const percentage = Math.round((completed / total) * 100);
            
            document.getElementById('checklist-progress').textContent = `${completed}/${total}`;
            document.getElementById('checklist-bar').style.width = `${percentage}%`;
        }

        // Save checklist to localStorage
        function saveChecklist() {
            localStorage.setItem('fridayChecklist', JSON.stringify(checklist));
        }

        // Load checklist from localStorage
        function loadChecklist() {
            const saved = localStorage.getItem('fridayChecklist');
            if (saved) {
                checklist = JSON.parse(saved);
                // Update UI to reflect saved state
                Object.keys(checklist).forEach(item => {
                    if (checklist[item]) {
                        const btn = document.getElementById(item + '-btn');
                        if (btn) {
                            btn.classList.add('bg-teal-500', 'border-teal-500');
                            btn.classList.remove('border-teal-300');
                        }
                    }
                });
            }
        }

        // Start zikr
        function startZikr(zikrType) {
            const zikrData = {
                kahf: {
                    title: 'Surah Al-Kahf',
                    arabic: 'الْحَمْدُ لِلَّهِ الَّذِي أَنزَلَ عَلَىٰ عَبْدِهِ الْكِتَابَ',
                    transliteration: 'Alhamdulillahi alladhi anzala ala abdihi al-kitab',
                    meaning: 'Praise be to Allah, who has sent down to His servant the Book',
                    instructions: [
                        'Recite Surah Al-Kahf completely',
                        'Focus on the meaning and reflect',
                        'Make dua after completion',
                        'Share the reward with the Prophet (PBUH)'
                    ]
                },
                salawat: {
                    title: 'Salawat on Prophet Muhammad (PBUH)',
                    arabic: 'اللَّهُمَّ صَلِّ عَلَى مُحَمَّدٍ وَعَلَى آلِ مُحَمَّدٍ',
                    transliteration: 'Allahumma salli ala Muhammadin wa ala ali Muhammad',
                    meaning: 'O Allah, send blessings upon Muhammad and the family of Muhammad',
                    instructions: [
                        'Recite Salawat 100 times',
                        'Send blessings with love and sincerity',
                        'Remember the Prophet (PBUH) with respect',
                        'Ask Allah to bless him and his family'
                    ]
                },
                istighfar: {
                    title: 'Istighfar (Seeking Forgiveness)',
                    arabic: 'أَسْتَغْفِرُ اللَّهَ الْعَظِيمَ الَّذِي لَا إِلَٰهَ إِلَّا هُوَ',
                    transliteration: 'Astaghfirullah al-azim alladhi la ilaha illa huwa',
                    meaning: 'I seek forgiveness from Allah, the Most Great, there is no god but He',
                    instructions: [
                        'Recite Istighfar 100 times',
                        'Feel remorse for your sins',
                        'Make sincere repentance',
                        'Promise not to repeat the mistakes'
                    ]
                }
            };

            const zikr = zikrData[zikrType];
            if (!zikr) return;

            const modal = document.createElement('div');
            modal.className = 'fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4';
            modal.innerHTML = `
                <div class="bg-white rounded-2xl p-8 max-w-2xl w-full max-h-[90vh] overflow-y-auto">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-2xl font-bold text-gray-800">${zikr.title}</h3>
                        <button onclick="this.closest('.fixed').remove()" class="text-gray-500 hover:text-gray-700">
                            <i class="fas fa-times text-xl"></i>
                        </button>
                    </div>
                    
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold text-gray-700 mb-3">Arabic Text:</h4>
                        <div class="text-right text-2xl font-bold text-gray-800 mb-2" dir="rtl">${zikr.arabic}</div>
                        <p class="text-gray-600 mb-1"><strong>Transliteration:</strong> ${zikr.transliteration}</p>
                        <p class="text-gray-600"><strong>Meaning:</strong> ${zikr.meaning}</p>
                    </div>
                    
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold text-gray-700 mb-3">Instructions:</h4>
                        <ol class="list-decimal list-inside space-y-2 text-gray-700">
                            ${zikr.instructions.map(instruction => `<li>${instruction}</li>`).join('')}
                        </ol>
                    </div>
                    
                    <div class="flex justify-end space-x-3">
                        <button onclick="this.closest('.fixed').remove()" class="px-6 py-2 text-gray-600 hover:text-gray-800">Close</button>
                        <button onclick="markZikrComplete('${zikrType}'); this.closest('.fixed').remove();" class="px-6 py-2 bg-teal-500 text-white rounded-lg hover:bg-teal-600">
                            <i class="fas fa-check mr-2"></i>Mark Complete
                        </button>
                    </div>
                </div>
            `;
            document.body.appendChild(modal);
        }

        // Mark zikr as complete
        function markZikrComplete(zikrType) {
            if (zikrType === 'kahf') {
                checklist['surah-kahf'] = true;
                const btn = document.getElementById('surah-kahf-btn');
                btn.classList.add('bg-teal-500', 'border-teal-500');
                btn.classList.remove('border-teal-300');
            }
            
            updateChecklistProgress();
            saveChecklist();
            showSuccessMessage('Zikr completed! Barakallahu feeki!');
        }

        // Play audio
        function playAudio(type) {
            if (currentAudio && !currentAudio.paused) {
                currentAudio.pause();
                currentAudio = null;
                isPlaying = false;
                return;
            }

            // Simulate audio playback
            const progressBars = {
                khutbah: document.getElementById('khutbah-progress'),
                kahf: document.getElementById('kahf-progress')
            };

            const progressBar = progressBars[type];
            if (!progressBar) return;

            isPlaying = true;
            let progress = 0;
            
            const interval = setInterval(() => {
                progress += 2;
                progressBar.style.width = progress + '%';
                
                if (progress >= 100) {
                    clearInterval(interval);
                    isPlaying = false;
                    showSuccessMessage('Audio playback completed!');
                }
            }, 100);

            // Simulate audio object
            currentAudio = {
                pause: () => {
                    clearInterval(interval);
                    isPlaying = false;
                }
            };
        }

        // Show success message
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
    </script>
</x-app-layout>
