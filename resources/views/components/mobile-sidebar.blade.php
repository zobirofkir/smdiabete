<!-- Mobile Sidebar -->
<div id="mobile-sidebar" class="fixed inset-0 z-50 lg:hidden transform translate-x-full transition-transform duration-300 ease-in-out">
    <!-- Backdrop -->
    <div class="absolute inset-0 bg-black/50 backdrop-blur-sm" onclick="closeMobileSidebar()"></div>
    
    <!-- Sidebar Panel -->
    <div class="absolute right-0 top-0 h-full w-80 bg-white shadow-2xl">
        <!-- Header -->
        <div class="flex items-center justify-between p-6 border-b border-gray-100">
            <img src="{{ asset('assets/images/logo.png') }}" alt="SMD Logo" class="h-12">
            <button onclick="closeMobileSidebar()" class="p-2 rounded-lg hover:bg-gray-100 transition-colors">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Navigation -->
        <nav class="flex-1 overflow-y-auto py-6">
            <ul class="space-y-2 px-4">
                <li>
                    <a href="{{ url('/') }}" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors font-medium">
                        <i class="fas fa-home w-5 mr-3 text-gray-400"></i>
                        Accueil
                    </a>
                </li>
                
                <li>
                    <a href="{{ url('/actualities') }}" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors font-medium">
                        <i class="fas fa-newspaper w-5 mr-3 text-gray-400"></i>
                        Actualités
                    </a>
                </li>

                <!-- À propos Dropdown -->
                <li>
                    <button onclick="toggleMobileDropdown('about')" class="w-full flex items-center justify-between px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors font-medium">
                        <div class="flex items-center">
                            <i class="fas fa-info-circle w-5 mr-3 text-gray-400"></i>
                            À propos
                        </div>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-200" id="about-icon"></i>
                    </button>
                    <div id="about-dropdown" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="ml-8 mt-2 space-y-1">
                            <a href="{{ url('/abouts') }}" class="block px-4 py-2 text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors">Charte</a>
                            <a href="{{ url('/members') }}" class="block px-4 py-2 text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors">Bureau</a>
                        </div>
                    </div>
                </li>

                <li>
                    <a href="{{ url('/masterclass') }}" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors font-medium">
                        <i class="fas fa-graduation-cap w-5 mr-3 text-gray-400"></i>
                        Formation
                    </a>
                </li>

                <li>
                    <a href="{{ url('/events') }}" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors font-medium">
                        <i class="fas fa-calendar-alt w-5 mr-3 text-gray-400"></i>
                        Événements
                    </a>
                </li>

                <!-- Médiathèque Dropdown -->
                <li>
                    <button onclick="toggleMobileDropdown('media')" class="w-full flex items-center justify-between px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors font-medium">
                        <div class="flex items-center">
                            <i class="fas fa-photo-video w-5 mr-3 text-gray-400"></i>
                            Médiathèque
                        </div>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-200" id="media-icon"></i>
                    </button>
                    <div id="media-dropdown" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="ml-8 mt-2 space-y-1">
                            <a href="{{ url('/galleries') }}" class="block px-4 py-2 text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors">Galeries</a>
                            <a href="{{ url('/videos') }}" class="block px-4 py-2 text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors">Vidéos</a>
                        </div>
                    </div>
                </li>

                <li>
                    <a href="{{ url('/press') }}" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors font-medium">
                        <i class="fas fa-newspaper w-5 mr-3 text-gray-400"></i>
                        Presse
                    </a>
                </li>

                <li>
                    <a href="{{ url('/communications') }}" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors font-medium">
                        <i class="fas fa-comments w-5 mr-3 text-gray-400"></i>
                        Communications
                    </a>
                </li>

                <li>
                    <a href="{{ url('/attestations') }}" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors font-medium">
                        <i class="fas fa-certificate w-5 mr-3 text-gray-400"></i>
                        Attestations
                    </a>
                </li>
            </ul>

            <!-- Contact Button -->
            <div class="px-4 mt-6">
                <a href="{{ url('/contacts') }}" class="block w-full px-6 py-3 bg-gradient-to-r from-blue-600 to-emerald-600 text-white text-center font-medium rounded-lg hover:from-blue-700 hover:to-emerald-700 transition-all duration-200 shadow-lg">
                    Contact
                </a>
            </div>
        </nav>
    </div>
</div>

<script>
function openMobileSidebar() {
    document.getElementById('mobile-sidebar').classList.remove('translate-x-full');
    document.body.style.overflow = 'hidden';
}

function closeMobileSidebar() {
    document.getElementById('mobile-sidebar').classList.add('translate-x-full');
    document.body.style.overflow = '';
}

function toggleMobileDropdown(type) {
    const dropdown = document.getElementById(type + '-dropdown');
    const icon = document.getElementById(type + '-icon');
    
    if (dropdown.style.maxHeight === '0px' || dropdown.style.maxHeight === '') {
        dropdown.style.maxHeight = dropdown.scrollHeight + 'px';
        icon.classList.add('rotate-180');
    } else {
        dropdown.style.maxHeight = '0px';
        icon.classList.remove('rotate-180');
    }
}
</script>