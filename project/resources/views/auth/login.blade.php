<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-900 to-indigo-800">
        <div class="w-full max-w-md bg-white/95 backdrop-blur-sm shadow-2xl rounded-2xl p-8">
            <div class="text-center mb-8">
                <h1 class="text-2xl font-bold text-indigo-600">Connexion</h1>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4 text-green-600 font-medium" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4 text-red-600 font-medium" :errors="$errors" />

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <!-- Email Address -->
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-800">Email</label>
                    <div class="mt-1 relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                            </svg>
                        </span>
                        <input id="email" class="pl-10 block w-full px-4 py-3 border-0 bg-gray-50 rounded-xl shadow-inner focus:ring-2 focus:ring-indigo-500 focus:bg-white transition" type="email" name="email" :value="old('email')" required autofocus placeholder="ayoub@email.com">
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-semibold text-gray-800">Mot de passe</label>
                    <div class="mt-1 relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </span>
                        <input id="password" class="pl-10 block w-full px-4 py-3 border-0 bg-gray-50 rounded-xl shadow-inner focus:ring-2 focus:ring-indigo-500 focus:bg-white transition" type="password" name="password" required autocomplete="current-password" placeholder="••••••••">
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember" class="rounded-md border-gray-300 text-indigo-600 focus:ring-indigo-500 shadow-sm">
                        <span class="ml-2 text-sm text-gray-700">Se souvenir de moi</span>
                    </label>
                    @if (Route::has('password.request'))
                        <a class="text-sm text-indigo-600 hover:text-indigo-800 font-medium hover:underline transition" href="{{ route('password.request') }}">
                            Mot de passe oublié ?
                        </a>
                    @endif
                </div>

                <button type="submit" class="w-full bg-indigo-600 text-white py-3 px-4 rounded-xl hover:bg-indigo-700 shadow-lg hover:shadow-indigo-200 transition font-medium text-base">
                    Se connecter
                </button>
            </form>

            <div class="mt-8 text-center">
                <p class="text-gray-600 text-sm">
                    Pas encore de compte ? 
                    <a href="{{ route('register') }}" class="text-indigo-600 font-medium hover:underline">
                        S'inscrire
                    </a>
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>