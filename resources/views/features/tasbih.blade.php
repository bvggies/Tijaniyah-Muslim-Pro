<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div class="slide-in-left">
                <h2 class="text-3xl font-bold bg-gradient-to-r from-orange-600 to-orange-800 bg-clip-text text-transparent">
                    <i class="fas fa-circle mr-3"></i>Digital Tasbih
                </h2>
                <p class="text-gray-600 mt-1">Digital prayer beads for dhikr and remembrance</p>
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
            <!-- Tasbih Counter -->
            <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
                <div class="text-center">
                    <h3 class="text-2xl font-bold text-gray-800 mb-8">
                        <i class="fas fa-circle mr-2"></i>
                        Digital Tasbih Counter
                    </h3>
                    
                    <!-- Counter Display -->
                    <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-3xl p-12 mb-8 shadow-lg">
                        <div class="text-8xl font-bold text-orange-600 mb-4" id="counter">0</div>
                        <div class="text-2xl text-orange-800" id="current-dhikr">Subhan Allah</div>
                    </div>
                    
                    <!-- Control Buttons -->
                    <div class="flex justify-center gap-4 mb-8">
                        <button onclick="incrementCounter()" class="bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white font-bold py-4 px-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 text-xl">
                            <i class="fas fa-plus mr-2"></i>Count
                        </button>
                        <button onclick="resetCounter()" class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white font-bold py-4 px-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 text-xl">
                            <i class="fas fa-redo mr-2"></i>Reset
                        </button>
                    </div>
                    
                    <!-- Progress Bar -->
                    <div class="w-full bg-gray-200 rounded-full h-4 mb-4">
                        <div id="progress-bar" class="bg-gradient-to-r from-orange-500 to-orange-600 h-4 rounded-full transition-all duration-500" style="width: 0%"></div>
                    </div>
                    <p class="text-gray-600" id="progress-text">0 / 33 completed</p>
                </div>
            </div>

            <!-- Dhikr Selection -->
            <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">
                    <i class="fas fa-list mr-2"></i>
                    Select Dhikr
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <button onclick="selectDhikr('subhan', 33)" class="dhikr-btn bg-gradient-to-r from-blue-50 to-blue-100 hover:from-blue-100 hover:to-blue-200 p-6 rounded-xl text-left transition-all duration-300 transform hover:scale-105">
                        <h4 class="text-lg font-bold text-blue-900 mb-2">Subhan Allah</h4>
                        <p class="text-blue-700 text-sm">Glory be to Allah (33 times)</p>
                    </button>
                    
                    <button onclick="selectDhikr('alhamdulillah', 33)" class="dhikr-btn bg-gradient-to-r from-green-50 to-green-100 hover:from-green-100 hover:to-green-200 p-6 rounded-xl text-left transition-all duration-300 transform hover:scale-105">
                        <h4 class="text-lg font-bold text-green-900 mb-2">Alhamdulillah</h4>
                        <p class="text-green-700 text-sm">Praise be to Allah (33 times)</p>
                    </button>
                    
                    <button onclick="selectDhikr('allahuakbar', 33)" class="dhikr-btn bg-gradient-to-r from-purple-50 to-purple-100 hover:from-purple-100 hover:to-purple-200 p-6 rounded-xl text-left transition-all duration-300 transform hover:scale-105">
                        <h4 class="text-lg font-bold text-purple-900 mb-2">Allahu Akbar</h4>
                        <p class="text-purple-700 text-sm">Allah is the Greatest (33 times)</p>
                    </button>
                    
                    <button onclick="selectDhikr('laillaha', 100)" class="dhikr-btn bg-gradient-to-r from-red-50 to-red-100 hover:from-red-100 hover:to-red-200 p-6 rounded-xl text-left transition-all duration-300 transform hover:scale-105">
                        <h4 class="text-lg font-bold text-red-900 mb-2">La Ilaha Illa Allah</h4>
                        <p class="text-red-700 text-sm">There is no god but Allah (100 times)</p>
                    </button>
                    
                    <button onclick="selectDhikr('astaghfirullah', 100)" class="dhikr-btn bg-gradient-to-r from-yellow-50 to-yellow-100 hover:from-yellow-100 hover:to-yellow-200 p-6 rounded-xl text-left transition-all duration-300 transform hover:scale-105">
                        <h4 class="text-lg font-bold text-yellow-900 mb-2">Astaghfirullah</h4>
                        <p class="text-yellow-700 text-sm">I seek forgiveness from Allah (100 times)</p>
                    </button>
                    
                    <button onclick="selectDhikr('custom', 33)" class="dhikr-btn bg-gradient-to-r from-gray-50 to-gray-100 hover:from-gray-100 hover:to-gray-200 p-6 rounded-xl text-left transition-all duration-300 transform hover:scale-105">
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Custom Dhikr</h4>
                        <p class="text-gray-700 text-sm">Set your own dhikr and count</p>
                    </button>
                </div>
            </div>

            <!-- Statistics -->
            <div class="bg-white rounded-2xl shadow-xl p-8">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">
                    <i class="fas fa-chart-bar mr-2"></i>
                    Today's Statistics
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <div class="text-center p-6 bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl">
                        <div class="text-3xl font-bold text-blue-600 mb-2" id="today-total">0</div>
                        <div class="text-blue-800">Total Count</div>
                    </div>
                    <div class="text-center p-6 bg-gradient-to-br from-green-50 to-green-100 rounded-xl">
                        <div class="text-3xl font-bold text-green-600 mb-2" id="today-sessions">0</div>
                        <div class="text-green-800">Sessions</div>
                    </div>
                    <div class="text-center p-6 bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl">
                        <div class="text-3xl font-bold text-purple-600 mb-2" id="today-time">0m</div>
                        <div class="text-purple-800">Time Spent</div>
                    </div>
                    <div class="text-center p-6 bg-gradient-to-br from-orange-50 to-orange-100 rounded-xl">
                        <div class="text-3xl font-bold text-orange-600 mb-2" id="streak">0</div>
                        <div class="text-orange-800">Day Streak</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let counter = 0;
        let targetCount = 33;
        let currentDhikr = 'subhan';
        let dhikrTexts = {
            'subhan': 'Subhan Allah',
            'alhamdulillah': 'Alhamdulillah',
            'allahuakbar': 'Allahu Akbar',
            'laillaha': 'La Ilaha Illa Allah',
            'astaghfirullah': 'Astaghfirullah',
            'custom': 'Custom Dhikr'
        };
        let sessionStartTime = Date.now();
        let todayStats = JSON.parse(localStorage.getItem('tasbihStats') || '{"total": 0, "sessions": 0, "time": 0, "streak": 0}');

        function incrementCounter() {
            counter++;
            updateDisplay();
            updateProgress();
            
            // Haptic feedback (if supported)
            if (navigator.vibrate) {
                navigator.vibrate(50);
            }
            
            // Play sound (optional)
            playCountSound();
            
            // Check if target reached
            if (counter >= targetCount) {
                showCompletionMessage();
            }
        }

        function resetCounter() {
            counter = 0;
            updateDisplay();
            updateProgress();
        }

        function selectDhikr(dhikr, count) {
            currentDhikr = dhikr;
            targetCount = count;
            counter = 0;
            
            // Update display
            document.getElementById('current-dhikr').textContent = dhikrTexts[dhikr];
            updateDisplay();
            updateProgress();
            
            // Update button styles
            document.querySelectorAll('.dhikr-btn').forEach(btn => {
                btn.classList.remove('ring-4', 'ring-orange-500');
            });
            event.target.classList.add('ring-4', 'ring-orange-500');
        }

        function updateDisplay() {
            document.getElementById('counter').textContent = counter;
        }

        function updateProgress() {
            const percentage = (counter / targetCount) * 100;
            document.getElementById('progress-bar').style.width = percentage + '%';
            document.getElementById('progress-text').textContent = `${counter} / ${targetCount} completed`;
        }

        function showCompletionMessage() {
            // Update statistics
            todayStats.total += counter;
            todayStats.sessions++;
            todayStats.time += Math.floor((Date.now() - sessionStartTime) / 60000); // minutes
            localStorage.setItem('tasbihStats', JSON.stringify(todayStats));
            updateStatsDisplay();
            
            // Show completion message
            alert(`Masha Allah! You completed ${targetCount} ${dhikrTexts[currentDhikr]}. Barakallahu feeki!`);
            
            // Reset for next round
            counter = 0;
            updateDisplay();
            updateProgress();
            sessionStartTime = Date.now();
        }

        function playCountSound() {
            // Simple beep sound using Web Audio API
            const audioContext = new (window.AudioContext || window.webkitAudioContext)();
            const oscillator = audioContext.createOscillator();
            const gainNode = audioContext.createGain();
            
            oscillator.connect(gainNode);
            gainNode.connect(audioContext.destination);
            
            oscillator.frequency.setValueAtTime(800, audioContext.currentTime);
            gainNode.gain.setValueAtTime(0.1, audioContext.currentTime);
            gainNode.gain.exponentialRampToValueAtTime(0.01, audioContext.currentTime + 0.1);
            
            oscillator.start(audioContext.currentTime);
            oscillator.stop(audioContext.currentTime + 0.1);
        }

        function updateStatsDisplay() {
            document.getElementById('today-total').textContent = todayStats.total;
            document.getElementById('today-sessions').textContent = todayStats.sessions;
            document.getElementById('today-time').textContent = todayStats.time + 'm';
            document.getElementById('streak').textContent = todayStats.streak;
        }

        // Keyboard support
        document.addEventListener('keydown', function(e) {
            if (e.code === 'Space' || e.code === 'Enter') {
                e.preventDefault();
                incrementCounter();
            } else if (e.code === 'Escape') {
                resetCounter();
            }
        });

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            updateStatsDisplay();
            updateDisplay();
            updateProgress();
        });
    </script>
</x-app-layout>
