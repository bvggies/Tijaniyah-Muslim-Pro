<!-- Tasbih Management Section -->
<div class="admin-section" id="tasbih-section">
    <!-- Preset Counters -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-semibold text-gray-800">Preset Counters</h3>
            <button onclick="addPreset()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                <i class="fas fa-plus mr-2"></i>Add Preset
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- SubhanAllah Preset -->
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">SubhanAllah</h4>
                    <div class="flex space-x-2">
                        <button onclick="editPreset(1)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                        <button onclick="deletePreset(1)" class="text-red-600 hover:text-red-800 text-sm">Delete</button>
                    </div>
                </div>
                <p class="text-sm text-gray-500 mb-2">Target: 100 counts</p>
                <p class="text-xs text-gray-400 mb-3">سبحان الله</p>
                <div class="flex items-center justify-between">
                    <span class="text-sm font-medium text-green-600">Active</span>
                    <span class="text-xs text-gray-500">1,234 uses</span>
                </div>
            </div>

            <!-- Alhamdulillah Preset -->
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Alhamdulillah</h4>
                    <div class="flex space-x-2">
                        <button onclick="editPreset(2)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                        <button onclick="deletePreset(2)" class="text-red-600 hover:text-red-800 text-sm">Delete</button>
                    </div>
                </div>
                <p class="text-sm text-gray-500 mb-2">Target: 100 counts</p>
                <p class="text-xs text-gray-400 mb-3">الحمد لله</p>
                <div class="flex items-center justify-between">
                    <span class="text-sm font-medium text-green-600">Active</span>
                    <span class="text-xs text-gray-500">987 uses</span>
                </div>
            </div>

            <!-- Allahu Akbar Preset -->
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Allahu Akbar</h4>
                    <div class="flex space-x-2">
                        <button onclick="editPreset(3)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                        <button onclick="deletePreset(3)" class="text-red-600 hover:text-red-800 text-sm">Delete</button>
                    </div>
                </div>
                <p class="text-sm text-gray-500 mb-2">Target: 100 counts</p>
                <p class="text-xs text-gray-400 mb-3">الله أكبر</p>
                <div class="flex items-center justify-between">
                    <span class="text-sm font-medium text-green-600">Active</span>
                    <span class="text-xs text-gray-500">1,456 uses</span>
                </div>
            </div>

            <!-- La ilaha illa Allah Preset -->
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">La ilaha illa Allah</h4>
                    <div class="flex space-x-2">
                        <button onclick="editPreset(4)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                        <button onclick="deletePreset(4)" class="text-red-600 hover:text-red-800 text-sm">Delete</button>
                    </div>
                </div>
                <p class="text-sm text-gray-500 mb-2">Target: 100 counts</p>
                <p class="text-xs text-gray-400 mb-3">لا إله إلا الله</p>
                <div class="flex items-center justify-between">
                    <span class="text-sm font-medium text-green-600">Active</span>
                    <span class="text-xs text-gray-500">876 uses</span>
                </div>
            </div>

            <!-- Astaghfirullah Preset -->
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Astaghfirullah</h4>
                    <div class="flex space-x-2">
                        <button onclick="editPreset(5)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                        <button onclick="deletePreset(5)" class="text-red-600 hover:text-red-800 text-sm">Delete</button>
                    </div>
                </div>
                <p class="text-sm text-gray-500 mb-2">Target: 100 counts</p>
                <p class="text-xs text-gray-400 mb-3">أستغفر الله</p>
                <div class="flex items-center justify-between">
                    <span class="text-sm font-medium text-green-600">Active</span>
                    <span class="text-xs text-gray-500">654 uses</span>
                </div>
            </div>

            <!-- La hawla wa la quwwata Preset -->
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">La hawla wa la quwwata</h4>
                    <div class="flex space-x-2">
                        <button onclick="editPreset(6)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                        <button onclick="deletePreset(6)" class="text-red-600 hover:text-red-800 text-sm">Delete</button>
                    </div>
                </div>
                <p class="text-sm text-gray-500 mb-2">Target: 100 counts</p>
                <p class="text-xs text-gray-400 mb-3">لا حول ولا قوة إلا بالله</p>
                <div class="flex items-center justify-between">
                    <span class="text-sm font-medium text-green-600">Active</span>
                    <span class="text-xs text-gray-500">432 uses</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Usage Analytics -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-6">Usage Analytics</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
            <div class="bg-blue-50 rounded-lg p-4">
                <h4 class="font-medium text-blue-900">Total Taps Today</h4>
                <p class="text-2xl font-bold text-blue-600">12,456</p>
                <p class="text-sm text-blue-500">+15% from yesterday</p>
            </div>
            <div class="bg-green-50 rounded-lg p-4">
                <h4 class="font-medium text-green-900">Average per User</h4>
                <p class="text-2xl font-bold text-green-600">45.2</p>
                <p class="text-sm text-green-500">Taps per session</p>
            </div>
            <div class="bg-purple-50 rounded-lg p-4">
                <h4 class="font-medium text-purple-900">Active Users</h4>
                <p class="text-2xl font-bold text-purple-600">276</p>
                <p class="text-sm text-purple-500">Using tasbih today</p>
            </div>
            <div class="bg-orange-50 rounded-lg p-4">
                <h4 class="font-medium text-orange-900">Completed Sessions</h4>
                <p class="text-2xl font-bold text-orange-600">89</p>
                <p class="text-sm text-orange-500">Targets reached</p>
            </div>
        </div>

        <!-- Streaks Distribution -->
        <div class="mb-6">
            <h4 class="font-medium text-gray-900 mb-4">Streaks Distribution</h4>
            <div class="space-y-3">
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                    <span class="text-sm text-gray-700">1-7 days</span>
                    <div class="flex items-center space-x-3">
                        <div class="w-32 bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-500 h-2 rounded-full" style="width: 45%"></div>
                        </div>
                        <span class="text-sm font-medium text-gray-900">45%</span>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                    <span class="text-sm text-gray-700">8-30 days</span>
                    <div class="flex items-center space-x-3">
                        <div class="w-32 bg-gray-200 rounded-full h-2">
                            <div class="bg-green-500 h-2 rounded-full" style="width: 30%"></div>
                        </div>
                        <span class="text-sm font-medium text-gray-900">30%</span>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                    <span class="text-sm text-gray-700">31-100 days</span>
                    <div class="flex items-center space-x-3">
                        <div class="w-32 bg-gray-200 rounded-full h-2">
                            <div class="bg-purple-500 h-2 rounded-full" style="width: 20%"></div>
                        </div>
                        <span class="text-sm font-medium text-gray-900">20%</span>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                    <span class="text-sm text-gray-700">100+ days</span>
                    <div class="flex items-center space-x-3">
                        <div class="w-32 bg-gray-200 rounded-full h-2">
                            <div class="bg-orange-500 h-2 rounded-full" style="width: 5%"></div>
                        </div>
                        <span class="text-sm font-medium text-gray-900">5%</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Top Presets -->
        <div>
            <h4 class="font-medium text-gray-900 mb-4">Most Popular Presets</h4>
            <div class="space-y-2">
                <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
                    <span class="text-sm text-gray-700">SubhanAllah (100)</span>
                    <span class="text-sm font-medium text-gray-900">1,234 uses</span>
                </div>
                <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
                    <span class="text-sm text-gray-700">Allahu Akbar (100)</span>
                    <span class="text-sm font-medium text-gray-900">1,456 uses</span>
                </div>
                <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
                    <span class="text-sm text-gray-700">Alhamdulillah (100)</span>
                    <span class="text-sm font-medium text-gray-900">987 uses</span>
                </div>
                <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
                    <span class="text-sm text-gray-700">La ilaha illa Allah (100)</span>
                    <span class="text-sm font-medium text-gray-900">876 uses</span>
                </div>
            </div>
        </div>
    </div>

    <!-- User Activity Logs -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-6">Recent User Activity</h3>
        
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Preset</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Count</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Duration</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Time</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">user@example.com</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">SubhanAllah</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">100/100</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">5:23</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2 minutes ago</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">user2@example.com</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Allahu Akbar</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">75/100</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">3:45</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">5 minutes ago</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">user3@example.com</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Alhamdulillah</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">100/100</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">4:12</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">8 minutes ago</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Preset Editor Modal -->
<div id="preset-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-3xl shadow-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
        <div class="p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-2xl font-bold text-gray-800" id="preset-modal-title">Add/Edit Preset</h3>
                <button onclick="closePresetModal()" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>

            <form id="preset-form" class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Preset Title</label>
                    <input type="text" id="preset-title" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="e.g., SubhanAllah">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Arabic Text</label>
                    <input type="text" id="preset-arabic" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="سبحان الله" dir="rtl">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Transliteration</label>
                    <input type="text" id="preset-transliteration" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="SubhanAllah">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Target Count</label>
                    <input type="number" id="preset-target" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="100" min="1" max="10000">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                    <textarea id="preset-description" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" rows="3" placeholder="Enter description of this dhikr"></textarea>
                </div>

                <div class="flex items-center">
                    <input type="checkbox" id="preset-enabled" class="mr-2" checked>
                    <label for="preset-enabled" class="text-sm font-medium text-gray-700">Enable this preset</label>
                </div>

                <div class="flex justify-end space-x-3">
                    <button type="button" onclick="closePresetModal()" class="px-6 py-2 text-gray-600 hover:text-gray-800">Cancel</button>
                    <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Save Preset</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
// Tasbih Management Functions
function addPreset() {
    document.getElementById('preset-modal-title').textContent = 'Add New Preset';
    document.getElementById('preset-form').reset();
    document.getElementById('preset-modal').classList.remove('hidden');
    document.getElementById('preset-modal').classList.add('flex');
}

function editPreset(presetId) {
    document.getElementById('preset-modal-title').textContent = 'Edit Preset';
    // Load preset data into form
    document.getElementById('preset-modal').classList.remove('hidden');
    document.getElementById('preset-modal').classList.add('flex');
}

function closePresetModal() {
    document.getElementById('preset-modal').classList.add('hidden');
    document.getElementById('preset-modal').classList.remove('flex');
}

function deletePreset(presetId) {
    if (confirm('Delete this preset?')) {
        console.log('Delete preset:', presetId);
    }
}

// Form submission
document.getElementById('preset-form').addEventListener('submit', function(e) {
    e.preventDefault();
    console.log('Save preset form');
    closePresetModal();
});
</script>
