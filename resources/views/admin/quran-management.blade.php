<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quran Management - Tijaniyah Muslim Pro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen">
        <!-- Header -->
        <div class="bg-white shadow-sm border-b">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-4">
                    <div class="flex items-center">
                        <a href="/admin/dashboard" class="text-blue-600 hover:text-blue-800 mr-4">
                            <i class="fas fa-arrow-left mr-2"></i>Back to Dashboard
                        </a>
                        <h1 class="text-2xl font-bold text-gray-900">Quran Management</h1>
                    </div>
                    <div class="flex items-center space-x-4">
                        <img src="https://via.placeholder.com/40" alt="Admin" class="w-8 h-8 rounded-full">
                        <span class="text-gray-700 font-medium">Admin User</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <!-- Quran Management Section -->
            <div class="admin-section" id="quran-section">
    <!-- Surah Index -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-semibold text-gray-800">Surah Index</h3>
            <div class="flex items-center space-x-4">
                <button onclick="addSurah()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                    <i class="fas fa-plus mr-2"></i>Add Surah
                </button>
                <button onclick="importSurahs()" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition-colors">
                    <i class="fas fa-upload mr-2"></i>Import
                </button>
                <button onclick="rebuildCache()" class="bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded-lg transition-colors">
                    <i class="fas fa-sync-alt mr-2"></i>Rebuild Cache
                </button>
            </div>
        </div>

        <!-- Search and Filters -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            <input type="text" id="surah-search" placeholder="Search surahs..." class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            <select id="surah-filter" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <option value="">All Surahs</option>
                <option value="meccan">Meccan</option>
                <option value="medinan">Medinan</option>
            </select>
            <button onclick="applySurahFilters()" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg transition-colors">
                <i class="fas fa-filter mr-2"></i>Filter
            </button>
        </div>

        <!-- Surahs Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Arabic Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">English Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ayahs</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900" dir="rtl">الفاتحة</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Al-Fatihah</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">7</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Meccan</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button onclick="editSurah(1)" class="text-blue-600 hover:text-blue-900 mr-3">Edit</button>
                            <button onclick="viewSurah(1)" class="text-green-600 hover:text-green-900 mr-3">View</button>
                            <button onclick="deleteSurah(1)" class="text-red-600 hover:text-red-900">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900" dir="rtl">البقرة</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Al-Baqarah</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">286</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Medinan</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button onclick="editSurah(2)" class="text-blue-600 hover:text-blue-900 mr-3">Edit</button>
                            <button onclick="viewSurah(2)" class="text-green-600 hover:text-green-900 mr-3">View</button>
                            <button onclick="deleteSurah(2)" class="text-red-600 hover:text-red-900">Delete</button>
                        </td>
                    </tr>
                    <!-- More surah rows would be dynamically loaded -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Translation Packs -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-semibold text-gray-800">Translation Packs</h3>
            <button onclick="addTranslation()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                <i class="fas fa-plus mr-2"></i>Add Translation
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- English Translation -->
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Sahih International</h4>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" checked class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                    </label>
                </div>
                <p class="text-sm text-gray-500 mb-2">English • Complete</p>
                <p class="text-xs text-gray-400 mb-3">114 surahs, 6,236 verses</p>
                <div class="flex space-x-2">
                    <button onclick="editTranslation('sahih')" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                    <button onclick="toggleTranslation('sahih')" class="text-green-600 hover:text-green-800 text-sm">Toggle</button>
                </div>
            </div>

            <!-- Arabic Translation -->
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Muhammad Taqi-ud-Din</h4>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                    </label>
                </div>
                <p class="text-sm text-gray-500 mb-2">English • Complete</p>
                <p class="text-xs text-gray-400 mb-3">114 surahs, 6,236 verses</p>
                <div class="flex space-x-2">
                    <button onclick="editTranslation('taqi')" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                    <button onclick="toggleTranslation('taqi')" class="text-green-600 hover:text-green-800 text-sm">Toggle</button>
                </div>
            </div>

            <!-- Urdu Translation -->
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Fateh Muhammad Jalandhri</h4>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                    </label>
                </div>
                <p class="text-sm text-gray-500 mb-2">Urdu • Complete</p>
                <p class="text-xs text-gray-400 mb-3">114 surahs, 6,236 verses</p>
                <div class="flex space-x-2">
                    <button onclick="editTranslation('jalandhri')" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                    <button onclick="toggleTranslation('jalandhri')" class="text-green-600 hover:text-green-800 text-sm">Toggle</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Tafsir Sources -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-semibold text-gray-800">Tafsir Sources</h3>
            <button onclick="addTafsir()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                <i class="fas fa-plus mr-2"></i>Add Tafsir
            </button>
        </div>

        <div class="space-y-4">
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Tafsir Ibn Kathir</h4>
                    <div class="flex items-center space-x-4">
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" checked class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                        </label>
                        <button onclick="editTafsir('ibn_kathir')" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                    </div>
                </div>
                <p class="text-sm text-gray-500">Classical Arabic tafsir by Ibn Kathir</p>
            </div>

            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Tafsir Al-Jalalayn</h4>
                    <div class="flex items-center space-x-4">
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                        </label>
                        <button onclick="editTafsir('jalalayn')" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                    </div>
                </div>
                <p class="text-sm text-gray-500">Concise tafsir by Jalal ad-Din al-Mahalli and Jalal ad-Din as-Suyuti</p>
            </div>
        </div>
    </div>

    <!-- Audio Reciters -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-semibold text-gray-800">Audio Reciters</h3>
            <button onclick="addReciter()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                <i class="fas fa-plus mr-2"></i>Add Reciter
            </button>
        </div>

        <div class="space-y-4">
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Mishary Rashid Alafasy</h4>
                    <div class="flex items-center space-x-4">
                        <span class="px-2 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full">Priority 1</span>
                        <button onclick="editReciter('alafasy')" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                    </div>
                </div>
                <p class="text-sm text-gray-500 mb-2">Kuwaiti reciter • Complete Quran</p>
                <p class="text-xs text-gray-400">Base URL: https://audio.example.com/alafasy/</p>
            </div>

            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Abdul Rahman Al-Sudais</h4>
                    <div class="flex items-center space-x-4">
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full">Priority 2</span>
                        <button onclick="editReciter('sudais')" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                    </div>
                </div>
                <p class="text-sm text-gray-500 mb-2">Saudi reciter • Complete Quran</p>
                <p class="text-xs text-gray-400">Base URL: https://audio.example.com/sudais/</p>
            </div>

            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Maher Al Mueaqly</h4>
                    <div class="flex items-center space-x-4">
                        <span class="px-2 py-1 bg-purple-100 text-purple-800 text-xs font-semibold rounded-full">Priority 3</span>
                        <button onclick="editReciter('mueaqly')" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                    </div>
                </div>
                <p class="text-sm text-gray-500 mb-2">Saudi reciter • Complete Quran</p>
                <p class="text-xs text-gray-400">Base URL: https://audio.example.com/mueaqly/</p>
            </div>
        </div>
    </div>

    <!-- Bookmarks & Reports -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-6">Bookmarks & Reports</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- User Bookmarks -->
            <div>
                <h4 class="font-medium text-gray-900 mb-4">User Bookmarks</h4>
                <div class="space-y-2">
                    <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
                        <span class="text-sm text-gray-700">Surah Al-Fatihah, Ayah 1</span>
                        <span class="text-xs text-gray-500">user@example.com</span>
                    </div>
                    <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
                        <span class="text-sm text-gray-700">Surah Al-Baqarah, Ayah 255</span>
                        <span class="text-xs text-gray-500">user2@example.com</span>
                    </div>
                    <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
                        <span class="text-sm text-gray-700">Surah Al-Kahf, Ayah 1-10</span>
                        <span class="text-xs text-gray-500">user3@example.com</span>
                    </div>
                </div>
            </div>

            <!-- Reported Verses -->
            <div>
                <h4 class="font-medium text-gray-900 mb-4">Reported Verses</h4>
                <div class="space-y-2">
                    <div class="flex items-center justify-between p-2 bg-red-50 rounded">
                        <span class="text-sm text-gray-700">Surah Al-Baqarah, Ayah 2</span>
                        <div class="flex space-x-2">
                            <span class="text-xs text-red-600">Inappropriate</span>
                            <button onclick="reviewReport(1)" class="text-blue-600 hover:text-blue-800 text-xs">Review</button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-2 bg-yellow-50 rounded">
                        <span class="text-sm text-gray-700">Surah Al-Imran, Ayah 1</span>
                        <div class="flex space-x-2">
                            <span class="text-xs text-yellow-600">Translation Error</span>
                            <button onclick="reviewReport(2)" class="text-blue-600 hover:text-blue-800 text-xs">Review</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Surah Editor Modal -->
