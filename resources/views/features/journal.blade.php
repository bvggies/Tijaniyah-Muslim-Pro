<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div class="slide-in-left">
                <h2 class="text-3xl font-bold bg-gradient-to-r from-yellow-600 to-yellow-800 bg-clip-text text-transparent">
                    <i class="fas fa-book mr-3"></i>Islamic Journal
                </h2>
                <p class="text-gray-600 mt-1">Reflect on your spiritual journey</p>
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
                        <input type="text" id="search-journal" placeholder="Search your journal entries..." 
                               class="w-full p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
                    </div>
                    <div class="flex gap-2">
                        <select id="mood-filter" class="p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
                            <option value="">All Moods</option>
                            <option value="grateful">Grateful</option>
                            <option value="anxious">Anxious</option>
                            <option value="hopeful">Hopeful</option>
                            <option value="peaceful">Peaceful</option>
                            <option value="reflective">Reflective</option>
                            <option value="inspired">Inspired</option>
                        </select>
                        <button onclick="showStats()" class="bg-gradient-to-r from-yellow-500 to-yellow-600 hover:from-yellow-600 hover:to-yellow-700 text-white font-semibold py-3 px-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                            <i class="fas fa-chart-bar mr-2"></i>Stats
                        </button>
                    </div>
                </div>
            </div>

            <!-- New Entry -->
            <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">Write New Entry</h3>
                <form id="journal-form">
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                        <input type="text" id="entry-title" class="w-full p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-yellow-500 focus:border-transparent" placeholder="What's on your mind today?">
                    </div>
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Reflection</label>
                        <textarea rows="6" id="entry-content" class="w-full p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-yellow-500 focus:border-transparent" placeholder="Share your thoughts, gratitude, or spiritual insights..."></textarea>
                    </div>
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">How are you feeling today?</label>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                            <button type="button" onclick="selectMood('grateful')" class="mood-btn p-3 rounded-lg border-2 border-gray-200 hover:border-yellow-400 transition-colors text-center">
                                <i class="fas fa-heart text-pink-500 text-xl mb-1"></i>
                                <div class="text-sm font-medium">Grateful</div>
                            </button>
                            <button type="button" onclick="selectMood('anxious')" class="mood-btn p-3 rounded-lg border-2 border-gray-200 hover:border-yellow-400 transition-colors text-center">
                                <i class="fas fa-cloud text-gray-500 text-xl mb-1"></i>
                                <div class="text-sm font-medium">Anxious</div>
                            </button>
                            <button type="button" onclick="selectMood('hopeful')" class="mood-btn p-3 rounded-lg border-2 border-gray-200 hover:border-yellow-400 transition-colors text-center">
                                <i class="fas fa-sun text-yellow-500 text-xl mb-1"></i>
                                <div class="text-sm font-medium">Hopeful</div>
                            </button>
                            <button type="button" onclick="selectMood('peaceful')" class="mood-btn p-3 rounded-lg border-2 border-gray-200 hover:border-yellow-400 transition-colors text-center">
                                <i class="fas fa-dove text-blue-500 text-xl mb-1"></i>
                                <div class="text-sm font-medium">Peaceful</div>
                            </button>
                            <button type="button" onclick="selectMood('reflective')" class="mood-btn p-3 rounded-lg border-2 border-gray-200 hover:border-yellow-400 transition-colors text-center">
                                <i class="fas fa-lightbulb text-purple-500 text-xl mb-1"></i>
                                <div class="text-sm font-medium">Reflective</div>
                            </button>
                            <button type="button" onclick="selectMood('inspired')" class="mood-btn p-3 rounded-lg border-2 border-gray-200 hover:border-yellow-400 transition-colors text-center">
                                <i class="fas fa-star text-orange-500 text-xl mb-1"></i>
                                <div class="text-sm font-medium">Inspired</div>
                            </button>
                        </div>
                        <input type="hidden" id="selected-mood" value="">
                    </div>
                    <button type="submit" class="bg-gradient-to-r from-yellow-500 to-yellow-600 hover:from-yellow-600 hover:to-yellow-700 text-white font-semibold py-3 px-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                        <i class="fas fa-save mr-2"></i>Save Entry
                    </button>
                </form>
            </div>

            <!-- Journal Entries -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="journal-entries">
                <!-- Entries will be loaded here -->
            </div>

            <!-- Stats Modal -->
            <div id="stats-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4 hidden">
                <div class="bg-white rounded-2xl p-8 max-w-2xl w-full max-h-[90vh] overflow-y-auto">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-2xl font-bold text-gray-800">Journal Statistics</h3>
                        <button onclick="closeStats()" class="text-gray-500 hover:text-gray-700">
                            <i class="fas fa-times text-xl"></i>
                        </button>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-gradient-to-r from-yellow-50 to-yellow-100 rounded-xl p-4">
                            <h4 class="text-lg font-semibold text-yellow-900">Total Entries</h4>
                            <p class="text-3xl font-bold text-yellow-600" id="total-entries">0</p>
                        </div>
                        <div class="bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl p-4">
                            <h4 class="text-lg font-semibold text-blue-900">This Month</h4>
                            <p class="text-3xl font-bold text-blue-600" id="month-entries">0</p>
                        </div>
                        <div class="bg-gradient-to-r from-green-50 to-green-100 rounded-xl p-4">
                            <h4 class="text-lg font-semibold text-green-900">Most Common Mood</h4>
                            <p class="text-2xl font-bold text-green-600" id="common-mood">-</p>
                        </div>
                        <div class="bg-gradient-to-r from-purple-50 to-purple-100 rounded-xl p-4">
                            <h4 class="text-lg font-semibold text-purple-900">Writing Streak</h4>
                            <p class="text-3xl font-bold text-purple-600" id="writing-streak">0</p>
                        </div>
                    </div>
                    <div class="mt-6">
                        <h4 class="text-lg font-semibold text-gray-700 mb-4">Mood Distribution</h4>
                        <div id="mood-chart" class="space-y-2">
                            <!-- Mood chart will be populated here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let journalEntries = JSON.parse(localStorage.getItem('journalEntries') || '[]');
        let selectedMood = '';

        // Mood selection
        function selectMood(mood) {
            selectedMood = mood;
            document.getElementById('selected-mood').value = mood;
            
            // Update button styles
            document.querySelectorAll('.mood-btn').forEach(btn => {
                btn.classList.remove('border-yellow-400', 'bg-yellow-50');
                btn.classList.add('border-gray-200');
            });
            
            event.target.closest('.mood-btn').classList.remove('border-gray-200');
            event.target.closest('.mood-btn').classList.add('border-yellow-400', 'bg-yellow-50');
        }

        // Form submission
        document.getElementById('journal-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const title = document.getElementById('entry-title').value;
            const content = document.getElementById('entry-content').value;
            
            if (!title || !content || !selectedMood) {
                alert('Please fill in all fields and select a mood.');
                return;
            }
            
            const entry = {
                id: Date.now(),
                title: title,
                content: content,
                mood: selectedMood,
                date: new Date().toISOString(),
                timestamp: new Date().toLocaleDateString()
            };
            
            journalEntries.unshift(entry);
            localStorage.setItem('journalEntries', JSON.stringify(journalEntries));
            
            // Clear form
            document.getElementById('journal-form').reset();
            selectedMood = '';
            document.querySelectorAll('.mood-btn').forEach(btn => {
                btn.classList.remove('border-yellow-400', 'bg-yellow-50');
                btn.classList.add('border-gray-200');
            });
            
            // Refresh display
            loadJournalEntries();
            showSuccessMessage('Entry saved successfully!');
        });

        // Load journal entries
        function loadJournalEntries() {
            const container = document.getElementById('journal-entries');
            
            if (journalEntries.length === 0) {
                container.innerHTML = `
                    <div class="col-span-full text-center text-gray-500 py-16">
                        <i class="fas fa-book text-6xl mb-4"></i>
                        <p class="text-xl">No journal entries yet. Start writing your first reflection!</p>
                    </div>
                `;
                return;
            }
            
            container.innerHTML = journalEntries.map(entry => `
                <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="flex items-start justify-between mb-4">
                        <h4 class="text-lg font-bold text-yellow-900">${entry.title}</h4>
                        <div class="flex items-center space-x-2">
                            <span class="mood-badge px-2 py-1 rounded-full text-xs font-medium ${getMoodClass(entry.mood)}">${entry.mood}</span>
                            <button onclick="deleteEntry(${entry.id})" class="text-red-500 hover:text-red-700">
                                <i class="fas fa-trash text-sm"></i>
                            </button>
                        </div>
                    </div>
                    <p class="text-yellow-800 text-sm mb-4">${entry.content.substring(0, 150)}${entry.content.length > 150 ? '...' : ''}</p>
                    <div class="flex items-center justify-between">
                        <div class="text-xs text-yellow-600">${entry.timestamp}</div>
                        <button onclick="viewEntry(${entry.id})" class="text-yellow-700 hover:text-yellow-900 text-sm font-medium">
                            Read More <i class="fas fa-arrow-right ml-1"></i>
                        </button>
                    </div>
                </div>
            `).join('');
        }

        // Get mood class for styling
        function getMoodClass(mood) {
            const moodClasses = {
                'grateful': 'bg-pink-100 text-pink-800',
                'anxious': 'bg-gray-100 text-gray-800',
                'hopeful': 'bg-yellow-100 text-yellow-800',
                'peaceful': 'bg-blue-100 text-blue-800',
                'reflective': 'bg-purple-100 text-purple-800',
                'inspired': 'bg-orange-100 text-orange-800'
            };
            return moodClasses[mood] || 'bg-gray-100 text-gray-800';
        }

        // View full entry
        function viewEntry(entryId) {
            const entry = journalEntries.find(e => e.id === entryId);
            if (!entry) return;
            
            const modal = document.createElement('div');
            modal.className = 'fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4';
            modal.innerHTML = `
                <div class="bg-white rounded-2xl p-8 max-w-2xl w-full max-h-[90vh] overflow-y-auto">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-2xl font-bold text-gray-800">${entry.title}</h3>
                        <button onclick="this.closest('.fixed').remove()" class="text-gray-500 hover:text-gray-700">
                            <i class="fas fa-times text-xl"></i>
                        </button>
                    </div>
                    <div class="mb-4">
                        <span class="mood-badge px-3 py-1 rounded-full text-sm font-medium ${getMoodClass(entry.mood)}">${entry.mood}</span>
                        <span class="text-gray-500 text-sm ml-2">${entry.timestamp}</span>
                    </div>
                    <div class="text-gray-700 leading-relaxed">
                        ${entry.content.replace(/\n/g, '<br>')}
                    </div>
                </div>
            `;
            document.body.appendChild(modal);
        }

        // Delete entry
        function deleteEntry(entryId) {
            if (confirm('Are you sure you want to delete this entry?')) {
                journalEntries = journalEntries.filter(e => e.id !== entryId);
                localStorage.setItem('journalEntries', JSON.stringify(journalEntries));
                loadJournalEntries();
                showSuccessMessage('Entry deleted successfully!');
            }
        }

        // Search functionality
        document.getElementById('search-journal').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const entries = document.querySelectorAll('#journal-entries > div');
            
            entries.forEach(entry => {
                const text = entry.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    entry.style.display = 'block';
                } else {
                    entry.style.display = 'none';
                }
            });
        });

        // Mood filter
        document.getElementById('mood-filter').addEventListener('change', function(e) {
            const mood = e.target.value;
            const entries = document.querySelectorAll('#journal-entries > div');
            
            entries.forEach(entry => {
                if (!mood || entry.querySelector('.mood-badge').textContent === mood) {
                    entry.style.display = 'block';
                } else {
                    entry.style.display = 'none';
                }
            });
        });

        // Show stats
        function showStats() {
            const modal = document.getElementById('stats-modal');
            modal.classList.remove('hidden');
            
            // Calculate stats
            const totalEntries = journalEntries.length;
            const thisMonth = journalEntries.filter(e => {
                const entryDate = new Date(e.date);
                const now = new Date();
                return entryDate.getMonth() === now.getMonth() && entryDate.getFullYear() === now.getFullYear();
            }).length;
            
            // Mood distribution
            const moodCounts = {};
            journalEntries.forEach(entry => {
                moodCounts[entry.mood] = (moodCounts[entry.mood] || 0) + 1;
            });
            
            const commonMood = Object.keys(moodCounts).reduce((a, b) => moodCounts[a] > moodCounts[b] ? a : b, '');
            
            // Writing streak (simplified)
            const writingStreak = calculateWritingStreak();
            
            // Update stats display
            document.getElementById('total-entries').textContent = totalEntries;
            document.getElementById('month-entries').textContent = thisMonth;
            document.getElementById('common-mood').textContent = commonMood || '-';
            document.getElementById('writing-streak').textContent = writingStreak;
            
            // Update mood chart
            const moodChart = document.getElementById('mood-chart');
            moodChart.innerHTML = Object.entries(moodCounts).map(([mood, count]) => `
                <div class="flex items-center justify-between">
                    <span class="capitalize">${mood}</span>
                    <div class="flex items-center space-x-2">
                        <div class="w-32 bg-gray-200 rounded-full h-2">
                            <div class="bg-yellow-500 h-2 rounded-full" style="width: ${(count / totalEntries) * 100}%"></div>
                        </div>
                        <span class="text-sm font-medium">${count}</span>
                    </div>
                </div>
            `).join('');
        }

        // Close stats
        function closeStats() {
            document.getElementById('stats-modal').classList.add('hidden');
        }

        // Calculate writing streak
        function calculateWritingStreak() {
            if (journalEntries.length === 0) return 0;
            
            const sortedEntries = journalEntries.sort((a, b) => new Date(b.date) - new Date(a.date));
            let streak = 0;
            let currentDate = new Date();
            
            for (let entry of sortedEntries) {
                const entryDate = new Date(entry.date);
                const daysDiff = Math.floor((currentDate - entryDate) / (1000 * 60 * 60 * 24));
                
                if (daysDiff === streak) {
                    streak++;
                    currentDate = entryDate;
                } else {
                    break;
                }
            }
            
            return streak;
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

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            loadJournalEntries();
        });
    </script>
</x-app-layout>
