<!-- Zikr Jumma Management Section -->
<div class="admin-section" id="zikr-section">
    <!-- Friday Content -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-semibold text-gray-800">Friday Content Management</h3>
            <button onclick="addJummaContent()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                <i class="fas fa-plus mr-2"></i>Add Content
            </button>
        </div>

        <!-- Checklist Items -->
        <div class="mb-6">
            <h4 class="font-medium text-gray-900 mb-4">Friday Sunnah Checklist</h4>
            <div class="space-y-3">
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                    <div class="flex items-center">
                        <input type="checkbox" checked class="mr-3">
                        <span class="text-sm text-gray-700">Perform Ghusl (ritual bath)</span>
                    </div>
                    <div class="flex space-x-2">
                        <button onclick="editChecklistItem(1)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                        <button onclick="deleteChecklistItem(1)" class="text-red-600 hover:text-red-800 text-sm">Delete</button>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                    <div class="flex items-center">
                        <input type="checkbox" checked class="mr-3">
                        <span class="text-sm text-gray-700">Wear clean white clothes</span>
                    </div>
                    <div class="flex space-x-2">
                        <button onclick="editChecklistItem(2)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                        <button onclick="deleteChecklistItem(2)" class="text-red-600 hover:text-red-800 text-sm">Delete</button>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                    <div class="flex items-center">
                        <input type="checkbox" checked class="mr-3">
                        <span class="text-sm text-gray-700">Apply perfume/attar</span>
                    </div>
                    <div class="flex space-x-2">
                        <button onclick="editChecklistItem(3)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                        <button onclick="deleteChecklistItem(3)" class="text-red-600 hover:text-red-800 text-sm">Delete</button>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                    <div class="flex items-center">
                        <input type="checkbox" checked class="mr-3">
                        <span class="text-sm text-gray-700">Recite Surah Al-Kahf</span>
                    </div>
                    <div class="flex space-x-2">
                        <button onclick="editChecklistItem(4)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                        <button onclick="deleteChecklistItem(4)" class="text-red-600 hover:text-red-800 text-sm">Delete</button>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                    <div class="flex items-center">
                        <input type="checkbox" checked class="mr-3">
                        <span class="text-sm text-gray-700">Send Salawat on Prophet (PBUH)</span>
                    </div>
                    <div class="flex space-x-2">
                        <button onclick="editChecklistItem(5)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                        <button onclick="deleteChecklistItem(5)" class="text-red-600 hover:text-red-800 text-sm">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Friday Duas -->
        <div class="mb-6">
            <h4 class="font-medium text-gray-900 mb-4">Friday Duas</h4>
            <div class="space-y-4">
                <div class="border border-gray-200 rounded-lg p-4">
                    <div class="flex items-center justify-between mb-3">
                        <h5 class="font-medium text-gray-900">Dua for Friday Morning</h5>
                        <div class="flex space-x-2">
                            <button onclick="editDua(1)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                            <button onclick="deleteDua(1)" class="text-red-600 hover:text-red-800 text-sm">Delete</button>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600 mb-2" dir="rtl">اللهم اجعل هذا اليوم يوم بركة وهداية</p>
                    <p class="text-xs text-gray-500">Allahumma ij'al hadha al-yawm yawm barakah wa hidayah</p>
                </div>
                <div class="border border-gray-200 rounded-lg p-4">
                    <div class="flex items-center justify-between mb-3">
                        <h5 class="font-medium text-gray-900">Dua Before Jumu'ah</h5>
                        <div class="flex space-x-2">
                            <button onclick="editDua(2)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                            <button onclick="deleteDua(2)" class="text-red-600 hover:text-red-800 text-sm">Delete</button>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600 mb-2" dir="rtl">اللهم اغفر لي ذنوبي وارحمني</p>
                    <p class="text-xs text-gray-500">Allahumma ighfir li dhunubi warhamni</p>
                </div>
            </div>
        </div>

        <!-- Surah Al-Kahf Guide -->
        <div>
            <h4 class="font-medium text-gray-900 mb-4">Surah Al-Kahf Recitation Guide</h4>
            <div class="bg-blue-50 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h5 class="font-medium text-blue-900">Recitation Instructions</h5>
                    <button onclick="editKahfGuide()" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                </div>
                <div class="text-sm text-blue-800 space-y-2">
                    <p>• Recite Surah Al-Kahf every Friday morning</p>
                    <p>• Read with understanding and reflection</p>
                    <p>• Complete the entire surah if possible</p>
                    <p>• If time is limited, read at least the first 10 verses</p>
                    <p>• Focus on the stories and lessons within</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Jumma Banners -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-semibold text-gray-800">Jumma Banners</h3>
            <button onclick="addBanner()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                <i class="fas fa-plus mr-2"></i>Add Banner
            </button>
        </div>

        <div class="space-y-4">
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Weekly Reminder Banner</h4>
                    <div class="flex space-x-2">
                        <span class="px-2 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full">Active</span>
                        <button onclick="editBanner(1)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                        <button onclick="deleteBanner(1)" class="text-red-600 hover:text-red-800 text-sm">Delete</button>
                    </div>
                </div>
                <p class="text-sm text-gray-600 mb-2">"Don't forget to recite Surah Al-Kahf this Friday!"</p>
                <p class="text-xs text-gray-500">Active: Every Friday 6:00 AM - 6:00 PM</p>
            </div>

            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Ghusl Reminder</h4>
                    <div class="flex space-x-2">
                        <span class="px-2 py-1 bg-yellow-100 text-yellow-800 text-xs font-semibold rounded-full">Scheduled</span>
                        <button onclick="editBanner(2)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                        <button onclick="deleteBanner(2)" class="text-red-600 hover:text-red-800 text-sm">Delete</button>
                    </div>
                </div>
                <p class="text-sm text-gray-600 mb-2">"Remember to perform Ghusl before Jumu'ah prayers"</p>
                <p class="text-xs text-gray-500">Scheduled: Every Friday 10:00 AM - 12:00 PM</p>
            </div>
        </div>
    </div>

    <!-- Local Announcements -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-6">Local Announcements</h3>
        
        <div class="space-y-4">
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Jumu'ah Prayer Times</h4>
                    <div class="flex space-x-2">
                        <span class="px-2 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full">Auto</span>
                        <button onclick="editAnnouncement(1)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                    </div>
                </div>
                <p class="text-sm text-gray-600 mb-2">Automatically updated from mosque prayer times</p>
                <p class="text-xs text-gray-500">Source: Local mosque data</p>
            </div>

            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Community Events</h4>
                    <div class="flex space-x-2">
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full">Manual</span>
                        <button onclick="editAnnouncement(2)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                    </div>
                </div>
                <p class="text-sm text-gray-600 mb-2">Weekly community events and activities</p>
                <p class="text-xs text-gray-500">Updated by admin</p>
            </div>
        </div>
    </div>

    <!-- Analytics -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-6">Friday Engagement Analytics</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
            <div class="bg-blue-50 rounded-lg p-4">
                <h4 class="font-medium text-blue-900">Checklist Completions</h4>
                <p class="text-2xl font-bold text-blue-600">78%</p>
                <p class="text-sm text-blue-500">Average completion rate</p>
            </div>
            <div class="bg-green-50 rounded-lg p-4">
                <h4 class="font-medium text-green-900">Surah Al-Kahf Reads</h4>
                <p class="text-2xl font-bold text-green-600">456</p>
                <p class="text-sm text-green-500">This week</p>
            </div>
            <div class="bg-purple-50 rounded-lg p-4">
                <h4 class="font-medium text-purple-900">Banner Views</h4>
                <p class="text-2xl font-bold text-purple-600">1,234</p>
                <p class="text-sm text-purple-500">This Friday</p>
            </div>
            <div class="bg-orange-50 rounded-lg p-4">
                <h4 class="font-medium text-orange-900">Active Users</h4>
                <p class="text-2xl font-bold text-orange-600">234</p>
                <p class="text-sm text-orange-500">Using Friday features</p>
            </div>
        </div>

        <div>
            <h4 class="font-medium text-gray-900 mb-4">Most Completed Friday Actions</h4>
            <div class="space-y-2">
                <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
                    <span class="text-sm text-gray-700">Ghusl reminder</span>
                    <span class="text-sm font-medium text-gray-900">89% completion</span>
                </div>
                <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
                    <span class="text-sm text-gray-700">Clean clothes</span>
                    <span class="text-sm font-medium text-gray-900">85% completion</span>
                </div>
                <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
                    <span class="text-sm text-gray-700">Surah Al-Kahf</span>
                    <span class="text-sm font-medium text-gray-900">72% completion</span>
                </div>
                <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
                    <span class="text-sm text-gray-700">Salawat</span>
                    <span class="text-sm font-medium text-gray-900">68% completion</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Editor Modal -->
