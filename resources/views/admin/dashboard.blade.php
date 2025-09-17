<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Tijaniyah Muslim Pro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="bg-gray-100 min-h-screen">
    <!-- Sidebar -->
    <div class="flex h-screen">
        <div class="w-64 bg-gradient-to-b from-blue-900 to-indigo-900 text-white shadow-lg">
            <div class="p-6">
                <h1 class="text-2xl font-bold text-center">Admin Panel</h1>
                <p class="text-blue-200 text-sm text-center mt-2">Tijaniyah Muslim Pro</p>
            </div>
            
            <nav class="mt-8">
                <a href="#overview" class="admin-nav-item active" data-section="overview">
                    <i class="fas fa-tachometer-alt mr-3"></i>Overview
                </a>
                <a href="#users" class="admin-nav-item" data-section="users">
                    <i class="fas fa-users mr-3"></i>Users & Roles
                </a>
                <a href="#prayer" class="admin-nav-item" data-section="prayer">
                    <i class="fas fa-mosque mr-3"></i>Prayer Settings
                </a>
                <a href="#duas" class="admin-nav-item" data-section="duas">
                    <i class="fas fa-hands mr-3"></i>Duas
                </a>
                <a href="#quran" class="admin-nav-item" data-section="quran">
                    <i class="fas fa-book-quran mr-3"></i>Quran
                </a>
                <a href="#tasbih" class="admin-nav-item" data-section="tasbih">
                    <i class="fas fa-circle mr-3"></i>Tasbih
                </a>
                <a href="#wazifa" class="admin-nav-item" data-section="wazifa">
                    <i class="fas fa-star mr-3"></i>Wazifa
                </a>
                <a href="#lazim" class="admin-nav-item" data-section="lazim">
                    <i class="fas fa-clock mr-3"></i>Lazim
                </a>
                <a href="#zikr" class="admin-nav-item" data-section="zikr">
                    <i class="fas fa-mosque mr-3"></i>Zikr Jumma
                </a>
                <a href="#journal" class="admin-nav-item" data-section="journal">
                    <i class="fas fa-book mr-3"></i>Journal
                </a>
                <a href="#scholars" class="admin-nav-item" data-section="scholars">
                    <i class="fas fa-user-graduate mr-3"></i>Scholars
                </a>
                <a href="#community" class="admin-nav-item" data-section="community">
                    <i class="fas fa-comments mr-3"></i>Community
                </a>
                <a href="#mosques" class="admin-nav-item" data-section="mosques">
                    <i class="fas fa-mosque mr-3"></i>Mosques
                </a>
                <a href="#makkah" class="admin-nav-item" data-section="makkah">
                    <i class="fas fa-tv mr-3"></i>Makkah Live
                </a>
                <a href="#ai-noor" class="admin-nav-item" data-section="ai-noor">
                    <i class="fas fa-robot mr-3"></i>AI Noor
                </a>
                <a href="#system" class="admin-nav-item" data-section="system">
                    <i class="fas fa-cog mr-3"></i>System
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="bg-white shadow-sm border-b border-gray-200 px-6 py-4">
                <div class="flex items-center justify-between">
                    <h2 class="text-2xl font-semibold text-gray-800" id="page-title">Admin Dashboard</h2>
                    <div class="flex items-center space-x-4">
                        <div class="relative">
                            <input type="text" placeholder="Search..." class="w-64 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <i class="fas fa-search absolute right-3 top-3 text-gray-400"></i>
                        </div>
                        <div class="flex items-center space-x-2">
                            <img src="https://via.placeholder.com/40" alt="Admin" class="w-8 h-8 rounded-full">
                            <span class="text-gray-700 font-medium">Admin User</span>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Content Area -->
            <main class="flex-1 overflow-y-auto p-6">
                <!-- Overview Section -->
                <div id="overview-section" class="admin-section">
                    <!-- KPI Widgets -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                        <!-- Users Widget -->
                        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-blue-500">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm font-medium text-gray-600">Total Users</p>
                                    <p class="text-3xl font-bold text-gray-900" id="total-users">1,234</p>
                                    <p class="text-sm text-green-600">+12% from last week</p>
                                </div>
                                <div class="bg-blue-100 p-3 rounded-full">
                                    <i class="fas fa-users text-blue-600 text-xl"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Prayer Coverage Widget -->
                        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-green-500">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm font-medium text-gray-600">Prayer Coverage</p>
                                    <p class="text-3xl font-bold text-gray-900" id="prayer-cities">156</p>
                                    <p class="text-sm text-green-600">Cities with cached times</p>
                                </div>
                                <div class="bg-green-100 p-3 rounded-full">
                                    <i class="fas fa-mosque text-green-600 text-xl"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Quran Engagement Widget -->
                        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-purple-500">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm font-medium text-gray-600">Quran Engagement</p>
                                    <p class="text-3xl font-bold text-gray-900" id="quran-sessions">2,847</p>
                                    <p class="text-sm text-green-600">Surahs viewed today</p>
                                </div>
                                <div class="bg-purple-100 p-3 rounded-full">
                                    <i class="fas fa-book-quran text-purple-600 text-xl"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Community Activity Widget -->
                        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-orange-500">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm font-medium text-gray-600">Community</p>
                                    <p class="text-3xl font-bold text-gray-900" id="community-posts">89</p>
                                    <p class="text-sm text-green-600">New posts today</p>
                                </div>
                                <div class="bg-orange-100 p-3 rounded-full">
                                    <i class="fas fa-comments text-orange-600 text-xl"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Charts Row -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                        <!-- User Activity Chart -->
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">User Activity (7 Days)</h3>
                            <canvas id="userActivityChart" width="400" height="200"></canvas>
                        </div>

                        <!-- Feature Usage Chart -->
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Feature Usage</h3>
                            <canvas id="featureUsageChart" width="400" height="200"></canvas>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Quick Actions</h3>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <button class="quick-action-btn bg-blue-500 hover:bg-blue-600 text-white px-4 py-3 rounded-lg transition-colors">
                                <i class="fas fa-plus mr-2"></i>Add Dua
                            </button>
                            <button class="quick-action-btn bg-green-500 hover:bg-green-600 text-white px-4 py-3 rounded-lg transition-colors">
                                <i class="fas fa-plus mr-2"></i>Add Sermon
                            </button>
                            <button class="quick-action-btn bg-purple-500 hover:bg-purple-600 text-white px-4 py-3 rounded-lg transition-colors">
                                <i class="fas fa-plus mr-2"></i>New Campaign
                            </button>
                            <button class="quick-action-btn bg-red-500 hover:bg-red-600 text-white px-4 py-3 rounded-lg transition-colors">
                                <i class="fas fa-flag mr-2"></i>Moderate Reports
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Other sections will be loaded dynamically -->
                <div id="dynamic-content"></div>
            </main>
        </div>
    </div>

    <style>
        .admin-nav-item {
            display: block;
            padding: 12px 24px;
            color: #cbd5e0;
            text-decoration: none;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
        }

        .admin-nav-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
        }

        .admin-nav-item.active {
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            border-left-color: #60a5fa;
        }

        .admin-section {
            display: none;
        }

        .admin-section.active {
            display: block;
        }
    </style>

    <script>
        // Navigation functionality
        document.addEventListener('DOMContentLoaded', function() {
            const navItems = document.querySelectorAll('.admin-nav-item');
            const sections = document.querySelectorAll('.admin-section');
            const pageTitle = document.getElementById('page-title');
            const dynamicContent = document.getElementById('dynamic-content');

            navItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Remove active class from all nav items and sections
                    navItems.forEach(nav => nav.classList.remove('active'));
                    sections.forEach(section => section.classList.remove('active'));
                    
                    // Add active class to clicked nav item
                    this.classList.add('active');
                    
                    // Show corresponding section or redirect to management page
                    const section = this.dataset.section;
                    if (section === 'overview') {
                        document.getElementById('overview-section').classList.add('active');
                        pageTitle.textContent = 'Admin Dashboard';
                    } else {
                        // Redirect to the management page
                        window.location.href = `/admin/${section}-management`;
                    }
                });
            });

            // Initialize charts
            initializeCharts();
        });

        function loadSection(section) {
            // Hide all sections
            document.querySelectorAll('.admin-section').forEach(s => s.classList.remove('active'));
            
            // Show loading
            dynamicContent.innerHTML = `
                <div class="flex items-center justify-center h-64">
                    <div class="text-center">
                        <i class="fas fa-spinner fa-spin text-4xl text-blue-500 mb-4"></i>
                        <p class="text-gray-600">Loading ${section} management...</p>
                    </div>
                </div>
            `;
            
            // Load specific section content
            setTimeout(() => {
                loadSectionContent(section);
            }, 500);
        }

        function loadSectionContent(section) {
            let content = '';
            
            switch(section) {
                case 'users':
                    content = `
                        <div class="admin-section active" id="users-section">
                            <!-- Users & Roles Management Section -->
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
                                <p class="text-gray-600">Comprehensive user management with roles, permissions, and analytics.</p>
                            </div>
                        </div>
                    `;
                    break;
                case 'duas':
                    content = `
                        <div class="admin-section active" id="duas-section">
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
                                    </div>
                                </div>
                                <p class="text-gray-600">Manage duas, categories, audio files, and analytics.</p>
                            </div>
                        </div>
                    `;
                    break;
                case 'community':
                    content = `
                        <div class="admin-section active" id="community-section">
                            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                                <div class="flex items-center justify-between mb-6">
                                    <h3 class="text-xl font-semibold text-gray-800">Community Management</h3>
                                    <div class="flex items-center space-x-4">
                                        <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-medium">12 Pending Reports</span>
                                        <button onclick="refreshReports()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                                            <i class="fas fa-sync-alt mr-2"></i>Refresh
                                        </button>
                                    </div>
                                </div>
                                <p class="text-gray-600">Moderate community content, handle reports, and manage user strikes.</p>
                            </div>
                        </div>
                    `;
                    break;
                case 'prayer':
                    content = `
                        <div class="admin-section active" id="prayer-section">
                            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                                <h3 class="text-xl font-semibold text-gray-800">Prayer Settings</h3>
                                <p class="text-gray-600">Configure calculation methods, madhab defaults, and geo rules.</p>
                                <div class="mt-4">
                                    <button onclick="loadFullSection('prayer')" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                                        <i class="fas fa-cog mr-2"></i>Manage Prayer Settings
                                    </button>
                                </div>
                            </div>
                        </div>
                    `;
                    break;
                case 'quran':
                    content = `
                        <div class="admin-section active" id="quran-section">
                            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                                <h3 class="text-xl font-semibold text-gray-800">Quran Management</h3>
                                <p class="text-gray-600">Manage surahs, translations, reciters, and tafsir sources.</p>
                                <div class="mt-4">
                                    <button onclick="loadFullSection('quran')" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                                        <i class="fas fa-book-quran mr-2"></i>Manage Quran Content
                                    </button>
                                </div>
                            </div>
                        </div>
                    `;
                    break;
                case 'tasbih':
                    content = `
                        <div class="admin-section active" id="tasbih-section">
                            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                                <h3 class="text-xl font-semibold text-gray-800">Tasbih Management</h3>
                                <p class="text-gray-600">Manage presets, analytics, and user activity.</p>
                                <div class="mt-4">
                                    <button onclick="loadFullSection('tasbih')" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                                        <i class="fas fa-circle mr-2"></i>Manage Tasbih Presets
                                    </button>
                                </div>
                            </div>
                        </div>
                    `;
                    break;
                case 'wazifa':
                    content = `
                        <div class="admin-section active" id="wazifa-section">
                            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                                <h3 class="text-xl font-semibold text-gray-800">Wazifa Management</h3>
                                <p class="text-gray-600">Manage daily/weekly wazifas and analytics.</p>
                                <div class="mt-4">
                                    <button onclick="loadFullSection('wazifa')" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                                        <i class="fas fa-star mr-2"></i>Manage Wazifas
                                    </button>
                                </div>
                            </div>
                        </div>
                    `;
                    break;
                case 'lazim':
                    content = `
                        <div class="admin-section active" id="lazim-section">
                            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                                <h3 class="text-xl font-semibold text-gray-800">Lazim Templates</h3>
                                <p class="text-gray-600">Manage personal routine templates and insights.</p>
                                <div class="mt-4">
                                    <button onclick="loadFullSection('lazim')" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                                        <i class="fas fa-clock mr-2"></i>Manage Templates
                                    </button>
                                </div>
                            </div>
                        </div>
                    `;
                    break;
                case 'zikr':
                    content = `
                        <div class="admin-section active" id="zikr-section">
                            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                                <h3 class="text-xl font-semibold text-gray-800">Zikr Jumma</h3>
                                <p class="text-gray-600">Manage Friday content and banners.</p>
                                <div class="mt-4">
                                    <button onclick="loadFullSection('zikr')" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                                        <i class="fas fa-mosque mr-2"></i>Manage Friday Content
                                    </button>
                                </div>
                            </div>
                        </div>
                    `;
                    break;
                case 'journal':
                    content = `
                        <div class="admin-section active" id="journal-section">
                            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                                <h3 class="text-xl font-semibold text-gray-800">Journal Analytics</h3>
                                <p class="text-gray-600">Privacy-focused user insights and analytics.</p>
                                <div class="mt-4">
                                    <button onclick="loadFullSection('journal')" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                                        <i class="fas fa-book mr-2"></i>View Analytics
                                    </button>
                                </div>
                            </div>
                        </div>
                    `;
                    break;
                case 'scholars':
                    content = `
                        <div class="admin-section active" id="scholars-section">
                            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                                <h3 class="text-xl font-semibold text-gray-800">Scholars Management</h3>
                                <p class="text-gray-600">Manage scholar profiles, sermons, and content verification.</p>
                                <div class="mt-4">
                                    <button onclick="loadFullSection('scholars')" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                                        <i class="fas fa-user-graduate mr-2"></i>Manage Scholars
                                    </button>
                                </div>
                            </div>
                        </div>
                    `;
                    break;
                case 'mosques':
                    content = `
                        <div class="admin-section active" id="mosques-section">
                            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                                <h3 class="text-xl font-semibold text-gray-800">Mosques Management</h3>
                                <p class="text-gray-600">Manage mosque directory, verification, and events.</p>
                                <div class="mt-4">
                                    <button onclick="loadFullSection('mosques')" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                                        <i class="fas fa-mosque mr-2"></i>Manage Mosques
                                    </button>
                                </div>
                            </div>
                        </div>
                    `;
                    break;
                case 'makkah':
                    content = `
                        <div class="admin-section active" id="makkah-section">
                            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                                <h3 class="text-xl font-semibold text-gray-800">Makkah Live</h3>
                                <p class="text-gray-600">Manage live streams and overlays.</p>
                                <div class="mt-4">
                                    <button onclick="loadFullSection('makkah')" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                                        <i class="fas fa-tv mr-2"></i>Manage Streams
                                    </button>
                                </div>
                            </div>
                        </div>
                    `;
                    break;
                case 'ai-noor':
                    content = `
                        <div class="admin-section active" id="ai-noor-section">
                            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                                <h3 class="text-xl font-semibold text-gray-800">AI Noor Management</h3>
                                <p class="text-gray-600">Manage knowledge packs, safety policies, and AI feedback.</p>
                                <div class="mt-4">
                                    <button onclick="loadFullSection('ai-noor')" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                                        <i class="fas fa-robot mr-2"></i>Manage AI Noor
                                    </button>
                                </div>
                            </div>
                        </div>
                    `;
                    break;
                case 'system':
                    content = `
                        <div class="admin-section active" id="system-section">
                            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                                <h3 class="text-xl font-semibold text-gray-800">System Management</h3>
                                <p class="text-gray-600">System health, cache management, and feature flags.</p>
                                <div class="mt-4">
                                    <button onclick="loadFullSection('system')" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                                        <i class="fas fa-cog mr-2"></i>System Settings
                                    </button>
                                </div>
                            </div>
                        </div>
                    `;
                    break;
                default:
                    content = `
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-6">${section.charAt(0).toUpperCase() + section.slice(1)} Management</h2>
                            <p class="text-gray-600">This section is under development. Full functionality will be available soon.</p>
                        </div>
                    `;
            }
            
            dynamicContent.innerHTML = content;
        }

        function initializeCharts() {
            // User Activity Chart
            const userActivityCtx = document.getElementById('userActivityChart').getContext('2d');
            new Chart(userActivityCtx, {
                type: 'line',
                data: {
                    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                    datasets: [{
                        label: 'Active Users',
                        data: [65, 59, 80, 81, 56, 55, 40],
                        borderColor: 'rgb(59, 130, 246)',
                        backgroundColor: 'rgba(59, 130, 246, 0.1)',
                        tension: 0.4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            });

            // Feature Usage Chart
            const featureUsageCtx = document.getElementById('featureUsageChart').getContext('2d');
            new Chart(featureUsageCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Prayer Times', 'Quran', 'Duas', 'Tasbih', 'Community'],
                    datasets: [{
                        data: [35, 25, 20, 15, 5],
                        backgroundColor: [
                            'rgb(59, 130, 246)',
                            'rgb(16, 185, 129)',
                            'rgb(245, 158, 11)',
                            'rgb(239, 68, 68)',
                            'rgb(139, 92, 246)'
                        ]
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            });
        }

        // Admin Action Functions
        function inviteUser() {
            const email = prompt('Enter user email:');
            if (email) {
                console.log('Invite user:', email);
                // In real app, this would make an API call
            }
        }

        function exportUsers() {
            console.log('Export users to CSV');
            // In real app, this would trigger a download
        }

        function addDua() {
            console.log('Add new dua');
            // In real app, this would open a modal or redirect
        }

        function importDuas() {
            console.log('Import duas from CSV');
            // In real app, this would open file upload dialog
        }

        function refreshReports() {
            console.log('Refresh reports');
            // In real app, this would reload the reports data
        }

        // Load full management sections
        function loadFullSection(section) {
            console.log('Loading section:', section);
            
            // Hide current content
            const dynamicContent = document.getElementById('dynamic-content');
            dynamicContent.innerHTML = '<div class="flex justify-center items-center h-64"><div class="animate-spin rounded-full h-12 w-12 border-b-2 border-blue-500"></div></div>';
            
            // Load the full section content
            fetch(`/admin/${section}-management`, {
                method: 'GET',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
                    'Content-Type': 'text/html; charset=UTF-8'
                },
                credentials: 'same-origin'
            })
            .then(response => {
                console.log('Response status:', response.status);
                console.log('Response headers:', response.headers);
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                return response.text();
            })
            .then(html => {
                console.log('HTML received, length:', html.length);
                console.log('HTML preview:', html.substring(0, 200));
                dynamicContent.innerHTML = html;
            })
            .catch(error => {
                console.error('Error loading section:', error);
                dynamicContent.innerHTML = `
                    <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                        <p class="text-red-600">Error loading section: ${error.message}</p>
                        <p class="text-sm text-gray-600 mt-2">Check console for details</p>
                    </div>
                `;
            });
        }
    </script>
</body>
</html>