<div id="surah-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-3xl shadow-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto">
        <div class="p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-2xl font-bold text-gray-800" id="surah-modal-title">Edit Surah</h3>
                <button onclick="closeSurahModal()" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>

            <form id="surah-form" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Surah Number</label>
                        <input type="number" id="surah-number" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="1">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Ayah Count</label>
                        <input type="number" id="ayah-count" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="7">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Arabic Name</label>
                        <input type="text" id="arabic-name" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="الفاتحة" dir="rtl">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">English Name</label>
                        <input type="text" id="english-name" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Al-Fatihah">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Surah Type</label>
                    <select id="surah-type" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="meccan">Meccan</option>
                        <option value="medinan">Medinan</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                    <textarea id="surah-description" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" rows="3" placeholder="Enter surah description"></textarea>
                </div>

                <div class="flex justify-end space-x-3">
                    <button type="button" onclick="closeSurahModal()" class="px-6 py-2 text-gray-600 hover:text-gray-800">Cancel</button>
                    <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Save Surah</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
// Quran Management Functions
function addSurah() {
    document.getElementById('surah-modal-title').textContent = 'Add New Surah';
    document.getElementById('surah-form').reset();
    document.getElementById('surah-modal').classList.remove('hidden');
    document.getElementById('surah-modal').classList.add('flex');
}

