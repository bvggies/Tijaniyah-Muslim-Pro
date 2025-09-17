<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#1a5f3f">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="Tijaniyah Pro">
    
    <!-- PWA Manifest -->
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    
    <!-- Apple Touch Icons -->
    <link rel="apple-touch-icon" href="{{ asset('icons/icon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('icons/icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('icons/icon-192x192.png') }}">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('icons/icon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icons/icon-16x16.png') }}">
    
    <title>{{ $title ?? 'Tijaniyah Muslim Pro' }}</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Mobile-specific styles -->
    <style>
        /* Prevent zoom on input focus */
        input[type="text"], input[type="email"], input[type="password"], textarea, select {
            font-size: 16px;
        }
        
        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;
        }
        
        /* Mobile tap highlights */
        * {
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0.1);
        }
        
        /* Safe area for notched devices */
        .safe-area-top {
            padding-top: env(safe-area-inset-top);
        }
        
        .safe-area-bottom {
            padding-bottom: env(safe-area-inset-bottom);
        }
        
        /* Mobile navigation */
        .mobile-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 50;
            background: white;
            border-top: 1px solid #e5e7eb;
            padding-bottom: env(safe-area-inset-bottom);
        }
        
        /* Mobile header */
        .mobile-header {
            position: sticky;
            top: 0;
            z-index: 40;
            background: white;
            border-bottom: 1px solid #e5e7eb;
            padding-top: env(safe-area-inset-top);
        }
        
        /* Touch-friendly buttons */
        .touch-target {
            min-height: 44px;
            min-width: 44px;
        }
        
        /* Mobile modal */
        .mobile-modal {
            position: fixed;
            inset: 0;
            z-index: 50;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: flex-end;
            justify-content: center;
        }
        
        .mobile-modal-content {
            background: white;
            border-radius: 1rem 1rem 0 0;
            width: 100%;
            max-height: 90vh;
            overflow-y: auto;
            transform: translateY(100%);
            transition: transform 0.3s ease-out;
        }
        
        .mobile-modal.show .mobile-modal-content {
            transform: translateY(0);
        }
        
        /* Swipe gestures */
        .swipe-container {
            touch-action: pan-y;
        }
        
        /* Loading states */
        .loading-skeleton {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
        }
        
        @keyframes loading {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }
        
        /* Mobile-specific animations */
        @media (max-width: 768px) {
            .slide-in-left {
                animation: slideInLeft 0.3s ease-out;
            }
            
            .slide-in-right {
                animation: slideInRight 0.3s ease-out;
            }
            
            .fade-in {
                animation: fadeIn 0.3s ease-out;
            }
        }
        
        @keyframes slideInLeft {
            from { transform: translateX(-100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        
        @keyframes slideInRight {
            from { transform: translateX(100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
    
    @stack('styles')
</head>
<body class="font-sans antialiased bg-gray-50 h-full">
    <div class="min-h-full">
        <!-- Mobile Header -->
        <header class="mobile-header">
            <div class="px-4 py-3">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        @if(isset($showBackButton) && $showBackButton)
                        <button onclick="history.back()" class="touch-target p-2 -ml-2 text-gray-600 hover:text-gray-900">
                            <i class="fas fa-arrow-left text-lg"></i>
                        </button>
                        @endif
                        <h1 class="text-lg font-semibold text-gray-900 ml-2">{{ $headerTitle ?? 'Tijaniyah Pro' }}</h1>
                    </div>
                    <div class="flex items-center space-x-2">
                        @if(isset($headerActions))
                            {{ $headerActions }}
                        @endif
                        <button onclick="toggleMobileMenu()" class="touch-target p-2 text-gray-600 hover:text-gray-900">
                            <i class="fas fa-bars text-lg"></i>
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="pb-20 safe-area-bottom">
            {{ $slot }}
        </main>

        <!-- Mobile Bottom Navigation -->
        <nav class="mobile-nav">
            <div class="grid grid-cols-5 gap-1 py-2">
                <a href="{{ route('dashboard') }}" class="flex flex-col items-center py-2 px-1 text-gray-600 hover:text-emerald-600 transition-colors">
                    <i class="fas fa-home text-lg mb-1"></i>
                    <span class="text-xs">Home</span>
                </a>
                <a href="{{ route('prayer-times') }}" class="flex flex-col items-center py-2 px-1 text-gray-600 hover:text-emerald-600 transition-colors">
                    <i class="fas fa-clock text-lg mb-1"></i>
                    <span class="text-xs">Prayers</span>
                </a>
                <a href="{{ route('quran') }}" class="flex flex-col items-center py-2 px-1 text-gray-600 hover:text-emerald-600 transition-colors">
                    <i class="fas fa-book-quran text-lg mb-1"></i>
                    <span class="text-xs">Quran</span>
                </a>
                <a href="{{ route('ai-noor') }}" class="flex flex-col items-center py-2 px-1 text-gray-600 hover:text-emerald-600 transition-colors">
                    <i class="fas fa-robot text-lg mb-1"></i>
                    <span class="text-xs">AI Noor</span>
                </a>
                <button onclick="toggleMoreMenu()" class="flex flex-col items-center py-2 px-1 text-gray-600 hover:text-emerald-600 transition-colors">
                    <i class="fas fa-ellipsis-h text-lg mb-1"></i>
                    <span class="text-xs">More</span>
                </button>
            </div>
        </nav>

        <!-- More Menu Modal -->
        <div id="more-menu" class="mobile-modal hidden">
            <div class="mobile-modal-content p-6">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-lg font-semibold text-gray-900">More Features</h3>
                    <button onclick="toggleMoreMenu()" class="touch-target p-2 -mr-2 text-gray-500">
                        <i class="fas fa-times text-lg"></i>
                    </button>
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <a href="{{ route('qibla') }}" class="flex flex-col items-center p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
                        <i class="fas fa-compass text-2xl text-emerald-600 mb-2"></i>
                        <span class="text-sm font-medium text-gray-900">Qibla</span>
                    </a>
                    <a href="{{ route('duas') }}" class="flex flex-col items-center p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
                        <i class="fas fa-hands-praying text-2xl text-emerald-600 mb-2"></i>
                        <span class="text-sm font-medium text-gray-900">Duas</span>
                    </a>
                    <a href="{{ route('tasbih') }}" class="flex flex-col items-center p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
                        <i class="fas fa-circle text-2xl text-emerald-600 mb-2"></i>
                        <span class="text-sm font-medium text-gray-900">Tasbih</span>
                    </a>
                    <a href="{{ route('wazifa') }}" class="flex flex-col items-center p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
                        <i class="fas fa-star text-2xl text-emerald-600 mb-2"></i>
                        <span class="text-sm font-medium text-gray-900">Wazifa</span>
                    </a>
                    <a href="{{ route('lazim') }}" class="flex flex-col items-center p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
                        <i class="fas fa-list-check text-2xl text-emerald-600 mb-2"></i>
                        <span class="text-sm font-medium text-gray-900">Lazim</span>
                    </a>
                    <a href="{{ route('journal') }}" class="flex flex-col items-center p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
                        <i class="fas fa-book text-2xl text-emerald-600 mb-2"></i>
                        <span class="text-sm font-medium text-gray-900">Journal</span>
                    </a>
                    <a href="{{ route('mosques') }}" class="flex flex-col items-center p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
                        <i class="fas fa-mosque text-2xl text-emerald-600 mb-2"></i>
                        <span class="text-sm font-medium text-gray-900">Mosques</span>
                    </a>
                    <a href="{{ route('community') }}" class="flex flex-col items-center p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
                        <i class="fas fa-users text-2xl text-emerald-600 mb-2"></i>
                        <span class="text-sm font-medium text-gray-900">Community</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- PWA Install Banner -->
        <div id="pwa-install-banner" class="fixed bottom-20 left-4 right-4 bg-emerald-600 text-white p-4 rounded-xl shadow-lg z-40 hidden">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <i class="fas fa-download text-xl mr-3"></i>
                    <div>
                        <p class="font-semibold">Install App</p>
                        <p class="text-sm opacity-90">Get quick access to Tijaniyah Pro</p>
                    </div>
                </div>
                <div class="flex space-x-2">
                    <button onclick="installPWA()" class="bg-white text-emerald-600 px-4 py-2 rounded-lg text-sm font-semibold">
                        Install
                    </button>
                    <button onclick="dismissInstallBanner()" class="text-white opacity-70">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        let deferredPrompt;
        let installBannerShown = false;

        // PWA Install functionality
        window.addEventListener('beforeinstallprompt', (e) => {
            e.preventDefault();
            deferredPrompt = e;
            if (!installBannerShown) {
                showInstallBanner();
            }
        });

        function showInstallBanner() {
            const banner = document.getElementById('pwa-install-banner');
            if (banner && !installBannerShown) {
                banner.classList.remove('hidden');
                installBannerShown = true;
            }
        }

        function installPWA() {
            if (deferredPrompt) {
                deferredPrompt.prompt();
                deferredPrompt.userChoice.then((choiceResult) => {
                    if (choiceResult.outcome === 'accepted') {
                        console.log('User accepted the install prompt');
                    }
                    deferredPrompt = null;
                });
            }
            dismissInstallBanner();
        }

        function dismissInstallBanner() {
            const banner = document.getElementById('pwa-install-banner');
            if (banner) {
                banner.classList.add('hidden');
            }
        }

        // Mobile menu functionality
        function toggleMoreMenu() {
            const menu = document.getElementById('more-menu');
            if (menu) {
                menu.classList.toggle('hidden');
                if (!menu.classList.contains('hidden')) {
                    menu.classList.add('show');
                } else {
                    menu.classList.remove('show');
                }
            }
        }

        // Close modal when clicking outside
        document.addEventListener('click', function(event) {
            const moreMenu = document.getElementById('more-menu');
            if (moreMenu && !moreMenu.contains(event.target) && !event.target.closest('button[onclick="toggleMoreMenu()"]')) {
                moreMenu.classList.add('hidden');
                moreMenu.classList.remove('show');
            }
        });

        // Service Worker Registration
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/sw.js')
                    .then((registration) => {
                        console.log('SW registered: ', registration);
                    })
                    .catch((registrationError) => {
                        console.log('SW registration failed: ', registrationError);
                    });
            });
        }

        // Touch gestures
        let startY = 0;
        let startX = 0;

        document.addEventListener('touchstart', function(e) {
            startY = e.touches[0].clientY;
            startX = e.touches[0].clientX;
        });

        document.addEventListener('touchmove', function(e) {
            if (!startY || !startX) return;
            
            const currentY = e.touches[0].clientY;
            const currentX = e.touches[0].clientX;
            const diffY = startY - currentY;
            const diffX = startX - currentX;
            
            // Swipe down to close modals
            if (Math.abs(diffY) > Math.abs(diffX) && diffY < -50) {
                const moreMenu = document.getElementById('more-menu');
                if (moreMenu && !moreMenu.classList.contains('hidden')) {
                    toggleMoreMenu();
                }
            }
            
            startY = null;
            startX = null;
        });

        // Prevent body scroll when modal is open
        function preventBodyScroll() {
            document.body.style.overflow = 'hidden';
        }

        function allowBodyScroll() {
            document.body.style.overflow = '';
        }

        // Add loading states
        function showLoading(element) {
            element.classList.add('loading-skeleton');
        }

        function hideLoading(element) {
            element.classList.remove('loading-skeleton');
        }

        // Mobile-specific utilities
        function isMobile() {
            return window.innerWidth <= 768;
        }

        function vibrate(pattern = [100]) {
            if (navigator.vibrate) {
                navigator.vibrate(pattern);
            }
        }

        // Add haptic feedback to buttons
        document.addEventListener('click', function(e) {
            if (e.target.matches('button, a, [role="button"]')) {
                vibrate([50]);
            }
        });
    </script>

    @stack('scripts')
</body>
</html>
