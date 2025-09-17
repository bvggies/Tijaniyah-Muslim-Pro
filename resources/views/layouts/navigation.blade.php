<nav x-data="{ open: false }" class="bg-white/90 backdrop-blur-md shadow-xl border-b border-white/20 sticky top-0 z-50">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center slide-in-left">
                    <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 group">
                        <div class="w-12 h-12 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-105">
                            <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                            </svg>
                        </div>
                        <div class="hidden sm:block">
                            <h1 class="text-xl font-bold bg-gradient-to-r from-emerald-600 to-teal-600 bg-clip-text text-transparent">
                                Tijaniyah Muslim Pro
                            </h1>
                            <p class="text-xs text-gray-500 font-medium">Islamic Community Platform</p>
                        </div>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-1 sm:-my-px sm:ms-10 sm:flex">
                    <a href="{{ route('dashboard') }}" 
                       class="px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 {{ request()->routeIs('dashboard') ? 'bg-emerald-100 text-emerald-700 shadow-md' : 'text-gray-600 hover:text-emerald-600 hover:bg-emerald-50' }}">
                        <i class="fas fa-home mr-2"></i>Dashboard
                    </a>
                    <a href="#" 
                       class="px-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-emerald-600 hover:bg-emerald-50 transition-all duration-300">
                        <i class="fas fa-quran mr-2"></i>Quran
                    </a>
                    <a href="#" 
                       class="px-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-emerald-600 hover:bg-emerald-50 transition-all duration-300">
                        <i class="fas fa-mosque mr-2"></i>Prayer Times
                    </a>
                    <a href="#" 
                       class="px-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-emerald-600 hover:bg-emerald-50 transition-all duration-300">
                        <i class="fas fa-users mr-2"></i>Community
                    </a>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6 slide-in-right">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-4 font-medium rounded-xl text-gray-700 bg-white/50 hover:bg-white hover:shadow-lg focus:outline-none transition-all duration-300 backdrop-blur-sm">
                            <div class="w-8 h-8 bg-gradient-to-br from-emerald-400 to-teal-500 rounded-full flex items-center justify-center text-white font-semibold text-sm mr-3">
                                {{ substr(session('temp_user.name', 'G'), 0, 1) }}
                            </div>
                            <div class="text-left">
                                <div class="font-semibold">{{ session('temp_user.name', 'Guest') }}</div>
                                <div class="text-xs text-gray-500">{{ session('temp_user.role', 'User') }}</div>
                            </div>
                            <div class="ms-2">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')" class="flex items-center">
                            <i class="fas fa-user mr-2"></i>{{ __('Profile') }}
                        </x-dropdown-link>
                        <x-dropdown-link href="#" class="flex items-center">
                            <i class="fas fa-cog mr-2"></i>Settings
                        </x-dropdown-link>
                        <x-dropdown-link href="#" class="flex items-center">
                            <i class="fas fa-question-circle mr-2"></i>Help
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('temp-logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('temp-logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                    class="flex items-center text-red-600 hover:text-red-700">
                                <i class="fas fa-sign-out-alt mr-2"></i>{{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-3 rounded-xl text-gray-400 hover:text-emerald-600 hover:bg-emerald-50 focus:outline-none focus:bg-emerald-50 focus:text-emerald-600 transition-all duration-300">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-white/95 backdrop-blur-md">
        <div class="pt-2 pb-3 space-y-1 px-4">
            <a href="{{ route('dashboard') }}" 
               class="flex items-center px-4 py-3 rounded-xl text-base font-medium transition-all duration-300 {{ request()->routeIs('dashboard') ? 'bg-emerald-100 text-emerald-700' : 'text-gray-600 hover:text-emerald-600 hover:bg-emerald-50' }}">
                <i class="fas fa-home mr-3"></i>Dashboard
            </a>
            <a href="#" class="flex items-center px-4 py-3 rounded-xl text-base font-medium text-gray-600 hover:text-emerald-600 hover:bg-emerald-50 transition-all duration-300">
                <i class="fas fa-quran mr-3"></i>Quran
            </a>
            <a href="#" class="flex items-center px-4 py-3 rounded-xl text-base font-medium text-gray-600 hover:text-emerald-600 hover:bg-emerald-50 transition-all duration-300">
                <i class="fas fa-mosque mr-3"></i>Prayer Times
            </a>
            <a href="#" class="flex items-center px-4 py-3 rounded-xl text-base font-medium text-gray-600 hover:text-emerald-600 hover:bg-emerald-50 transition-all duration-300">
                <i class="fas fa-users mr-3"></i>Community
            </a>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-gradient-to-br from-emerald-400 to-teal-500 rounded-full flex items-center justify-center text-white font-semibold text-sm mr-3">
                        {{ substr(session('temp_user.name', 'G'), 0, 1) }}
                    </div>
                    <div>
                        <div class="font-medium text-base text-gray-800">{{ session('temp_user.name', 'Guest') }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ session('temp_user.email', 'guest@example.com') }}</div>
                    </div>
                </div>
            </div>

            <div class="mt-3 space-y-1 px-4">
                <a href="{{ route('profile.edit') }}" class="flex items-center px-4 py-3 rounded-xl text-base font-medium text-gray-600 hover:text-emerald-600 hover:bg-emerald-50 transition-all duration-300">
                    <i class="fas fa-user mr-3"></i>Profile
                </a>
                <a href="#" class="flex items-center px-4 py-3 rounded-xl text-base font-medium text-gray-600 hover:text-emerald-600 hover:bg-emerald-50 transition-all duration-300">
                    <i class="fas fa-cog mr-3"></i>Settings
                </a>
                <a href="#" class="flex items-center px-4 py-3 rounded-xl text-base font-medium text-gray-600 hover:text-emerald-600 hover:bg-emerald-50 transition-all duration-300">
                    <i class="fas fa-question-circle mr-3"></i>Help
                </a>

                <!-- Authentication -->
                <form method="POST" action="{{ route('temp-logout') }}">
                    @csrf
                    <a href="{{ route('temp-logout') }}"
                       onclick="event.preventDefault();
                                   this.closest('form').submit();"
                       class="flex items-center px-4 py-3 rounded-xl text-base font-medium text-red-600 hover:text-red-700 hover:bg-red-50 transition-all duration-300">
                        <i class="fas fa-sign-out-alt mr-3"></i>Log Out
                    </a>
                </form>
            </div>
        </div>
    </div>
</nav>
