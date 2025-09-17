<!-- Makkah Live Management Section -->
<div class="admin-section" id="makkah-section">
    <!-- Stream Sources -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-semibold text-gray-800">Livestream Sources</h3>
            <button onclick="addStream()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                <i class="fas fa-plus mr-2"></i>Add Stream
            </button>
        </div>

        <div class="space-y-4">
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Kaaba Live Stream (Primary)</h4>
                    <span class="px-2 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full">Active</span>
                </div>
                <p class="text-sm text-gray-500 mb-2">URL: https://stream.example.com/kaaba-live</p>
                <p class="text-xs text-gray-400 mb-3">Quality: 1080p • Fallback Order: 1</p>
                <div class="flex space-x-2">
                    <button onclick="editStream(1)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                    <button onclick="testStream(1)" class="text-green-600 hover:text-green-800 text-sm">Test</button>
                </div>
            </div>

            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Madinah Live Stream</h4>
                    <span class="px-2 py-1 bg-yellow-100 text-yellow-800 text-xs font-semibold rounded-full">Standby</span>
                </div>
                <p class="text-sm text-gray-500 mb-2">URL: https://stream.example.com/madinah-live</p>
                <p class="text-xs text-gray-400 mb-3">Quality: 720p • Fallback Order: 2</p>
                <div class="flex space-x-2">
                    <button onclick="editStream(2)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                    <button onclick="testStream(2)" class="text-green-600 hover:text-green-800 text-sm">Test</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Schedule Blocks -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-6">Schedule Blocks</h3>
        
        <div class="space-y-4">
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Prayer Times Overlay</h4>
                    <span class="px-2 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full">Active</span>
                </div>
                <p class="text-sm text-gray-500 mb-2">Shows current prayer times on stream</p>
                <p class="text-xs text-gray-400">Auto-updates every 5 minutes</p>
            </div>

            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Ramadan Schedule</h4>
                    <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full">Scheduled</span>
                </div>
                <p class="text-sm text-gray-500 mb-2">Special Ramadan programming</p>
                <p class="text-xs text-gray-400">Starts: March 1, 2025</p>
            </div>
        </div>
    </div>

    <!-- Content Policy -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-6">Content Policy</h3>
        
        <div class="space-y-4">
            <div class="border border-gray-200 rounded-lg p-4">
                <h4 class="font-medium text-gray-900 mb-3">Disclaimer Text</h4>
                <p class="text-sm text-gray-600 mb-2">"This live stream is provided for educational and spiritual purposes. Please respect the sanctity of the holy sites."</p>
                <button onclick="editDisclaimer()" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
            </div>

            <div class="border border-gray-200 rounded-lg p-4">
                <h4 class="font-medium text-gray-900 mb-3">Usage Guidelines</h4>
                <div class="text-sm text-gray-600 space-y-1">
                    <p>• Stream is for personal use only</p>
                    <p>• No commercial use without permission</p>
                    <p>• Respectful viewing encouraged</p>
                    <p>• Report any technical issues</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Analytics -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-6">Stream Analytics</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-blue-50 rounded-lg p-4">
                <h4 class="font-medium text-blue-900">Current Viewers</h4>
                <p class="text-2xl font-bold text-blue-600">1,234</p>
                <p class="text-sm text-blue-500">Live now</p>
            </div>
            <div class="bg-green-50 rounded-lg p-4">
                <h4 class="font-medium text-green-900">Peak Viewers</h4>
                <p class="text-2xl font-bold text-green-600">5,678</p>
                <p class="text-sm text-green-500">Today's peak</p>
            </div>
            <div class="bg-purple-50 rounded-lg p-4">
                <h4 class="font-medium text-purple-900">Total Views</h4>
                <p class="text-2xl font-bold text-purple-600">45,678</p>
                <p class="text-sm text-purple-500">This month</p>
            </div>
            <div class="bg-orange-50 rounded-lg p-4">
                <h4 class="font-medium text-orange-900">Uptime</h4>
                <p class="text-2xl font-bold text-orange-600">99.8%</p>
                <p class="text-sm text-orange-500">This month</p>
            </div>
        </div>
    </div>
</div>

<script>
// Makkah Live Management Functions
function addStream() { console.log('Add stream'); }
function editStream(id) { console.log('Edit stream:', id); }
function testStream(id) { console.log('Test stream:', id); }
function editDisclaimer() { console.log('Edit disclaimer'); }
</script>
