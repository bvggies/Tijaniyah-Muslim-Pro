<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users & Roles Management - Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="bg-gray-100 min-h-screen">
    <!-- Header -->
    <header class="bg-white shadow-sm border-b border-gray-200 px-6 py-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <a href="/admin/dashboard" class="text-blue-600 hover:text-blue-800">
                    <i class="fas fa-arrow-left mr-2"></i>Back to Dashboard
                </a>
                <h1 class="text-2xl font-semibold text-gray-800">Users & Roles Management</h1>
            </div>
            <div class="flex items-center space-x-4">
                <button onclick="openInviteModal()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                    <i class="fas fa-user-plus mr-2"></i>Invite User
                </button>
                <button onclick="openRoleModal()" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition-colors">
                    <i class="fas fa-cog mr-2"></i>Manage Roles
                </button>
            </div>
        </div>
    </header>

    <div class="p-6">
        <!-- Filters and Search -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Search</label>
                    <input type="text" id="user-search" placeholder="Search by name or email..." class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Role</label>
                    <select id="role-filter" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="">All Roles</option>
                        <option value="admin">Admin</option>
                        <option value="moderator">Moderator</option>
                        <option value="scholar">Scholar</option>
                        <option value="user">User</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                    <select id="status-filter" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="">All Status</option>
                        <option value="active">Active</option>
                        <option value="suspended">Suspended</option>
                        <option value="pending">Pending</option>
                    </select>
                </div>
                <div class="flex items-end">
                    <button onclick="exportUsers()" class="w-full bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg transition-colors">
                        <i class="fas fa-download mr-2"></i>Export CSV
                    </button>
                </div>
            </div>
        </div>

        <!-- Users Table -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-semibold text-gray-800">Users List</h3>
            </div>
            
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Login</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Joined</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="users-table-body" class="bg-white divide-y divide-gray-200">
                        <!-- Sample data - in real app, this would be populated from backend -->
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/40" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Ahmad Hassan</div>
                                        <div class="text-sm text-gray-500">ahmad@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Admin</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2 hours ago</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Jan 15, 2024</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button onclick="editUser(1)" class="text-blue-600 hover:text-blue-900 mr-3">Edit</button>
                                <button onclick="suspendUser(1)" class="text-yellow-600 hover:text-yellow-900 mr-3">Suspend</button>
                                <button onclick="deleteUser(1)" class="text-red-600 hover:text-red-900">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/40" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Fatima Ali</div>
                                        <div class="text-sm text-gray-500">fatima@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Scholar</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">1 day ago</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Feb 3, 2024</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button onclick="editUser(2)" class="text-blue-600 hover:text-blue-900 mr-3">Edit</button>
                                <button onclick="suspendUser(2)" class="text-yellow-600 hover:text-yellow-900 mr-3">Suspend</button>
                                <button onclick="deleteUser(2)" class="text-red-600 hover:text-red-900">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/40" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Omar Ibrahim</div>
                                        <div class="text-sm text-gray-500">omar@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">User</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Suspended</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">1 week ago</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Mar 10, 2024</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button onclick="editUser(3)" class="text-blue-600 hover:text-blue-900 mr-3">Edit</button>
                                <button onclick="unsuspendUser(3)" class="text-green-600 hover:text-green-900 mr-3">Unsuspend</button>
                                <button onclick="deleteUser(3)" class="text-red-600 hover:text-red-900">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination -->
        <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6 mt-6 rounded-lg shadow-md">
            <div class="flex-1 flex justify-between sm:hidden">
                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">Previous</a>
                <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">Next</a>
            </div>
            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm text-gray-700">Showing <span class="font-medium">1</span> to <span class="font-medium">10</span> of <span class="font-medium">97</span> results</p>
                </div>
                <div>
                    <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px">
                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">1</a>
                        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">2</a>
                        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">3</a>
                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Invite User Modal -->
    <div id="invite-modal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg shadow-xl max-w-md w-full mx-4">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-semibold text-gray-800">Invite New User</h3>
            </div>
            <form id="invite-form" class="p-6">
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                    <input type="email" id="invite-email" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Role</label>
                    <select id="invite-role" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="">Select Role</option>
                        <option value="user">User</option>
                        <option value="scholar">Scholar</option>
                        <option value="moderator">Moderator</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Message (Optional)</label>
                    <textarea id="invite-message" rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Welcome to Tijaniyah Muslim Pro..."></textarea>
                </div>
                <div class="flex justify-end space-x-3">
                    <button type="button" onclick="closeInviteModal()" class="px-4 py-2 text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300 transition-colors">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors">Send Invitation</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Role Management Modal -->
    <div id="role-modal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg shadow-xl max-w-2xl w-full mx-4">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-semibold text-gray-800">Role & Permission Management</h3>
            </div>
            <div class="p-6">
                <div class="space-y-6">
                    <!-- Admin Role -->
                    <div class="border border-gray-200 rounded-lg p-4">
                        <div class="flex items-center justify-between mb-3">
                            <h4 class="text-lg font-semibold text-gray-800">Admin</h4>
                            <span class="px-2 py-1 bg-red-100 text-red-800 text-xs font-semibold rounded-full">Full Access</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-3">Complete system access including user management, content creation, and system settings.</p>
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 text-sm">Edit Permissions</button>
                            <button class="text-gray-400 text-sm">View Details</button>
                        </div>
                    </div>

                    <!-- Moderator Role -->
                    <div class="border border-gray-200 rounded-lg p-4">
                        <div class="flex items-center justify-between mb-3">
                            <h4 class="text-lg font-semibold text-gray-800">Moderator</h4>
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full">Limited Access</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-3">Community moderation, content review, and limited user management.</p>
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 text-sm">Edit Permissions</button>
                            <button class="text-gray-400 text-sm">View Details</button>
                        </div>
                    </div>

                    <!-- Scholar Role -->
                    <div class="border border-gray-200 rounded-lg p-4">
                        <div class="flex items-center justify-between mb-3">
                            <h4 class="text-lg font-semibold text-gray-800">Scholar</h4>
                            <span class="px-2 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full">Content Creator</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-3">Create and publish sermons, duas, and educational content.</p>
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 text-sm">Edit Permissions</button>
                            <button class="text-gray-400 text-sm">View Details</button>
                        </div>
                    </div>

                    <!-- User Role -->
                    <div class="border border-gray-200 rounded-lg p-4">
                        <div class="flex items-center justify-between mb-3">
                            <h4 class="text-lg font-semibold text-gray-800">User</h4>
                            <span class="px-2 py-1 bg-gray-100 text-gray-800 text-xs font-semibold rounded-full">Basic Access</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-3">Access to all public features and personal content management.</p>
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 text-sm">Edit Permissions</button>
                            <button class="text-gray-400 text-sm">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-6 py-4 border-t border-gray-200 flex justify-end">
                <button onclick="closeRoleModal()" class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition-colors">Close</button>
            </div>
        </div>
    </div>

    <script>
        // Modal functions
        function openInviteModal() {
            document.getElementById('invite-modal').classList.remove('hidden');
            document.getElementById('invite-modal').classList.add('flex');
        }

        function closeInviteModal() {
            document.getElementById('invite-modal').classList.add('hidden');
            document.getElementById('invite-modal').classList.remove('flex');
        }

        function openRoleModal() {
            document.getElementById('role-modal').classList.remove('hidden');
            document.getElementById('role-modal').classList.add('flex');
        }

        function closeRoleModal() {
            document.getElementById('role-modal').classList.add('hidden');
            document.getElementById('role-modal').classList.remove('flex');
        }

        // User management functions
        function editUser(userId) {
            alert('Edit user functionality will be implemented');
        }

        function suspendUser(userId) {
            if (confirm('Are you sure you want to suspend this user?')) {
                alert('User suspended successfully');
            }
        }

        function unsuspendUser(userId) {
            if (confirm('Are you sure you want to unsuspend this user?')) {
                alert('User unsuspended successfully');
            }
        }

        function deleteUser(userId) {
            if (confirm('Are you sure you want to delete this user? This action cannot be undone.')) {
                alert('User deleted successfully');
            }
        }

        function exportUsers() {
            alert('Export functionality will be implemented');
        }

        // Form submission
        document.getElementById('invite-form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Invitation sent successfully!');
            closeInviteModal();
        });

        // Search and filter functionality
        document.getElementById('user-search').addEventListener('input', function() {
            // Implement search functionality
        });

        document.getElementById('role-filter').addEventListener('change', function() {
            // Implement role filtering
        });

        document.getElementById('status-filter').addEventListener('change', function() {
            // Implement status filtering
        });
    </script>
</body>
</html>
