<!-- Wazifa Management Section -->
<div class="admin-section" id="wazifa-section">
    <!-- Wazifa List -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-semibold text-gray-800">Wazifa Management</h3>
            <div class="flex items-center space-x-4">
                <button onclick="addWazifa()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                    <i class="fas fa-plus mr-2"></i>Add Wazifa
                </button>
                <button onclick="scheduleFeatured()" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition-colors">
                    <i class="fas fa-calendar mr-2"></i>Schedule Featured
                </button>
                <button onclick="sendNotifications()" class="bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded-lg transition-colors">
                    <i class="fas fa-bell mr-2"></i>Send Notifications
                </button>
            </div>
        </div>

        <!-- Search and Filters -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
            <input type="text" id="wazifa-search" placeholder="Search wazifas..." class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            <select id="type-filter" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <option value="">All Types</option>
                <option value="daily">Daily</option>
                <option value="weekly">Weekly</option>
                <option value="special">Special</option>
            </select>
            <select id="status-filter" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <option value="">All Status</option>
                <option value="active">Active</option>
                <option value="featured">Featured</option>
                <option value="archived">Archived</option>
            </select>
            <button onclick="applyWazifaFilters()" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg transition-colors">
                <i class="fas fa-filter mr-2"></i>Filter
            </button>
        </div>

        <!-- Wazifas Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Best Time</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Completion Rate</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">Morning Dhikr</div>
                            <div class="text-sm text-gray-500">Daily recitation of morning duas</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Daily</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">After Fajr</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">78%</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button onclick="editWazifa(1)" class="text-blue-600 hover:text-blue-900 mr-3">Edit</button>
                            <button onclick="viewWazifa(1)" class="text-green-600 hover:text-green-900 mr-3">View</button>
                            <button onclick="deleteWazifa(1)" class="text-red-600 hover:text-red-900">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">Weekly Surah Al-Kahf</div>
                            <div class="text-sm text-gray-500">Recitation of Surah Al-Kahf every Friday</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">Weekly</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Friday Morning</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Featured</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">65%</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button onclick="editWazifa(2)" class="text-blue-600 hover:text-blue-900 mr-3">Edit</button>
                            <button onclick="viewWazifa(2)" class="text-green-600 hover:text-green-900 mr-3">View</button>
                            <button onclick="deleteWazifa(2)" class="text-red-600 hover:text-red-900">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">Ramadan Special</div>
                            <div class="text-sm text-gray-500">Special wazifa for Ramadan month</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">Special</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">After Maghrib</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">Archived</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">92%</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button onclick="editWazifa(3)" class="text-blue-600 hover:text-blue-900 mr-3">Edit</button>
                            <button onclick="viewWazifa(3)" class="text-green-600 hover:text-green-900 mr-3">View</button>
                            <button onclick="deleteWazifa(3)" class="text-red-600 hover:text-red-900">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Adherence Analytics -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-6">Adherence Analytics</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
            <div class="bg-blue-50 rounded-lg p-4">
                <h4 class="font-medium text-blue-900">Overall Completion</h4>
                <p class="text-2xl font-bold text-blue-600">72%</p>
                <p class="text-sm text-blue-500">Average completion rate</p>
            </div>
            <div class="bg-green-50 rounded-lg p-4">
                <h4 class="font-medium text-green-900">Active Streaks</h4>
                <p class="text-2xl font-bold text-green-600">156</p>
                <p class="text-sm text-green-500">Users with 7+ day streaks</p>
            </div>
            <div class="bg-purple-50 rounded-lg p-4">
                <h4 class="font-medium text-purple-900">Longest Streak</h4>
                <p class="text-2xl font-bold text-purple-600">89 days</p>
                <p class="text-sm text-purple-500">Current record</p>
            </div>
            <div class="bg-orange-50 rounded-lg p-4">
                <h4 class="font-medium text-orange-900">Today's Completions</h4>
                <p class="text-2xl font-bold text-orange-600">234</p>
                <p class="text-sm text-orange-500">Wazifas completed</p>
            </div>
        </div>

        <!-- Completion Rates by Type -->
        <div class="mb-6">
            <h4 class="font-medium text-gray-900 mb-4">Completion Rates by Type</h4>
            <div class="space-y-3">
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                    <span class="text-sm text-gray-700">Daily Wazifas</span>
                    <div class="flex items-center space-x-3">
                        <div class="w-32 bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-500 h-2 rounded-full" style="width: 78%"></div>
                        </div>
                        <span class="text-sm font-medium text-gray-900">78%</span>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                    <span class="text-sm text-gray-700">Weekly Wazifas</span>
                    <div class="flex items-center space-x-3">
                        <div class="w-32 bg-gray-200 rounded-full h-2">
                            <div class="bg-green-500 h-2 rounded-full" style="width: 65%"></div>
                        </div>
                        <span class="text-sm font-medium text-gray-900">65%</span>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                    <span class="text-sm text-gray-700">Special Wazifas</span>
                    <div class="flex items-center space-x-3">
                        <div class="w-32 bg-gray-200 rounded-full h-2">
                            <div class="bg-purple-500 h-2 rounded-full" style="width: 45%"></div>
                        </div>
                        <span class="text-sm font-medium text-gray-900">45%</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Top Performing Wazifas -->
        <div>
            <h4 class="font-medium text-gray-900 mb-4">Top Performing Wazifas</h4>
            <div class="space-y-2">
                <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
                    <span class="text-sm text-gray-700">Morning Dhikr</span>
                    <span class="text-sm font-medium text-gray-900">78% completion</span>
                </div>
                <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
                    <span class="text-sm text-gray-700">Evening Dhikr</span>
                    <span class="text-sm font-medium text-gray-900">72% completion</span>
                </div>
                <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
                    <span class="text-sm text-gray-700">Weekly Surah Al-Kahf</span>
                    <span class="text-sm font-medium text-gray-900">65% completion</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Wazifa Schedule -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-6">Featured Wazifa Schedule</h3>
        
        <div class="space-y-4">
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Current Featured Wazifa</h4>
                    <span class="px-2 py-1 bg-yellow-100 text-yellow-800 text-xs font-semibold rounded-full">Active</span>
                </div>
                <p class="text-sm text-gray-600 mb-2">Weekly Surah Al-Kahf</p>
                <p class="text-xs text-gray-500">Featured until: December 31, 2024</p>
            </div>

            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Upcoming Featured Wazifa</h4>
                    <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full">Scheduled</span>
                </div>
                <p class="text-sm text-gray-600 mb-2">Ramadan Special Wazifa</p>
                <p class="text-xs text-gray-500">Starts: March 1, 2025</p>
            </div>

            <div class="flex space-x-4">
                <button onclick="scheduleFeatured()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                    <i class="fas fa-calendar-plus mr-2"></i>Schedule New Featured
                </button>
                <button onclick="editSchedule()" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg transition-colors">
                    <i class="fas fa-edit mr-2"></i>Edit Schedule
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Wazifa Editor Modal -->
<div id="wazifa-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-3xl shadow-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto">
        <div class="p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-2xl font-bold text-gray-800" id="wazifa-modal-title">Add/Edit Wazifa</h3>
                <button onclick="closeWazifaModal()" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>

            <form id="wazifa-form" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Wazifa Title</label>
                        <input type="text" id="wazifa-title" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter wazifa title">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Type</label>
                        <select id="wazifa-type" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="daily">Daily</option>
                            <option value="weekly">Weekly</option>
                            <option value="special">Special</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                    <textarea id="wazifa-description" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" rows="3" placeholder="Enter wazifa description"></textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Steps (Markdown)</label>
                    <textarea id="wazifa-steps" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" rows="6" placeholder="Enter wazifa steps in Markdown format"></textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Arabic Text</label>
                        <textarea id="wazifa-arabic" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" rows="3" placeholder="Enter Arabic text" dir="rtl"></textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Transliteration</label>
                        <textarea id="wazifa-transliteration" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" rows="3" placeholder="Enter transliteration"></textarea>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Best Time</label>
                        <input type="text" id="wazifa-best-time" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="e.g., After Fajr">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Tags</label>
                        <input type="text" id="wazifa-tags" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="e.g., dhikr, morning, protection">
                    </div>
                </div>

                <div class="flex items-center">
                    <input type="checkbox" id="wazifa-featured" class="mr-2">
                    <label for="wazifa-featured" class="text-sm font-medium text-gray-700">Feature this wazifa</label>
                </div>

                <div class="flex justify-end space-x-3">
                    <button type="button" onclick="closeWazifaModal()" class="px-6 py-2 text-gray-600 hover:text-gray-800">Cancel</button>
                    <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Save Wazifa</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
