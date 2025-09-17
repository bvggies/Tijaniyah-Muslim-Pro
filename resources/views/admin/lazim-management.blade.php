<!-- Lazim Templates Management Section -->
<div class="admin-section" id="lazim-section">
    <!-- Template Library -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-semibold text-gray-800">Template Library</h3>
            <button onclick="addTemplate()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                <i class="fas fa-plus mr-2"></i>Add Template
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Morning Routine Template -->
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Morning Routine</h4>
                    <div class="flex space-x-2">
                        <button onclick="editTemplate(1)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                        <button onclick="deleteTemplate(1)" class="text-red-600 hover:text-red-800 text-sm">Delete</button>
                    </div>
                </div>
                <p class="text-sm text-gray-500 mb-2">5 items • 15 minutes</p>
                <p class="text-xs text-gray-400 mb-3">Recommended time: After Fajr</p>
                <div class="space-y-1">
                    <div class="text-xs text-gray-600">• Morning duas</div>
                    <div class="text-xs text-gray-600">• Surah Al-Fatihah</div>
                    <div class="text-xs text-gray-600">• Ayat al-Kursi</div>
                    <div class="text-xs text-gray-600">• 3x Qul</div>
                    <div class="text-xs text-gray-600">• Morning dhikr</div>
                </div>
                <div class="flex items-center justify-between mt-3">
                    <span class="text-sm font-medium text-green-600">Active</span>
                    <span class="text-xs text-gray-500">234 uses</span>
                </div>
            </div>

            <!-- Evening Routine Template -->
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Evening Routine</h4>
                    <div class="flex space-x-2">
                        <button onclick="editTemplate(2)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                        <button onclick="deleteTemplate(2)" class="text-red-600 hover:text-red-800 text-sm">Delete</button>
                    </div>
                </div>
                <p class="text-sm text-gray-500 mb-2">6 items • 20 minutes</p>
                <p class="text-xs text-gray-400 mb-3">Recommended time: After Maghrib</p>
                <div class="space-y-1">
                    <div class="text-xs text-gray-600">• Evening duas</div>
                    <div class="text-xs text-gray-600">• Surah Al-Mulk</div>
                    <div class="text-xs text-gray-600">• Ayat al-Kursi</div>
                    <div class="text-xs text-gray-600">• 3x Qul</div>
                    <div class="text-xs text-gray-600">• Evening dhikr</div>
                    <div class="text-xs text-gray-600">• Istighfar</div>
                </div>
                <div class="flex items-center justify-between mt-3">
                    <span class="text-sm font-medium text-green-600">Active</span>
                    <span class="text-xs text-gray-500">198 uses</span>
                </div>
            </div>

            <!-- Friday Special Template -->
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Friday Special</h4>
                    <div class="flex space-x-2">
                        <button onclick="editTemplate(3)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                        <button onclick="deleteTemplate(3)" class="text-red-600 hover:text-red-800 text-sm">Delete</button>
                    </div>
                </div>
                <p class="text-sm text-gray-500 mb-2">8 items • 30 minutes</p>
                <p class="text-xs text-gray-400 mb-3">Recommended time: Friday morning</p>
                <div class="space-y-1">
                    <div class="text-xs text-gray-600">• Ghusl</div>
                    <div class="text-xs text-gray-600">• Surah Al-Kahf</div>
                    <div class="text-xs text-gray-600">• Friday duas</div>
                    <div class="text-xs text-gray-600">• Salawat</div>
                    <div class="text-xs text-gray-600">• Istighfar</div>
                    <div class="text-xs text-gray-600">• Tasbih</div>
                    <div class="text-xs text-gray-600">• Charity intention</div>
                    <div class="text-xs text-gray-600">• Jumu'ah preparation</div>
                </div>
                <div class="flex items-center justify-between mt-3">
                    <span class="text-sm font-medium text-green-600">Active</span>
                    <span class="text-xs text-gray-500">156 uses</span>
                </div>
            </div>

            <!-- Ramadan Template -->
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Ramadan Special</h4>
                    <div class="flex space-x-2">
                        <button onclick="editTemplate(4)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                        <button onclick="deleteTemplate(4)" class="text-red-600 hover:text-red-800 text-sm">Delete</button>
                    </div>
                </div>
                <p class="text-sm text-gray-500 mb-2">10 items • 45 minutes</p>
                <p class="text-xs text-gray-400 mb-3">Recommended time: After Iftar</p>
                <div class="space-y-1">
                    <div class="text-xs text-gray-600">• Iftar duas</div>
                    <div class="text-xs text-gray-600">• Surah Al-Fatihah</div>
                    <div class="text-xs text-gray-600">• Surah Al-Baqarah (1-5)</div>
                    <div class="text-xs text-gray-600">• Ayat al-Kursi</div>
                    <div class="text-xs text-gray-600">• 3x Qul</div>
                    <div class="text-xs text-gray-600">• Ramadan dhikr</div>
                    <div class="text-xs text-gray-600">• Istighfar</div>
                    <div class="text-xs text-gray-600">• Tasbih</div>
                    <div class="text-xs text-gray-600">• Taraweeh preparation</div>
                    <div class="text-xs text-gray-600">• Charity dua</div>
                </div>
                <div class="flex items-center justify-between mt-3">
                    <span class="text-sm font-medium text-gray-600">Seasonal</span>
                    <span class="text-xs text-gray-500">89 uses</span>
                </div>
            </div>

            <!-- Travel Template -->
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Travel Routine</h4>
                    <div class="flex space-x-2">
                        <button onclick="editTemplate(5)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                        <button onclick="deleteTemplate(5)" class="text-red-600 hover:text-red-800 text-sm">Delete</button>
                    </div>
                </div>
                <p class="text-sm text-gray-500 mb-2">4 items • 10 minutes</p>
                <p class="text-xs text-gray-400 mb-3">Recommended time: Before departure</p>
                <div class="space-y-1">
                    <div class="text-xs text-gray-600">• Travel duas</div>
                    <div class="text-xs text-gray-600">• Surah Al-Fatihah</div>
                    <div class="text-xs text-gray-600">• Ayat al-Kursi</div>
                    <div class="text-xs text-gray-600">• Protection dhikr</div>
                </div>
                <div class="flex items-center justify-between mt-3">
                    <span class="text-sm font-medium text-green-600">Active</span>
                    <span class="text-xs text-gray-500">67 uses</span>
                </div>
            </div>

            <!-- Sickness Template -->
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Sickness Recovery</h4>
                    <div class="flex space-x-2">
                        <button onclick="editTemplate(6)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                        <button onclick="deleteTemplate(6)" class="text-red-600 hover:text-red-800 text-sm">Delete</button>
                    </div>
                </div>
                <p class="text-sm text-gray-500 mb-2">7 items • 25 minutes</p>
                <p class="text-xs text-gray-400 mb-3">Recommended time: As able</p>
                <div class="space-y-1">
                    <div class="text-xs text-gray-600">• Healing duas</div>
                    <div class="text-xs text-gray-600">• Surah Al-Fatihah</div>
                    <div class="text-xs text-gray-600">• Ayat al-Kursi</div>
                    <div class="text-xs text-gray-600">• 3x Qul</div>
                    <div class="text-xs text-gray-600">• Istighfar</div>
                    <div class="text-xs text-gray-600">• Patience dhikr</div>
                    <div class="text-xs text-gray-600">• Recovery dua</div>
                </div>
                <div class="flex items-center justify-between mt-3">
                    <span class="text-sm font-medium text-green-600">Active</span>
                    <span class="text-xs text-gray-500">43 uses</span>
                </div>
            </div>
        </div>
    </div>

    <!-- User Routine Insights -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-6">User Routine Insights</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <div class="bg-blue-50 rounded-lg p-4">
                <h4 class="font-medium text-blue-900">Most Popular Items</h4>
                <div class="space-y-2 mt-3">
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-700">Morning duas</span>
                        <span class="text-sm font-medium text-gray-900">89%</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-700">Surah Al-Fatihah</span>
                        <span class="text-sm font-medium text-gray-900">85%</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-700">Ayat al-Kursi</span>
                        <span class="text-sm font-medium text-gray-900">78%</span>
                    </div>
                </div>
            </div>

            <div class="bg-green-50 rounded-lg p-4">
                <h4 class="font-medium text-green-900">Completion Rates</h4>
                <div class="space-y-2 mt-3">
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-700">Morning routines</span>
                        <span class="text-sm font-medium text-gray-900">72%</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-700">Evening routines</span>
                        <span class="text-sm font-medium text-gray-900">68%</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-700">Friday routines</span>
                        <span class="text-sm font-medium text-gray-900">45%</span>
                    </div>
                </div>
            </div>

            <div class="bg-purple-50 rounded-lg p-4">
                <h4 class="font-medium text-purple-900">User Engagement</h4>
                <div class="space-y-2 mt-3">
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-700">Active users</span>
                        <span class="text-sm font-medium text-gray-900">456</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-700">Custom routines</span>
                        <span class="text-sm font-medium text-gray-900">234</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-700">Template uses</span>
                        <span class="text-sm font-medium text-gray-900">1,234</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Top Custom Routines -->
        <div>
            <h4 class="font-medium text-gray-900 mb-4">Top Custom Routines</h4>
            <div class="space-y-2">
                <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
                    <span class="text-sm text-gray-700">Personal Morning Routine</span>
                    <span class="text-sm font-medium text-gray-900">45 users</span>
                </div>
                <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
                    <span class="text-sm text-gray-700">Work Day Routine</span>
                    <span class="text-sm font-medium text-gray-900">38 users</span>
                </div>
                <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
                    <span class="text-sm text-gray-700">Weekend Special</span>
                    <span class="text-sm font-medium text-gray-900">32 users</span>
                </div>
                <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
                    <span class="text-sm text-gray-700">Study Time Routine</span>
                    <span class="text-sm font-medium text-gray-900">28 users</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Template Analytics -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-6">Template Analytics</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h4 class="font-medium text-gray-900 mb-4">Template Usage</h4>
                <div class="space-y-3">
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <span class="text-sm text-gray-700">Morning Routine</span>
                        <div class="flex items-center space-x-3">
                            <div class="w-32 bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-500 h-2 rounded-full" style="width: 85%"></div>
                            </div>
                            <span class="text-sm font-medium text-gray-900">234 uses</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <span class="text-sm text-gray-700">Evening Routine</span>
                        <div class="flex items-center space-x-3">
                            <div class="w-32 bg-gray-200 rounded-full h-2">
                                <div class="bg-green-500 h-2 rounded-full" style="width: 70%"></div>
                            </div>
                            <span class="text-sm font-medium text-gray-900">198 uses</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <span class="text-sm text-gray-700">Friday Special</span>
                        <div class="flex items-center space-x-3">
                            <div class="w-32 bg-gray-200 rounded-full h-2">
                                <div class="bg-purple-500 h-2 rounded-full" style="width: 55%"></div>
                            </div>
                            <span class="text-sm font-medium text-gray-900">156 uses</span>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h4 class="font-medium text-gray-900 mb-4">User Feedback</h4>
                <div class="space-y-3">
                    <div class="p-3 bg-green-50 rounded-lg">
                        <p class="text-sm text-green-800">"Morning routine template is perfect for starting my day with focus and spirituality."</p>
                        <p class="text-xs text-green-600 mt-1">- User feedback</p>
                    </div>
                    <div class="p-3 bg-blue-50 rounded-lg">
                        <p class="text-sm text-blue-800">"Friday template helps me prepare properly for Jumu'ah prayers."</p>
                        <p class="text-xs text-blue-600 mt-1">- User feedback</p>
                    </div>
                    <div class="p-3 bg-purple-50 rounded-lg">
                        <p class="text-sm text-purple-800">"Travel routine gives me peace of mind when traveling."</p>
                        <p class="text-xs text-purple-600 mt-1">- User feedback</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Template Editor Modal -->
