<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Noor - Your Islamic AI Assistant</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="bg-gradient-to-br from-blue-900 via-purple-900 to-indigo-900 min-h-screen">
<div class="min-h-screen bg-gradient-to-br from-blue-900 via-purple-900 to-indigo-900 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <!-- Floating Islamic Patterns -->
        <div class="absolute top-10 left-10 w-32 h-32 bg-yellow-300/10 rounded-full animate-pulse"></div>
        <div class="absolute top-32 right-20 w-24 h-24 bg-orange-300/10 rounded-full animate-bounce"></div>
        <div class="absolute bottom-20 left-1/4 w-40 h-40 bg-red-300/10 rounded-full animate-pulse"></div>
        <div class="absolute bottom-32 right-1/3 w-28 h-28 bg-pink-300/10 rounded-full animate-bounce"></div>
        
        <!-- Floating Stars -->
        <div class="absolute top-1/4 left-1/3 w-4 h-4 bg-yellow-300 rounded-full animate-twinkle"></div>
        <div class="absolute top-1/3 right-1/4 w-3 h-3 bg-orange-300 rounded-full animate-twinkle"></div>
        <div class="absolute bottom-1/3 left-1/5 w-5 h-5 bg-red-300 rounded-full animate-twinkle"></div>
        <div class="absolute bottom-1/4 right-1/5 w-2 h-2 bg-pink-300 rounded-full animate-twinkle"></div>
    </div>

    <div class="relative z-10 container mx-auto px-4 py-8">
        <!-- Header -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full mb-4 shadow-2xl">
                <i class="fas fa-robot text-white text-3xl"></i>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold bg-gradient-to-r from-yellow-300 via-orange-400 to-red-500 bg-clip-text text-transparent mb-4">
                AI Noor
            </h1>
            <p class="text-xl text-yellow-100 mb-2">Your Islamic AI Assistant</p>
            <p class="text-lg text-yellow-200">Ask me anything about Islam, Quran, prayers, or seek spiritual guidance</p>
        </div>

        <!-- Main Chat Interface -->
        <div class="max-w-4xl mx-auto">
            <!-- Chat Container -->
            <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-6 shadow-2xl border border-white/20 mb-6">
                <!-- Chat Messages -->
                <div id="chat-messages" class="h-96 overflow-y-auto mb-6 space-y-4">
                    <!-- Welcome Message -->
                    <div class="flex items-start space-x-3">
                        <div class="w-10 h-10 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-robot text-white"></i>
                        </div>
                        <div class="bg-gradient-to-r from-yellow-200/20 to-orange-200/20 rounded-2xl p-4 max-w-3xl">
                            <p class="text-yellow-100">
                                <strong>Assalamu Alaikum!</strong> I'm AI Noor, your Islamic AI assistant. I'm here to help you with:
                            </p>
                            <ul class="mt-2 text-yellow-200 text-sm space-y-1">
                                <li>• Quranic verses and their meanings</li>
                                <li>• Prayer guidance and Islamic practices</li>
                                <li>• Islamic history and teachings</li>
                                <li>• Spiritual advice and motivation</li>
                                <li>• Halal lifestyle guidance</li>
                            </ul>
                            <p class="mt-2 text-yellow-100">How can I assist you today?</p>
                        </div>
                    </div>

                    @if(isset($searchQuery) && isset($aiResponse))
                        <!-- Search Query -->
                        <div class="flex items-start space-x-3 justify-end">
                            <div class="bg-gradient-to-r from-blue-500 to-purple-600 rounded-2xl p-4 max-w-3xl">
                                <p class="text-white">{{ $searchQuery }}</p>
                            </div>
                            <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-user text-white"></i>
                            </div>
                        </div>

                        <!-- AI Response -->
                        <div class="flex items-start space-x-3">
                            <div class="w-10 h-10 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-robot text-white"></i>
                            </div>
                            <div class="bg-gradient-to-r from-yellow-200/20 to-orange-200/20 rounded-2xl p-4 max-w-3xl">
                                <div class="text-yellow-100 whitespace-pre-wrap">{{ $aiResponse }}</div>
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Input Form -->
                <form id="ai-form" class="flex space-x-4">
                    @csrf
                    <div class="flex-1 relative">
                        <input 
                            type="text" 
                            id="user-input" 
                            name="prompt"
                            placeholder="Ask AI Noor about Islam, Quran, prayers, or anything else..."
                            class="w-full px-6 py-4 pr-12 bg-white/20 backdrop-blur-sm border-2 border-yellow-300/50 rounded-2xl text-white placeholder-yellow-200 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent"
                            required
                        >
                        <button 
                            type="button" 
                            id="voice-input-btn"
                            class="absolute right-3 top-1/2 transform -translate-y-1/2 text-yellow-300 hover:text-yellow-200 transition-colors"
                        >
                            <i class="fas fa-microphone text-xl"></i>
                        </button>
                    </div>
                    <button 
                        type="submit" 
                        id="send-btn"
                        class="px-8 py-4 bg-gradient-to-r from-yellow-400 to-orange-500 hover:from-yellow-500 hover:to-orange-600 text-white font-bold rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 flex items-center space-x-2"
                    >
                        <i class="fas fa-paper-plane"></i>
                        <span>Send</span>
                    </button>
                </form>

                <!-- Response Type Selector -->
                <div class="mt-4 flex flex-wrap gap-2 justify-center">
                    <button class="response-type-btn active px-4 py-2 bg-gradient-to-r from-yellow-400/20 to-orange-400/20 border border-yellow-300/50 rounded-full text-yellow-200 text-sm hover:bg-gradient-to-r hover:from-yellow-400/30 hover:to-orange-400/30 transition-all duration-300" data-type="islamic">
                        <i class="fas fa-mosque mr-2"></i>Islamic
                    </button>
                    <button class="response-type-btn px-4 py-2 bg-gradient-to-r from-blue-400/20 to-purple-400/20 border border-blue-300/50 rounded-full text-blue-200 text-sm hover:bg-gradient-to-r hover:from-blue-400/30 hover:to-purple-400/30 transition-all duration-300" data-type="prayer">
                        <i class="fas fa-hands mr-2"></i>Prayer
                    </button>
                    <button class="response-type-btn px-4 py-2 bg-gradient-to-r from-green-400/20 to-teal-400/20 border border-green-300/50 rounded-full text-green-200 text-sm hover:bg-gradient-to-r hover:from-green-400/30 hover:to-teal-400/30 transition-all duration-300" data-type="quran">
                        <i class="fas fa-book-quran mr-2"></i>Quran
                    </button>
                    <button class="response-type-btn px-4 py-2 bg-gradient-to-r from-pink-400/20 to-rose-400/20 border border-pink-300/50 rounded-full text-pink-200 text-sm hover:bg-gradient-to-r hover:from-pink-400/30 hover:to-rose-400/30 transition-all duration-300" data-type="general">
                        <i class="fas fa-comments mr-2"></i>General
                    </button>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
                <button class="quick-action-btn bg-gradient-to-r from-yellow-400/20 to-orange-400/20 backdrop-blur-sm rounded-2xl p-4 text-center hover:shadow-xl transition-all duration-300 transform hover:scale-105 border border-yellow-300/50" data-prompt="What are the five pillars of Islam?">
                    <i class="fas fa-mosque text-2xl text-yellow-300 mb-2"></i>
                    <h3 class="text-yellow-100 font-semibold">Five Pillars</h3>
                </button>
                <button class="quick-action-btn bg-gradient-to-r from-blue-400/20 to-purple-400/20 backdrop-blur-sm rounded-2xl p-4 text-center hover:shadow-xl transition-all duration-300 transform hover:scale-105 border border-blue-300/50" data-prompt="How do I perform the five daily prayers correctly?">
                    <i class="fas fa-hands text-2xl text-blue-300 mb-2"></i>
                    <h3 class="text-blue-100 font-semibold">Daily Prayers</h3>
                </button>
                <button class="quick-action-btn bg-gradient-to-r from-green-400/20 to-teal-400/20 backdrop-blur-sm rounded-2xl p-4 text-center hover:shadow-xl transition-all duration-300 transform hover:scale-105 border border-green-300/50" data-prompt="Share a beautiful Quranic verse with its meaning">
                    <i class="fas fa-book-quran text-2xl text-green-300 mb-2"></i>
                    <h3 class="text-green-100 font-semibold">Quranic Verse</h3>
                </button>
                <button class="quick-action-btn bg-gradient-to-r from-pink-400/20 to-rose-400/20 backdrop-blur-sm rounded-2xl p-4 text-center hover:shadow-xl transition-all duration-300 transform hover:scale-105 border border-pink-300/50" data-prompt="Give me some Islamic motivational advice">
                    <i class="fas fa-heart text-2xl text-pink-300 mb-2"></i>
                    <h3 class="text-pink-100 font-semibold">Motivation</h3>
                </button>
            </div>

            <!-- Status Indicator -->
            <div id="status-indicator" class="text-center text-yellow-200 text-sm hidden">
                <i class="fas fa-spinner fa-spin mr-2"></i>
                AI Noor is thinking...
            </div>
        </div>
    </div>
