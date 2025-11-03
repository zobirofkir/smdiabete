<x-app-layout>
    <section class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-indigo-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Left Side - Form -->
                <div class="order-2 lg:order-1">
                    <div class="bg-white/80 backdrop-blur-sm rounded-3xl shadow-2xl border border-white/20 p-10 hover:shadow-3xl transition-all duration-300">
                        <div class="mb-10 text-center">
                            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-full mb-4">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <h1 class="text-4xl font-bold bg-gradient-to-r from-gray-900 to-gray-700 bg-clip-text text-transparent mb-3">Formulaire d'Inscription</h1>
                            <p class="text-gray-600 text-lg">Rejoignez notre communauté professionnelle</p>
                        </div>

                        <form class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="group">
                                    <label class="block text-sm font-semibold text-gray-800 mb-2 group-focus-within:text-blue-600 transition-colors">Nom</label>
                                    <input type="text" name="nom" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-200 bg-gray-50/50 hover:bg-white" placeholder="Votre nom">
                                </div>
                                <div class="group">
                                    <label class="block text-sm font-semibold text-gray-800 mb-2 group-focus-within:text-blue-600 transition-colors">Prénom</label>
                                    <input type="text" name="prenom" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-200 bg-gray-50/50 hover:bg-white" placeholder="Votre prénom">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="group">
                                    <label class="block text-sm font-semibold text-gray-800 mb-2 group-focus-within:text-blue-600 transition-colors">Mail</label>
                                    <div class="relative">
                                        <input type="email" name="mail" class="w-full px-4 py-3 pl-12 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-200 bg-gray-50/50 hover:bg-white" placeholder="votre@email.com">
                                        <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="group">
                                    <label class="block text-sm font-semibold text-gray-800 mb-2 group-focus-within:text-blue-600 transition-colors">Téléphone</label>
                                    <div class="relative">
                                        <input type="tel" name="telephone" class="w-full px-4 py-3 pl-12 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-200 bg-gray-50/50 hover:bg-white" placeholder="06 12 34 56 78">
                                        <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="group">
                                <label class="block text-sm font-semibold text-gray-800 mb-2 group-focus-within:text-blue-600 transition-colors">Statut</label>
                                <select id="statut-select" name="statut" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-200 bg-gray-50/50 hover:bg-white" onchange="toggleCustomStatus()">
                                    <option value="">Sélectionnez votre statut</option>
                                    <option value="Médecin">Médecin</option>
                                    <option value="Infirmier(ère)">Infirmier(ère)</option>
                                    <option value="Pharmacien(ne)">Pharmacien(ne)</option>
                                    <option value="Étudiant(e)">Étudiant(e)</option>
                                    <option value="autre">Autre</option>
                                </select>
                                <div id="custom-status" class="hidden mt-3">
                                    <input type="text" id="custom-status-input" name="custom_status" class="w-full px-4 py-3 border-2 border-blue-200 rounded-xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-200 bg-blue-50/50" placeholder="Précisez votre statut...">
                                </div>
                            </div>

                            <button type="submit" class="w-full bg-gradient-to-r from-indigo-500 to-purple-500 hover:from-indigo-600 hover:to-purple-600 text-white py-4 px-8 rounded-xl font-semibold text-lg shadow-lg hover:shadow-xl transform hover:scale-[1.03] transition-all duration-200 focus:ring-4 focus:ring-indigo-400/50">
                                <span class="flex items-center justify-center">
                                    S'inscrire
                                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                </span>
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Right Side - Image -->
                <div class="order-1 lg:order-2">
                    <div class="relative group">
                        <div class="absolute -inset-4 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-3xl blur opacity-20 group-hover:opacity-30 transition duration-300"></div>
                        <img src="{{ asset('assets/images/inscription_form/affiche.jpeg') }}" 
                             alt="Inscription Affiche" 
                             class="relative w-full rounded-3xl shadow-2xl transform group-hover:scale-105 transition-transform duration-300">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bottom Image -->
    <section class="py-16 bg-gradient-to-r from-gray-50 to-blue-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative group">
                <div class="absolute -inset-4 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-3xl blur opacity-10 group-hover:opacity-20 transition duration-300"></div>
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