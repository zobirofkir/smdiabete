<!-- Mobile Sidebar -->
<div id="mobile-sidebar" class="fixed inset-0 z-[900] lg:hidden transform translate-x-full transition-transform duration-300 ease-in-out">
    <!-- Backdrop -->
    <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" onclick="closeMobileSidebar()" aria-label="Close menu"></div>
    
    <!-- Sidebar Panel -->
    <div class="absolute right-0 top-0 h-full w-80 max-w-[85vw] bg-white shadow-2xl overflow-hidden">
        <!-- Header -->
        <div class="flex items-center justify-between p-6 border-b border-gray-100 bg-gradient-to-r from-blue-50 to-emerald-50">
            <img src="{{ asset('assets/images/logo.png') }}" alt="SMD Logo" class="h-12 w-auto">
            <button onclick="closeMobileSidebar()" class="p-2 rounded-lg hover:bg-white/80 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500" aria-label="Close menu">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Navigation -->
        <nav class="flex-1 overflow-y-auto py-4 h-[calc(100vh-120px)]">
            <ul class="space-y-1 px-4">
                <li>
                    <a href="{{ url('/') }}" onclick="closeMobileSidebar()" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-all duration-200 font-medium group">
                        <i class="fas fa-home w-5 mr-3 text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                        Accueil
                    </a>
                </li>
                
                <li>
                    <a href="{{ url('/actualities') }}" onclick="closeMobileSidebar()" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-all duration-200 font-medium group">
                        <i class="fas fa-newspaper w-5 mr-3 text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                        Actualités
                    </a>
                </li>

                <li>
                    <a href="{{ url('/abouts') }}" onclick="closeMobileSidebar()" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-all duration-200 font-medium group">
                        <i class="fas fa-info-circle w-5 mr-3 text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                        À propos
                    </a>
                </li>

                <li>
                    <a href="{{ url('/masterclass') }}" onclick="closeMobileSidebar()" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-all duration-200 font-medium group">
                        <i class="fas fa-graduation-cap w-5 mr-3 text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                        Formation
                    </a>
                </li>

                <li>
                    <a href="{{ url('/events') }}" onclick="closeMobileSidebar()" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-all duration-200 font-medium group">
                        <i class="fas fa-calendar-alt w-5 mr-3 text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                        Événements
                    </a>
                </li>

                <!-- Médiathèque Dropdown -->
                <li>
                    <button onclick="toggleMobileDropdown('media')" class="w-full flex items-center justify-between px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-all duration-200 font-medium group focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <div class="flex items-center">
                            <i class="fas fa-photo-video w-5 mr-3 text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                            Médiathèque
                        </div>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-200" id="media-icon"></i>
                    </button>
                    <div id="media-dropdown" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="ml-8 mt-1 space-y-1">
                            <a href="{{ url('/galleries') }}" onclick="closeMobileSidebar()" class="block px-4 py-2 text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all duration-200">Galeries</a>
                            <a href="{{ url('/videos') }}" onclick="closeMobileSidebar()" class="block px-4 py-2 text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all duration-200">Vidéos</a>
                        </div>
                    </div>
                </li>

                <li>
                    <a href="{{ url('/press') }}" onclick="closeMobileSidebar()" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-all duration-200 font-medium group">
                        <i class="fas fa-newspaper w-5 mr-3 text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                        Presse
                    </a>
                </li>

                <li>
                    <a href="{{ url('/communications') }}" onclick="closeMobileSidebar()" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-all duration-200 font-medium group">
                        <i class="fas fa-comments w-5 mr-3 text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                        Communications
                    </a>
                </li>

                <li>
                    <a href="{{ url('/attestations') }}" onclick="closeMobileSidebar()" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-all duration-200 font-medium group">
                        <i class="fas fa-certificate w-5 mr-3 text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                        Attestations
                    </a>
                </li>
            </ul>

            <!-- Contact Button -->
            <div class="px-4 mt-6 pb-4">
                <a href="{{ url('/contacts') }}" onclick="closeMobileSidebar()" class="block w-full px-6 py-3 bg-gradient-to-r from-blue-600 to-emerald-600 text-white text-center font-medium rounded-lg hover:from-blue-700 hover:to-emerald-700 transition-all duration-200 shadow-lg transform hover:scale-[1.02] active:scale-[0.98]">
                    <i class="fas fa-envelope mr-2"></i>
                    Contact
                </a>
            </div>
        </nav>
    </div>
