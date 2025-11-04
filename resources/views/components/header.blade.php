<div class="flex bg-sky-500 text-white justify-between py-2 px-4" id="header">
    <div class="flex items-center">
        <span class="mr-4 flex items-center gap-2 whitespace-nowrap">
          <i class="fa-solid fa-envelope"></i>  smdiabete@gmail.com
        </span>
        <span class="mr-4 flex items-center gap-2 whitespace-nowrap" onclick="window.location.href='https://wa.me/212662630559'">
            <i class="fa-solid fa-phone"></i>  +212 6 62 63 05 59
        </span>
    </div>
    <div class="flex items-center space-x-4 md:block hidden">
        <a href="https://www.youtube.com/@SMD81023" class="text-white hover:text-gray-200">
            <i class="fab fa-youtube text-white bg-red-500 py-1 px-2 rounded-full"></i>
        </a>
        <a href="https://web.facebook.com/profile.php?id=61553634816576" class="text-white hover:text-gray-200">
            <i class="fab fa-facebook-f text-white bg-blue-500 py-1 px-2 rounded-full"></i>
        </a>
        <a href="#" class="text-white hover:text-gray-200">
            <i class="fa-brands fa-x-twitter text-white bg-black py-1 px-2 rounded-full"></i>
        </a>
        <a href="#" class="text-white hover:text-gray-200">
            <i class="fab fa-linkedin-in text-white bg-blue-800 py-1 px-2 rounded-full"></i>
        </a>
        <a href="#" class="text-white hover:text-gray-200">
            <i class="fab fa-instagram text-white bg-purple-500 py-1 px-2 rounded-full"></i>
        </a>
    </div>
</div>

<header
    id="main-header"
    class="bg-white shadow-md sticky top-0 z-50 transition-all duration-300 ease-in-out"
>
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="flex items-center">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="h-12">
        </a>

        <!-- Mobile Menu Toggle -->
        <button
            id="menu-toggle"
            class="block lg:hidden text-gray-500 focus:outline-none"
            aria-label="Open Menu"
        >
            <svg
                class="w-6 h-6"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16m-7 6h7"
                ></path>
            </svg>
        </button>

        <!-- Navigation Menu -->
        <nav
            id="menu"
            role="navigation"
            class="fixed top-0 right-0 h-full w-64 bg-gray-50 shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out lg:static lg:translate-x-0 lg:shadow-none lg:bg-transparent lg:flex lg:flex-row lg:items-center lg:space-x-6 lg:h-auto lg:w-auto z-[999]"
        >
            <!-- Close Button (Mobile) -->
            <button
                id="close-menu"
                class="absolute top-4 right-4 text-gray-500 lg:hidden"
                aria-label="Close Menu"
            >
                <svg
                    class="w-6 h-6"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"
                    ></path>
                </svg>
            </button>

            <!-- Menu Items -->
            <ul class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-6 mt-12 lg:mt-0 px-6 lg:px-0">
                <!-- Mobile Logo -->
                <div class="flex items-center justify-center md:hidden block mb-12">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="h-20">
                </div>

                <!-- Links -->
                <li>
                    <a href="{{ url('/') }}" class="text-gray-700 hover:text-primary block focus:outline-none focus:text-primary">
                        Accueil
                    </a>
                </li>
                {{-- <li>
                    <a href="{{ url('/actualities') }}" class="text-gray-700 hover:text-primary block focus:outline-none focus:text-primary">
                        Actualités
                    </a>
                </li> --}}
                <li>
                    <form method="GET" id="redirectForm" class="-mt-[3px]">
                        <select
                            id="abouts"
                            name="abouts"
                            class="text-gray-700 bg-white rounded-md focus:ring-2 focus:ring-primary focus:outline-none transition-all duration-200"
                            onchange="if (this.value) { window.location.href = this.value; }"
                        >
                            <option value="{{ url('/abouts') }}" {{ request()->is('abouts') ? 'selected' : '' }}>À propos</option>
                            <option value="{{ url('/abouts') }}" {{ request()->is('charts') ? 'selected' : '' }}>Charte</option>
                            <option value="{{ url('/members') }}" {{ request()->is('members') ? 'selected' : '' }}>Bureau</option>
                            {{-- <option value="#" {{ request()->is('sponsors') ? 'selected' : '' }}>Sponsors</option> --}}
                        </select>
                    </form>
                </li>

                <li>
                    <a href="{{ url('/masterclass') }}" class="text-gray-700 hover:text-primary block focus:outline-none focus:text-primary">
                        Formation
                    </a>
                </li>
                <li>
                    <a href="{{ url('/events') }}" class="text-gray-700 hover:text-primary block focus:outline-none focus:text-primary">
                        Événements
                    </a>
                </li>
                <li>
                    <form method="GET" action="">
                        <select
                            id="galleries"
                            name="galleries"
                            class="text-gray-700 bg-white rounded-md -my-2 focus:ring-2 focus:ring-primary focus:outline-none transition-all duration-200"
                            onchange="this.form.action = this.value; this.form.submit();"
                        >
                            <option value="{{ url('/') }}">Médiathèque</option>
                            <option value="{{ url('/galleries') }}">Galeries</option>
                            <option value="{{ url('/videos') }}">Vidéos</option>
                        </select>
                    </form>
                </li>
                <li>
                    <a href="{{ url('/press') }}" class="text-gray-700 hover:text-primary block focus:outline-none focus:text-primary">
                        Presse
                    </a>
                </li>
                <li>
                    <a href="{{ url('/communications') }}" class="text-gray-700 hover:text-primary block focus:outline-none focus:text-primary">
                        Communications
                    </a>
                </li>
                {{-- <li>
                    <a href="{{asset('assets/pdf/Le calendrier 2024.pdf')}}" class="text-gray-700 hover:text-primary block focus:outline-none focus:text-primary">
                        Agenda
                    </a>
                </li> --}}
                <li>
                    <a href="{{ url('/attestations') }}" class="text-gray-700 hover:text-primary block focus:outline-none focus:text-primary">
                        Attestations
                    </a>
                </li>

                <li>
                    <a href="{{ url('/contacts') }}" class="text-gray-700 hover:text-primary block focus:outline-none focus:text-primary">
                        Contact
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>
