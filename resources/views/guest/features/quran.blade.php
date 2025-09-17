<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div class="slide-in-left">
                <h2 class="text-3xl font-bold bg-gradient-to-r from-emerald-600 to-emerald-800 bg-clip-text text-transparent">
                    <i class="fas fa-book-quran mr-3"></i>Quran Reader (Guest Access)
                </h2>
                <p class="text-gray-600 mt-1">Read the first 3 Surahs with translation</p>
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
                        <h3 class="text-lg font-semibold text-yellow-800">Guest Access - Limited Surahs</h3>
                        <p class="text-yellow-700 mt-1">You can read the first 3 Surahs only. <a href="{{ route('guest.login') }}" class="font-semibold underline hover:text-yellow-800">Login</a> for complete Quran with bookmarks, audio recitations, and multiple translations.</p>
                    </div>
                </div>
            </div>

            <!-- Surah Selection -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <!-- Al-Fatiha -->
                <div class="bg-gradient-to-br from-emerald-50 to-emerald-100 rounded-2xl p-6 shadow-lg cursor-pointer hover:shadow-xl transition-all duration-300 transform hover:scale-105" onclick="showSurah('fatiha')">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-emerald-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <span class="text-white font-bold text-xl">1</span>
                        </div>
                        <h3 class="text-xl font-bold text-emerald-900 mb-2">Al-Fatiha</h3>
                        <p class="text-emerald-700 text-sm mb-3">The Opening</p>
                        <p class="text-emerald-600 text-xs">7 verses • Makki</p>
                    </div>
                </div>

                <!-- Al-Baqarah (First 10 verses) -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-6 shadow-lg cursor-pointer hover:shadow-xl transition-all duration-300 transform hover:scale-105" onclick="showSurah('baqarah')">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <span class="text-white font-bold text-xl">2</span>
                        </div>
                        <h3 class="text-xl font-bold text-blue-900 mb-2">Al-Baqarah</h3>
                        <p class="text-blue-700 text-sm mb-3">The Cow (First 10 verses)</p>
                        <p class="text-blue-600 text-xs">10 verses shown • Madani</p>
                    </div>
                </div>

                <!-- Al-Imran (First 10 verses) -->
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-6 shadow-lg cursor-pointer hover:shadow-xl transition-all duration-300 transform hover:scale-105" onclick="showSurah('imran')">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-purple-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <span class="text-white font-bold text-xl">3</span>
                        </div>
                        <h3 class="text-xl font-bold text-purple-900 mb-2">Al-Imran</h3>
                        <p class="text-purple-700 text-sm mb-3">Family of Imran (First 10 verses)</p>
                        <p class="text-purple-600 text-xs">10 verses shown • Madani</p>
                    </div>
                </div>
            </div>

            <!-- Quran Reader -->
            <div id="quran-reader" class="bg-white rounded-2xl shadow-xl p-8 mb-8" style="display: none;">
                <div class="text-center mb-8">
                    <h3 id="surah-title" class="text-3xl font-bold text-gray-800 mb-2"></h3>
                    <p id="surah-subtitle" class="text-gray-600"></p>
                </div>
                
                <div id="surah-content" class="space-y-6">
                    <!-- Content will be loaded here -->
                </div>
            </div>

            <!-- Default Message -->
            <div id="default-message" class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-2xl p-12 text-center shadow-lg">
                <div class="w-24 h-24 bg-gray-400 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-book-quran text-white text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Select a Surah to Read</h3>
                <p class="text-gray-600 mb-6">Choose from the available Surahs above to start reading the Holy Quran.</p>
                <p class="text-gray-500 text-sm">As a guest, you can read the first 3 Surahs. Login for complete access to all 114 Surahs.</p>
            </div>

            <!-- Upgrade Notice -->
            <div class="bg-gradient-to-r from-gray-800 to-gray-900 rounded-2xl p-8 text-white">
                <div class="text-center">
                    <h3 class="text-2xl font-bold mb-4">
                        <i class="fas fa-crown mr-3 text-yellow-400"></i>Get Complete Quran Access
                    </h3>
                    <p class="text-gray-300 mb-6">Login to access all 114 Surahs with multiple translations, audio recitations, bookmarks, and study tools.</p>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gray-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-book text-white text-2xl"></i>
                            </div>
                            <h4 class="font-bold mb-2">Complete Quran</h4>
                            <p class="text-gray-300 text-sm">All 114 Surahs with translations</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gray-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-volume-up text-white text-2xl"></i>
                            </div>
                            <h4 class="font-bold mb-2">Audio Recitations</h4>
                            <p class="text-gray-300 text-sm">Listen to beautiful recitations</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gray-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-bookmark text-white text-2xl"></i>
                            </div>
                            <h4 class="font-bold mb-2">Bookmarks</h4>
                            <p class="text-gray-300 text-sm">Save your favorite verses</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gray-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-search text-white text-2xl"></i>
                            </div>
                            <h4 class="font-bold mb-2">Search & Study</h4>
                            <p class="text-gray-300 text-sm">Search verses and study tools</p>
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

    <script>
        const surahs = {
            fatiha: {
                title: "Al-Fatiha",
                subtitle: "The Opening • 7 verses • Makki",
                verses: [
                    {
                        arabic: "بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ",
                        translation: "In the name of Allah, the Entirely Merciful, the Especially Merciful."
                    },
                    {
                        arabic: "الْحَمْدُ لِلَّهِ رَبِّ الْعَالَمِينَ",
                        translation: "Praise be to Allah, Lord of the worlds."
                    },
                    {
                        arabic: "الرَّحْمَٰنِ الرَّحِيمِ",
                        translation: "The Entirely Merciful, the Especially Merciful."
                    },
                    {
                        arabic: "مَالِكِ يَوْمِ الدِّينِ",
                        translation: "Sovereign of the Day of Recompense."
                    },
                    {
                        arabic: "إِيَّاكَ نَعْبُدُ وَإِيَّاكَ نَسْتَعِينُ",
                        translation: "It is You we worship and You we ask for help."
                    },
                    {
                        arabic: "اهْدِنَا الصِّرَاطَ الْمُسْتَقِيمَ",
                        translation: "Guide us to the straight path."
                    },
                    {
                        arabic: "صِرَاطَ الَّذِينَ أَنْعَمْتَ عَلَيْهِمْ غَيْرِ الْمَغْضُوبِ عَلَيْهِمْ وَلَا الضَّالِّينَ",
                        translation: "The path of those upon whom You have bestowed favor, not of those who have evoked anger or of those who are astray."
                    }
                ]
            },
            baqarah: {
                title: "Al-Baqarah (First 10 verses)",
                subtitle: "The Cow • First 10 verses • Madani",
                verses: [
                    {
                        arabic: "الم",
                        translation: "Alif, Lam, Meem."
                    },
                    {
                        arabic: "ذَٰلِكَ الْكِتَابُ لَا رَيْبَ ۛ فِيهِ ۛ هُدًى لِّلْمُتَّقِينَ",
                        translation: "This is the Book about which there is no doubt, a guidance for those conscious of Allah."
                    },
                    {
                        arabic: "الَّذِينَ يُؤْمِنُونَ بِالْغَيْبِ وَيُقِيمُونَ الصَّلَاةَ وَمِمَّا رَزَقْنَاهُمْ يُنفِقُونَ",
                        translation: "Who believe in the unseen, establish prayer, and spend out of what We have provided for them."
                    }
                ]
            },
            imran: {
                title: "Al-Imran (First 10 verses)",
                subtitle: "Family of Imran • First 10 verses • Madani",
                verses: [
                    {
                        arabic: "الم",
                        translation: "Alif, Lam, Meem."
                    },
                    {
                        arabic: "اللَّهُ لَا إِلَٰهَ إِلَّا هُوَ الْحَيُّ الْقَيُّومُ",
                        translation: "Allah - there is no deity except Him, the Ever-Living, the Sustainer of existence."
                    },
                    {
                        arabic: "نَزَّلَ عَلَيْكَ الْكِتَابَ بِالْحَقِّ مُصَدِّقًا لِّمَا بَيْنَ يَدَيْهِ وَأَنزَلَ التَّوْرَاةَ وَالْإِنجِيلَ",
                        translation: "He has sent down upon you, [O Muhammad], the Book in truth, confirming what was before it. And He revealed the Torah and the Gospel."
                    }
                ]
            }
        };

        function showSurah(surahKey) {
            const surah = surahs[surahKey];
            const reader = document.getElementById('quran-reader');
            const defaultMsg = document.getElementById('default-message');
            const title = document.getElementById('surah-title');
            const subtitle = document.getElementById('surah-subtitle');
            const content = document.getElementById('surah-content');

            // Hide default message and show reader
            defaultMsg.style.display = 'none';
            reader.style.display = 'block';

            // Set title and subtitle
            title.textContent = surah.title;
            subtitle.textContent = surah.subtitle;

            // Generate verses
            content.innerHTML = surah.verses.map((verse, index) => `
                <div class="bg-gradient-to-r from-gray-50 to-gray-100 rounded-xl p-6">
                    <div class="flex items-center justify-between mb-4">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded-full text-sm font-semibold">${index + 1}</span>
                    </div>
                    <div class="text-right mb-4">
                        <p class="text-2xl text-gray-800 arabic-text leading-relaxed">${verse.arabic}</p>
                    </div>
                    <div class="text-left">
                        <p class="text-gray-700 italic">${verse.translation}</p>
                    </div>
                </div>
            `).join('');
        }
    </script>
</x-app-layout>
