<!-- Qibla Settings Management Section -->
<div class="admin-section" id="qibla-section">
    <!-- Algorithm Settings -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-semibold text-gray-800">Qibla Algorithm Settings</h3>
            <button onclick="resetToDefaults()" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg transition-colors">
                <i class="fas fa-undo mr-2"></i>Reset to Defaults
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Kaaba Coordinates -->
            <div class="border border-gray-200 rounded-lg p-4">
                <h4 class="font-medium text-gray-900 mb-4">Kaaba Coordinates (Fixed)</h4>
                <div class="space-y-3">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Latitude</label>
                        <input type="text" value="21.4225" readonly class="w-full px-3 py-2 border border-gray-300 rounded-lg bg-gray-50 text-gray-600">
                        <p class="text-xs text-gray-500 mt-1">Kaaba latitude (read-only)</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Longitude</label>
                        <input type="text" value="39.8262" readonly class="w-full px-3 py-2 border border-gray-300 rounded-lg bg-gray-50 text-gray-600">
                        <p class="text-xs text-gray-500 mt-1">Kaaba longitude (read-only)</p>
                    </div>
                </div>
            </div>

            <!-- Algorithm Parameters -->
            <div class="border border-gray-200 rounded-lg p-4">
                <h4 class="font-medium text-gray-900 mb-4">Algorithm Parameters</h4>
                <div class="space-y-3">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Coordinate System</label>
                        <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="WGS84" selected>WGS84 (World Geodetic System)</option>
                            <option value="NAD83">NAD83 (North American Datum)</option>
                            <option value="OSGB36">OSGB36 (Ordnance Survey Great Britain)</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Calculation Method</label>
                        <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="spherical" selected>Spherical Law of Cosines</option>
                            <option value="haversine">Haversine Formula</option>
                            <option value="vincenty">Vincenty's Formulae</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Precision (decimal places)</label>
                        <input type="number" value="2" min="1" max="6" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Device Compatibility -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-6">Device Compatibility Settings</h3>
        
        <div class="space-y-4">
            <!-- Compass Calibration -->
            <div class="border border-gray-200 rounded-lg p-4">
                <h4 class="font-medium text-gray-900 mb-3">Compass Calibration Instructions</h4>
                <div class="prose max-w-none">
                    <p class="text-sm text-gray-600 mb-3">Provide users with clear instructions for calibrating their device compass:</p>
                    <div class="bg-blue-50 rounded-lg p-4">
                        <h5 class="font-medium text-blue-900 mb-2">Calibration Steps:</h5>
                        <ol class="list-decimal list-inside text-sm text-blue-800 space-y-1">
                            <li>Hold your device flat and level</li>
                            <li>Move it in a figure-8 motion for 10-15 seconds</li>
                            <li>Rotate the device 360 degrees slowly</li>
                            <li>Keep away from metal objects and magnets</li>
                            <li>Ensure location services are enabled</li>
                        </ol>
                    </div>
                </div>
                <div class="mt-4">
                    <button onclick="editCalibrationInstructions()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                        <i class="fas fa-edit mr-2"></i>Edit Instructions
                    </button>
                </div>
            </div>

            <!-- Browser Support -->
            <div class="border border-gray-200 rounded-lg p-4">
                <h4 class="font-medium text-gray-900 mb-3">Browser Support Matrix</h4>
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Browser</th>
                                <th class="text-center py-2">Geolocation</th>
                                <th class="text-center py-2">Device Orientation</th>
                                <th class="text-center py-2">Compass</th>
                                <th class="text-center py-2">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">Chrome 80+</td>
                                <td class="text-center"><i class="fas fa-check text-green-500"></i></td>
                                <td class="text-center"><i class="fas fa-check text-green-500"></i></td>
                                <td class="text-center"><i class="fas fa-check text-green-500"></i></td>
                                <td class="text-center"><span class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded-full">Fully Supported</span></td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">Safari 13+</td>
                                <td class="text-center"><i class="fas fa-check text-green-500"></i></td>
                                <td class="text-center"><i class="fas fa-check text-green-500"></i></td>
                                <td class="text-center"><i class="fas fa-exclamation-triangle text-yellow-500"></i></td>
                                <td class="text-center"><span class="px-2 py-1 bg-yellow-100 text-yellow-800 text-xs rounded-full">Partial</span></td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">Firefox 70+</td>
                                <td class="text-center"><i class="fas fa-check text-green-500"></i></td>
                                <td class="text-center"><i class="fas fa-times text-red-500"></i></td>
                                <td class="text-center"><i class="fas fa-times text-red-500"></i></td>
                                <td class="text-center"><span class="px-2 py-1 bg-red-100 text-red-800 text-xs rounded-full">Limited</span></td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">Edge 80+</td>
                                <td class="text-center"><i class="fas fa-check text-green-500"></i></td>
                                <td class="text-center"><i class="fas fa-check text-green-500"></i></td>
                                <td class="text-center"><i class="fas fa-check text-green-500"></i></td>
                                <td class="text-center"><span class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded-full">Fully Supported</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Help Content Management -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-6">Help Content Management</h3>
        
        <div class="space-y-4">
            <!-- Qibla Help Page -->
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Qibla Help Page Content</h4>
                    <div class="flex space-x-2">
                        <button onclick="previewHelpContent('qibla')" class="text-blue-600 hover:text-blue-800 text-sm">Preview</button>
                        <button onclick="editHelpContent('qibla')" class="text-green-600 hover:text-green-800 text-sm">Edit</button>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-lg p-3">
                    <p class="text-sm text-gray-600 mb-2">Current content preview:</p>
                    <div class="text-sm text-gray-700 max-h-20 overflow-y-auto">
                        <p><strong>How to Find Qibla Direction:</strong></p>
                        <p>1. Allow location access when prompted</p>
                        <p>2. Enable device orientation for compass</p>
                        <p>3. Calibrate your device by moving it in a figure-8 motion</p>
                        <p>4. The red arrow will point to the Qibla direction</p>
                        <p>5. For best accuracy, use outdoors away from metal objects</p>
                    </div>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-medium text-gray-900">Frequently Asked Questions</h4>
                    <div class="flex space-x-2">
                        <button onclick="addFAQ()" class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded text-sm">Add FAQ</button>
                        <button onclick="manageFAQs()" class="text-green-600 hover:text-green-800 text-sm">Manage</button>
                    </div>
                </div>
                <div class="space-y-2">
                    <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
                        <span class="text-sm text-gray-700">Why is my compass not working?</span>
                        <div class="flex space-x-1">
                            <button onclick="editFAQ(1)" class="text-blue-600 hover:text-blue-800 text-xs">Edit</button>
                            <button onclick="deleteFAQ(1)" class="text-red-600 hover:text-red-800 text-xs">Delete</button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
                        <span class="text-sm text-gray-700">How accurate is the Qibla direction?</span>
                        <div class="flex space-x-1">
                            <button onclick="editFAQ(2)" class="text-blue-600 hover:text-blue-800 text-xs">Edit</button>
                            <button onclick="deleteFAQ(2)" class="text-red-600 hover:text-red-800 text-xs">Delete</button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
                        <span class="text-sm text-gray-700">Can I use this without internet?</span>
                        <div class="flex space-x-1">
                            <button onclick="editFAQ(3)" class="text-blue-600 hover:text-blue-800 text-xs">Edit</button>
                            <button onclick="deleteFAQ(3)" class="text-red-600 hover:text-red-800 text-xs">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Analytics -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-6">Qibla Usage Analytics</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-blue-50 rounded-lg p-4">
                <h4 class="font-medium text-blue-900">Total Usage</h4>
                <p class="text-2xl font-bold text-blue-600">12,456</p>
                <p class="text-sm text-blue-500">This month</p>
            </div>
            <div class="bg-green-50 rounded-lg p-4">
                <h4 class="font-medium text-green-900">Successful Directions</h4>
                <p class="text-2xl font-bold text-green-600">11,892</p>
                <p class="text-sm text-green-500">95.5% success rate</p>
            </div>
            <div class="bg-yellow-50 rounded-lg p-4">
                <h4 class="font-medium text-yellow-900">Location Errors</h4>
                <p class="text-2xl font-bold text-yellow-600">564</p>
                <p class="text-sm text-yellow-500">4.5% error rate</p>
            </div>
            <div class="bg-purple-50 rounded-lg p-4">
                <h4 class="font-medium text-purple-900">Compass Issues</h4>
                <p class="text-2xl font-bold text-purple-600">234</p>
                <p class="text-sm text-purple-500">1.9% compass errors</p>
            </div>
        </div>

        <div class="mt-6">
            <h4 class="font-medium text-gray-900 mb-3">Top Countries Using Qibla</h4>
            <div class="space-y-2">
                <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
                    <span class="text-sm text-gray-700">United States</span>
                    <span class="text-sm font-medium text-gray-900">3,456 uses</span>
                </div>
                <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
                    <span class="text-sm text-gray-700">United Kingdom</span>
                    <span class="text-sm font-medium text-gray-900">2,123 uses</span>
                </div>
                <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
                    <span class="text-sm text-gray-700">Canada</span>
                    <span class="text-sm font-medium text-gray-900">1,876 uses</span>
                </div>
                <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
                    <span class="text-sm text-gray-700">Australia</span>
                    <span class="text-sm font-medium text-gray-900">1,543 uses</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Help Content Editor Modal -->
