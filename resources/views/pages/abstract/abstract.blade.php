<x-app-layout>
    <div class="min-h-screen flex md:flex-row flex-col items-center justify-center bg-gradient-to-r from-blue-50 to-purple-50 p-6">
        @if (session('success'))
            <div class="fixed top-6 right-6 flex items-center gap-3 bg-green-500 text-white text-sm font-semibold px-6 py-3 rounded-lg shadow-xl transform animate-slide-in z-[999]">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>{{ session('success') }}</span>
                <button onclick="this.parentElement.remove()" class="ml-auto text-white hover:text-gray-300 transition">
                    &times;
                </button>
            </div>

            <style>
                @keyframes slide-in {
                    from {
                        transform: translateX(50px);
                        opacity: 0;
                    }
                    to {
                        transform: translateX(0);
                        opacity: 1;
                    }
                }
                .animate-slide-in {
                    animation: slide-in 0.5s ease-out;
                }
            </style>
        @endif

        <div class="max-w-6xl w-full grid grid-cols-1 md:grid-cols-2 gap-8 bg-white rounded-lg shadow-2xl overflow-hidden transition-transform duration-500 hover:scale-105">
            <!-- Left Side: Form -->
            <div class="p-8 flex flex-col justify-center relative">

                <h2 class="text-3xl font-bold text-gray-800 mb-6 animate-fade-in-down">Formulaire de Contact</h2>
                <form class="space-y-6" action="{{ route('abstract.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- First Name -->
                    <div class="animate-fade-in-left">
                        <label for="firstname" class="block text-sm font-medium text-gray-700">Prénom</label>
                        <input type="text" id="firstname" name="firstname" required
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition duration-300"
                            placeholder="Entrez votre prénom">
                    </div>
                    @error('firstname')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror

                    <!-- Last Name -->
                    <div class="animate-fade-in-left delay-100">
                        <label for="lastname" class="block text-sm font-medium text-gray-700">Nom de famille</label>
                        <input type="text" id="lastname" name="lastname" required
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition duration-300"
                            placeholder="Entrez votre nom de famille">
                    </div>
                    @error('lastname')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror

                    <!-- Email -->
                    <div class="animate-fade-in-left delay-200">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" required
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition duration-300"
                            placeholder="Entrez votre email">
                    </div>
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror

                    <!-- File Upload -->
                    <div class="animate-fade-in-left delay-300">
                        <label for="file" class="block text-sm font-medium text-gray-700">Téléverser un fichier</label>
                        <input type="file" id="file" name="file" required
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition duration-300">
                    </div>
                    @error('file')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror

                    <div class="flex justify-center items-center">
                        <p class="text-gray-800 text-center font-bold">
                            Merci de nous transmettre votre communication affichée, au format PDF en orientation portrait avant le 15 Mai 2025 à minuit
                        </p>
                    </div>

                    <!-- Submit Button -->
                    <div class="animate-fade-in-up delay-400">
                        <button type="submit"
                            class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 transition duration-300 transform hover:scale-105">
                            Envoyer
                        </button>
                    </div>
                </form>
            </div>

            <!-- Right Side: Image -->
            <div class="block overflow-hidden relative animate-fade-in-right">
                <img src="{{ asset('assets/images/affiche/affiche.jpeg') }}" alt="Affichage"
                    class="w-full h-full object-cover rounded-r-lg transition-transform duration-500 hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-50 rounded-r-lg"></div>
            </div>
        </div>
    </div>
</x-app-layout>
