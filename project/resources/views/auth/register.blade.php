<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-900 to-indigo-800">
        <div class="w-full max-w-md bg-white/95 backdrop-blur-sm shadow-2xl rounded-2xl p-8">
            <div class="text-center mb-8">
                <h1 class="text-2xl font-bold text-indigo-600">Inscription</h1>
            </div>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4 text-red-600 font-medium" :errors="$errors" />

            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-semibold text-gray-800">{{ __('Nom') }}</label>
                    <div class="mt-1 relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <input id="name" class="pl-10 block w-full px-4 py-3 border-0 bg-gray-50 rounded-xl shadow-inner focus:ring-2 focus:ring-indigo-500 focus:bg-white transition" type="text" name="name" :value="old('name')" required autofocus placeholder="ayoub labit" />
                    </div>
                </div>

                <!-- Email Address -->
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-800">{{ __('Email') }}</label>
                    <div class="mt-1 relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                            </svg>
                        </span>
                        <input id="email" class="pl-10 block w-full px-4 py-3 border-0 bg-gray-50 rounded-xl shadow-inner focus:ring-2 focus:ring-indigo-500 focus:bg-white transition" type="email" name="email" :value="old('email')" required placeholder="ayoub@email.com" />
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-semibold text-gray-800">{{ __('Mot de passe') }}</label>
                    <div class="mt-1 relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </span>
                        <input id="password" class="pl-10 block w-full px-4 py-3 border-0 bg-gray-50 rounded-xl shadow-inner focus:ring-2 focus:ring-indigo-500 focus:bg-white transition" type="password" name="password" required autocomplete="new-password" placeholder="••••••••" />
                    </div>
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-semibold text-gray-800">{{ __('Confirmer le mot de passe') }}</label>
                    <div class="mt-1 relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </span>
                        <input id="password_confirmation" class="pl-10 block w-full px-4 py-3 border-0 bg-gray-50 rounded-xl shadow-inner focus:ring-2 focus:ring-indigo-500 focus:bg-white transition" type="password" name="password_confirmation" required placeholder="••••••••" />
                    </div>
                </div>

                <div class="flex items-center justify-end mt-6">
                    <a class="text-sm text-indigo-600 hover:text-indigo-800 font-medium hover:underline transition" href="{{ route('login') }}">
                        {{ __('Déjà inscrit ?') }}
                    </a>

                    <button type="submit" class="ml-4 bg-indigo-600 text-white py-3 px-6 rounded-xl hover:bg-indigo-700 shadow-lg hover:shadow-indigo-200 transition font-medium text-base">
                        {{ __('S\'inscrire') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>