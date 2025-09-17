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
    <div class="container mx-auto px-4 py-8">
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-yellow-300 mb-4">AI Noor</h1>
            <p class="text-xl text-yellow-100">Your Islamic AI Assistant</p>
        </div>
        
        <div class="max-w-4xl mx-auto bg-white/10 backdrop-blur-lg rounded-3xl p-6">
            <div id="chat-messages" class="h-96 overflow-y-auto mb-6 space-y-4">
                <div class="flex items-start space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full flex items-center justify-center">
                        <i class="fas fa-robot text-white"></i>
                    </div>
                    <div class="bg-gradient-to-r from-yellow-200/20 to-orange-200/20 rounded-2xl p-4">
                        <p class="text-yellow-100">Assalamu Alaikum! I'm AI Noor, your Islamic AI assistant. How can I help you today?</p>
                    </div>
                </div>
            </div>
            
            <form id="ai-form" class="flex space-x-4">
                <input 
                    type="text" 
                    id="user-input" 
                    name="prompt"
                    placeholder="Ask AI Noor about Islam, Quran, prayers..."
                    class="flex-1 px-6 py-4 bg-white/20 backdrop-blur-sm border-2 border-yellow-300/50 rounded-2xl text-white placeholder-yellow-200 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                    required
                >
                <button 
                    type="submit" 
                    class="px-8 py-4 bg-gradient-to-r from-yellow-400 to-orange-500 hover:from-yellow-500 hover:to-orange-600 text-white font-bold rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300"
                >
                    Send
                </button>
            </form>
        </div>
    </div>

    <script>
    document.getElementById('ai-form').addEventListener('submit', async function(e) {
        e.preventDefault();
        
        const prompt = document.getElementById('user-input').value.trim();
        if (!prompt) return;

        // Add user message
        addMessage(prompt, 'user');
        document.getElementById('user-input').value = '';
        
        // Show loading
        const loadingDiv = document.createElement('div');
        loadingDiv.className = 'flex items-start space-x-3';
        loadingDiv.innerHTML = `
            <div class="w-10 h-10 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full flex items-center justify-center">
                <i class="fas fa-robot text-white"></i>
            </div>
            <div class="bg-gradient-to-r from-yellow-200/20 to-orange-200/20 rounded-2xl p-4">
                <p class="text-yellow-100">AI Noor is thinking...</p>
            </div>
        `;
        document.getElementById('chat-messages').appendChild(loadingDiv);
        
        try {
            const response = await fetch('/ai-noor/generate', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ prompt: prompt, type: 'islamic' })
            });

            const data = await response.json();
            
            // Remove loading message
            loadingDiv.remove();
            
            if (data.success) {
                addMessage(data.response, 'ai');
            } else {
                addMessage('I apologize, but I encountered an error. Please try again later.', 'ai');
            }
        } catch (error) {
            loadingDiv.remove();
            addMessage('I apologize, but I encountered an error. Please try again later.', 'ai');
        }
    });

    function addMessage(content, sender) {
        const messageDiv = document.createElement('div');
        messageDiv.className = `flex items-start space-x-3 ${sender === 'user' ? 'justify-end' : ''}`;
        
        const iconDiv = document.createElement('div');
        iconDiv.className = `w-10 h-10 rounded-full flex items-center justify-center ${
            sender === 'user' ? 'bg-gradient-to-r from-blue-500 to-purple-600' : 'bg-gradient-to-r from-yellow-400 to-orange-500'
        }`;
        
        const icon = document.createElement('i');
        icon.className = `fas ${sender === 'user' ? 'fa-user' : 'fa-robot'} text-white`;
        iconDiv.appendChild(icon);
        
        const contentDiv = document.createElement('div');
        contentDiv.className = `rounded-2xl p-4 ${
            sender === 'user'
                ? 'bg-gradient-to-r from-blue-500 to-purple-600'
                : 'bg-gradient-to-r from-yellow-200/20 to-orange-200/20'
        }`;
        
        const textDiv = document.createElement('div');
        textDiv.className = sender === 'user' ? 'text-white' : 'text-yellow-100';
        textDiv.textContent = content;
        contentDiv.appendChild(textDiv);
        
        if (sender === 'user') {
            messageDiv.appendChild(contentDiv);
            messageDiv.appendChild(iconDiv);
        } else {
            messageDiv.appendChild(iconDiv);
            messageDiv.appendChild(contentDiv);
        }
        
        document.getElementById('chat-messages').appendChild(messageDiv);
        document.getElementById('chat-messages').scrollTop = document.getElementById('chat-messages').scrollHeight;
    }
    </script>
</body>
</html>
