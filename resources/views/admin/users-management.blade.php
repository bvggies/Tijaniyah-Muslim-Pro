<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Management - Tijaniyah Muslim Pro</title>
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
                        <h1 class="text-2xl font-bold text-gray-900">Users Management</h1>
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
            <!-- Users & Roles Management Section -->
            <div class="admin-section" id="users-section">
    <!-- Users List -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-semibold text-gray-800">Users Management</h3>
            <div class="flex items-center space-x-4">
                <button onclick="inviteUser()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                    <i class="fas fa-user-plus mr-2"></i>Invite User
                </button>
                <button onclick="exportUsers()" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition-colors">
                    <i class="fas fa-download mr-2"></i>Export CSV
                </button>
            </div>
        </div>

        <!-- Search and Filters -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
            <input type="text" id="user-search" placeholder="Search by name or email..." class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            <select id="role-filter" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <option value="">All Roles</option>
                <option value="admin">Admin</option>
                <option value="moderator">Moderator</option>
                <option value="scholar">Scholar</option>
                <option value="user">User</option>
            </select>
            <select id="status-filter" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <option value="">All Status</option>
                <option value="active">Active</option>
                <option value="suspended">Suspended</option>
                <option value="pending">Pending</option>
            </select>
            <button onclick="applyFilters()" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg transition-colors">
                <i class="fas fa-filter mr-2"></i>Apply Filters
            </button>
        </div>

        <!-- Users Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Login</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200" id="users-table-body">
                    <!-- Sample user rows -->
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
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Admin</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2 hours ago</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button onclick="editUser(1)" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</button>
                            <button onclick="suspendUser(1)" class="text-yellow-600 hover:text-yellow-900 mr-3">Suspend</button>
                            <button onclick="deleteUser(1)" class="text-red-600 hover:text-red-900">Delete</button>
                        </td>
                    </tr>
                    <!-- More user rows would be dynamically loaded -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Roles Management -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-6">Roles & Permissions</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Roles List -->
            <div>
                <h4 class="text-lg font-medium text-gray-700 mb-4">Available Roles</h4>
                <div class="space-y-3">
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div>
                            <h5 class="font-medium text-gray-900">Admin</h5>
                            <p class="text-sm text-gray-500">Full system access</p>
                        </div>
                        <div class="flex space-x-2">
                            <button onclick="editRole('admin')" class="text-blue-600 hover:text-blue-800">Edit</button>
                            <button onclick="viewPermissions('admin')" class="text-green-600 hover:text-green-800">Permissions</button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div>
                            <h5 class="font-medium text-gray-900">Moderator</h5>
                            <p class="text-sm text-gray-500">Community moderation</p>
                        </div>
                        <div class="flex space-x-2">
                            <button onclick="editRole('moderator')" class="text-blue-600 hover:text-blue-800">Edit</button>
                            <button onclick="viewPermissions('moderator')" class="text-green-600 hover:text-green-800">Permissions</button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div>
                            <h5 class="font-medium text-gray-900">Scholar</h5>
                            <p class="text-sm text-gray-500">Content creation</p>
                        </div>
                        <div class="flex space-x-2">
                            <button onclick="editRole('scholar')" class="text-blue-600 hover:text-blue-800">Edit</button>
                            <button onclick="viewPermissions('scholar')" class="text-green-600 hover:text-green-800">Permissions</button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div>
                            <h5 class="font-medium text-gray-900">User</h5>
                            <p class="text-sm text-gray-500">Basic access</p>
                        </div>
                        <div class="flex space-x-2">
                            <button onclick="editRole('user')" class="text-blue-600 hover:text-blue-800">Edit</button>
                            <button onclick="viewPermissions('user')" class="text-green-600 hover:text-green-800">Permissions</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Permissions Matrix -->
            <div>
                <h4 class="text-lg font-medium text-gray-700 mb-4">Permissions Matrix</h4>
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Permission</th>
                                <th class="text-center py-2">Admin</th>
                                <th class="text-center py-2">Mod</th>
                                <th class="text-center py-2">Scholar</th>
                                <th class="text-center py-2">User</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">Manage Users</td>
                                <td class="text-center"><i class="fas fa-check text-green-500"></i></td>
                                <td class="text-center"><i class="fas fa-times text-red-500"></i></td>
                                <td class="text-center"><i class="fas fa-times text-red-500"></i></td>
                                <td class="text-center"><i class="fas fa-times text-red-500"></i></td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">Moderate Community</td>
                                <td class="text-center"><i class="fas fa-check text-green-500"></i></td>
                                <td class="text-center"><i class="fas fa-check text-green-500"></i></td>
                                <td class="text-center"><i class="fas fa-times text-red-500"></i></td>
                                <td class="text-center"><i class="fas fa-times text-red-500"></i></td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">Create Content</td>
                                <td class="text-center"><i class="fas fa-check text-green-500"></i></td>
                                <td class="text-center"><i class="fas fa-check text-green-500"></i></td>
                                <td class="text-center"><i class="fas fa-check text-green-500"></i></td>
                                <td class="text-center"><i class="fas fa-times text-red-500"></i></td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">View Content</td>
                                <td class="text-center"><i class="fas fa-check text-green-500"></i></td>
                                <td class="text-center"><i class="fas fa-check text-green-500"></i></td>
                                <td class="text-center"><i class="fas fa-check text-green-500"></i></td>
                                <td class="text-center"><i class="fas fa-check text-green-500"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Users Management Functions
function inviteUser() {
    // Open invite user modal
    console.log('Invite user functionality');
}

function exportUsers() {
    // Export users to CSV
    console.log('Export users functionality');
}

function applyFilters() {
    // Apply search and filter criteria
    const search = document.getElementById('user-search').value;
    const role = document.getElementById('role-filter').value;
    const status = document.getElementById('status-filter').value;
    
    console.log('Applying filters:', { search, role, status });
}

function editUser(userId) {
    // Open edit user modal
    console.log('Edit user:', userId);
}

function suspendUser(userId) {
    // Suspend user
    console.log('Suspend user:', userId);
}

function deleteUser(userId) {
    // Delete user with confirmation
    if (confirm('Are you sure you want to delete this user?')) {
        console.log('Delete user:', userId);
    }
}

function editRole(roleName) {
    // Open edit role modal
    console.log('Edit role:', roleName);
}

function viewPermissions(roleName) {
    // View role permissions
    console.log('View permissions for:', roleName);
}
</script>
            </div>
        </div>
    </div>
</body>
</html>
