<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-emerald-50 via-white to-teal-50 py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <!-- Header -->
                <div class="text-center mb-12">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-emerald-600 to-teal-600 rounded-full mb-6">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-emerald-600 to-teal-600 bg-clip-text text-transparent mb-4">
                        Demande d'Attestation
                    </h1>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Obtenez votre attestation de participation ou de communication en quelques clics
                    </p>
                </div>

                <!-- Form Card -->
                <div class="bg-white rounded-3xl shadow-2xl p-8 lg:p-12 border border-gray-100">
                    <form method="POST" action="{{ route('attestation.store') }}" class="space-y-8">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Nom -->
                            <div class="space-y-2">
                                <label for="nom" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <span class="flex items-center">
                                        <svg class="w-4 h-4 mr-2 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                        </svg>
                                        Nom
                                    </span>
                                </label>
                                <input type="text" id="nom" name="nom" required
                                    class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 transition-all duration-300 text-gray-800 placeholder-gray-400"
                                    placeholder="Votre nom">
                            </div>

                            <!-- Prénom -->
                            <div class="space-y-2">
                                <label for="prenom" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <span class="flex items-center">
                                        <svg class="w-4 h-4 mr-2 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                        </svg>
                                        Prénom
                                    </span>
                                </label>
                                <input type="text" id="prenom" name="prenom" required
                                    class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 transition-all duration-300 text-gray-800 placeholder-gray-400"
                                    placeholder="Votre prénom">
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="space-y-2">
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                    </svg>
                                    Adresse email
                                </span>
                            </label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 transition-all duration-300 text-gray-800 placeholder-gray-400"
                                placeholder="votre.email@exemple.com">
                        </div>

                        <!-- Type d'attestation -->
                        <div class="space-y-2">
                            <label for="attestation" class="block text-sm font-semibold text-gray-700 mb-2">
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    Type d'attestation
                                </span>
                            </label>
                            <select id="attestation" name="attestation" required
                                class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 transition-all duration-300 text-gray-800 bg-white">
                                <option value="" class="text-gray-400">-- Sélectionnez le type d'attestation --</option>
                                <option value="presence" class="text-gray-800">Attestation de présence</option>
                                <option value="affichee" class="text-gray-800">Attestation de communication affichée</option>
                                <option value="orale" class="text-gray-800">Attestation de communication orale</option>
                            </select>
                        </div>

                        <!-- Titre (conditionnel) -->
                        <div id="title-container" class="hidden space-y-2 transition-all duration-300">
                            <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"/>
                                    </svg>
                                    Titre de la communication
                                </span>
                            </label>
                            <input type="text" id="title" name="title"
                                class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:border-emerald-500 focus:ring-4 focus:ring-emerald-100 transition-all duration-300 text-gray-800 placeholder-gray-400"
                                placeholder="Titre de votre communication">
                        </div>

                        <!-- Info Box -->
                        <div class="bg-gradient-to-r from-emerald-50 to-teal-50 border border-emerald-200 rounded-xl p-6">
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-emerald-600 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                </svg>
                                <div>
                                    <h4 class="font-semibold text-emerald-800 mb-2">Information importante</h4>
                                    <p class="text-emerald-700 text-sm leading-relaxed">
                                        Votre attestation sera générée automatiquement et envoyée à l'adresse email fournie dans les plus brefs délais.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center pt-4">
                            <button type="submit"
                                class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-700 hover:to-teal-700 text-white font-semibold rounded-xl transition-all duration-300 transform hover:scale-105 hover:shadow-xl space-x-2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span>Demander l'attestation</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        const attestationSelect = document.getElementById('attestation');
        const titleContainer = document.getElementById('title-container');
        const titleInput = document.getElementById('title');

        attestationSelect.addEventListener('change', function () {
            const value = this.value;
            if (value === 'affichee' || value === 'orale') {
                titleContainer.classList.remove('hidden');
                titleInput.setAttribute('required', 'required');
            } else {
                titleContainer.classList.add('hidden');
                titleInput.removeAttribute('required');
                titleInput.value = '';
            }
        });
    </script>
</x-app-layout>