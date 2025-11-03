<x-app-layout>
    <section class="min-h-screen bg-gradient-to-br from-blue-100 via-blue-50 to-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Main Title -->
            <div class="text-center mb-12">
                <h1 class="text-5xl md:text-6xl font-bold bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 bg-clip-text text-transparent mb-4 tracking-tight">
                    Journée Mondiale du Diabète
                </h1>
                <div class="w-32 h-1 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto rounded-full mb-4"></div>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 items-start">
                <!-- Left Side - Form -->
                <div class="order-2 lg:order-1">
                    <div class="bg-white/95 backdrop-blur-sm rounded-3xl shadow-2xl border border-blue-200/30 p-8 hover:shadow-3xl transition-all duration-300">
                        <div class="mb-8 text-center">
                            <h2 class="text-3xl font-bold text-gray-800 mb-3">Formulaire d'Inscription</h2>
                            <div class="bg-blue-50/80 rounded-xl p-4 mb-4">
                                <h3 class="text-xl font-bold text-blue-800 mb-2">Journée Mondiale du Diabète</h3>
                                <p class="text-green-600 font-semibold mb-2">Inscription gratuite MAIS obligatoire</p>
                                <p class="text-gray-700 font-medium">Le samedi 15 Novembre 2025</p>
                                <p class="text-gray-700 font-medium">Hôtel Al Massira - Laayoune</p>
                                
                                <!-- Programme Button -->
                                <div class="mt-4">
                                    <button type="button" onclick="window.open('{{ asset('assets/pdf/inscription_form/PREPROGRAMME SMD 2025.pdf') }}', '_blank')" class="w-full bg-gradient-to-r from-emerald-500 to-teal-500 hover:from-emerald-600 hover:to-teal-600 text-white py-3 px-6 rounded-lg font-semibold shadow-lg hover:shadow-xl transform hover:scale-[1.02] transition-all duration-200 flex items-center justify-center group">
                                        <svg class="w-5 h-5 mr-2 group-hover:rotate-12 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                        Voir le Programme
                                    </button>
                                </div>
                            </div>
                            <p class="text-gray-600">Rejoignez notre communauté professionnelle</p>
                        </div>

                        @if(session('success'))
                            <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-xl">
                                <p class="text-green-800 font-medium">{{ session('success') }}</p>
                            </div>
                        @endif

                        <form class="space-y-6" method="POST" action="{{ route('inscription-form.store') }}">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="group">
                                    <label class="block text-sm font-semibold text-gray-800 mb-2 group-focus-within:text-blue-600 transition-colors">Nom</label>
                                    <input type="text" name="nom" value="{{ old('nom') }}" class="w-full px-4 py-3 border-2 @error('nom') border-red-300 @else border-gray-200 @enderror rounded-xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-200 bg-gray-50/50 hover:bg-white" placeholder="Votre nom">
                                    @error('nom')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="group">
                                    <label class="block text-sm font-semibold text-gray-800 mb-2 group-focus-within:text-blue-600 transition-colors">Prénom</label>
                                    <input type="text" name="prenom" value="{{ old('prenom') }}" class="w-full px-4 py-3 border-2 @error('prenom') border-red-300 @else border-gray-200 @enderror rounded-xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-200 bg-gray-50/50 hover:bg-white" placeholder="Votre prénom">
                                    @error('prenom')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="group">
                                    <label class="block text-sm font-semibold text-gray-800 mb-2 group-focus-within:text-blue-600 transition-colors">Mail</label>
                                    <div class="relative">
                                        <input type="email" name="mail" value="{{ old('mail') }}" class="w-full px-4 py-3 pl-12 border-2 @error('mail') border-red-300 @else border-gray-200 @enderror rounded-xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-200 bg-gray-50/50 hover:bg-white" placeholder="votre@email.com">
                                        <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                                        </svg>
                                    </div>
                                    @error('mail')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="group">
                                    <label class="block text-sm font-semibold text-gray-800 mb-2 group-focus-within:text-blue-600 transition-colors">Téléphone</label>
                                    <div class="relative">
                                        <input type="tel" name="telephone" value="{{ old('telephone') }}" class="w-full px-4 py-3 pl-12 border-2 @error('telephone') border-red-300 @else border-gray-200 @enderror rounded-xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-200 bg-gray-50/50 hover:bg-white" placeholder="06 12 34 56 78">
                                        <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                        </svg>
                                    </div>
                                    @error('telephone')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="group">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Profession</label>
                                <select id="statut-select" name="statut" required class="mt-1 block w-full rounded-xl border @error('statut') border-red-300 @else border-gray-300 @enderror bg-white px-4 py-3 text-gray-900 shadow-md focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-400 transition-all duration-200" onchange="toggleCustomStatus()">
                                    <option value="">Sélectionnez votre statut</option>
                                    <option value="medecian_specialiste" {{ old('statut') == 'medecian_specialiste' ? 'selected' : '' }}>Médecin spécialiste</option>
                                    <option value="medecin_generale" {{ old('statut') == 'medecin_generale' ? 'selected' : '' }}>Médecin généraliste</option>
                                    <option value="paramedical" {{ old('statut') == 'paramedical' ? 'selected' : '' }}>Paramédical</option>
                                    <option value="autre" {{ old('statut') == 'autre' ? 'selected' : '' }}>Autre</option>
                                </select>
                                <div id="custom-status" class="{{ old('statut') == 'autre' ? '' : 'hidden' }} mt-3">
                                    <input type="text" id="custom-status-input" name="custom_status" value="{{ old('custom_status') }}" class="w-full px-4 py-3 border-2 border-blue-200 rounded-xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-200 bg-blue-50/50" placeholder="Précisez votre statut...">
                                </div>
                                @error('statut')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit" class="w-full bg-gradient-to-r from-indigo-500 to-purple-500 hover:from-indigo-600 hover:to-purple-600 text-white py-4 px-8 rounded-xl font-semibold text-lg shadow-lg hover:shadow-xl transform hover:scale-[1.03] transition-all duration-200 focus:ring-4 focus:ring-indigo-400/50">
                                <span class="flex items-center justify-center">
                                    S'inscrire
                                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                </span>
                            </button>
                            
                            <!-- Organization Committee Contact -->
                            <div class="mt-6 p-4 bg-gradient-to-r from-gray-50 to-blue-50 rounded-xl border border-gray-200">
                                <div class="flex items-center justify-center">
                                    <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                    <p class="text-gray-700 font-medium">
                                        <span class="text-blue-800 font-semibold">Comité d'organisation :</span> 
                                        <a href="tel:+212645616510" class="text-blue-600 hover:text-blue-800 font-semibold hover:underline transition-colors duration-200">+212 645-616510</a>
                                    </p>
                                </div>
                            </div>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                </span>
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Right Side - Affiche -->
                <div class="order-1 lg:order-2">
                    <div class="sticky top-8">
                        <div class="relative group">
                            <div class="absolute -inset-6 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 rounded-3xl blur-xl opacity-20 group-hover:opacity-30 transition-all duration-500"></div>
                            <div class="relative bg-white/10 backdrop-blur-sm rounded-3xl p-4 border border-white/20">
                                <img src="{{ asset('assets/images/inscription_form/affiche.jpeg') }}" 
                                     alt="Affiche Journée Mondiale du Diabète" 
                                     class="w-full rounded-2xl shadow-2xl transform group-hover:scale-[1.02] transition-transform duration-500">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        </div>
    </section>

        <!-- Bottom Affiche -->
    <section class="py-16 bg-gradient-to-r from-blue-50 to-indigo-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative group">
                <div class="absolute -inset-6 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-3xl blur opacity-15 group-hover:opacity-25 transition duration-300"></div>
                <img src="{{ asset('assets/images/inscription_form/affiche_two.jpeg') }}" 
                     alt="Affiche Two" 
                     class="relative w-full rounded-3xl shadow-2xl transform group-hover:scale-[1.02] transition-transform duration-300">
            </div>
        </div>
    </section>

    <script>
        function toggleCustomStatus() {
            const select = document.getElementById('statut-select');
            const customDiv = document.getElementById('custom-status');
            const customInput = document.getElementById('custom-status-input');
            
            if (select.value === 'autre') {
                customDiv.classList.remove('hidden');
                customDiv.classList.add('animate-fade-in');
                customInput.focus();
            } else {
                customDiv.classList.add('hidden');
                customInput.value = '';
            }
        }
    </script>

    <style>
        @keyframes fade-in {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in {
            animation: fade-in 0.3s ease-out;
        }
    </style>
</x-app-layout>
