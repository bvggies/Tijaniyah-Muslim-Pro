<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div class="slide-in-left">
                <h2 class="text-3xl font-bold bg-gradient-to-r from-red-600 to-red-800 bg-clip-text text-transparent">
                    <i class="fas fa-user-graduate mr-3"></i>Manage Scholars
                </h2>
                <p class="text-gray-600 mt-1">Add and manage Islamic scholars</p>
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
            <!-- Add New Scholar -->
            <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">
                    <i class="fas fa-plus mr-2"></i>Add New Scholar
                </h3>
                <form class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Scholar Name</label>
                        <input type="text" class="w-full p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-transparent" placeholder="Enter scholar name">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Specialization</label>
                        <select class="w-full p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-transparent">
                            <option value="">Select specialization</option>
                            <option value="quran">Quran Recitation</option>
                            <option value="hadith">Hadith Studies</option>
                            <option value="fiqh">Islamic Jurisprudence</option>
                            <option value="tafsir">Quranic Exegesis</option>
                            <option value="arabic">Arabic Language</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Country</label>
                        <input type="text" class="w-full p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-transparent" placeholder="Enter country">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Language</label>
                        <select class="w-full p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-transparent">
                            <option value="">Select language</option>
                            <option value="arabic">Arabic</option>
                            <option value="english">English</option>
                            <option value="urdu">Urdu</option>
                            <option value="bengali">Bengali</option>
                            <option value="indonesian">Indonesian</option>
                        </select>
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Biography</label>
                        <textarea rows="4" class="w-full p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-transparent" placeholder="Enter scholar biography"></textarea>
                    </div>
                    <div class="md:col-span-2">
                        <button type="submit" class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white font-semibold py-4 px-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                            <i class="fas fa-save mr-2"></i>Add Scholar
                        </button>
                    </div>
                </form>
            </div>

            <!-- Existing Scholars -->
            <div class="bg-white rounded-2xl shadow-xl p-8">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">
                    <i class="fas fa-list mr-2"></i>Existing Scholars
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Scholar 1 -->
                    <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-xl p-6 shadow-lg">
                        <div class="flex items-center mb-4">
                            <div class="w-16 h-16 bg-red-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-user text-white text-2xl"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-bold text-red-900">Sheikh Abdul Rahman</h4>
                                <p class="text-red-700 text-sm">Quran Recitation Expert</p>
                            </div>
                        </div>
                        <p class="text-red-800 text-sm mb-4">Renowned scholar specializing in Quran recitation and Tajweed rules.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-red-600 text-sm">Saudi Arabia</span>
                            <div class="flex gap-2">
                                <button class="text-blue-600 hover:text-blue-800">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-800">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Scholar 2 -->
                    <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 shadow-lg">
                        <div class="flex items-center mb-4">
                            <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-user text-white text-2xl"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-bold text-green-900">Dr. Fatima Al-Zahra</h4>
                                <p class="text-green-700 text-sm">Hadith Studies</p>
                            </div>
                        </div>
                        <p class="text-green-800 text-sm mb-4">Expert in Hadith studies and Islamic jurisprudence.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-green-600 text-sm">Egypt</span>
                            <div class="flex gap-2">
                                <button class="text-blue-600 hover:text-blue-800">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-800">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Scholar 3 -->
                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6 shadow-lg">
                        <div class="flex items-center mb-4">
                            <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-user text-white text-2xl"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-bold text-blue-900">Imam Muhammad Ali</h4>
                                <p class="text-blue-700 text-sm">Islamic Jurisprudence</p>
                            </div>
                        </div>
                        <p class="text-blue-800 text-sm mb-4">Specialist in Fiqh and contemporary Islamic issues.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-blue-600 text-sm">Pakistan</span>
                            <div class="flex gap-2">
                                <button class="text-blue-600 hover:text-blue-800">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-800">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
