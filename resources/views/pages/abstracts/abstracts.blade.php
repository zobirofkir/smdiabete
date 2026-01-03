<x-app-layout>
    <!-- Success Modal -->
    <div id="successModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center">
        <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full mx-4 transform transition-all duration-300 scale-95 opacity-0" id="modalContent">
            <div class="p-8 text-center">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <div class="text-4xl mb-4">📩</div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Message automatique après soumission</h3>
                <div class="text-gray-600 space-y-2">
                    <p>Merci pour votre soumission.</p>
                    <p>Votre abstract a été reçu avec succès.</p>
                    <p>Un email de confirmation vous sera envoyé.</p>
                </div>
                <button onclick="closeModal()" class="mt-6 bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-200 font-medium">
                    Fermer
                </button>
            </div>
        </div>
    </div>

    <!-- Conditions générales Modal -->
    <div id="conditionsModal" class="fixed inset-0 bg-black/60 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4 sm:p-6">
        <div id="conditionsModalContent" class="bg-white rounded-3xl shadow-2xl max-w-5xl w-full max-h-[95vh] overflow-x-hidden transform scale-95 opacity-0 transition-all duration-300 ease-out">
            <div class="flex flex-col h-full">
                <!-- Header -->
                <div class="relative p-6 sm:p-8 bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-700 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-600/20 to-transparent"></div>
                    <div class="relative flex justify-between items-center">
                        <div class="flex items-center gap-4">
                            <div class="p-3 bg-white/20 rounded-2xl backdrop-blur-sm">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-2xl sm:text-3xl font-bold text-white leading-tight">
                                    Conditions générales
                                </h2>
                                <p class="text-blue-100 text-sm mt-1">Soumission des résumés</p>
                            </div>
                        </div>
                        <button onclick="closeConditionsModal()" class="p-2 text-white/80 hover:text-white hover:bg-white/20 rounded-xl transition-all duration-200 group">
                            <svg class="w-6 h-6 group-hover:rotate-90 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="flex-1 overflow-y-auto">
                    <div class="p-6 sm:p-8 space-y-8">
                        <!-- Principales dates limites -->
                        <div class="space-y-6">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="p-2 bg-red-100 rounded-lg">
                                    <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Principales dates limites – en un coup d'œil</h3>
                            </div>
                            <div class="bg-gradient-to-r from-red-50 to-orange-50 border border-red-200 rounded-2xl p-6 space-y-4">
                                <div class="grid gap-4 sm:grid-cols-1 lg:grid-cols-2 xl:grid-cols-4">
                                    <div class="bg-white rounded-xl p-4 shadow-sm border border-red-100">
                                        <div class="text-sm text-red-600 font-medium mb-1">Date limite de soumission des abstracts</div>
                                        <div class="text-lg font-bold text-gray-900">10 février 2026</div>
                                    </div>
                                    <div class="bg-white rounded-xl p-4 shadow-sm border border-orange-100">
                                        <div class="text-sm text-orange-600 font-medium mb-1">Date limite pour l'envoi des e-posters</div>
                                        <div class="text-lg font-bold text-gray-900">15 Mars 2026</div>
                                    </div>
                                    <div class="bg-white rounded-xl p-4 shadow-sm border border-green-100">
                                        <div class="text-sm text-green-600 font-medium mb-1">Début du congrès</div>
                                        <div class="text-lg font-bold text-gray-900">26 mars 2026</div>
                                    </div>
                                    <div class="bg-white rounded-xl p-4 shadow-sm border border-blue-100">
                                        <div class="text-sm text-blue-600 font-medium mb-1">Fin du congrès</div>
                                        <div class="text-lg font-bold text-gray-900">29 mars 2026</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Soumission des résumés -->
                        <div class="space-y-6">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="p-2 bg-green-100 rounded-lg">
                                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Soumission des résumés des travaux scientifiques</h3>
                            </div>
                            <div class="bg-green-50 rounded-2xl p-6 border border-green-200">
                                <h4 class="text-lg font-semibold text-gray-900 mb-4">Soumettre un abstract</h4>
                                <div class="space-y-3 text-gray-700">
                                    <p>La date limite de soumission des abstracts est fixée au <strong>10 février 2026</strong>.</p>
                                    <p>La date de notification de l'acceptation des travaux soumis est le <strong>25 Février 2026</strong>.</p>
                                    <p>La date limite pour l'envoi des e-posters est le <strong>15 Mars 2026</strong>.</p>
                                    <div class="bg-blue-50 rounded-xl p-4 border border-blue-200 mt-4">
                                        <p class="text-blue-800">Veuillez consulter les Instructions de soumission pour plus d'informations (voir ci-dessous).</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Considérations générales -->
                        <div class="space-y-6">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="p-2 bg-blue-100 rounded-lg">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Considérations générales</h3>
                            </div>
                            <div class="bg-blue-50 rounded-2xl p-6 border border-blue-200">
                                <div class="grid gap-4 sm:grid-cols-1 lg:grid-cols-2">
                                    <div class="space-y-4">
                                        <div class="flex items-start gap-3 p-4 bg-white rounded-xl shadow-sm">
                                            <div class="w-2 h-2 bg-blue-500 rounded-full mt-2 flex-shrink-0"></div>
                                            <p class="text-gray-700">Assurez-vous que toutes vos informations sont à jour afin de recevoir les notifications pertinentes.</p>
                                        </div>
                                        <div class="flex items-start gap-3 p-4 bg-white rounded-xl shadow-sm">
                                            <div class="w-2 h-2 bg-blue-500 rounded-full mt-2 flex-shrink-0"></div>
                                            <p class="text-gray-700">Cliquez sur l'onglet « Soumettre votre abstract » dans la barre de navigation pour commencer la soumission.</p>
                                        </div>
                                        <div class="flex items-start gap-3 p-4 bg-white rounded-xl shadow-sm">
                                            <div class="w-2 h-2 bg-blue-500 rounded-full mt-2 flex-shrink-0"></div>
                                            <p class="text-gray-700">Le texte du résumé ne doit pas dépasser le nombre de mots autorisé au total ni le nombre maximal par section.</p>
                                        </div>
                                    </div>
                                    <div class="space-y-4">
                                        <div class="bg-white rounded-xl p-4 shadow-sm border-l-4 border-blue-500">
                                            <div class="text-sm font-medium text-blue-600 mb-2">Limites des titres</div>
                                            <div class="text-2xl font-bold text-gray-900 mb-1">25 mots</div>
                                            <div class="text-lg font-semibold text-gray-700">120 caractères</div>
                                            <p class="text-sm text-gray-600 mt-2">Les titres des résumés peuvent contenir un maximum de 25 mots et 120 caractères.</p>
                                        </div>
                                        <div class="flex items-start gap-3 p-4 bg-white rounded-xl shadow-sm">
                                            <div class="w-2 h-2 bg-green-500 rounded-full mt-2 flex-shrink-0"></div>
                                            <p class="text-gray-700">Un email de confirmation vous sera envoyé après la soumission de votre résumé.</p>
                                        </div>
                                        <div class="flex items-start gap-3 p-4 bg-white rounded-xl shadow-sm">
                                            <div class="w-2 h-2 bg-green-500 rounded-full mt-2 flex-shrink-0"></div>
                                            <p class="text-gray-700">La confirmation d'acceptation ou de rejet, incluant l'identifiant du résumé et le type de présentation, vous sera communiquée après l'évaluation des résumés par le comité scientifique.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Motifs possibles de rejet -->
                        <div class="space-y-6">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="p-2 bg-red-100 rounded-lg">
                                    <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Motifs possibles de rejet</h3>
                            </div>
                            <div class="bg-red-50 rounded-2xl p-6 border border-red-200">
                                <p class="text-gray-700 mb-6 font-medium">Pour les résumés qui ne sont pas acceptés, les raisons possibles de rejet peuvent inclure :</p>
                                <div class="grid gap-4 sm:grid-cols-1 lg:grid-cols-3 mb-6">
                                    <div class="bg-white rounded-xl p-4 shadow-sm border-l-4 border-red-400">
                                        <div class="flex items-start gap-3">
                                            <svg class="w-5 h-5 text-red-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                            <p class="text-sm text-gray-700">Données insuffisantes.</p>
                                        </div>
                                    </div>
                                    <div class="bg-white rounded-xl p-4 shadow-sm border-l-4 border-red-400">
                                        <div class="flex items-start gap-3">
                                            <svg class="w-5 h-5 text-red-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                            <p class="text-sm text-gray-700">Soumission par vous ou votre institution d'un résumé sur un sujet similaire déjà accepté lors des précédents congrès de la SMD.</p>
                                        </div>
                                    </div>
                                    <div class="bg-white rounded-xl p-4 shadow-sm border-l-4 border-red-400">
                                        <div class="flex items-start gap-3">
                                            <svg class="w-5 h-5 text-red-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                            <p class="text-sm text-gray-700">Présentation du résumé jugée peu claire ou difficilement compréhensible par les reviewers.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-green-50 rounded-xl p-4 border border-green-200">
                                    <div class="flex items-center gap-2 mb-3">
                                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="font-medium text-green-800">Le comité scientifique recommande vivement :</span>
                                    </div>
                                    <div class="grid gap-2 sm:grid-cols-1 lg:grid-cols-2">
                                        <div class="flex items-center gap-2">
                                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                            <span class="text-sm text-green-700">d'adopter une structure claire,</span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                            <span class="text-sm text-green-700">de faire relire le résumé par un collègue non familier avec le travail afin de vérifier la clarté et la qualité de la langue avant soumission.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Évaluation & Décision -->
                        <div class="grid gap-6 sm:grid-cols-1 lg:grid-cols-2">
                            <div class="space-y-4">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="p-2 bg-purple-100 rounded-lg">
                                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-bold text-gray-900">Évaluation</h3>
                                </div>
                                <div class="bg-purple-50 rounded-xl p-6 border border-purple-200">
                                    <p class="text-gray-700">Toutes les soumissions seront évaluées par les membres du comité scientifique, avec une attention particulière portée à la qualité scientifique et à la nouveauté du contenu.</p>
                                </div>
                            </div>
                            <div class="space-y-4">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="p-2 bg-green-100 rounded-lg">
                                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-bold text-gray-900">Décision</h3>
                                </div>
                                <div class="bg-green-50 rounded-xl p-6 border border-green-200 space-y-3">
                                    <p class="text-gray-700">La décision concernant les résumés sera finalisée sur la base de la note moyenne attribuée par les évaluateurs.</p>
                                    <p class="text-gray-700">Certains résumés pourront être acceptés pour une présentation orale.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Inscription -->
                        <div class="space-y-6">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="p-2 bg-indigo-100 rounded-lg">
                                    <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Inscription</h3>
                            </div>
                            <div class="bg-indigo-50 rounded-xl p-6 border border-indigo-200">
                                <div class="flex items-start gap-4">
                                    <div class="p-3 bg-indigo-100 rounded-full">
                                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <p class="text-gray-700 leading-relaxed">Les auteurs présentateurs des résumés acceptés doivent assister au congrès sur place afin d'assurer la présentation orale lors des sessions dédiées, à proximité des panneaux d'affichage (e-posters).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Footer -->
                <div class="p-6 sm:p-8 border-t border-gray-100 bg-gradient-to-r from-gray-50 to-blue-50">
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                        <button onclick="closeConditionsModal()" class="group bg-gradient-to-r from-blue-600 via-blue-700 to-indigo-700 hover:from-blue-700 hover:via-blue-800 hover:to-indigo-800 text-white px-8 py-4 rounded-2xl font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 flex items-center gap-3 min-w-[200px] justify-center">
                            <svg class="w-5 h-5 group-hover:rotate-180 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            Fermer
                        </button>
                        <div class="text-sm text-gray-500 text-center sm:text-left">
                            <kbd class="px-2 py-1 bg-gray-200 rounded text-xs">Échap</kbd> pour fermer
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- En-tête du congrès -->
            @include('components.abstracts.abstract-header')

            <!-- Layout principal avec image et formulaire -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
                <!-- Image à gauche -->
                <div class="order-2 lg:order-1">
                    <div class="sticky top-8">
                        <img src="{{ asset('assets/images/affiche/affiche-four.jpeg') }}" 
                             alt="Affiche du congrès" 
                             class="w-full h-auto rounded-2xl shadow-2xl object-cover">
                    </div>
                </div>

                <!-- Contenu du formulaire à droite -->
                <div class="order-1 lg:order-2 space-y-6 h-full">
                    <!-- Bouton Conditions générales -->
                    <div class="text-center lg:text-left">
                        <button onclick="openConditionsModal()" class="bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white px-6 py-3 rounded-lg font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200 inline-flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Conditions générales
                        </button>
                    </div>

                    <!-- Formulaire principal -->
                    @include('components.abstracts.abstract-form')

                    <!-- Message de confirmation (caché initialement) -->
                    @include('components.abstracts.abstract-message')

                    <!-- Instructions -->
                    @include('components.abstracts.abstract-instruction')
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/abstract.js') }}"></script>
    
    <script>
        function openConditionsModal() {
            const modal = document.getElementById('conditionsModal');
            const content = document.getElementById('conditionsModalContent');
            
            modal.classList.remove('hidden');
            
            setTimeout(() => {
                content.classList.remove('scale-95', 'opacity-0');
                content.classList.add('scale-100', 'opacity-100');
            }, 10);
        }
        
        function closeConditionsModal() {
            const modal = document.getElementById('conditionsModal');
            const content = document.getElementById('conditionsModalContent');
            
            content.classList.remove('scale-100', 'opacity-100');
            content.classList.add('scale-95', 'opacity-0');
            
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }
        
        // Close modal when clicking outside
        document.getElementById('conditionsModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeConditionsModal();
            }
        });
        
        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeConditionsModal();
            }
        });
    </script>
    
    @if(session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                showModal();
            });
        </script>
    @endif
</x-app-layout>