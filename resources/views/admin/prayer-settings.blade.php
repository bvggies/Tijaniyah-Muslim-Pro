<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prayer Settings - Tijaniyah Muslim Pro</title>
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
                        <h1 class="text-2xl font-bold text-gray-900">Prayer Settings</h1>
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
            <!-- Prayer Settings Management Section -->
            <div class="admin-section" id="prayer-section">
    <!-- Calculation Methods -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-semibold text-gray-800">Calculation Methods</h3>
            <button onclick="addCalculationMethod()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                <i class="fas fa-plus mr-2"></i>Add Method
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Muslim World League -->
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Muslim World League</h4>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" checked class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                    </label>
                </div>
                <p class="text-sm text-gray-500 mb-3">Fajr: 18°, Isha: 17°</p>
                <div class="flex space-x-2">
                    <button onclick="editMethod('mwl')" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                    <button onclick="setDefault('mwl')" class="text-green-600 hover:text-green-800 text-sm">Set Default</button>
                </div>
            </div>

            <!-- Islamic Society of North America -->
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">ISNA</h4>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                    </label>
                </div>
                <p class="text-sm text-gray-500 mb-3">Fajr: 15°, Isha: 15°</p>
                <div class="flex space-x-2">
                    <button onclick="editMethod('isna')" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                    <button onclick="setDefault('isna')" class="text-green-600 hover:text-green-800 text-sm">Set Default</button>
                </div>
            </div>

            <!-- Egyptian General Authority -->
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Egyptian</h4>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                    </label>
                </div>
                <p class="text-sm text-gray-500 mb-3">Fajr: 19.5°, Isha: 17.5°</p>
                <div class="flex space-x-2">
                    <button onclick="editMethod('egyptian')" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                    <button onclick="setDefault('egyptian')" class="text-green-600 hover:text-green-800 text-sm">Set Default</button>
                </div>
            </div>

            <!-- Umm al-Qura -->
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Umm al-Qura</h4>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                    </label>
                </div>
                <p class="text-sm text-gray-500 mb-3">Fajr: 18.5°, Isha: 19°</p>
                <div class="flex space-x-2">
                    <button onclick="editMethod('umm_al_qura')" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                    <button onclick="setDefault('umm_al_qura')" class="text-green-600 hover:text-green-800 text-sm">Set Default</button>
                </div>
            </div>

            <!-- Karachi -->
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Karachi</h4>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                    </label>
                </div>
                <p class="text-sm text-gray-500 mb-3">Fajr: 18°, Isha: 18°</p>
                <div class="flex space-x-2">
                    <button onclick="editMethod('karachi')" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                    <button onclick="setDefault('karachi')" class="text-green-600 hover:text-green-800 text-sm">Set Default</button>
                </div>
            </div>

            <!-- Tehran -->
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Tehran</h4>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                    </label>
                </div>
                <p class="text-sm text-gray-500 mb-3">Fajr: 17.7°, Isha: 14°</p>
                <div class="flex space-x-2">
                    <button onclick="editMethod('tehran')" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                    <button onclick="setDefault('tehran')" class="text-green-600 hover:text-green-800 text-sm">Set Default</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Madhab Defaults -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-6">Madhab Defaults by Country</h3>
        
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Country</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Default Madhab</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Calculation Method</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Saudi Arabia</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Shafi</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Umm al-Qura</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button onclick="editCountrySettings('sa')" class="text-blue-600 hover:text-blue-900 mr-3">Edit</button>
                            <button onclick="deleteCountrySettings('sa')" class="text-red-600 hover:text-red-900">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Pakistan</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Hanafi</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Karachi</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button onclick="editCountrySettings('pk')" class="text-blue-600 hover:text-blue-900 mr-3">Edit</button>
                            <button onclick="deleteCountrySettings('pk')" class="text-red-600 hover:text-red-900">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Egypt</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Shafi</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Egyptian</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button onclick="editCountrySettings('eg')" class="text-blue-600 hover:text-blue-900 mr-3">Edit</button>
                            <button onclick="deleteCountrySettings('eg')" class="text-red-600 hover:text-red-900">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Turkey</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Hanafi</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Muslim World League</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button onclick="editCountrySettings('tr')" class="text-blue-600 hover:text-blue-900 mr-3">Edit</button>
                            <button onclick="deleteCountrySettings('tr')" class="text-red-600 hover:text-red-900">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            <button onclick="addCountrySettings()" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition-colors">
                <i class="fas fa-plus mr-2"></i>Add Country Settings
            </button>
        </div>
    </div>

    <!-- Cache Management -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-6">Cache Management</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-blue-50 rounded-lg p-4">
                <h4 class="font-medium text-blue-900 mb-2">Prayer Times Cache</h4>
                <p class="text-sm text-blue-700 mb-3">Cached prayer times for all locations</p>
                <div class="flex space-x-2">
                    <button onclick="clearPrayerCache()" class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded text-sm">Clear Cache</button>
                    <button onclick="warmPrayerCache()" class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded text-sm">Warm Cache</button>
                </div>
            </div>

            <div class="bg-green-50 rounded-lg p-4">
                <h4 class="font-medium text-green-900 mb-2">Location Cache</h4>
                <p class="text-sm text-green-700 mb-3">Cached location data and coordinates</p>
                <div class="flex space-x-2">
                    <button onclick="clearLocationCache()" class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded text-sm">Clear Cache</button>
                    <button onclick="warmLocationCache()" class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded text-sm">Warm Cache</button>
                </div>
            </div>

            <div class="bg-purple-50 rounded-lg p-4">
                <h4 class="font-medium text-purple-900 mb-2">Settings Cache</h4>
                <p class="text-sm text-purple-700 mb-3">Cached calculation methods and settings</p>
                <div class="flex space-x-2">
                    <button onclick="clearSettingsCache()" class="bg-purple-500 hover:bg-purple-600 text-white px-3 py-1 rounded text-sm">Clear Cache</button>
                    <button onclick="warmSettingsCache()" class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded text-sm">Warm Cache</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Notification Presets -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-6">Notification Presets</h3>
        
        <div class="space-y-4">
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Default Prayer Reminders</h4>
                    <button onclick="editNotificationPreset('default')" class="text-blue-600 hover:text-blue-800">Edit</button>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-5 gap-4 text-sm">
                    <div class="flex items-center">
                        <input type="checkbox" checked class="mr-2">
                        <span>Fajr (15 min before)</span>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" checked class="mr-2">
                        <span>Dhuhr (5 min before)</span>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" checked class="mr-2">
                        <span>Asr (5 min before)</span>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" checked class="mr-2">
                        <span>Maghrib (5 min before)</span>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" checked class="mr-2">
                        <span>Isha (5 min before)</span>
                    </div>
                </div>
            </div>

            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Friday Reminders</h4>
                    <button onclick="editNotificationPreset('friday')" class="text-blue-600 hover:text-blue-800">Edit</button>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4 text-sm">
                    <div class="flex items-center">
                        <input type="checkbox" checked class="mr-2">
                        <span>Jumu'ah (1 hour before)</span>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" checked class="mr-2">
                        <span>Ghusl reminder</span>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" checked class="mr-2">
                        <span>Early arrival</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Calculation Method Modal -->
