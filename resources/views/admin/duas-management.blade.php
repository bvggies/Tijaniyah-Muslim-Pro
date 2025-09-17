<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duas Management - Tijaniyah Muslim Pro</title>
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
                        <h1 class="text-2xl font-bold text-gray-900">Duas Management</h1>
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
            <!-- Duas Management Section -->
            <div class="admin-section" id="duas-section">
    <!-- Duas List -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-semibold text-gray-800">Duas Management</h3>
            <div class="flex items-center space-x-4">
                <button onclick="addDua()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                    <i class="fas fa-plus mr-2"></i>Add Dua
                </button>
                <button onclick="importDuas()" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition-colors">
                    <i class="fas fa-upload mr-2"></i>Import CSV
                </button>
                <button onclick="exportDuas()" class="bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded-lg transition-colors">
                    <i class="fas fa-download mr-2"></i>Export CSV
                </button>
            </div>
        </div>

        <!-- Search and Filters -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
            <input type="text" id="dua-search" placeholder="Search duas..." class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            <select id="category-filter" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <option value="">All Categories</option>
                <option value="morning">Morning</option>
                <option value="evening">Evening</option>
                <option value="travel">Travel</option>
                <option value="protection">Protection</option>
                <option value="forgiveness">Forgiveness</option>
            </select>
            <select id="status-filter" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <option value="">All Status</option>
                <option value="published">Published</option>
                <option value="draft">Draft</option>
                <option value="archived">Archived</option>
            </select>
            <button onclick="applyDuaFilters()" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg transition-colors">
                <i class="fas fa-filter mr-2"></i>Apply Filters
            </button>
        </div>

        <!-- Duas Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Audio</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200" id="duas-table-body">
                    <!-- Sample dua rows -->
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">Morning Dua</div>
                            <div class="text-sm text-gray-500">أَصْبَحْنَا وَأَصْبَحَ الْمُلْكُ لِلَّهِ</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Morning</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Published</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <i class="fas fa-volume-up text-green-500"></i>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2 days ago</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button onclick="editDua(1)" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</button>
                            <button onclick="toggleDuaStatus(1)" class="text-yellow-600 hover:text-yellow-900 mr-3">Toggle</button>
                            <button onclick="deleteDua(1)" class="text-red-600 hover:text-red-900">Delete</button>
                        </td>
                    </tr>
                    <!-- More dua rows would be dynamically loaded -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Categories Management -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-semibold text-gray-800">Categories Management</h3>
            <button onclick="addCategory()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                <i class="fas fa-plus mr-2"></i>Add Category
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Sample categories -->
            <div class="bg-gray-50 rounded-lg p-4">
                <div class="flex items-center justify-between">
                    <div>
                        <h4 class="font-medium text-gray-900">Morning</h4>
                        <p class="text-sm text-gray-500">12 duas</p>
                    </div>
                    <div class="flex space-x-2">
                        <button onclick="editCategory('morning')" class="text-blue-600 hover:text-blue-800">Edit</button>
                        <button onclick="deleteCategory('morning')" class="text-red-600 hover:text-red-800">Delete</button>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 rounded-lg p-4">
                <div class="flex items-center justify-between">
                    <div>
                        <h4 class="font-medium text-gray-900">Evening</h4>
                        <p class="text-sm text-gray-500">8 duas</p>
                    </div>
                    <div class="flex space-x-2">
                        <button onclick="editCategory('evening')" class="text-blue-600 hover:text-blue-800">Edit</button>
                        <button onclick="deleteCategory('evening')" class="text-red-600 hover:text-red-800">Delete</button>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 rounded-lg p-4">
                <div class="flex items-center justify-between">
                    <div>
                        <h4 class="font-medium text-gray-900">Travel</h4>
                        <p class="text-sm text-gray-500">5 duas</p>
                    </div>
                    <div class="flex space-x-2">
                        <button onclick="editCategory('travel')" class="text-blue-600 hover:text-blue-800">Edit</button>
                        <button onclick="deleteCategory('travel')" class="text-red-600 hover:text-red-800">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Analytics -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-6">Duas Analytics</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-blue-50 rounded-lg p-4">
                <h4 class="font-medium text-blue-900">Most Popular</h4>
                <p class="text-2xl font-bold text-blue-600">Morning Dua</p>
                <p class="text-sm text-blue-500">1,234 views</p>
            </div>
            <div class="bg-green-50 rounded-lg p-4">
                <h4 class="font-medium text-green-900">Audio Plays</h4>
                <p class="text-2xl font-bold text-green-600">5,678</p>
                <p class="text-sm text-green-500">This month</p>
            </div>
            <div class="bg-purple-50 rounded-lg p-4">
                <h4 class="font-medium text-purple-900">Favorites</h4>
                <p class="text-2xl font-bold text-purple-600">892</p>
                <p class="text-sm text-purple-500">Total saves</p>
            </div>
        </div>
    </div>
