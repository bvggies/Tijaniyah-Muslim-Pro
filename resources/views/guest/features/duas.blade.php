<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div class="slide-in-left">
                <h2 class="text-3xl font-bold bg-gradient-to-r from-purple-600 to-purple-800 bg-clip-text text-transparent">
                    <i class="fas fa-hands mr-3"></i>Daily Duas (Guest Access)
                </h2>
                <p class="text-gray-600 mt-1">Essential daily prayers and supplications</p>
            </div>
            <div class="slide-in-right">
                <a href="{{ route('guest-dashboard') }}" class="bg-gradient-to-r from-gray-500 to-gray-600 hover:from-gray-600 hover:to-gray-700 text-white font-semibold py-3 px-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-arrow-left mr-2"></i>Back to Dashboard
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Guest Limitation Notice -->
            <div class="bg-gradient-to-r from-yellow-50 to-orange-50 border-l-4 border-yellow-400 p-6 mb-8 rounded-r-xl">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <i class="fas fa-info-circle text-yellow-400 text-2xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-yellow-800">Guest Access - Limited Duas</h3>
                        <p class="text-yellow-700 mt-1">You're viewing basic daily duas. <a href="{{ route('guest.login') }}" class="font-semibold underline hover:text-yellow-800">Login</a> for complete dua collections, audio recitations, and personalized favorites.</p>
                    </div>
                </div>
            </div>

            <!-- Basic Daily Duas -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                <!-- Morning Duas -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 shadow-lg">
                    <h3 class="text-2xl font-bold text-blue-900 mb-6">
                        <i class="fas fa-sun mr-3"></i>Morning Duas
                    </h3>
                    <div class="space-y-6">
                        <div class="bg-white rounded-xl p-6">
                            <h4 class="text-lg font-bold text-blue-800 mb-3">Upon Waking Up</h4>
                            <p class="text-blue-700 mb-3 arabic-text text-right">الْحَمْدُ لِلَّهِ الَّذِي أَحْيَانَا بَعْدَ مَا أَمَاتَنَا وَإِلَيْهِ النُّشُورُ</p>
                            <p class="text-blue-600 text-sm italic">"Praise be to Allah who gave us life after death and to Him is the return."</p>
                        </div>
                        <div class="bg-white rounded-xl p-6">
                            <h4 class="text-lg font-bold text-blue-800 mb-3">Before Leaving Home</h4>
                            <p class="text-blue-700 mb-3 arabic-text text-right">بِسْمِ اللَّهِ تَوَكَّلْتُ عَلَى اللَّهِ وَلَا حَوْلَ وَلَا قُوَّةَ إِلَّا بِاللَّهِ</p>
                            <p class="text-blue-600 text-sm italic">"In the name of Allah, I place my trust in Allah, and there is no power or strength except with Allah."</p>
                        </div>
                    </div>
                </div>

                <!-- Evening Duas -->
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-8 shadow-lg">
                    <h3 class="text-2xl font-bold text-purple-900 mb-6">
                        <i class="fas fa-moon mr-3"></i>Evening Duas
                    </h3>
                    <div class="space-y-6">
                        <div class="bg-white rounded-xl p-6">
                            <h4 class="text-lg font-bold text-purple-800 mb-3">Before Sleeping</h4>
                            <p class="text-purple-700 mb-3 arabic-text text-right">بِاسْمِكَ رَبِّي وَضَعْتُ جَنْبِي وَبِكَ أَرْفَعُهُ</p>
                            <p class="text-purple-600 text-sm italic">"In Your name, my Lord, I lie down and in Your name I rise."</p>
                        </div>
                        <div class="bg-white rounded-xl p-6">
                            <h4 class="text-lg font-bold text-purple-800 mb-3">Before Eating</h4>
                            <p class="text-purple-700 mb-3 arabic-text text-right">بِسْمِ اللَّهِ</p>
                            <p class="text-purple-600 text-sm italic">"In the name of Allah."</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Prayer Duas -->
            <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8 mb-8 shadow-lg">
                <h3 class="text-2xl font-bold text-green-900 mb-6 text-center">
                    <i class="fas fa-mosque mr-3"></i>Essential Prayer Duas
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white rounded-xl p-6 text-center">
                        <h4 class="text-lg font-bold text-green-800 mb-3">Opening Dua</h4>
                        <p class="text-green-700 mb-3 arabic-text text-right">سُبْحَانَكَ اللَّهُمَّ وَبِحَمْدِكَ</p>
                        <p class="text-green-600 text-sm italic">"Glory be to You, O Allah, and praise be to You."</p>
                    </div>
                    <div class="bg-white rounded-xl p-6 text-center">
                        <h4 class="text-lg font-bold text-green-800 mb-3">Ruku Dua</h4>
                        <p class="text-green-700 mb-3 arabic-text text-right">سُبْحَانَ رَبِّيَ الْعَظِيمِ</p>
                        <p class="text-green-600 text-sm italic">"Glory be to my Lord, the Great."</p>
                    </div>
                    <div class="bg-white rounded-xl p-6 text-center">
                        <h4 class="text-lg font-bold text-green-800 mb-3">Sujood Dua</h4>
                        <p class="text-green-700 mb-3 arabic-text text-right">سُبْحَانَ رَبِّيَ الْأَعْلَى</p>
                        <p class="text-green-600 text-sm italic">"Glory be to my Lord, the Most High."</p>
                    </div>
                </div>
            </div>

            <!-- Upgrade Notice -->
            <div class="bg-gradient-to-r from-gray-800 to-gray-900 rounded-2xl p-8 text-white">
                <div class="text-center">
                    <h3 class="text-2xl font-bold mb-4">
                        <i class="fas fa-crown mr-3 text-yellow-400"></i>Get Complete Dua Collections
                    </h3>
                    <p class="text-gray-300 mb-6">Login to access hundreds of authentic duas with audio recitations, translations, and personalized favorites.</p>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gray-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-book text-white text-2xl"></i>
                            </div>
                            <h4 class="font-bold mb-2">Complete Collection</h4>
                            <p class="text-gray-300 text-sm">Hundreds of authentic duas</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gray-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-volume-up text-white text-2xl"></i>
                            </div>
                            <h4 class="font-bold mb-2">Audio Recitations</h4>
                            <p class="text-gray-300 text-sm">Listen to proper pronunciation</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gray-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-heart text-white text-2xl"></i>
                            </div>
                            <h4 class="font-bold mb-2">Favorites</h4>
                            <p class="text-gray-300 text-sm">Save your favorite duas</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gray-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-search text-white text-2xl"></i>
                            </div>
                            <h4 class="font-bold mb-2">Search & Categories</h4>
                            <p class="text-gray-300 text-sm">Find duas by topic or situation</p>
                        </div>
                    </div>
                    <div class="flex justify-center gap-4">
                        <a href="{{ route('guest.login') }}" class="bg-gradient-to-r from-emerald-500 to-teal-600 hover:from-emerald-600 hover:to-teal-700 text-white font-semibold py-4 px-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                            <i class="fas fa-sign-in-alt mr-2"></i>Login Now
                        </a>
                        <a href="{{ route('guest.register') }}" class="bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-semibold py-4 px-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                            <i class="fas fa-user-plus mr-2"></i>Create Account
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
