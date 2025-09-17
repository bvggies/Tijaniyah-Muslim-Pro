<!-- Mosques Management Section -->
<div class="admin-section" id="mosques-section">
    <!-- Mosque Directory -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-semibold text-gray-800">Mosque Directory</h3>
            <div class="flex items-center space-x-4">
                <button onclick="addMosque()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                    <i class="fas fa-plus mr-2"></i>Add Mosque
                </button>
                <button onclick="importMosques()" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition-colors">
                    <i class="fas fa-upload mr-2"></i>Import CSV
                </button>
            </div>
        </div>

        <div class="space-y-4">
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Masjid Al-Haram</h4>
                    <span class="px-2 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full">Verified</span>
                </div>
                <p class="text-sm text-gray-500 mb-2">Makkah, Saudi Arabia</p>
                <p class="text-xs text-gray-400 mb-3">Jumu'ah: 12:30 PM • Contact: +966-12-123-4567</p>
                <div class="flex space-x-2">
                    <button onclick="editMosque(1)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                    <button onclick="viewMosque(1)" class="text-green-600 hover:text-green-800 text-sm">View</button>
                    <button onclick="deleteMosque(1)" class="text-red-600 hover:text-red-800 text-sm">Delete</button>
                </div>
            </div>

            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Masjid An-Nabawi</h4>
                    <span class="px-2 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full">Verified</span>
                </div>
                <p class="text-sm text-gray-500 mb-2">Madinah, Saudi Arabia</p>
                <p class="text-xs text-gray-400 mb-3">Jumu'ah: 12:15 PM • Contact: +966-14-123-4567</p>
                <div class="flex space-x-2">
                    <button onclick="editMosque(2)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                    <button onclick="viewMosque(2)" class="text-green-600 hover:text-green-800 text-sm">View</button>
                    <button onclick="deleteMosque(2)" class="text-red-600 hover:text-red-800 text-sm">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Events Management -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-6">Mosque Events</h3>
        
        <div class="space-y-4">
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Weekly Quran Study Circle</h4>
                    <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full">Ongoing</span>
                </div>
                <p class="text-sm text-gray-500 mb-2">Every Saturday 7:00 PM - 8:30 PM</p>
                <p class="text-xs text-gray-400">Masjid Al-Haram • Arabic & English</p>
            </div>

            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Ramadan Iftar Program</h4>
                    <span class="px-2 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full">Upcoming</span>
                </div>
                <p class="text-sm text-gray-500 mb-2">March 1-30, 2025 • 6:00 PM - 8:00 PM</p>
                <p class="text-xs text-gray-400">Masjid An-Nabawi • Community Iftar</p>
            </div>
        </div>
    </div>

    <!-- Analytics -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-6">Mosque Analytics</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-blue-50 rounded-lg p-4">
                <h4 class="font-medium text-blue-900">Total Mosques</h4>
                <p class="text-2xl font-bold text-blue-600">156</p>
                <p class="text-sm text-blue-500">Registered</p>
            </div>
            <div class="bg-green-50 rounded-lg p-4">
                <h4 class="font-medium text-green-900">Verified</h4>
                <p class="text-2xl font-bold text-green-600">134</p>
                <p class="text-sm text-green-500">86% verified</p>
            </div>
            <div class="bg-purple-50 rounded-lg p-4">
                <h4 class="font-medium text-purple-900">Active Events</h4>
                <p class="text-2xl font-bold text-purple-600">23</p>
                <p class="text-sm text-purple-500">This week</p>
            </div>
            <div class="bg-orange-50 rounded-lg p-4">
                <h4 class="font-medium text-orange-900">Check-ins</h4>
                <p class="text-2xl font-bold text-orange-600">2,456</p>
                <p class="text-sm text-orange-500">This month</p>
            </div>
        </div>
    </div>
</div>

<script>
// Mosques Management Functions
function addMosque() { console.log('Add mosque'); }
function importMosques() { console.log('Import mosques'); }
function editMosque(id) { console.log('Edit mosque:', id); }
function viewMosque(id) { console.log('View mosque:', id); }
function deleteMosque(id) { console.log('Delete mosque:', id); }
</script>
