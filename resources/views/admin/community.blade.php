<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div class="slide-in-left">
                <h2 class="text-3xl font-bold bg-gradient-to-r from-cyan-600 to-cyan-800 bg-clip-text text-transparent">
                    <i class="fas fa-users mr-3"></i>Manage Community
                </h2>
                <p class="text-gray-600 mt-1">Moderate community content and discussions</p>
            </div>
            <div class="slide-in-right">
                <a href="{{ route('admin.dashboard') }}" class="bg-gradient-to-r from-gray-500 to-gray-600 hover:from-gray-600 hover:to-gray-700 text-white font-semibold py-3 px-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-arrow-left mr-2"></i>Back to Admin
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Community Stats -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <div class="bg-gradient-to-br from-cyan-50 to-cyan-100 rounded-2xl p-6 shadow-lg">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-cyan-600 text-sm font-medium">Total Posts</p>
                            <p class="text-3xl font-bold text-cyan-800">2,456</p>
                        </div>
                        <div class="w-12 h-12 bg-cyan-500 rounded-xl flex items-center justify-center">
                            <i class="fas fa-comments text-white text-xl"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-6 shadow-lg">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-green-600 text-sm font-medium">Active Users</p>
                            <p class="text-3xl font-bold text-green-800">1,234</p>
                        </div>
                        <div class="w-12 h-12 bg-green-500 rounded-xl flex items-center justify-center">
                            <i class="fas fa-user-check text-white text-xl"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-2xl p-6 shadow-lg">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-yellow-600 text-sm font-medium">Pending Moderation</p>
                            <p class="text-3xl font-bold text-yellow-800">23</p>
                        </div>
                        <div class="w-12 h-12 bg-yellow-500 rounded-xl flex items-center justify-center">
                            <i class="fas fa-clock text-white text-xl"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-2xl p-6 shadow-lg">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-red-600 text-sm font-medium">Reported Content</p>
                            <p class="text-3xl font-bold text-red-800">7</p>
                        </div>
                        <div class="w-12 h-12 bg-red-500 rounded-xl flex items-center justify-center">
                            <i class="fas fa-flag text-white text-xl"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Posts -->
            <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">
                    <i class="fas fa-comments mr-2"></i>Recent Community Posts
                </h3>
                <div class="space-y-4">
                    <!-- Post 1 -->
                    <div class="bg-gradient-to-r from-cyan-50 to-cyan-100 rounded-xl p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-cyan-500 rounded-full flex items-center justify-center">
                                    <span class="text-white font-bold">A</span>
                                </div>
                                <div class="ml-4">
                                    <h4 class="font-bold text-cyan-900">Ahmad Hassan</h4>
                                    <p class="text-cyan-700 text-sm">2 hours ago</p>
                                </div>
                            </div>
                            <div class="flex gap-2">
                                <button class="text-green-600 hover:text-green-800">
                                    <i class="fas fa-check"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-800">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <p class="text-cyan-800 mb-4">"Alhamdulillah, the prayer times feature is so accurate! It has really helped me stay consistent with my prayers."</p>
                        <div class="flex gap-4 text-sm text-cyan-600">
                            <span><i class="fas fa-thumbs-up mr-1"></i>12 likes</span>
                            <span><i class="fas fa-comment mr-1"></i>3 comments</span>
                        </div>
                    </div>

                    <!-- Post 2 -->
                    <div class="bg-gradient-to-r from-green-50 to-green-100 rounded-xl p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center">
                                    <span class="text-white font-bold">F</span>
                                </div>
                                <div class="ml-4">
                                    <h4 class="font-bold text-green-900">Fatima Ali</h4>
                                    <p class="text-green-700 text-sm">4 hours ago</p>
                                </div>
                            </div>
                            <div class="flex gap-2">
                                <button class="text-green-600 hover:text-green-800">
                                    <i class="fas fa-check"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-800">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <p class="text-green-800 mb-4">"The Quran reader with bookmarks is amazing! I can now easily continue reading from where I left off."</p>
                        <div class="flex gap-4 text-sm text-green-600">
                            <span><i class="fas fa-thumbs-up mr-1"></i>8 likes</span>
                            <span><i class="fas fa-comment mr-1"></i>1 comment</span>
                        </div>
                    </div>

                    <!-- Post 3 -->
                    <div class="bg-gradient-to-r from-yellow-50 to-yellow-100 rounded-xl p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-yellow-500 rounded-full flex items-center justify-center">
                                    <span class="text-white font-bold">M</span>
                                </div>
                                <div class="ml-4">
                                    <h4 class="font-bold text-yellow-900">Muhammad Yusuf</h4>
                                    <p class="text-yellow-700 text-sm">6 hours ago</p>
                                </div>
                            </div>
                            <div class="flex gap-2">
                                <button class="text-green-600 hover:text-green-800">
                                    <i class="fas fa-check"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-800">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <p class="text-yellow-800 mb-4">"Barakallahu feeki for creating such a beautiful Islamic app. May Allah reward you abundantly!"</p>
                        <div class="flex gap-4 text-sm text-yellow-600">
                            <span><i class="fas fa-thumbs-up mr-1"></i>15 likes</span>
                            <span><i class="fas fa-comment mr-1"></i>5 comments</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Community Guidelines -->
            <div class="bg-white rounded-2xl shadow-xl p-8">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">
                    <i class="fas fa-gavel mr-2"></i>Community Guidelines
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6">
                        <h4 class="text-lg font-bold text-blue-900 mb-4">Posting Rules</h4>
                        <ul class="space-y-2 text-blue-800 text-sm">
                            <li>• Keep posts respectful and Islamic</li>
                            <li>• No inappropriate content</li>
                            <li>• Avoid political discussions</li>
                            <li>• Use appropriate language</li>
                        </ul>
                    </div>
                    <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6">
                        <h4 class="text-lg font-bold text-green-900 mb-4">Moderation Actions</h4>
                        <ul class="space-y-2 text-green-800 text-sm">
                            <li>• Approve appropriate posts</li>
                            <li>• Remove inappropriate content</li>
                            <li>• Warn users for violations</li>
                            <li>• Ban repeat offenders</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
