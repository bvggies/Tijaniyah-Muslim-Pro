<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div class="slide-in-left">
                <h2 class="text-3xl font-bold bg-gradient-to-r from-emerald-600 to-teal-600 bg-clip-text text-transparent">
                    <i class="fas fa-sign-in-alt mr-3"></i>Login to Tijaniyah Muslim Pro
                </h2>
                <p class="text-gray-600 mt-1">Access all Islamic features and community</p>
            </div>
            <div class="slide-in-right">
                <a href="{{ route('guest-dashboard') }}" class="bg-gradient-to-r from-gray-500 to-gray-600 hover:from-gray-600 hover:to-gray-700 text-white font-semibold py-3 px-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-arrow-left mr-2"></i>Back to Guest Dashboard
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Login Form -->
                <div class="bg-white rounded-2xl shadow-xl p-8">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Sign In</h3>
                    <form class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                            <input type="email" class="w-full p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-transparent" placeholder="Enter your email">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                            <input type="password" class="w-full p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-transparent" placeholder="Enter your password">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input type="checkbox" class="h-4 w-4 text-emerald-600 focus:ring-emerald-500 border-gray-300 rounded">
                                <label class="ml-2 text-sm text-gray-600">Remember me</label>
                            </div>
                            <a href="#" class="text-sm text-emerald-600 hover:text-emerald-700">Forgot password?</a>
                        </div>
                        <button type="submit" class="w-full bg-gradient-to-r from-emerald-500 to-teal-600 hover:from-emerald-600 hover:to-teal-700 text-white font-semibold py-4 px-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                            <i class="fas fa-sign-in-alt mr-2"></i>Sign In
                        </button>
                    </form>
                    
                    <!-- Demo Login -->
                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <p class="text-center text-gray-600 mb-4">Or try the demo</p>
                        <a href="{{ route('temp-login') }}" class="w-full bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-semibold py-4 px-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 block text-center">
                            <i class="fas fa-play mr-2"></i>Try Demo Login
                        </a>
                    </div>
                </div>

                <!-- Features Preview -->
                <div class="bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl p-8">
                    <h3 class="text-2xl font-bold text-emerald-900 mb-6">What you get with full access:</h3>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-emerald-500 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-check text-white text-sm"></i>
                            </div>
                            <span class="text-emerald-800">Complete Quran with translations and bookmarks</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-emerald-500 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-check text-white text-sm"></i>
                            </div>
                            <span class="text-emerald-800">Digital Tasbih counter with history tracking</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-emerald-500 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-check text-white text-sm"></i>
                            </div>
                            <span class="text-emerald-800">Complete Wazifa and Dua collections</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-emerald-500 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-check text-white text-sm"></i>
                            </div>
                            <span class="text-emerald-800">Islamic Journal for personal reflections</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-emerald-500 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-check text-white text-sm"></i>
                            </div>
                            <span class="text-emerald-800">Community features and discussions</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-emerald-500 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-check text-white text-sm"></i>
                            </div>
                            <span class="text-emerald-800">Scholars directory and Islamic content</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-emerald-500 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-check text-white text-sm"></i>
                            </div>
                            <span class="text-emerald-800">Mosque finder and community events</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-emerald-500 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-check text-white text-sm"></i>
                            </div>
                            <span class="text-emerald-800">AI Noor for Islamic guidance</span>
                        </div>
                    </div>
                    
                    <div class="mt-8 text-center">
                        <p class="text-emerald-700 mb-4">Don't have an account?</p>
                        <a href="{{ route('guest.register') }}" class="bg-gradient-to-r from-emerald-500 to-teal-600 hover:from-emerald-600 hover:to-teal-700 text-white font-semibold py-3 px-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 inline-block">
                            <i class="fas fa-user-plus mr-2"></i>Create Account
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