<div id="help-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-3xl shadow-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto">
        <div class="p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-2xl font-bold text-gray-800" id="help-modal-title">Edit Help Content</h3>
                <button onclick="closeHelpModal()" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>

            <form id="help-form" class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Content Title</label>
                    <input type="text" id="help-title" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter content title">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Content (Markdown)</label>
                    <textarea id="help-content" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" rows="10" placeholder="Enter content in Markdown format"></textarea>
                </div>

                <div class="flex items-center">
                    <input type="checkbox" id="help-published" class="mr-2">
                    <label for="help-published" class="text-sm font-medium text-gray-700">Publish this content</label>
                </div>

                <div class="flex justify-end space-x-3">
                    <button type="button" onclick="closeHelpModal()" class="px-6 py-2 text-gray-600 hover:text-gray-800">Cancel</button>
                    <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Save Content</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
// Qibla Settings Functions
function resetToDefaults() {
    if (confirm('Reset all Qibla settings to defaults?')) {
        console.log('Reset to defaults');
    }
}

function editCalibrationInstructions() {
    console.log('Edit calibration instructions');
}

function previewHelpContent(contentType) {
    console.log('Preview help content:', contentType);
}

function editHelpContent(contentType) {
    document.getElementById('help-modal-title').textContent = 'Edit ' + contentType + ' Help Content';
    document.getElementById('help-form').reset();
    document.getElementById('help-modal').classList.remove('hidden');
    document.getElementById('help-modal').classList.add('flex');
}

function closeHelpModal() {
    document.getElementById('help-modal').classList.add('hidden');
    document.getElementById('help-modal').classList.remove('flex');
}

function addFAQ() {
    console.log('Add new FAQ');
}

function manageFAQs() {
    console.log('Manage FAQs');
}

function editFAQ(faqId) {
    console.log('Edit FAQ:', faqId);
}

function deleteFAQ(faqId) {
    if (confirm('Delete this FAQ?')) {
        console.log('Delete FAQ:', faqId);
    }
}

// Form submission
document.getElementById('help-form').addEventListener('submit', function(e) {
    e.preventDefault();
    console.log('Save help content form');
    closeHelpModal();
});
</script>
