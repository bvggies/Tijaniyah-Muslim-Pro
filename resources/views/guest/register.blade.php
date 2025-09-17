<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div class="slide-in-left">
                <h2 class="text-3xl font-bold bg-gradient-to-r from-emerald-600 to-teal-600 bg-clip-text text-transparent">
                    <i class="fas fa-user-plus mr-3"></i>Create Your Account
                </h2>
                <p class="text-gray-600 mt-1">Join our Islamic community and access all features</p>
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
                <!-- Registration Form -->
                <div class="bg-white rounded-2xl shadow-xl p-8">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Sign Up</h3>
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                                <input type="text" class="w-full p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-transparent" placeholder="Enter first name">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                                <input type="text" class="w-full p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-transparent" placeholder="Enter last name">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                            <input type="email" class="w-full p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-transparent" placeholder="Enter your email">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                            <input type="password" class="w-full p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-transparent" placeholder="Create a password">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Confirm Password</label>
                            <input type="password" class="w-full p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-transparent" placeholder="Confirm your password">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Country</label>
                            <select class="w-full p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                                <option value="">Select your country</option>
                                <option value="saudi">Saudi Arabia</option>
                                <option value="uae">United Arab Emirates</option>
                                <option value="usa">United States</option>
                                <option value="uk">United Kingdom</option>
                                <option value="canada">Canada</option>
                                <option value="australia">Australia</option>
                                <option value="pakistan">Pakistan</option>
                                <option value="india">India</option>
                                <option value="bangladesh">Bangladesh</option>
                                <option value="indonesia">Indonesia</option>
                                <option value="malaysia">Malaysia</option>
                                <option value="turkey">Turkey</option>
                                <option value="egypt">Egypt</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" class="h-4 w-4 text-emerald-600 focus:ring-emerald-500 border-gray-300 rounded">
                            <label class="ml-2 text-sm text-gray-600">I agree to the <a href="#" class="text-emerald-600 hover:text-emerald-700">Terms of Service</a> and <a href="#" class="text-emerald-600 hover:text-emerald-700">Privacy Policy</a></label>
                        </div>
                        <button type="submit" class="w-full bg-gradient-to-r from-emerald-500 to-teal-600 hover:from-emerald-600 hover:to-teal-700 text-white font-semibold py-4 px-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                            <i class="fas fa-user-plus mr-2"></i>Create Account
                        </button>
                    </form>
                    
                    <div class="mt-6 text-center">
                        <p class="text-gray-600">Already have an account? <a href="{{ route('guest.login') }}" class="text-emerald-600 hover:text-emerald-700 font-semibold">Sign in here</a></p>
                    </div>
                </div>

                <!-- Benefits -->
                <div class="bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl p-8">
                    <h3 class="text-2xl font-bold text-emerald-900 mb-6">Why join Tijaniyah Muslim Pro?</h3>
                    
                    <div class="space-y-6">
                        <div class="bg-white rounded-xl p-6 shadow-lg">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-emerald-500 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-book-quran text-white text-xl"></i>
                                </div>
                                <h4 class="text-lg font-bold text-emerald-900">Complete Islamic Library</h4>
                            </div>
                            <p class="text-emerald-700">Access the complete Quran with translations, Hadith collections, and Islamic literature.</p>
                        </div>

                        <div class="bg-white rounded-xl p-6 shadow-lg">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-blue-500 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-users text-white text-xl"></i>
                                </div>
                                <h4 class="text-lg font-bold text-emerald-900">Global Community</h4>
                            </div>
                            <p class="text-emerald-700">Connect with Muslims worldwide, share experiences, and learn from each other.</p>
                        </div>

                        <div class="bg-white rounded-xl p-6 shadow-lg">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-purple-500 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-user-graduate text-white text-xl"></i>
                                </div>
                                <h4 class="text-lg font-bold text-emerald-900">Islamic Scholars</h4>
                            </div>
                            <p class="text-emerald-700">Learn from renowned Islamic scholars and access their teachings and guidance.</p>
                        </div>

                        <div class="bg-white rounded-xl p-6 shadow-lg">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-orange-500 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-mobile-alt text-white text-xl"></i>
                                </div>
                                <h4 class="text-lg font-bold text-emerald-900">Mobile Friendly</h4>
                            </div>
                            <p class="text-emerald-700">Access all features on any device, anywhere, anytime. Your Islamic companion on the go.</p>
                        </div>
                    </div>

                    <div class="mt-8 bg-gradient-to-r from-emerald-500 to-teal-600 rounded-xl p-6 text-white text-center">
                        <h4 class="text-xl font-bold mb-2">100% Free</h4>
                        <p class="text-emerald-100">No hidden fees, no premium subscriptions. All features are completely free for the Muslim community.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