<div id="method-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-3xl shadow-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
        <div class="p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-2xl font-bold text-gray-800" id="method-modal-title">Edit Calculation Method</h3>
                <button onclick="closeMethodModal()" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>

            <form id="method-form" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Method Name</label>
                        <input type="text" id="method-name" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter method name">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Method Code</label>
                        <input type="text" id="method-code" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="e.g., MWL">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Fajr Angle</label>
                        <input type="number" id="fajr-angle" step="0.1" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="18.0">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Isha Angle</label>
                        <input type="number" id="isha-angle" step="0.1" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="17.0">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                    <textarea id="method-description" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" rows="3" placeholder="Enter method description"></textarea>
                </div>

                <div class="flex items-center">
                    <input type="checkbox" id="method-enabled" class="mr-2">
                    <label for="method-enabled" class="text-sm font-medium text-gray-700">Enable this method</label>
                </div>

                <div class="flex justify-end space-x-3">
                    <button type="button" onclick="closeMethodModal()" class="px-6 py-2 text-gray-600 hover:text-gray-800">Cancel</button>
                    <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Save Method</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
// Prayer Settings Functions
function addCalculationMethod() {
    document.getElementById('method-modal-title').textContent = 'Add Calculation Method';
    document.getElementById('method-form').reset();
    document.getElementById('method-modal').classList.remove('hidden');
    document.getElementById('method-modal').classList.add('flex');
}

function editMethod(methodCode) {
    document.getElementById('method-modal-title').textContent = 'Edit Calculation Method';
    // Load method data into form
    document.getElementById('method-modal').classList.remove('hidden');
    document.getElementById('method-modal').classList.add('flex');
}

function closeMethodModal() {
    document.getElementById('method-modal').classList.add('hidden');
    document.getElementById('method-modal').classList.remove('flex');
}

function setDefault(methodCode) {
    if (confirm('Set this as the default calculation method?')) {
        console.log('Set default method:', methodCode);
    }
}

function editCountrySettings(countryCode) {
    console.log('Edit country settings:', countryCode);
}

function deleteCountrySettings(countryCode) {
    if (confirm('Delete country settings?')) {
        console.log('Delete country settings:', countryCode);
    }
}

function addCountrySettings() {
    console.log('Add country settings');
}

function clearPrayerCache() {
    if (confirm('Clear prayer times cache?')) {
        console.log('Clear prayer cache');
    }
}

function warmPrayerCache() {
    console.log('Warm prayer cache');
}

function clearLocationCache() {
    if (confirm('Clear location cache?')) {
        console.log('Clear location cache');
    }
}

function warmLocationCache() {
    console.log('Warm location cache');
}

function clearSettingsCache() {
    if (confirm('Clear settings cache?')) {
        console.log('Clear settings cache');
    }
}

function warmSettingsCache() {
    console.log('Warm settings cache');
}

function editNotificationPreset(presetType) {
    console.log('Edit notification preset:', presetType);
}

// Form submission
document.getElementById('method-form').addEventListener('submit', function(e) {
    e.preventDefault();
    console.log('Save method form');
    closeMethodModal();
});
</script>
            </div>
        </div>
    </div>
</body>
</html>
