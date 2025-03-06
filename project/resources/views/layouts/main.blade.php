<!-- filepath: /c:/Users/Youcode/Desktop/YouQuizz/project/resources/views/layouts/main.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouCode - @yield('title', 'Coding School')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4F46E5', // Indigo (couleur principale de YouCode)
                        secondary: '#1F2937', // Gris foncé
                        accent: '#10B981', // Vert émeraude
                    },
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                    },
                    boxShadow: {
                        'soft': '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
                        'hard': '0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)',
                    },
                }
            }
        }
    </script>
    @yield('styles')
</head>
<body class="font-poppins text-gray-800 bg-gray-50">
<!-- Header -->
<header class="bg-white fixed w-full top-0 z-50 shadow-sm">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <!-- Logo -->
        <div class="logo">
            <a href="/">
                <img src="{{ asset('images/logo.png') }}" alt="YouCode Logo" class="h-10">
            </a>
        </div>
        
        <!-- Navigation -->
        <nav class="hidden md:flex space-x-8">
            <a href="/" class="font-medium text-gray-700 hover:text-primary transition-colors">Accueil</a>
            <a href="/programs" class="font-medium text-gray-700 hover:text-primary transition-colors">Programmes</a>
            <a href="/admission" class="font-medium text-gray-700 hover:text-primary transition-colors">Admission</a>
            <a href="/about" class="font-medium text-gray-700 hover:text-primary transition-colors">À propos</a>
            <a href="/contact" class="font-medium text-gray-700 hover:text-primary transition-colors">Contact</a>
        </nav>
        
        <!-- Boutons de connexion et inscription / déconnexion -->
        <div class="hidden md:flex space-x-4">
            @if(Auth::check())
                <!-- Si l'utilisateur est connecté, afficher les boutons de dashboard et déconnexion -->
                @php
                    $dashboardRoute = 'candidat.dashboard'; // Route par défaut
                    if(Auth::user()->role == 'admin') {
                        $dashboardRoute = 'admin.dashboard';
                    } elseif(Auth::user()->role == 'staff') {
                        $dashboardRoute = 'staff.dashboard';
                    }
                @endphp
                
                <a href="{{ route($dashboardRoute) }}" class="px-4 py-2 rounded-md bg-primary text-white font-semibold hover:bg-primary/90 transition-colors">Dashboard</a>
                
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="px-4 py-2 rounded-md border-2 border-primary text-primary font-semibold hover:bg-primary hover:text-white transition-colors">Déconnexion</button>
                </form>
            @else
                <!-- Si l'utilisateur n'est pas connecté, afficher les boutons de connexion et d'inscription -->
                <a href="{{ route('login') }}" class="px-4 py-2 rounded-md border-2 border-primary text-primary font-semibold hover:bg-primary hover:text-white transition-colors">Connexion</a>
                <a href="{{ route('register') }}" class="px-4 py-2 rounded-md bg-primary text-white font-semibold hover:bg-primary/90 transition-colors">Inscription</a>
            @endif
        </div>
        
        <!-- Bouton du menu mobile -->
        <button class="md:hidden text-gray-700" id="mobile-menu-button">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>
    
    <!-- Menu mobile -->
    <div class="md:hidden hidden bg-white w-full absolute top-full left-0 shadow-md" id="mobile-menu">
        <div class="container mx-auto px-4 py-4 flex flex-col space-y-4">
            <a href="/" class="font-medium text-gray-700 py-2">Accueil</a>
            <a href="/programs" class="font-medium text-gray-700 py-2">Programmes</a>
            <a href="/admission" class="font-medium text-gray-700 py-2">Admission</a>
            <a href="/about" class="font-medium text-gray-700 py-2">À propos</a>
            <a href="/contact" class="font-medium text-gray-700 py-2">Contact</a>
            <div class="flex flex-col space-y-2">
                @if(Auth::check())
                    <!-- Menu mobile : boutons de dashboard et déconnexion -->
                    @php
                        $dashboardRoute = 'candidat.dashboard'; // Route par défaut
                        if(Auth::user()->role == 'admin') {
                            $dashboardRoute = 'admin.dashboard';
                        } elseif(Auth::user()->role == 'staff') {
                            $dashboardRoute = 'staff.dashboard';
                        }
                    @endphp
                    
                    <a href="{{ route($dashboardRoute) }}" class="px-4 py-2 rounded-md bg-primary text-white font-semibold text-center">Dashboard</a>
                    
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="px-4 py-2 rounded-md border-2 border-primary text-primary font-semibold text-center">Déconnexion</button>
                    </form>
                @else
                    <!-- Menu mobile : boutons de connexion et d'inscription -->
                    <a href="{{ route('login') }}" class="px-4 py-2 rounded-md border-2 border-primary text-primary font-semibold text-center">Connexion</a>
                    <a href="{{ route('register') }}" class="px-4 py-2 rounded-md bg-primary text-white font-semibold text-center">Inscription</a>
                @endif
            </div>
        </div>
    </div>
</header>

<!-- Script pour le menu mobile -->
<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>

<main class="pt-20">
    @yield('content')
</main>

<!-- Footer -->
<footer class="bg-secondary text-gray-300 pt-16 pb-6">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            <!-- Contenu du footer ici -->
        </div>
        <div class="pt-6 border-t border-gray-700 text-center text-gray-400 text-sm">
            <p>&copy; {{ date('Y') }} YouCode. Tous droits réservés.</p>
        </div>
    </div>
</footer>

@yield('scripts')
</body>
</html>