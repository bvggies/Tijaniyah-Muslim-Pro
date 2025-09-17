<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duas - Tijaniyah Muslim Pro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="bg-gradient-to-br from-purple-900 via-indigo-900 to-blue-900 min-h-screen">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-10 left-10 w-32 h-32 bg-purple-300/10 rounded-full animate-pulse"></div>
        <div class="absolute top-32 right-20 w-24 h-24 bg-indigo-300/10 rounded-full animate-bounce"></div>
        <div class="absolute bottom-20 left-1/4 w-40 h-40 bg-blue-300/10 rounded-full animate-pulse"></div>
    </div>

    <div class="relative z-10 container mx-auto px-4 py-8">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl md:text-6xl font-bold bg-gradient-to-r from-purple-300 via-indigo-400 to-blue-500 bg-clip-text text-transparent mb-4">
                Duas
            </h1>
            <p class="text-xl text-purple-100">Collection of Islamic supplications</p>
        </div>

        <!-- Search and Filter -->
        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-6 mb-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Search Bar -->
                <div>
                    <label class="block text-sm font-medium text-purple-200 mb-2">Search Duas</label>
                    <div class="relative">
                        <input 
                            type="text" 
                            id="dua-search"
                            placeholder="Search by keyword, Arabic, or English..."
                            class="w-full px-4 py-3 pr-12 bg-white/20 border border-purple-300/50 rounded-lg text-white placeholder-purple-200 focus:ring-2 focus:ring-purple-400 focus:border-transparent"
                        >
                        <button onclick="searchDuas()" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-purple-300 hover:text-purple-200">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>

                <!-- Category Filter -->
                <div>
                    <label class="block text-sm font-medium text-purple-200 mb-2">Category</label>
                    <select id="category-filter" class="w-full px-4 py-3 bg-white/20 border border-purple-300/50 rounded-lg text-white focus:ring-2 focus:ring-purple-400 focus:border-transparent">
                        <option value="">All Categories</option>
                        <option value="morning">Morning Duas</option>
                        <option value="evening">Evening Duas</option>
                        <option value="travel">Travel Duas</option>
                        <option value="protection">Protection Duas</option>
                        <option value="forgiveness">Forgiveness Duas</option>
                        <option value="guidance">Guidance Duas</option>
                        <option value="health">Health Duas</option>
                        <option value="family">Family Duas</option>
                        <option value="work">Work Duas</option>
                        <option value="difficulties">Difficulties Duas</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Categories Grid -->
        <div class="grid grid-cols-2 md:grid-cols-5 gap-4 mb-8" id="categories-grid">
            <!-- Categories will be loaded here -->
        </div>

        <!-- Duas List -->
        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-6">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold text-purple-100">Duas Collection</h2>
                <div class="flex items-center space-x-4">
                    <button onclick="toggleFavorites()" class="bg-gradient-to-r from-pink-500 to-rose-600 hover:from-pink-600 hover:to-rose-700 text-white px-4 py-2 rounded-lg transition-colors">
                        <i class="fas fa-heart mr-2"></i>Favorites
                    </button>
                    <button onclick="toggleView()" class="bg-gradient-to-r from-indigo-500 to-purple-600 hover:from-indigo-600 hover:to-purple-700 text-white px-4 py-2 rounded-lg transition-colors">
                        <i class="fas fa-th-large mr-2"></i>Grid View
                    </button>
                </div>
            </div>

            <div id="duas-container" class="space-y-4">
                <!-- Duas will be loaded here -->
            </div>
        </div>
    </div>

    <!-- Dua Detail Modal -->
    <div id="dua-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
        <div class="bg-white rounded-3xl shadow-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-2xl font-bold text-gray-800" id="modal-dua-title">Dua Title</h3>
                    <button onclick="closeDuaModal()" class="text-gray-500 hover:text-gray-700">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>

                <div class="space-y-6">
                    <!-- Arabic Text -->
                    <div class="text-center">
                        <h4 class="text-lg font-semibold text-gray-700 mb-3">Arabic</h4>
                        <p class="text-2xl font-bold text-gray-800 leading-relaxed" id="modal-dua-arabic" dir="rtl">Arabic text here</p>
                    </div>

                    <!-- Transliteration -->
                    <div>
                        <h4 class="text-lg font-semibold text-gray-700 mb-3">Transliteration</h4>
                        <p class="text-lg text-gray-600 leading-relaxed" id="modal-dua-transliteration">Transliteration here</p>
                    </div>

                    <!-- Translation -->
                    <div>
                        <h4 class="text-lg font-semibold text-gray-700 mb-3">Translation</h4>
                        <p class="text-lg text-gray-600 leading-relaxed" id="modal-dua-translation">Translation here</p>
                    </div>

                    <!-- Reference -->
                    <div>
                        <h4 class="text-lg font-semibold text-gray-700 mb-3">Reference</h4>
                        <p class="text-sm text-gray-500" id="modal-dua-reference">Reference here</p>
                    </div>

                    <!-- Audio Player -->
                    <div class="bg-gray-50 rounded-lg p-4">
                        <h4 class="text-lg font-semibold text-gray-700 mb-3">Audio Recitation</h4>
                        <div class="flex items-center space-x-4">
                            <button onclick="playAudio()" class="bg-gradient-to-r from-purple-500 to-indigo-600 hover:from-purple-600 hover:to-indigo-700 text-white px-6 py-3 rounded-lg transition-colors">
                                <i class="fas fa-play mr-2"></i>Play
                            </button>
                            <div class="flex-1">
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-gradient-to-r from-purple-500 to-indigo-600 h-2 rounded-full" style="width: 0%" id="audio-progress"></div>
                                </div>
                            </div>
                            <span class="text-sm text-gray-500" id="audio-time">0:00 / 0:00</span>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                        <button onclick="toggleFavorite()" class="flex items-center space-x-2 text-gray-600 hover:text-pink-600 transition-colors">
                            <i class="fas fa-heart" id="favorite-icon"></i>
                            <span id="favorite-text">Add to Favorites</span>
                        </button>
                        <button onclick="shareDua()" class="flex items-center space-x-2 text-gray-600 hover:text-blue-600 transition-colors">
                            <i class="fas fa-share"></i>
                            <span>Share</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let currentDuas = [];
        let favorites = JSON.parse(localStorage.getItem('duaFavorites') || '[]');
        let currentDua = null;
        let audio = null;
        let isGridView = false;

        // Sample duas data
        const duasData = [
            {
                id: 1,
                title: "Morning Dua",
                category: "morning",
                arabic: "أَصْبَحْنَا وَأَصْبَحَ الْمُلْكُ لِلَّهِ، وَالْحَمْدُ لِلَّهِ، لَا إِلَهَ إِلَّا اللَّهُ وَحْدَهُ لَا شَرِيكَ لَهُ",
                transliteration: "Asbahna wa asbahal mulku lillah, walhamdulillah, la ilaha illallah wahdahu la sharika lah",
                translation: "We have reached the morning and the kingdom belongs to Allah, and all praise is due to Allah. There is no god but Allah alone, He has no partner.",
                reference: "Sahih Muslim",
                audioUrl: null
            },
            {
                id: 2,
                title: "Evening Dua",
                category: "evening",
                arabic: "أَمْسَيْنَا وَأَمْسَى الْمُلْكُ لِلَّهِ، وَالْحَمْدُ لِلَّهِ، لَا إِلَهَ إِلَّا اللَّهُ وَحْدَهُ لَا شَرِيكَ لَهُ",
                transliteration: "Amsayna wa amsal mulku lillah, walhamdulillah, la ilaha illallah wahdahu la sharika lah",
                translation: "We have reached the evening and the kingdom belongs to Allah, and all praise is due to Allah. There is no god but Allah alone, He has no partner.",
                reference: "Sahih Muslim",
                audioUrl: null
            },
            {
                id: 3,
                title: "Travel Dua",
                category: "travel",
                arabic: "سُبْحَانَ الَّذِي سَخَّرَ لَنَا هَذَا وَمَا كُنَّا لَهُ مُقْرِنِينَ وَإِنَّا إِلَى رَبِّنَا لَمُنْقَلِبُونَ",
                transliteration: "Subhanalladhi sakhkhara lana hadha wa ma kunna lahu muqrinin, wa inna ila rabbina lamunqalibun",
                translation: "Glory to Him who has subjected this to us, and we could not have done it by ourselves. And indeed, to our Lord we are to return.",
                reference: "Quran 43:13-14",
                audioUrl: null
            },
            {
                id: 4,
                title: "Protection Dua",
                category: "protection",
                arabic: "أَعُوذُ بِكَلِمَاتِ اللَّهِ التَّامَّاتِ مِنْ شَرِّ مَا خَلَقَ",
                transliteration: "A'udhu bi kalimatillahit tammati min sharri ma khalaq",
                translation: "I seek refuge in the perfect words of Allah from the evil of what He has created.",
                reference: "Sahih Muslim",
                audioUrl: null
            },
            {
                id: 5,
                title: "Forgiveness Dua",
                category: "forgiveness",
                arabic: "رَبِّ اغْفِرْ لِي وَتُبْ عَلَيَّ إِنَّكَ أَنْتَ التَّوَّابُ الرَّحِيمُ",
                transliteration: "Rabbi ighfir li wa tub 'alayya innaka antat tawwabur rahim",
                translation: "My Lord, forgive me and accept my repentance, for You are the Accepter of Repentance, the Merciful.",
                reference: "Sahih Bukhari",
                audioUrl: null
            }
        ];

        document.addEventListener('DOMContentLoaded', function() {
            loadCategories();
            loadDuas();
            
            // Event listeners
            document.getElementById('dua-search').addEventListener('input', searchDuas);
            document.getElementById('category-filter').addEventListener('change', filterByCategory);
        });

        // Load categories
        function loadCategories() {
            const categories = [
                { id: 'morning', name: 'Morning', icon: 'fas fa-sun', color: 'from-yellow-500 to-orange-500' },
                { id: 'evening', name: 'Evening', icon: 'fas fa-moon', color: 'from-indigo-500 to-purple-500' },
                { id: 'travel', name: 'Travel', icon: 'fas fa-plane', color: 'from-blue-500 to-cyan-500' },
                { id: 'protection', name: 'Protection', icon: 'fas fa-shield-alt', color: 'from-red-500 to-pink-500' },
                { id: 'forgiveness', name: 'Forgiveness', icon: 'fas fa-hands', color: 'from-green-500 to-emerald-500' },
                { id: 'guidance', name: 'Guidance', icon: 'fas fa-lightbulb', color: 'from-yellow-500 to-amber-500' },
                { id: 'health', name: 'Health', icon: 'fas fa-heart', color: 'from-pink-500 to-rose-500' },
                { id: 'family', name: 'Family', icon: 'fas fa-users', color: 'from-purple-500 to-violet-500' },
                { id: 'work', name: 'Work', icon: 'fas fa-briefcase', color: 'from-gray-500 to-slate-500' },
                { id: 'difficulties', name: 'Difficulties', icon: 'fas fa-exclamation-triangle', color: 'from-red-500 to-orange-500' }
            ];

            const container = document.getElementById('categories-grid');
            container.innerHTML = '';

            categories.forEach(category => {
                const categoryDiv = document.createElement('div');
                categoryDiv.className = 'bg-white/10 backdrop-blur-lg rounded-xl p-4 text-center cursor-pointer hover:bg-white/20 transition-all duration-300 transform hover:scale-105';
                categoryDiv.onclick = () => filterByCategory(category.id);
                
                categoryDiv.innerHTML = `
                    <div class="w-12 h-12 bg-gradient-to-r ${category.color} rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="${category.icon} text-white text-xl"></i>
                    </div>
                    <h3 class="text-purple-100 font-semibold">${category.name}</h3>
                `;
                
                container.appendChild(categoryDiv);
            });
        }

        // Load duas
        function loadDuas(duas = duasData) {
            currentDuas = duas;
            const container = document.getElementById('duas-container');
            container.innerHTML = '';

            if (duas.length === 0) {
                container.innerHTML = `
                    <div class="text-center py-12">
                        <i class="fas fa-search text-4xl text-purple-300 mb-4"></i>
                        <p class="text-purple-200 text-lg">No duas found</p>
                    </div>
                `;
                return;
            }

            duas.forEach(dua => {
                const duaDiv = document.createElement('div');
                duaDiv.className = 'bg-white/10 backdrop-blur-lg rounded-xl p-6 hover:bg-white/20 transition-all duration-300 cursor-pointer';
                duaDiv.onclick = () => openDuaModal(dua);
                
                const isFavorite = favorites.includes(dua.id);
                
                duaDiv.innerHTML = `
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-purple-100 mb-2">${dua.title}</h3>
                            <p class="text-purple-200 text-sm mb-3">${dua.category.charAt(0).toUpperCase() + dua.category.slice(1)} Dua</p>
                            <p class="text-purple-300 text-sm mb-4">${dua.translation.substring(0, 100)}${dua.translation.length > 100 ? '...' : ''}</p>
                            <div class="flex items-center space-x-4 text-sm text-purple-300">
                                <span><i class="fas fa-book mr-1"></i>${dua.reference}</span>
                                ${dua.audioUrl ? '<span><i class="fas fa-volume-up mr-1"></i>Audio Available</span>' : ''}
                            </div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button onclick="event.stopPropagation(); toggleFavorite(${dua.id})" class="text-purple-300 hover:text-pink-400 transition-colors">
                                <i class="fas fa-heart ${isFavorite ? 'text-pink-400' : ''}"></i>
                            </button>
                            <i class="fas fa-chevron-right text-purple-300"></i>
                        </div>
                    </div>
                `;
                
                container.appendChild(duaDiv);
            });
        }

        // Search duas
        function searchDuas() {
            const searchTerm = document.getElementById('dua-search').value.toLowerCase();
            const category = document.getElementById('category-filter').value;
            
            let filteredDuas = duasData;
            
            if (searchTerm) {
                filteredDuas = filteredDuas.filter(dua => 
                    dua.title.toLowerCase().includes(searchTerm) ||
                    dua.arabic.includes(searchTerm) ||
                    dua.transliteration.toLowerCase().includes(searchTerm) ||
                    dua.translation.toLowerCase().includes(searchTerm)
                );
            }
            
            if (category) {
                filteredDuas = filteredDuas.filter(dua => dua.category === category);
            }
            
            loadDuas(filteredDuas);
        }

        // Filter by category
        function filterByCategory(categoryId) {
            document.getElementById('category-filter').value = categoryId;
            searchDuas();
        }

        // Toggle favorites view
        function toggleFavorites() {
            const favoriteDuas = duasData.filter(dua => favorites.includes(dua.id));
            loadDuas(favoriteDuas);
        }

        // Toggle view
        function toggleView() {
            isGridView = !isGridView;
            // Implement grid/list view toggle
        }

        // Open dua modal
        function openDuaModal(dua) {
            currentDua = dua;
            document.getElementById('modal-dua-title').textContent = dua.title;
            document.getElementById('modal-dua-arabic').textContent = dua.arabic;
            document.getElementById('modal-dua-transliteration').textContent = dua.transliteration;
            document.getElementById('modal-dua-translation').textContent = dua.translation;
            document.getElementById('modal-dua-reference').textContent = dua.reference;
            
            const isFavorite = favorites.includes(dua.id);
            document.getElementById('favorite-icon').className = `fas fa-heart ${isFavorite ? 'text-pink-400' : ''}`;
            document.getElementById('favorite-text').textContent = isFavorite ? 'Remove from Favorites' : 'Add to Favorites';
            
            document.getElementById('dua-modal').classList.remove('hidden');
            document.getElementById('dua-modal').classList.add('flex');
        }

        // Close dua modal
        function closeDuaModal() {
            document.getElementById('dua-modal').classList.add('hidden');
            document.getElementById('dua-modal').classList.remove('flex');
            if (audio) {
                audio.pause();
            }
        }

        // Toggle favorite
        function toggleFavorite(duaId = null) {
            const id = duaId || currentDua.id;
            const index = favorites.indexOf(id);
            
            if (index > -1) {
                favorites.splice(index, 1);
            } else {
                favorites.push(id);
            }
            
            localStorage.setItem('duaFavorites', JSON.stringify(favorites));
            
            if (duaId) {
                loadDuas(currentDuas);
            } else {
                const isFavorite = favorites.includes(id);
                document.getElementById('favorite-icon').className = `fas fa-heart ${isFavorite ? 'text-pink-400' : ''}`;
                document.getElementById('favorite-text').textContent = isFavorite ? 'Remove from Favorites' : 'Add to Favorites';
            }
        }

        // Play audio
        function playAudio() {
            if (currentDua && currentDua.audioUrl) {
                if (audio) {
                    audio.pause();
                }
                audio = new Audio(currentDua.audioUrl);
                audio.play();
            } else {
                alert('Audio not available for this dua');
            }
        }

        // Share dua
        function shareDua() {
            if (navigator.share) {
                navigator.share({
                    title: currentDua.title,
                    text: currentDua.translation,
                    url: window.location.href
                });
            } else {
                // Fallback to copying to clipboard
                navigator.clipboard.writeText(`${currentDua.title}\n\n${currentDua.arabic}\n\n${currentDua.translation}`);
                alert('Dua copied to clipboard');
            }
        }
    </script>
</body>
</html>
