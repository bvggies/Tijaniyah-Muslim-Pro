<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div class="slide-in-left">
                <h2 class="text-3xl font-bold bg-gradient-to-r from-emerald-600 to-emerald-800 bg-clip-text text-transparent">
                    <i class="fas fa-book-quran mr-3"></i>Quran Reader
                </h2>
                <p class="text-gray-600 mt-1">Read the Holy Quran with translation and audio</p>
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
            <!-- Search and Navigation -->
            <div class="bg-white rounded-2xl shadow-xl p-6 mb-8">
                <div class="flex flex-col lg:flex-row gap-4">
                    <!-- Surah Selection -->
                    <div class="flex-1">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Select Surah</label>
                        <select id="surah-select" class="w-full p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                            <option value="">Choose a Surah...</option>
                            <option value="1">1. Al-Fatihah (The Opening)</option>
                            <option value="2">2. Al-Baqarah (The Cow)</option>
                            <option value="3">3. Ali 'Imran (Family of Imran)</option>
                            <option value="4">4. An-Nisa (The Women)</option>
                            <option value="5">5. Al-Ma'idah (The Table Spread)</option>
                            <option value="6">6. Al-An'am (The Cattle)</option>
                            <option value="7">7. Al-A'raf (The Heights)</option>
                            <option value="8">8. Al-Anfal (The Spoils of War)</option>
                            <option value="9">9. At-Tawbah (The Repentance)</option>
                            <option value="10">10. Yunus (Jonah)</option>
                        </select>
                    </div>
                    
                    <!-- Ayah Selection -->
                    <div class="flex-1">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Ayah Number</label>
                        <input type="number" id="ayah-input" placeholder="Enter ayah number..." min="1" 
                               class="w-full p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                    </div>
                    
                    <!-- Search -->
                    <div class="flex-1">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Search Text</label>
                        <input type="text" id="search-text" placeholder="Search in Quran..." 
                               class="w-full p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                    </div>
                    
                    <!-- Go Button -->
                    <div class="flex items-end">
                        <button onclick="loadSurah()" class="bg-gradient-to-r from-emerald-500 to-emerald-600 hover:from-emerald-600 hover:to-emerald-700 text-white font-semibold py-4 px-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                            <i class="fas fa-search mr-2"></i>Go
                        </button>
                    </div>
                </div>
            </div>

            <!-- Quran Display -->
            <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-2xl font-bold text-gray-800" id="surah-title">Select a Surah to begin reading</h3>
                    <div class="flex gap-2">
                        <button onclick="toggleTranslation()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors duration-300">
                            <i class="fas fa-language mr-2"></i>Translation
                        </button>
                        <button onclick="toggleAudio()" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition-colors duration-300">
                            <i class="fas fa-play mr-2"></i>Audio
                        </button>
                        <button onclick="addBookmark()" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg transition-colors duration-300">
                            <i class="fas fa-bookmark mr-2"></i>Bookmark
                        </button>
                    </div>
                </div>

                <!-- Quran Text Container -->
                <div id="quran-container" class="min-h-96">
                    <div class="text-center text-gray-500 py-16">
                        <i class="fas fa-book-quran text-6xl mb-4"></i>
                        <p class="text-xl">Choose a Surah from the dropdown above to start reading</p>
                    </div>
                </div>
            </div>

            <!-- Sample Surah Content (Al-Fatihah) -->
            <div id="surah-content" style="display: none;">
                <!-- Ayah 1 -->
                <div class="mb-8 p-6 bg-gradient-to-r from-emerald-50 to-teal-50 rounded-xl">
                    <div class="flex justify-between items-start mb-4">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded-full text-sm font-bold">1:1</span>
                        <div class="flex gap-2">
                            <button onclick="playAyah(1)" class="text-emerald-600 hover:text-emerald-800">
                                <i class="fas fa-play"></i>
                            </button>
                            <button onclick="bookmarkAyah(1)" class="text-yellow-600 hover:text-yellow-800">
                                <i class="fas fa-bookmark"></i>
                            </button>
                        </div>
                    </div>
                    <div class="arabic-text text-right text-3xl font-bold text-emerald-800 mb-4" dir="rtl">
                        بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ
                    </div>
                    <p class="text-gray-700 text-lg mb-2">In the name of Allah, the Entirely Merciful, the Especially Merciful.</p>
                    <p class="text-gray-600 text-sm">Translation by Dr. Mustafa Khattab, the Clear Quran</p>
                </div>

                <!-- Ayah 2 -->
                <div class="mb-8 p-6 bg-gradient-to-r from-emerald-50 to-teal-50 rounded-xl">
                    <div class="flex justify-between items-start mb-4">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded-full text-sm font-bold">1:2</span>
                        <div class="flex gap-2">
                            <button onclick="playAyah(2)" class="text-emerald-600 hover:text-emerald-800">
                                <i class="fas fa-play"></i>
                            </button>
                            <button onclick="bookmarkAyah(2)" class="text-yellow-600 hover:text-yellow-800">
                                <i class="fas fa-bookmark"></i>
                            </button>
                        </div>
                    </div>
                    <div class="arabic-text text-right text-3xl font-bold text-emerald-800 mb-4" dir="rtl">
                        الْحَمْدُ لِلَّهِ رَبِّ الْعَالَمِينَ
                    </div>
                    <p class="text-gray-700 text-lg mb-2">[All] praise is [due] to Allah, Lord of the worlds.</p>
                    <p class="text-gray-600 text-sm">Translation by Dr. Mustafa Khattab, the Clear Quran</p>
                </div>

                <!-- Ayah 3 -->
                <div class="mb-8 p-6 bg-gradient-to-r from-emerald-50 to-teal-50 rounded-xl">
                    <div class="flex justify-between items-start mb-4">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded-full text-sm font-bold">1:3</span>
                        <div class="flex gap-2">
                            <button onclick="playAyah(3)" class="text-emerald-600 hover:text-emerald-800">
                                <i class="fas fa-play"></i>
                            </button>
                            <button onclick="bookmarkAyah(3)" class="text-yellow-600 hover:text-yellow-800">
                                <i class="fas fa-bookmark"></i>
                            </button>
                        </div>
                    </div>
                    <div class="arabic-text text-right text-3xl font-bold text-emerald-800 mb-4" dir="rtl">
                        الرَّحْمَٰنِ الرَّحِيمِ
                    </div>
                    <p class="text-gray-700 text-lg mb-2">The Entirely Merciful, the Especially Merciful.</p>
                    <p class="text-gray-600 text-sm">Translation by Dr. Mustafa Khattab, the Clear Quran</p>
                </div>

                <!-- Ayah 4 -->
                <div class="mb-8 p-6 bg-gradient-to-r from-emerald-50 to-teal-50 rounded-xl">
                    <div class="flex justify-between items-start mb-4">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded-full text-sm font-bold">1:4</span>
                        <div class="flex gap-2">
                            <button onclick="playAyah(4)" class="text-emerald-600 hover:text-emerald-800">
                                <i class="fas fa-play"></i>
                            </button>
                            <button onclick="bookmarkAyah(4)" class="text-yellow-600 hover:text-yellow-800">
                                <i class="fas fa-bookmark"></i>
                            </button>
                        </div>
                    </div>
                    <div class="arabic-text text-right text-3xl font-bold text-emerald-800 mb-4" dir="rtl">
                        مَالِكِ يَوْمِ الدِّينِ
                    </div>
                    <p class="text-gray-700 text-lg mb-2">Sovereign of the Day of Recompense.</p>
                    <p class="text-gray-600 text-sm">Translation by Dr. Mustafa Khattab, the Clear Quran</p>
                </div>

                <!-- Ayah 5 -->
                <div class="mb-8 p-6 bg-gradient-to-r from-emerald-50 to-teal-50 rounded-xl">
                    <div class="flex justify-between items-start mb-4">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded-full text-sm font-bold">1:5</span>
                        <div class="flex gap-2">
                            <button onclick="playAyah(5)" class="text-emerald-600 hover:text-emerald-800">
                                <i class="fas fa-play"></i>
                            </button>
                            <button onclick="bookmarkAyah(5)" class="text-yellow-600 hover:text-yellow-800">
                                <i class="fas fa-bookmark"></i>
                            </button>
                        </div>
                    </div>
                    <div class="arabic-text text-right text-3xl font-bold text-emerald-800 mb-4" dir="rtl">
                        إِيَّاكَ نَعْبُدُ وَإِيَّاكَ نَسْتَعِينُ
                    </div>
                    <p class="text-gray-700 text-lg mb-2">It is You we worship and You we ask for help.</p>
                    <p class="text-gray-600 text-sm">Translation by Dr. Mustafa Khattab, the Clear Quran</p>
                </div>

                <!-- Ayah 6 -->
                <div class="mb-8 p-6 bg-gradient-to-r from-emerald-50 to-teal-50 rounded-xl">
                    <div class="flex justify-between items-start mb-4">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded-full text-sm font-bold">1:6</span>
                        <div class="flex gap-2">
                            <button onclick="playAyah(6)" class="text-emerald-600 hover:text-emerald-800">
                                <i class="fas fa-play"></i>
                            </button>
                            <button onclick="bookmarkAyah(6)" class="text-yellow-600 hover:text-yellow-800">
                                <i class="fas fa-bookmark"></i>
                            </button>
                        </div>
                    </div>
                    <div class="arabic-text text-right text-3xl font-bold text-emerald-800 mb-4" dir="rtl">
                        اهْدِنَا الصِّرَاطَ الْمُسْتَقِيمَ
                    </div>
                    <p class="text-gray-700 text-lg mb-2">Guide us to the straight path.</p>
                    <p class="text-gray-600 text-sm">Translation by Dr. Mustafa Khattab, the Clear Quran</p>
                </div>

                <!-- Ayah 7 -->
                <div class="mb-8 p-6 bg-gradient-to-r from-emerald-50 to-teal-50 rounded-xl">
                    <div class="flex justify-between items-start mb-4">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded-full text-sm font-bold">1:7</span>
                        <div class="flex gap-2">
                            <button onclick="playAyah(7)" class="text-emerald-600 hover:text-emerald-800">
                                <i class="fas fa-play"></i>
                            </button>
                            <button onclick="bookmarkAyah(7)" class="text-yellow-600 hover:text-yellow-800">
                                <i class="fas fa-bookmark"></i>
                            </button>
                        </div>
                    </div>
                    <div class="arabic-text text-right text-3xl font-bold text-emerald-800 mb-4" dir="rtl">
                        صِرَاطَ الَّذِينَ أَنْعَمْتَ عَلَيْهِمْ غَيْرِ الْمَغْضُوبِ عَلَيْهِمْ وَلَا الضَّالِّينَ
                    </div>
                    <p class="text-gray-700 text-lg mb-2">The path of those upon whom You have bestowed favor, not of those who have evoked [Your] anger or of those who are astray.</p>
                    <p class="text-gray-600 text-sm">Translation by Dr. Mustafa Khattab, the Clear Quran</p>
                </div>
            </div>

            <!-- Bookmarks Section -->
            <div class="bg-white rounded-2xl shadow-xl p-8">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">
                    <i class="fas fa-bookmark text-yellow-500 mr-2"></i>
                    My Bookmarks
                </h3>
                <div id="bookmarks-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="text-center text-gray-500 py-8">
                        <i class="fas fa-bookmark text-4xl mb-4"></i>
                        <p>No bookmarks yet. Click the bookmark icon on any ayah to save it.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let showTranslation = true;
        let showAudio = false;
        let bookmarks = JSON.parse(localStorage.getItem('quranBookmarks') || '[]');

        // Load surah
        function loadSurah() {
            const surahSelect = document.getElementById('surah-select');
            const ayahInput = document.getElementById('ayah-input');
            const surahTitle = document.getElementById('surah-title');
            const quranContainer = document.getElementById('quran-container');
            const surahContent = document.getElementById('surah-content');

            if (surahSelect.value) {
                const surahName = surahSelect.options[surahSelect.selectedIndex].text;
                surahTitle.textContent = surahName;
                quranContainer.innerHTML = '';
                quranContainer.appendChild(surahContent);
                surahContent.style.display = 'block';

                // Scroll to specific ayah if provided
                if (ayahInput.value) {
                    const ayahNumber = parseInt(ayahInput.value);
                    if (ayahNumber >= 1 && ayahNumber <= 7) {
                        const ayahElement = document.querySelector(`[onclick="playAyah(${ayahNumber})"]`).closest('.mb-8');
                        ayahElement.scrollIntoView({ behavior: 'smooth' });
                        ayahElement.classList.add('ring-4', 'ring-emerald-500', 'ring-opacity-50');
                        setTimeout(() => {
                            ayahElement.classList.remove('ring-4', 'ring-emerald-500', 'ring-opacity-50');
                        }, 3000);
                    }
                }
            }
        }

        // Toggle translation
        function toggleTranslation() {
            showTranslation = !showTranslation;
            const translations = document.querySelectorAll('.text-gray-700');
            translations.forEach(translation => {
                translation.style.display = showTranslation ? 'block' : 'none';
            });
        }

        // Toggle audio
        function toggleAudio() {
            showAudio = !showAudio;
            const audioButtons = document.querySelectorAll('[onclick^="playAyah"]');
            audioButtons.forEach(button => {
                button.style.display = showAudio ? 'inline-block' : 'none';
            });
        }

        // Play ayah audio
        function playAyah(ayahNumber) {
            // In a real app, you would play the actual audio
            alert(`Playing audio for Ayah ${ayahNumber} of Al-Fatihah`);
        }

        // Bookmark ayah
        function bookmarkAyah(ayahNumber) {
            const bookmark = {
                surah: 'Al-Fatihah',
                surahNumber: 1,
                ayah: ayahNumber,
                timestamp: new Date().toISOString()
            };

            if (!bookmarks.find(b => b.surahNumber === 1 && b.ayah === ayahNumber)) {
                bookmarks.push(bookmark);
                localStorage.setItem('quranBookmarks', JSON.stringify(bookmarks));
                updateBookmarksDisplay();
                alert(`Bookmarked Ayah ${ayahNumber} of Al-Fatihah`);
            } else {
                alert('This ayah is already bookmarked!');
            }
        }

        // Add bookmark
        function addBookmark() {
            const surahSelect = document.getElementById('surah-select');
            const ayahInput = document.getElementById('ayah-input');
            
            if (surahSelect.value && ayahInput.value) {
                const surahName = surahSelect.options[surahSelect.selectedIndex].text;
                const ayahNumber = parseInt(ayahInput.value);
                
                const bookmark = {
                    surah: surahName,
                    surahNumber: parseInt(surahSelect.value),
                    ayah: ayahNumber,
                    timestamp: new Date().toISOString()
                };

                if (!bookmarks.find(b => b.surahNumber === bookmark.surahNumber && b.ayah === ayahNumber)) {
                    bookmarks.push(bookmark);
                    localStorage.setItem('quranBookmarks', JSON.stringify(bookmarks));
                    updateBookmarksDisplay();
                    alert(`Bookmarked ${surahName}, Ayah ${ayahNumber}`);
                } else {
                    alert('This ayah is already bookmarked!');
                }
            } else {
                alert('Please select a surah and ayah number first.');
            }
        }

        // Update bookmarks display
        function updateBookmarksDisplay() {
            const container = document.getElementById('bookmarks-container');
            
            if (bookmarks.length === 0) {
                container.innerHTML = `
                    <div class="text-center text-gray-500 py-8 col-span-full">
                        <i class="fas fa-bookmark text-4xl mb-4"></i>
                        <p>No bookmarks yet. Click the bookmark icon on any ayah to save it.</p>
                    </div>
                `;
            } else {
                container.innerHTML = bookmarks.map(bookmark => `
                    <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300">
                        <div class="flex justify-between items-start mb-4">
                            <h4 class="text-lg font-bold text-yellow-900">${bookmark.surah}</h4>
                            <button onclick="removeBookmark('${bookmark.surahNumber}-${bookmark.ayah}')" class="text-red-500 hover:text-red-700">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <p class="text-yellow-800 mb-2">Ayah ${bookmark.ayah}</p>
                        <p class="text-yellow-600 text-sm">${new Date(bookmark.timestamp).toLocaleDateString()}</p>
                        <button onclick="goToAyah(${bookmark.surahNumber}, ${bookmark.ayah})" class="mt-4 bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg transition-colors duration-300">
                            <i class="fas fa-arrow-right mr-2"></i>Go to Ayah
                        </button>
                    </div>
                `).join('');
            }
        }

        // Remove bookmark
        function removeBookmark(bookmarkId) {
            const [surahNumber, ayah] = bookmarkId.split('-');
            bookmarks = bookmarks.filter(b => !(b.surahNumber == surahNumber && b.ayah == ayah));
            localStorage.setItem('quranBookmarks', JSON.stringify(bookmarks));
            updateBookmarksDisplay();
        }

        // Go to specific ayah
        function goToAyah(surahNumber, ayahNumber) {
            document.getElementById('surah-select').value = surahNumber;
            document.getElementById('ayah-input').value = ayahNumber;
            loadSurah();
        }

        // Search functionality
        document.getElementById('search-text').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            if (searchTerm.length > 2) {
                // In a real app, you would search through the actual Quran text
                alert(`Searching for: "${searchTerm}"`);
            }
        });

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            updateBookmarksDisplay();
        });
    </script>
</x-app-layout>
