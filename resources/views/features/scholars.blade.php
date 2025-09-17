<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div class="slide-in-left">
                <h2 class="text-3xl font-bold bg-gradient-to-r from-red-600 to-red-800 bg-clip-text text-transparent">
                    <i class="fas fa-user-graduate mr-3"></i>Islamic Scholars
                </h2>
                <p class="text-gray-600 mt-1">Learn from renowned Islamic scholars</p>
            </div>
            <div class="slide-in-right">
                <a href="{{ route('dashboard') }}" class="bg-gradient-to-r from-gray-500 to-gray-600 hover:from-gray-600 hover:to-gray-700 text-white font-semibold py-3 px-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-arrow-left mr-2"></i>Back to Dashboard
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <div class="text-center">
                        <div class="w-24 h-24 bg-red-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                            <i class="fas fa-user text-white text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Sheikh Abdul Rahman</h3>
                        <p class="text-gray-600 mb-4">Quran Recitation Expert</p>
                        <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg">View Profile</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
