<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div class="slide-in-left">
                <h2 class="text-3xl font-bold bg-gradient-to-r from-cyan-600 to-cyan-800 bg-clip-text text-transparent">
                    <i class="fas fa-users mr-3"></i>Community
                </h2>
                <p class="text-gray-600 mt-1">Connect with fellow Muslims</p>
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
            <div class="bg-white rounded-2xl shadow-xl p-8 text-center">
                <i class="fas fa-users text-6xl text-cyan-500 mb-4"></i>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Community Forum</h3>
                <p class="text-gray-600 mb-6">Connect with Muslims worldwide, share experiences, and learn together.</p>
                <button class="bg-gradient-to-r from-cyan-500 to-cyan-600 hover:from-cyan-600 hover:to-cyan-700 text-white font-semibold py-3 px-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                    <i class="fas fa-comments mr-2"></i>Join Discussion
                </button>
            </div>
        </div>
    </div>
</x-app-layout>
