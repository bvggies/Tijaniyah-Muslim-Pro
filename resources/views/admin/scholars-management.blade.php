<!-- Scholars Management Section -->
<div class="admin-section" id="scholars-section">
    <!-- Scholars Directory -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-semibold text-gray-800">Scholars Directory</h3>
            <div class="flex items-center space-x-4">
                <button onclick="addScholar()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                    <i class="fas fa-plus mr-2"></i>Add Scholar
                </button>
                <button onclick="verifyScholar()" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition-colors">
                    <i class="fas fa-check mr-2"></i>Verify Scholar
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Scholar Card 1 -->
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Dr. Abdullah Al-Mutairi</h4>
                    <span class="px-2 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full">Verified</span>
                </div>
                <p class="text-sm text-gray-500 mb-2">Hanafi • Saudi Arabia</p>
                <p class="text-xs text-gray-400 mb-3">Fiqh, Hadith, Tafsir</p>
                <div class="flex space-x-2">
                    <button onclick="editScholar(1)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                    <button onclick="viewScholar(1)" class="text-green-600 hover:text-green-800 text-sm">View</button>
                    <button onclick="deleteScholar(1)" class="text-red-600 hover:text-red-800 text-sm">Delete</button>
                </div>
            </div>

            <!-- Scholar Card 2 -->
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Shaykh Muhammad Al-Mahmoud</h4>
                    <span class="px-2 py-1 bg-yellow-100 text-yellow-800 text-xs font-semibold rounded-full">Pending</span>
                </div>
                <p class="text-sm text-gray-500 mb-2">Shafi • Egypt</p>
                <p class="text-xs text-gray-400 mb-3">Quran, Arabic, Spirituality</p>
                <div class="flex space-x-2">
                    <button onclick="editScholar(2)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                    <button onclick="viewScholar(2)" class="text-green-600 hover:text-green-800 text-sm">View</button>
                    <button onclick="deleteScholar(2)" class="text-red-600 hover:text-red-800 text-sm">Delete</button>
                </div>
            </div>

            <!-- Scholar Card 3 -->
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Ustadh Ahmad Hassan</h4>
                    <span class="px-2 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full">Verified</span>
                </div>
                <p class="text-sm text-gray-500 mb-2">Maliki • Morocco</p>
                <p class="text-xs text-gray-400 mb-3">Tasawwuf, Duas, Spirituality</p>
                <div class="flex space-x-2">
                    <button onclick="editScholar(3)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                    <button onclick="viewScholar(3)" class="text-green-600 hover:text-green-800 text-sm">View</button>
                    <button onclick="deleteScholar(3)" class="text-red-600 hover:text-red-800 text-sm">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Hub -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-6">Content Hub - Sermons & Lessons</h3>
        
        <div class="space-y-4">
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Friday Khutbah: "The Importance of Patience"</h4>
                    <div class="flex space-x-2">
                        <span class="px-2 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full">Published</span>
                        <button onclick="editContent(1)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                    </div>
                </div>
                <p class="text-sm text-gray-500 mb-2">By Dr. Abdullah Al-Mutairi • 2 days ago</p>
                <p class="text-xs text-gray-400">Audio: 25 minutes • Video: Available</p>
            </div>

            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Tafsir Series: Surah Al-Fatihah</h4>
                    <div class="flex space-x-2">
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full">Series</span>
                        <button onclick="editContent(2)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                    </div>
                </div>
                <p class="text-sm text-gray-500 mb-2">By Shaykh Muhammad Al-Mahmoud • 1 week ago</p>
                <p class="text-xs text-gray-400">Audio: 45 minutes • Part 1 of 5</p>
            </div>
        </div>
    </div>

    <!-- Analytics -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-6">Scholars Analytics</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-blue-50 rounded-lg p-4">
                <h4 class="font-medium text-blue-900">Total Scholars</h4>
                <p class="text-2xl font-bold text-blue-600">24</p>
                <p class="text-sm text-blue-500">Registered</p>
            </div>
            <div class="bg-green-50 rounded-lg p-4">
                <h4 class="font-medium text-green-900">Verified</h4>
                <p class="text-2xl font-bold text-green-600">18</p>
                <p class="text-sm text-green-500">75% verified</p>
            </div>
            <div class="bg-purple-50 rounded-lg p-4">
                <h4 class="font-medium text-purple-900">Content Published</h4>
                <p class="text-2xl font-bold text-purple-600">156</p>
                <p class="text-sm text-purple-500">This month</p>
            </div>
            <div class="bg-orange-50 rounded-lg p-4">
                <h4 class="font-medium text-orange-900">Total Views</h4>
                <p class="text-2xl font-bold text-orange-600">12,456</p>
                <p class="text-sm text-orange-500">This month</p>
            </div>
        </div>
    </div>
</div>

<script>
// Scholars Management Functions
function addScholar() { console.log('Add scholar'); }
function verifyScholar() { console.log('Verify scholar'); }
function editScholar(id) { console.log('Edit scholar:', id); }
function viewScholar(id) { console.log('View scholar:', id); }
function deleteScholar(id) { console.log('Delete scholar:', id); }
function editContent(id) { console.log('Edit content:', id); }
</script>
