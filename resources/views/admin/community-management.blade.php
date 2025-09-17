<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Management - Tijaniyah Muslim Pro</title>
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
                        <h1 class="text-2xl font-bold text-gray-900">Community Management</h1>
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
            <!-- Community Management Section -->
            <div class="admin-section" id="community-section">
    <!-- Reports Queue -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-semibold text-gray-800">Reports Queue</h3>
            <div class="flex items-center space-x-4">
                <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-medium">12 Pending</span>
                <button onclick="refreshReports()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                    <i class="fas fa-sync-alt mr-2"></i>Refresh
                </button>
            </div>
        </div>

        <!-- Reports Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Report</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Reason</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Reporter</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">Inappropriate content in post</div>
                            <div class="text-sm text-gray-500">Post ID: #12345</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Post</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Spam</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">user@example.com</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2 hours ago</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button onclick="viewReport(1)" class="text-blue-600 hover:text-blue-900 mr-3">View</button>
                            <button onclick="approveReport(1)" class="text-green-600 hover:text-green-900 mr-3">Approve</button>
                            <button onclick="dismissReport(1)" class="text-gray-600 hover:text-gray-900">Dismiss</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">Harassment in comment</div>
                            <div class="text-sm text-gray-500">Comment ID: #67890</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Comment</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Harassment</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">moderator@example.com</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">4 hours ago</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button onclick="viewReport(2)" class="text-blue-600 hover:text-blue-900 mr-3">View</button>
                            <button onclick="approveReport(2)" class="text-green-600 hover:text-green-900 mr-3">Approve</button>
                            <button onclick="dismissReport(2)" class="text-gray-600 hover:text-gray-900">Dismiss</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Threads & Posts Management -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-semibold text-gray-800">Threads & Posts</h3>
            <div class="flex items-center space-x-4">
                <select id="thread-filter" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option value="">All Threads</option>
                    <option value="new">New</option>
                    <option value="flagged">Flagged</option>
                    <option value="closed">Closed</option>
                </select>
                <button onclick="applyThreadFilters()" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg transition-colors">
                    <i class="fas fa-filter mr-2"></i>Filter
                </button>
            </div>
        </div>

        <div class="space-y-4">
            <!-- Sample thread -->
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-start justify-between">
                    <div class="flex-1">
                        <h4 class="text-lg font-medium text-gray-900">Discussion about Prayer Times</h4>
                        <p class="text-sm text-gray-500 mt-1">Posted by user@example.com • 2 hours ago</p>
                        <p class="text-gray-700 mt-2">I have a question about the accuracy of prayer times in my area...</p>
                        <div class="flex items-center space-x-4 mt-3">
                            <span class="px-2 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full">Active</span>
                            <span class="text-sm text-gray-500">5 replies</span>
                            <span class="text-sm text-gray-500">12 views</span>
                        </div>
                    </div>
                    <div class="flex space-x-2">
                        <button onclick="viewThread(1)" class="text-blue-600 hover:text-blue-800">View</button>
                        <button onclick="closeThread(1)" class="text-yellow-600 hover:text-yellow-800">Close</button>
                        <button onclick="deleteThread(1)" class="text-red-600 hover:text-red-800">Delete</button>
                    </div>
                </div>
            </div>

            <!-- Another sample thread -->
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-start justify-between">
                    <div class="flex-1">
                        <h4 class="text-lg font-medium text-gray-900">Quran Study Group</h4>
                        <p class="text-sm text-gray-500 mt-1">Posted by scholar@example.com • 1 day ago</p>
                        <p class="text-gray-700 mt-2">Starting a new study group for Surah Al-Baqarah...</p>
                        <div class="flex items-center space-x-4 mt-3">
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full">Pinned</span>
                            <span class="text-sm text-gray-500">23 replies</span>
                            <span class="text-sm text-gray-500">156 views</span>
                        </div>
                    </div>
                    <div class="flex space-x-2">
                        <button onclick="viewThread(2)" class="text-blue-600 hover:text-blue-800">View</button>
                        <button onclick="unpinThread(2)" class="text-gray-600 hover:text-gray-800">Unpin</button>
                        <button onclick="deleteThread(2)" class="text-red-600 hover:text-red-800">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- User Strikes & Bans -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-semibold text-gray-800">User Strikes & Bans</h3>
            <button onclick="addStrike()" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition-colors">
                <i class="fas fa-exclamation-triangle mr-2"></i>Add Strike
            </button>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Strikes</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Reason</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Expires</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/40" alt="">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">John Doe</div>
                                    <div class="text-sm text-gray-500">john@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">2/3</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Spam posting</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Warning</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">7 days</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button onclick="viewStrikes(1)" class="text-blue-600 hover:text-blue-900 mr-3">View</button>
                            <button onclick="removeStrike(1)" class="text-green-600 hover:text-green-900">Remove</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/40" alt="">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">Jane Smith</div>
                                    <div class="text-sm text-gray-500">jane@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">3/3</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Harassment</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Banned</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">30 days</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button onclick="viewStrikes(2)" class="text-blue-600 hover:text-blue-900 mr-3">View</button>
                            <button onclick="unbanUser(2)" class="text-green-600 hover:text-green-900">Unban</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Community Analytics -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-6">Community Analytics</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-blue-50 rounded-lg p-4">
                <h4 class="font-medium text-blue-900">Total Posts</h4>
                <p class="text-2xl font-bold text-blue-600">1,234</p>
                <p class="text-sm text-blue-500">This month</p>
            </div>
            <div class="bg-green-50 rounded-lg p-4">
                <h4 class="font-medium text-green-900">Active Users</h4>
                <p class="text-2xl font-bold text-green-600">456</p>
                <p class="text-sm text-green-500">This week</p>
            </div>
            <div class="bg-yellow-50 rounded-lg p-4">
                <h4 class="font-medium text-yellow-900">Reports</h4>
                <p class="text-2xl font-bold text-yellow-600">23</p>
                <p class="text-sm text-yellow-500">Pending review</p>
            </div>
            <div class="bg-red-50 rounded-lg p-4">
                <h4 class="font-medium text-red-900">Banned Users</h4>
                <p class="text-2xl font-bold text-red-600">12</p>
                <p class="text-sm text-red-500">Active bans</p>
            </div>
        </div>
    </div>