</div>

<!-- Dua Detail Modal -->
<div id="dua-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-3xl shadow-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto">
        <div class="p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-2xl font-bold text-gray-800" id="modal-dua-title">Add/Edit Dua</h3>
                <button onclick="closeDuaModal()" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>

            <form id="dua-form" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Dua Title</label>
                        <input type="text" id="dua-title" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter dua title">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                        <select id="dua-category" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="">Select Category</option>
                            <option value="morning">Morning</option>
                            <option value="evening">Evening</option>
                            <option value="travel">Travel</option>
                            <option value="protection">Protection</option>
                            <option value="forgiveness">Forgiveness</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Arabic Text</label>
                    <textarea id="dua-arabic" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" rows="3" placeholder="Enter Arabic text" dir="rtl"></textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Transliteration</label>
                    <textarea id="dua-transliteration" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" rows="3" placeholder="Enter transliteration"></textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Translation</label>
                    <textarea id="dua-translation" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" rows="3" placeholder="Enter translation"></textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Reference</label>
                        <input type="text" id="dua-reference" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="e.g., Sahih Muslim">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                        <select id="dua-status" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="draft">Draft</option>
                            <option value="published">Published</option>
                            <option value="archived">Archived</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Audio File</label>
                    <input type="file" id="dua-audio" accept="audio/*" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <div class="flex justify-end space-x-3">
                    <button type="button" onclick="closeDuaModal()" class="px-6 py-2 text-gray-600 hover:text-gray-800">Cancel</button>
                    <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Save Dua</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
// Duas Management Functions
function addDua() {
    document.getElementById('modal-dua-title').textContent = 'Add New Dua';
    document.getElementById('dua-form').reset();
    document.getElementById('dua-modal').classList.remove('hidden');
    document.getElementById('dua-modal').classList.add('flex');
}

function editDua(duaId) {
    document.getElementById('modal-dua-title').textContent = 'Edit Dua';
    // Load dua data into form
    document.getElementById('dua-modal').classList.remove('hidden');
    document.getElementById('dua-modal').classList.add('flex');
}

function closeDuaModal() {
    document.getElementById('dua-modal').classList.add('hidden');
    document.getElementById('dua-modal').classList.remove('flex');
}

function toggleDuaStatus(duaId) {
    console.log('Toggle dua status:', duaId);
}

function deleteDua(duaId) {
    if (confirm('Are you sure you want to delete this dua?')) {
        console.log('Delete dua:', duaId);
    }
}

function importDuas() {
    console.log('Import duas functionality');
}

function exportDuas() {
    console.log('Export duas functionality');
}

function applyDuaFilters() {
    const search = document.getElementById('dua-search').value;
    const category = document.getElementById('category-filter').value;
    const status = document.getElementById('status-filter').value;
    
    console.log('Applying dua filters:', { search, category, status });
}

function addCategory() {
    const name = prompt('Enter category name:');
    if (name) {
        console.log('Add category:', name);
    }
}

function editCategory(categoryId) {
    console.log('Edit category:', categoryId);
}

function deleteCategory(categoryId) {
    if (confirm('Are you sure you want to delete this category?')) {
        console.log('Delete category:', categoryId);
    }
}

// Form submission
document.getElementById('dua-form').addEventListener('submit', function(e) {
    e.preventDefault();
    console.log('Save dua form');
    closeDuaModal();
});
</script>
            </div>
        </div>
    </div>
</body>
</html>