</div>

<script>
function openMobileSidebar() {
    const sidebar = document.getElementById('mobile-sidebar');
    sidebar.classList.remove('translate-x-full');
    document.body.style.overflow = 'hidden';
    
    // Add keyboard event listener for ESC key
    document.addEventListener('keydown', handleEscapeKey);
}

function closeMobileSidebar() {
    const sidebar = document.getElementById('mobile-sidebar');
    sidebar.classList.add('translate-x-full');
    document.body.style.overflow = '';
    
    // Remove keyboard event listener
    document.removeEventListener('keydown', handleEscapeKey);
    
    // Close all dropdowns
    closeAllDropdowns();
}

function handleEscapeKey(event) {
    if (event.key === 'Escape') {
        closeMobileSidebar();
    }
}

function toggleMobileDropdown(type) {
    const dropdown = document.getElementById(type + '-dropdown');
    const icon = document.getElementById(type + '-icon');
    
    // Close other dropdowns
    const allDropdowns = ['media'];
    allDropdowns.forEach(dropdownType => {
        if (dropdownType !== type) {
            const otherDropdown = document.getElementById(dropdownType + '-dropdown');
            const otherIcon = document.getElementById(dropdownType + '-icon');
            if (otherDropdown && otherIcon) {
                otherDropdown.style.maxHeight = '0px';
                otherIcon.classList.remove('rotate-180');
            }
        }
    });
    
    // Toggle current dropdown
    if (dropdown.style.maxHeight === '0px' || dropdown.style.maxHeight === '') {
        dropdown.style.maxHeight = dropdown.scrollHeight + 'px';
        icon.classList.add('rotate-180');
    } else {
        dropdown.style.maxHeight = '0px';
        icon.classList.remove('rotate-180');
    }
}

function closeAllDropdowns() {
    const dropdowns = ['media-dropdown'];
    const icons = ['media-icon'];
    
    dropdowns.forEach((dropdownId, index) => {
        const dropdown = document.getElementById(dropdownId);
        const icon = document.getElementById(icons[index]);
        if (dropdown && icon) {
            dropdown.style.maxHeight = '0px';
            icon.classList.remove('rotate-180');
        }
    });
}

// Close sidebar when clicking on links (for better UX)
document.addEventListener('DOMContentLoaded', function() {
    const sidebarLinks = document.querySelectorAll('#mobile-sidebar a');
    sidebarLinks.forEach(link => {
        link.addEventListener('click', function() {
            // Small delay to allow navigation to start
            setTimeout(closeMobileSidebar, 100);
        });
    });
});
</script>

<style>
/* Mobile sidebar specific styles */
#mobile-sidebar {
    -webkit-overflow-scrolling: touch;
}

#mobile-sidebar .absolute.right-0 {
    box-shadow: -10px 0 25px -5px rgba(0, 0, 0, 0.1), -10px 0 10px -5px rgba(0, 0, 0, 0.04);
}

/* Smooth animations for dropdowns */
#mobile-sidebar [id$="-dropdown"] {
    transition: max-height 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Focus styles for accessibility */
#mobile-sidebar button:focus,
#mobile-sidebar a:focus {
    outline: 2px solid #3b82f6;
    outline-offset: 2px;
}

/* Responsive width for very small screens */
@media (max-width: 360px) {
    #mobile-sidebar .w-80 {
        width: 100vw;
    }
}

/* Prevent body scroll when sidebar is open */
body.sidebar-open {
    overflow: hidden;
    position: fixed;
    width: 100%;
}
</style>