function editSurah(surahId) {
    document.getElementById('surah-modal-title').textContent = 'Edit Surah';
    // Load surah data into form
    document.getElementById('surah-modal').classList.remove('hidden');
    document.getElementById('surah-modal').classList.add('flex');
}

function closeSurahModal() {
    document.getElementById('surah-modal').classList.add('hidden');
    document.getElementById('surah-modal').classList.remove('flex');
}

function viewSurah(surahId) {
    console.log('View surah:', surahId);
}

function deleteSurah(surahId) {
    if (confirm('Delete this surah?')) {
        console.log('Delete surah:', surahId);
    }
}

function importSurahs() {
    console.log('Import surahs');
}

function rebuildCache() {
    if (confirm('Rebuild Quran cache? This may take a few minutes.')) {
        console.log('Rebuild cache');
    }
}

function applySurahFilters() {
    const search = document.getElementById('surah-search').value;
    const filter = document.getElementById('surah-filter').value;
    console.log('Apply surah filters:', { search, filter });
}

function addTranslation() {
    console.log('Add translation');
}

function editTranslation(translationId) {
    console.log('Edit translation:', translationId);
}

function toggleTranslation(translationId) {
    console.log('Toggle translation:', translationId);
}

function addTafsir() {
    console.log('Add tafsir');
}

function editTafsir(tafsirId) {
    console.log('Edit tafsir:', tafsirId);
}

function addReciter() {
    console.log('Add reciter');
}

function editReciter(reciterId) {
    console.log('Edit reciter:', reciterId);
}

function reviewReport(reportId) {
    console.log('Review report:', reportId);
}

// Form submission
document.getElementById('surah-form').addEventListener('submit', function(e) {
    e.preventDefault();
    console.log('Save surah form');
    closeSurahModal();
});
</script>
            </div>
        </div>
    </div>
</body>
</html>
