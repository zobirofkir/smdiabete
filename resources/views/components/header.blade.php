<!-- Top Bar -->
<div class="bg-gradient-to-r from-slate-800 to-slate-900 text-white py-3 px-4 border-b border-slate-700" id="header">
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
        <button id="menu-toggle" class="lg:hidden p-2 rounded-lg bg-gray-100 hover:bg-gray-200 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500" aria-label="Open Menu">
            <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        <!-- Navigation Menu -->
        <nav id="menu" role="navigation" class="fixed top-0 right-0 h-screen lg:h-auto w-80 bg-white/95 backdrop-blur-lg shadow-2xl transform translate-x-full transition-transform duration-300 ease-in-out lg:static lg:translate-x-0 lg:shadow-none lg:bg-transparent lg:flex lg:flex-row lg:items-center lg:space-x-8 lg:w-auto z-[9999]"
            <!-- Close Button (Mobile) -->
            <button id="close-menu" class="absolute top-6 right-6 p-2 rounded-lg bg-gray-100 hover:bg-gray-200 transition-colors duration-200 lg:hidden" aria-label="Close Menu">
                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <!-- Menu Items -->
            <ul class="flex flex-col lg:flex-row space-y-6 lg:space-y-0 lg:space-x-8 mt-20 lg:mt-0 px-8 lg:px-0">
                <!-- Mobile Logo -->
                <div class="flex items-center justify-center lg:hidden mb-8">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="h-16">
                </div>

                <!-- Links -->
                <li>
                    <a href="{{ url('/') }}" class="text-gray-700 hover:text-blue-600 font-medium py-2 lg:py-0 block transition-colors duration-200 relative group">
                        Accueil
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-emerald-600 group-hover:w-full transition-all duration-300"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/actualities') }}" class="text-gray-700 hover:text-blue-600 font-medium py-2 lg:py-0 block transition-colors duration-200 relative group">
                        Actualités
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-emerald-600 group-hover:w-full transition-all duration-300"></span>
                    </a>
                </li>
                <li class="relative group">
                    <button onclick="toggleDropdown(this)" class="text-gray-700 hover:text-blue-600 font-medium py-2 lg:py-0 flex items-center gap-1 transition-colors duration-200 whitespace-nowrap relative w-full text-left">
                        À propos
                        <i class="fas fa-chevron-down text-xs group-hover:rotate-180 lg:group-hover:rotate-180 transition-transform duration-200"></i>
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-emerald-600 group-hover:w-full transition-all duration-300"></span>
                    </button>
                    <div class="hidden lg:absolute lg:top-full lg:left-0 lg:mt-2 lg:w-48 lg:bg-white lg:rounded-lg lg:shadow-xl lg:border lg:border-gray-100 lg:opacity-0 lg:invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 lg:z-50 lg:block">
                        <a href="{{ url('/abouts') }}" class="block px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-colors duration-200 lg:rounded-t-lg">Charte</a>
                        <a href="{{ url('/members') }}" class="block px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-colors duration-200 lg:rounded-b-lg">Bureau</a>
                    </div>
                </li>

                <li>
                    <a href="{{ url('/masterclass') }}" class="text-gray-700 hover:text-blue-600 font-medium py-2 lg:py-0 block transition-colors duration-200 relative group">
                        Formation
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-emerald-600 group-hover:w-full transition-all duration-300"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/events') }}" class="text-gray-700 hover:text-blue-600 font-medium py-2 lg:py-0 block transition-colors duration-200 relative group">
                        Événements
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-emerald-600 group-hover:w-full transition-all duration-300"></span>
                    </a>
                </li>
                <li class="relative group">
                    <button onclick="toggleDropdown(this)" class="text-gray-700 hover:text-blue-600 font-medium py-2 lg:py-0 flex items-center gap-1 transition-colors duration-200 relative w-full text-left">
                        Médiathèque
                        <i class="fas fa-chevron-down text-xs group-hover:rotate-180 lg:group-hover:rotate-180 transition-transform duration-200"></i>
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-emerald-600 group-hover:w-full transition-all duration-300"></span>
                    </button>
                    <div class="hidden lg:absolute lg:top-full lg:left-0 lg:mt-2 lg:w-48 lg:bg-white lg:rounded-lg lg:shadow-xl lg:border lg:border-gray-100 lg:opacity-0 lg:invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 lg:z-50 lg:block">
                        <a href="{{ url('/galleries') }}" class="block px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-colors duration-200 lg:rounded-t-lg">Galeries</a>
                        <a href="{{ url('/videos') }}" class="block px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-colors duration-200 lg:rounded-b-lg">Vidéos</a>
                    </div>
                </li>
                <li>
                    <a href="{{ url('/press') }}" class="text-gray-700 hover:text-blue-600 font-medium py-2 lg:py-0 block transition-colors duration-200 relative group">
                        Presse
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-emerald-600 group-hover:w-full transition-all duration-300"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/communications') }}" class="text-gray-700 hover:text-blue-600 font-medium py-2 lg:py-0 block transition-colors duration-200 relative group">
                        Communications
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-emerald-600 group-hover:w-full transition-all duration-300"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/attestations') }}" class="text-gray-700 hover:text-blue-600 font-medium py-2 lg:py-0 block transition-colors duration-200 relative group">
                        Attestations
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-emerald-600 group-hover:w-full transition-all duration-300"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/contacts') }}" class="px-6 py-2 bg-gradient-to-r from-blue-600 to-emerald-600 text-white font-medium rounded-lg hover:from-blue-700 hover:to-emerald-700 transition-all duration-200 transform hover:scale-105 shadow-lg">
                        Contact
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<script>
    function toggleDropdown(button) {
        if (window.innerWidth < 1024) {
            const dropdown = button.nextElementSibling;
            const icon = button.querySelector('i');
            
            dropdown.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');
        }
    }
</script>
                </li>
            </ul>
        </nav>
    </div>
</header>

<style>
    /* Smooth scrolling for anchor links */
    html {
        scroll-behavior: smooth;
    }
    
    /* Header backdrop blur support */
    @supports (backdrop-filter: blur(12px)) {
        #main-header {
            backdrop-filter: blur(12px);
        }
    }
    
    /* Mobile menu overlay */
    #menu.translate-x-0::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.6);
        z-index: 9998;
        backdrop-filter: blur(4px);
    }
    
    /* Ensure mobile menu is above everything */
    @media (max-width: 1023px) {
        #menu {
            z-index: 9999 !important;
        }
        
        #menu.translate-x-0 {
            transform: translateX(0) !important;
        }
        
        /* Enhanced mobile menu styling */
        #menu ul {
            padding-top: 2rem;
        }
        
        #menu li a, #menu li button {
            padding: 1rem 0;
            border-bottom: 1px solid rgba(229, 231, 235, 0.3);
            font-size: 1.1rem;
        }
        
        #menu li:last-child a {
            border-bottom: none;
            margin-top: 1rem;
        }
    }
    
    @media (min-width: 1024px) {
        #menu.translate-x-0::before {
            display: none;
        }
        
        /* Desktop dropdown z-index */
        .group:hover > div {
            z-index: 100;
        }
    }
    
    /* Smooth mobile menu animation */
    #menu {
        transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    /* Mobile menu backdrop blur support */
    @supports (backdrop-filter: blur(12px)) {
        @media (max-width: 1023px) {
            #menu {
                backdrop-filter: blur(12px);
            }
        }
    }
</style>
