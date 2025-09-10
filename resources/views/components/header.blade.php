<!-- Top Bar -->
<div class="bg-gradient-to-r from-slate-800 to-slate-900 text-white py-3 px-4 border-b border-slate-700">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <div class="flex items-center space-x-6">
            <a href="mailto:smdiabete@gmail.com" class="flex items-center gap-2 text-sm hover:text-blue-300 transition-colors duration-200">
                <i class="fa-solid fa-envelope text-blue-400"></i>
                <span class="hidden sm:inline">smdiabete@gmail.com</span>
            </a>
            <a href="https://wa.me/212662630559" class="flex items-center gap-2 text-sm hover:text-emerald-300 transition-colors duration-200">
                <i class="fa-solid fa-phone text-emerald-400"></i>
                <span class="hidden sm:inline">+212 6 62 63 05 59</span>
            </a>
        </div>
        <div class="flex items-center space-x-3">
            <a href="https://www.youtube.com/@SMD81023" class="w-8 h-8 bg-red-600 hover:bg-red-700 rounded-full flex items-center justify-center transition-all duration-200 hover:scale-110">
                <i class="fab fa-youtube text-white text-sm"></i>
            </a>
            <a href="https://web.facebook.com/profile.php?id=61553634816576" class="w-8 h-8 bg-blue-600 hover:bg-blue-700 rounded-full flex items-center justify-center transition-all duration-200 hover:scale-110">
                <i class="fab fa-facebook-f text-white text-sm"></i>
            </a>
            <a href="#" class="w-8 h-8 bg-gray-800 hover:bg-gray-900 rounded-full flex items-center justify-center transition-all duration-200 hover:scale-110">
                <i class="fa-brands fa-x-twitter text-white text-sm"></i>
            </a>
            <a href="#" class="w-8 h-8 bg-blue-700 hover:bg-blue-800 rounded-full flex items-center justify-center transition-all duration-200 hover:scale-110">
                <i class="fab fa-linkedin-in text-white text-sm"></i>
            </a>
            <a href="#" class="w-8 h-8 bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 rounded-full flex items-center justify-center transition-all duration-200 hover:scale-110">
                <i class="fab fa-instagram text-white text-sm"></i>
            </a>
        </div>
    </div>
</div>

<!-- Main Header -->
<header id="main-header" class="bg-white/95 backdrop-blur-lg shadow-lg sticky top-0 z-[100] transition-all duration-300 ease-in-out border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="flex items-center group">
            <div class="relative">
                <img src="{{ asset('assets/images/logo.png') }}" alt="SMD Logo" class="h-14 w-auto transition-transform duration-200 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-600/20 to-emerald-600/20 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-200 -z-10"></div>
            </div>
        </a>

        <!-- Mobile Menu Toggle -->
        <button onclick="openMobileSidebar()" class="lg:hidden p-2 rounded-lg bg-gray-100 hover:bg-gray-200 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500" aria-label="Open Menu">
            <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        <!-- Desktop Navigation -->
        <nav class="hidden lg:flex lg:items-center lg:space-x-8">
            <a href="{{ url('/') }}" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200 relative group">
                Accueil
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-emerald-600 group-hover:w-full transition-all duration-300"></span>
            </a>
            
            <a href="{{ url('/actualities') }}" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200 relative group">
                Actualités
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-emerald-600 group-hover:w-full transition-all duration-300"></span>
            </a>
            
            <div class="relative group">
                <button class="text-gray-700 hover:text-blue-600 font-medium flex items-center gap-1 transition-colors duration-200 relative">
                    À propos
                    <i class="fas fa-chevron-down text-xs group-hover:rotate-180 transition-transform duration-200"></i>
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-emerald-600 group-hover:w-full transition-all duration-300"></span>
                </button>
                <div class="absolute top-full left-0 mt-2 w-48 bg-white rounded-lg shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                    <a href="{{ url('/abouts') }}" class="block px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-colors duration-200 rounded-t-lg">Charte</a>
                    <a href="{{ url('/members') }}" class="block px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-colors duration-200 rounded-b-lg">Bureau</a>
                </div>
            </div>
            
            <a href="{{ url('/masterclass') }}" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200 relative group">
                Formation
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-emerald-600 group-hover:w-full transition-all duration-300"></span>
            </a>
            
            <a href="{{ url('/events') }}" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200 relative group">
                Événements
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-emerald-600 group-hover:w-full transition-all duration-300"></span>
            </a>
            
            <div class="relative group">
                <button class="text-gray-700 hover:text-blue-600 font-medium flex items-center gap-1 transition-colors duration-200 relative">
                    Médiathèque
                    <i class="fas fa-chevron-down text-xs group-hover:rotate-180 transition-transform duration-200"></i>
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-emerald-600 group-hover:w-full transition-all duration-300"></span>
                </button>
                <div class="absolute top-full left-0 mt-2 w-48 bg-white rounded-lg shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                    <a href="{{ url('/galleries') }}" class="block px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-colors duration-200 rounded-t-lg">Galeries</a>
                    <a href="{{ url('/videos') }}" class="block px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-colors duration-200 rounded-b-lg">Vidéos</a>
                </div>
            </div>
            
            <a href="{{ url('/press') }}" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200 relative group">
                Presse
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-emerald-600 group-hover:w-full transition-all duration-300"></span>
            </a>
            
            <a href="{{ url('/communications') }}" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200 relative group">
                Communications
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-emerald-600 group-hover:w-full transition-all duration-300"></span>
            </a>
            
            <a href="{{ url('/attestations') }}" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200 relative group">
                Attestations
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-emerald-600 group-hover:w-full transition-all duration-300"></span>
            </a>
            
            <a href="{{ url('/contacts') }}" class="px-6 py-2 bg-gradient-to-r from-blue-600 to-emerald-600 text-white font-medium rounded-lg hover:from-blue-700 hover:to-emerald-700 transition-all duration-200 transform hover:scale-105 shadow-lg">
                Contact
            </a>
        </nav>
    </div>
</header>

<!-- Include Mobile Sidebar -->
@include('components.mobile-sidebar')

<style>
    html {
        scroll-behavior: smooth;
    }
    
    @supports (backdrop-filter: blur(12px)) {
        #main-header {
            backdrop-filter: blur(12px);
        }
    }
    
    @media (min-width: 1024px) {
        .group:hover > div {
            z-index: 100;
        }
    }
</style>