<div id="content-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-3xl shadow-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
        <div class="p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-2xl font-bold text-gray-800" id="content-modal-title">Add/Edit Content</h3>
                <button onclick="closeContentModal()" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>

            <form id="content-form" class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Content Type</label>
                    <select id="content-type" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="checklist">Checklist Item</option>
                        <option value="dua">Dua</option>
                        <option value="banner">Banner</option>
                        <option value="announcement">Announcement</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                    <input type="text" id="content-title" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter content title">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Arabic Text</label>
                    <textarea id="content-arabic" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" rows="3" placeholder="Enter Arabic text" dir="rtl"></textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Transliteration</label>
                    <input type="text" id="content-transliteration" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter transliteration">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                    <textarea id="content-description" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" rows="3" placeholder="Enter description"></textarea>
                </div>

                <div class="flex items-center">
                    <input type="checkbox" id="content-active" class="mr-2" checked>
                    <label for="content-active" class="text-sm font-medium text-gray-700">Make this content active</label>
                </div>

                <div class="flex justify-end space-x-3">
                    <button type="button" onclick="closeContentModal()" class="px-6 py-2 text-gray-600 hover:text-gray-800">Cancel</button>
                    <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Save Content</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
// Zikr Jumma Management Functions
function addJummaContent() {
    document.getElementById('content-modal-title').textContent = 'Add Friday Content';
    document.getElementById('content-form').reset();
    document.getElementById('content-modal').classList.remove('hidden');
    document.getElementById('content-modal').classList.add('flex');
}

function editChecklistItem(itemId) {
    console.log('Edit checklist item:', itemId);
}

function deleteChecklistItem(itemId) {
    if (confirm('Delete this checklist item?')) {
        console.log('Delete checklist item:', itemId);
    }
}

function editDua(duaId) {
    console.log('Edit dua:', duaId);
}

function deleteDua(duaId) {
    if (confirm('Delete this dua?')) {
        console.log('Delete dua:', duaId);
    }
}

function editKahfGuide() {
    console.log('Edit Surah Al-Kahf guide');
}

function addBanner() {
    console.log('Add banner');
}

function editBanner(bannerId) {
    console.log('Edit banner:', bannerId);
}

function deleteBanner(bannerId) {
    if (confirm('Delete this banner?')) {
        console.log('Delete banner:', bannerId);
    }
}

function editAnnouncement(announcementId) {
    console.log('Edit announcement:', announcementId);
}

function closeContentModal() {
    document.getElementById('content-modal').classList.add('hidden');
    document.getElementById('content-modal').classList.remove('flex');
}

// Form submission
document.getElementById('content-form').addEventListener('submit', function(e) {
    e.preventDefault();
    console.log('Save content form');
    closeContentModal();
});
</script>