// Wazifa Management Functions
function addWazifa() {
    document.getElementById('wazifa-modal-title').textContent = 'Add New Wazifa';
    document.getElementById('wazifa-form').reset();
    document.getElementById('wazifa-modal').classList.remove('hidden');
    document.getElementById('wazifa-modal').classList.add('flex');
}

function editWazifa(wazifaId) {
    document.getElementById('wazifa-modal-title').textContent = 'Edit Wazifa';
    // Load wazifa data into form
    document.getElementById('wazifa-modal').classList.remove('hidden');
    document.getElementById('wazifa-modal').classList.add('flex');
}

function closeWazifaModal() {
    document.getElementById('wazifa-modal').classList.add('hidden');
    document.getElementById('wazifa-modal').classList.remove('flex');
}

function viewWazifa(wazifaId) {
    console.log('View wazifa:', wazifaId);
}

function deleteWazifa(wazifaId) {
    if (confirm('Delete this wazifa?')) {
        console.log('Delete wazifa:', wazifaId);
    }
}

function scheduleFeatured() {
    console.log('Schedule featured wazifa');
}

function sendNotifications() {
    console.log('Send wazifa notifications');
}

function applyWazifaFilters() {
    const search = document.getElementById('wazifa-search').value;
    const type = document.getElementById('type-filter').value;
    const status = document.getElementById('status-filter').value;
    console.log('Apply wazifa filters:', { search, type, status });
}

function editSchedule() {
    console.log('Edit wazifa schedule');
}

// Form submission
document.getElementById('wazifa-form').addEventListener('submit', function(e) {
    e.preventDefault();
    console.log('Save wazifa form');
    closeWazifaModal();
});
</script>
