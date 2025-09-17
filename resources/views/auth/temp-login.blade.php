<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Temporary Login - Sample Accounts') }}
    </div>

    <div class="mb-6 p-4 bg-blue-50 dark:bg-blue-900/20 rounded-lg">
        <h3 class="font-semibold text-blue-800 dark:text-blue-200 mb-2">Sample Accounts:</h3>
        <div class="text-sm text-blue-700 dark:text-blue-300 space-y-1">
            <div><strong>Admin:</strong> admin@tijaniyahmuslimpro.com / admin123</div>
            <div><strong>User:</strong> user@tijaniyahmuslimpro.com / user123</div>
            <div><strong>User:</strong> ahmad@example.com / password123</div>
            <div><strong>User:</strong> fatima@example.com / password123</div>
            <div><strong>Admin:</strong> imam@example.com / password123</div>
        </div>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('temp-login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