<div id="template-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-3xl shadow-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto">
        <div class="p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-2xl font-bold text-gray-800" id="template-modal-title">Add/Edit Template</h3>
                <button onclick="closeTemplateModal()" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>

            <form id="template-form" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Template Title</label>
                        <input type="text" id="template-title" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter template title">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Recommended Time</label>
                        <input type="text" id="template-time" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="e.g., After Fajr">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                    <textarea id="template-description" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" rows="3" placeholder="Enter template description"></textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Template Items (One per line)</label>
                    <textarea id="template-items" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" rows="8" placeholder="Enter template items, one per line"></textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Estimated Duration (minutes)</label>
                        <input type="number" id="template-duration" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="15" min="1" max="120">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                        <select id="template-category" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="daily">Daily</option>
                            <option value="weekly">Weekly</option>
                            <option value="special">Special</option>
                            <option value="seasonal">Seasonal</option>
                            <option value="custom">Custom</option>
                        </select>
                    </div>
                </div>

                <div class="flex items-center">
                    <input type="checkbox" id="template-active" class="mr-2" checked>
                    <label for="template-active" class="text-sm font-medium text-gray-700">Make this template available to users</label>
                </div>

                <div class="flex justify-end space-x-3">
                    <button type="button" onclick="closeTemplateModal()" class="px-6 py-2 text-gray-600 hover:text-gray-800">Cancel</button>
                    <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Save Template</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
// Lazim Management Functions
function addTemplate() {
    document.getElementById('template-modal-title').textContent = 'Add New Template';
    document.getElementById('template-form').reset();
    document.getElementById('template-modal').classList.remove('hidden');
    document.getElementById('template-modal').classList.add('flex');
}

function editTemplate(templateId) {
    document.getElementById('template-modal-title').textContent = 'Edit Template';
    // Load template data into form
    document.getElementById('template-modal').classList.remove('hidden');
    document.getElementById('template-modal').classList.add('flex');
}

function closeTemplateModal() {
    document.getElementById('template-modal').classList.add('hidden');
    document.getElementById('template-modal').classList.remove('flex');
}

function deleteTemplate(templateId) {
    if (confirm('Delete this template?')) {
        console.log('Delete template:', templateId);
    }
}

// Form submission
document.getElementById('template-form').addEventListener('submit', function(e) {
    e.preventDefault();
    console.log('Save template form');
    closeTemplateModal();
});
</script>
