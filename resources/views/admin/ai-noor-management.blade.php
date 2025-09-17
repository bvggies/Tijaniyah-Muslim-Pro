<!-- AI Noor Management Section -->
<div class="admin-section" id="ai-noor-section">
    <!-- Knowledge Packs -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-semibold text-gray-800">Knowledge Packs</h3>
            <button onclick="addKnowledgePack()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                <i class="fas fa-plus mr-2"></i>Add Pack
            </button>
        </div>

        <div class="space-y-4">
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Quran Knowledge Pack</h4>
                    <span class="px-2 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full">Enabled</span>
                </div>
                <p class="text-sm text-gray-500 mb-2">Complete Quran with translations and tafsir</p>
                <p class="text-xs text-gray-400">Version 1.2 • Last updated: 2 days ago</p>
                <div class="flex space-x-2">
                    <button onclick="editPack(1)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                    <button onclick="togglePack(1)" class="text-yellow-600 hover:text-yellow-800 text-sm">Toggle</button>
                </div>
            </div>

            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Hadith Collection</h4>
                    <span class="px-2 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full">Enabled</span>
                </div>
                <p class="text-sm text-gray-500 mb-2">Sahih Bukhari, Muslim, and other major collections</p>
                <p class="text-xs text-gray-400">Version 1.1 • Last updated: 1 week ago</p>
                <div class="flex space-x-2">
                    <button onclick="editPack(2)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                    <button onclick="togglePack(2)" class="text-yellow-600 hover:text-yellow-800 text-sm">Toggle</button>
                </div>
            </div>

            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Fiqh Guidelines</h4>
                    <span class="px-2 py-1 bg-yellow-100 text-yellow-800 text-xs font-semibold rounded-full">Disabled</span>
                </div>
                <p class="text-sm text-gray-500 mb-2">Islamic jurisprudence guidelines and rulings</p>
                <p class="text-xs text-gray-400">Version 1.0 • Last updated: 2 weeks ago</p>
                <div class="flex space-x-2">
                    <button onclick="editPack(3)" class="text-blue-600 hover:text-blue-800 text-sm">Edit</button>
                    <button onclick="togglePack(3)" class="text-yellow-600 hover:text-yellow-800 text-sm">Toggle</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Safety & Policy -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-6">Safety & Policy Settings</h3>
        
        <div class="space-y-4">
            <div class="border border-gray-200 rounded-lg p-4">
                <h4 class="font-medium text-gray-900 mb-3">Hallucination Prevention</h4>
                <div class="space-y-2">
                    <div class="flex items-center">
                        <input type="checkbox" checked class="mr-2">
                        <span class="text-sm text-gray-700">Enable fact-checking against verified sources</span>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" checked class="mr-2">
                        <span class="text-sm text-gray-700">Require source citations for religious rulings</span>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" class="mr-2">
                        <span class="text-sm text-gray-700">Enable real-time verification</span>
                    </div>
                </div>
            </div>

            <div class="border border-gray-200 rounded-lg p-4">
                <h4 class="font-medium text-gray-900 mb-3">Disallowed Topics</h4>
                <div class="space-y-2">
                    <div class="flex items-center">
                        <input type="checkbox" checked class="mr-2">
                        <span class="text-sm text-gray-700">Political discussions</span>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" checked class="mr-2">
                        <span class="text-sm text-gray-700">Medical advice</span>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" checked class="mr-2">
                        <span class="text-sm text-gray-700">Legal rulings (fatwas)</span>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" checked class="mr-2">
                        <span class="text-sm text-gray-700">Controversial interpretations</span>
                    </div>
                </div>
            </div>

            <div class="border border-gray-200 rounded-lg p-4">
                <h4 class="font-medium text-gray-900 mb-3">Response Guidelines</h4>
                <div class="space-y-2">
                    <div class="flex items-center">
                        <input type="checkbox" checked class="mr-2">
                        <span class="text-sm text-gray-700">Always provide source references</span>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" checked class="mr-2">
                        <span class="text-sm text-gray-700">Include disclaimer for complex topics</span>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" checked class="mr-2">
                        <span class="text-sm text-gray-700">Suggest consulting local scholars</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Feedback & Logs -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-6">Feedback & Logs</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h4 class="font-medium text-gray-900 mb-4">Recent Feedback</h4>
                <div class="space-y-3">
                    <div class="p-3 bg-green-50 rounded-lg">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-medium text-green-900">Thumbs Up</span>
                            <span class="text-xs text-green-600">2 hours ago</span>
                        </div>
                        <p class="text-sm text-green-800">"Very helpful explanation of prayer times"</p>
                    </div>
                    <div class="p-3 bg-red-50 rounded-lg">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-medium text-red-900">Thumbs Down</span>
                            <span class="text-xs text-red-600">4 hours ago</span>
                        </div>
                        <p class="text-sm text-red-800">"Response was too brief for complex question"</p>
                    </div>
                    <div class="p-3 bg-yellow-50 rounded-lg">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-medium text-yellow-900">Flagged</span>
                            <span class="text-xs text-yellow-600">1 day ago</span>
                        </div>
                        <p class="text-sm text-yellow-800">"Inappropriate content detected"</p>
                    </div>
                </div>
            </div>

            <div>
                <h4 class="font-medium text-gray-900 mb-4">Usage Statistics</h4>
                <div class="space-y-3">
                    <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
                        <span class="text-sm text-gray-700">Total Queries</span>
                        <span class="text-sm font-medium text-gray-900">12,456</span>
                    </div>
                    <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
                        <span class="text-sm text-gray-700">Positive Feedback</span>
                        <span class="text-sm font-medium text-gray-900">89%</span>
                    </div>
                    <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
                        <span class="text-sm text-gray-700">Average Response Time</span>
                        <span class="text-sm font-medium text-gray-900">2.3s</span>
                    </div>
                    <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
                        <span class="text-sm text-gray-700">Flagged Responses</span>
                        <span class="text-sm font-medium text-gray-900">0.5%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Verified Answers -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-6">Verified Answers</h3>
        
        <div class="space-y-4">
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">What are the five pillars of Islam?</h4>
                    <span class="px-2 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full">Verified</span>
                </div>
                <p class="text-sm text-gray-600 mb-2">The five pillars are: Shahada, Salah, Zakat, Sawm, and Hajj...</p>
                <p class="text-xs text-gray-500">Source: Sahih Bukhari • Last updated: 1 week ago</p>
            </div>

            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">How to perform Wudu correctly?</h4>
                    <span class="px-2 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full">Verified</span>
                </div>
                <p class="text-sm text-gray-600 mb-2">Wudu involves washing the hands, mouth, nose, face, arms, head, and feet...</p>
                <p class="text-xs text-gray-500">Source: Sahih Muslim • Last updated: 3 days ago</p>
            </div>
        </div>
    </div>
</div>

<script>
// AI Noor Management Functions
function addKnowledgePack() { console.log('Add knowledge pack'); }
function editPack(id) { console.log('Edit pack:', id); }
function togglePack(id) { console.log('Toggle pack:', id); }
</script>