</div>

<style>
@keyframes twinkle {
    0%, 100% { opacity: 0.3; transform: scale(1); }
    50% { opacity: 1; transform: scale(1.2); }
}

.animate-twinkle {
    animation: twinkle 2s ease-in-out infinite;
}

.response-type-btn.active {
    background: linear-gradient(135deg, rgba(251, 191, 36, 0.3), rgba(251, 146, 60, 0.3));
    border-color: rgba(251, 191, 36, 0.8);
    color: #fef3c7;
}

#chat-messages::-webkit-scrollbar {
    width: 6px;
}

#chat-messages::-webkit-scrollbar-track {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 3px;
}

#chat-messages::-webkit-scrollbar-thumb {
    background: rgba(251, 191, 36, 0.5);
    border-radius: 3px;
}

#chat-messages::-webkit-scrollbar-thumb:hover {
    background: rgba(251, 191, 36, 0.7);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('ai-form');
    const userInput = document.getElementById('user-input');
    const sendBtn = document.getElementById('send-btn');
    const chatMessages = document.getElementById('chat-messages');
    const statusIndicator = document.getElementById('status-indicator');
    const responseTypeBtns = document.querySelectorAll('.response-type-btn');
    const quickActionBtns = document.querySelectorAll('.quick-action-btn');
    
    let currentResponseType = 'islamic';

    // Response type selection
    responseTypeBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            responseTypeBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            currentResponseType = this.dataset.type;
        });
    });

    // Quick action buttons
    quickActionBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const prompt = this.dataset.prompt;
            userInput.value = prompt;
            form.dispatchEvent(new Event('submit'));
        });
    });

    // Form submission
    form.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        const prompt = userInput.value.trim();
        if (!prompt) return;

        // Add user message to chat
        addMessage(prompt, 'user');
        userInput.value = '';
        
        // Show loading state
        showLoading();
        
        try {
            const response = await fetch('{{ route("ai-noor.generate") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    prompt: prompt,
                    type: currentResponseType
                })
            });

            const data = await response.json();
            
            // Hide loading state
            hideLoading();
            
            if (data.success) {
                addMessage(data.response, 'ai');
            } else {
                addMessage('I apologize, but I encountered an error. Please try again later.', 'ai');
            }
        } catch (error) {
            hideLoading();
            addMessage('I apologize, but I encountered an error. Please try again later.', 'ai');
        }
    });

    function addMessage(content, sender) {
        const messageDiv = document.createElement('div');
        messageDiv.className = `flex items-start space-x-3 ${sender === 'user' ? 'justify-end' : ''}`;
        
        const iconDiv = document.createElement('div');
        iconDiv.className = `w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0 ${
            sender === 'user' 
                ? 'bg-gradient-to-r from-blue-500 to-purple-600' 
                : 'bg-gradient-to-r from-yellow-400 to-orange-500'
        }`;
        
        const icon = document.createElement('i');
        icon.className = `fas ${sender === 'user' ? 'fa-user' : 'fa-robot'} text-white`;
        iconDiv.appendChild(icon);
        
        const contentDiv = document.createElement('div');
        contentDiv.className = `rounded-2xl p-4 max-w-3xl ${
            sender === 'user'
                ? 'bg-gradient-to-r from-blue-500 to-purple-600'
                : 'bg-gradient-to-r from-yellow-200/20 to-orange-200/20'
        }`;
        
        const textDiv = document.createElement('div');
        textDiv.className = sender === 'user' ? 'text-white' : 'text-yellow-100 whitespace-pre-wrap';
        textDiv.textContent = content;
        contentDiv.appendChild(textDiv);
        
        if (sender === 'user') {
            messageDiv.appendChild(contentDiv);
            messageDiv.appendChild(iconDiv);
        } else {
            messageDiv.appendChild(iconDiv);
            messageDiv.appendChild(contentDiv);
        }
        
        chatMessages.appendChild(messageDiv);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }

    function showLoading() {
        statusIndicator.classList.remove('hidden');
        sendBtn.disabled = true;
        sendBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> <span>Sending...</span>';
    }

    function hideLoading() {
        statusIndicator.classList.add('hidden');
        sendBtn.disabled = false;
        sendBtn.innerHTML = '<i class="fas fa-paper-plane"></i> <span>Send</span>';
    }

    // Auto-focus input
    userInput.focus();
});
</script>
</body>
</html>