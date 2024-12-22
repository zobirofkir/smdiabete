<div class="flex bg-sky-500 text-white justify-between py-2 px-4" id="header">
    <div class="flex items-center">
        <span class="mr-4">zobirofkir19@gmail.com</span>
    </div>
    <div class="flex items-center space-x-4">
        <a href="#" class="text-white hover:text-gray-200">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="text-white hover:text-gray-200">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="text-white hover:text-gray-200">
            <i class="fab fa-linkedin-in"></i>
        </a>
        <a href="#" class="text-white hover:text-gray-200">
            <i class="fab fa-instagram"></i>
        </a>
    </div>
</div>

<header class="bg-white shadow-md sticky top-0 z-50 transition-all duration-300 ease-in-out" id="main-header">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <a href="/" class="flex items-center">
            <img src="{{asset('assets/images/logo.png')}}" alt="Logo" class="h-12">
        </a>

        <button id="menu-toggle" class="block lg:hidden text-gray-500 focus:outline-none" aria-label="Open Menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        <nav id="menu" role="navigation" class="fixed top-0 right-0 h-full w-64 bg-gray-50 shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out lg:static lg:translate-x-0 lg:shadow-none lg:bg-transparent lg:flex lg:flex-row lg:items-center lg:space-x-6 lg:h-auto lg:w-auto z-[999]">
            <button id="close-menu" class="absolute top-4 right-4 text-gray-500 lg:hidden" aria-label="Close Menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <ul class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4 mt-12 lg:mt-0 px-6 lg:px-0">
                <li><a href="/" class="text-gray-700 hover:text-gray-900 block focus:outline-none focus:text-gray-900">Accueil</a></li>
                <li><a href="/actualities" class="text-gray-700 hover:text-gray-900 block focus:outline-none focus:text-gray-900">Actualité</a></li>
                <li><a href="/abouts" class="text-gray-700 hover:text-gray-900 block focus:outline-none focus:text-gray-900">À propos</a></li>
                <li><a href="/events" class="text-gray-700 hover:text-gray-900 block focus:outline-none focus:text-gray-900">Événements</a></li>
                <li><a href="/login" class="text-gray-700 hover:text-gray-900 block focus:outline-none focus:text-gray-900">Identification</a></li>
                <li><a href="/contacts" class="text-gray-700 hover:text-gray-900 block focus:outline-none focus:text-gray-900">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