</div>

<!-- Report Detail Modal -->
<div id="report-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-3xl shadow-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
        <div class="p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-2xl font-bold text-gray-800">Report Details</h3>
                <button onclick="closeReportModal()" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>

            <div class="space-y-4">
                <div>
                    <h4 class="font-medium text-gray-900">Reported Content</h4>
                    <div class="mt-2 p-4 bg-gray-50 rounded-lg">
                        <p id="reported-content">This is the reported content...</p>
                    </div>
                </div>

                <div>
                    <h4 class="font-medium text-gray-900">Report Reason</h4>
                    <p id="report-reason" class="mt-1 text-gray-700">Spam</p>
                </div>

                <div>
                    <h4 class="font-medium text-gray-900">Reporter</h4>
                    <p id="reporter-info" class="mt-1 text-gray-700">user@example.com</p>
                </div>

                <div>
                    <h4 class="font-medium text-gray-900">Resolution Notes</h4>
                    <textarea id="resolution-notes" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" rows="3" placeholder="Add resolution notes..."></textarea>
                </div>

                <div class="flex justify-end space-x-3">
                    <button onclick="closeReportModal()" class="px-6 py-2 text-gray-600 hover:text-gray-800">Cancel</button>
                    <button onclick="dismissReport(1)" class="px-6 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">Dismiss</button>
                    <button onclick="approveReport(1)" class="px-6 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600">Approve Action</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Community Management Functions
function refreshReports() {
    console.log('Refresh reports');
}

function viewReport(reportId) {
    document.getElementById('report-modal').classList.remove('hidden');
    document.getElementById('report-modal').classList.add('flex');
    console.log('View report:', reportId);
}

function closeReportModal() {
    document.getElementById('report-modal').classList.add('hidden');
    document.getElementById('report-modal').classList.remove('flex');
}

function approveReport(reportId) {
    if (confirm('Are you sure you want to approve this report?')) {
        console.log('Approve report:', reportId);
    }
}

function dismissReport(reportId) {
    if (confirm('Are you sure you want to dismiss this report?')) {
        console.log('Dismiss report:', reportId);
    }
}

function applyThreadFilters() {
    const filter = document.getElementById('thread-filter').value;
    console.log('Apply thread filters:', filter);
}

function viewThread(threadId) {
    console.log('View thread:', threadId);
}

function closeThread(threadId) {
    if (confirm('Are you sure you want to close this thread?')) {
        console.log('Close thread:', threadId);
    }
}

function deleteThread(threadId) {
    if (confirm('Are you sure you want to delete this thread?')) {
        console.log('Delete thread:', threadId);
    }
}

function unpinThread(threadId) {
    console.log('Unpin thread:', threadId);
}

function addStrike() {
    const userId = prompt('Enter user ID or email:');
    const reason = prompt('Enter strike reason:');
    if (userId && reason) {
        console.log('Add strike:', { userId, reason });
    }
}

function viewStrikes(userId) {
    console.log('View strikes for user:', userId);
}

function removeStrike(strikeId) {
    if (confirm('Are you sure you want to remove this strike?')) {
        console.log('Remove strike:', strikeId);
    }
}

function unbanUser(userId) {
    if (confirm('Are you sure you want to unban this user?')) {
        console.log('Unban user:', userId);
    }
}
</script>
            </div>
        </div>
    </div>
</body>
</html>
