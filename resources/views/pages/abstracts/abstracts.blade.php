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
    <div id="conditionsModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50">
        <div class="h-full w-full flex items-center justify-center p-4">
            <div class="bg-white rounded-2xl shadow-2xl w-full h-full max-w-6xl max-h-[95vh] transform transition-all duration-300 scale-95 opacity-0 flex flex-col" id="conditionsModalContent">
                <!-- Header -->
                <div class="flex items-center justify-between p-6 border-b border-gray-200 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-t-2xl">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-900">Conditions générales</h2>
                    </div>
                    <button onclick="closeConditionsModal()" class="w-10 h-10 bg-white rounded-full shadow-md hover:shadow-lg flex items-center justify-center text-gray-500 hover:text-gray-700 transition-all duration-200">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                
                <!-- Content -->
                <div class="flex-1 overflow-y-auto p-6 lg:p-8">
                    <div class="max-w-4xl mx-auto space-y-8">
                        <!-- Dates importantes -->
                        <div class="bg-gradient-to-r from-red-50 to-pink-50 rounded-xl p-6 border border-red-100">
                            <h3 class="text-xl font-bold text-red-800 mb-4 flex items-center gap-2">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                Principales dates limites en un coup d'œil
                            </h3>
                            <div class="grid md:grid-cols-2 gap-4">
                                <div class="bg-white rounded-lg p-4 shadow-sm">
                                    <div class="font-semibold text-gray-900">Date limite pour la soumission d'un abstract :</div>
                                    <div class="text-red-600 font-bold text-lg">10 Février 2026</div>
                                </div>
                                <div class="bg-white rounded-lg p-4 shadow-sm">
                                    <div class="font-semibold text-gray-900">Date limite pour l'envoi des ePosters :</div>
                                    <div class="text-red-600 font-bold text-lg">15 Février 2026</div>
                                </div>
                                <div class="bg-white rounded-lg p-4 shadow-sm">
                                    <div class="font-semibold text-gray-900">Début du congrès :</div>
                                    <div class="text-green-600 font-bold text-lg">26 Mars 2026</div>
                                </div>
                                <div class="bg-white rounded-lg p-4 shadow-sm">
                                    <div class="font-semibold text-gray-900">Fin du congrès :</div>
                                    <div class="text-green-600 font-bold text-lg">29 Mars 2026</div>
                                </div>
                            </div>
                        </div>

                        <!-- Soumission des résumés -->
                        <div class="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-xl p-6 border border-blue-100">
                            <h3 class="text-xl font-bold text-blue-800 mb-4 flex items-center gap-2">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                Soumission des résumés des travaux scientifiques
                            </h3>
                            <div class="space-y-4">
                                <div class="bg-white rounded-lg p-4 shadow-sm">
                                    <h4 class="font-semibold text-gray-900 mb-2">Soumettre un abstract</h4>
                                    <ul class="space-y-2 text-gray-700">
                                        <li>• La date limite de soumission des abstracts est le <strong class="text-red-600">10 Février 2026</strong>.</li>
                                        <li>• Date de réception de l'acceptation des travaux soumis est le <strong class="text-blue-600">10 Mars 2026</strong>.</li>
                                        <li>• Date limite pour l'envoi des ePosters : <strong class="text-red-600">15 Février 2026</strong></li>
                                        <li>• Veuillez visiter les Instructions de Soumission pour plus d'informations (voir dessous).</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Considérations générales -->
                        <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl p-6 border border-green-100">
                            <h3 class="text-xl font-bold text-green-800 mb-4 flex items-center gap-2">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Considérations générales
                            </h3>
                            <div class="bg-white rounded-lg p-4 shadow-sm space-y-3 text-gray-700">
                                <p>• Assurez-vous que toutes vos informations sont à jour pour recevoir les notifications pertinentes. Cliquez sur l'onglet "Soumettre votre abstract" dans la barre de navigation et commencez la soumission.</p>
                                <p>• Le texte de votre résumé ne peut pas dépasser un certain mots au total et un nombre limité par section. Les titres des résumés peuvent contenir un maximum de <strong>25 mots</strong> et <strong>120 caractères</strong>.</p>
                                <p>• Vous recevrez un email de confirmation de votre résumé après la soumission de celui-ci. La confirmation d'acceptation ou de rejet, y compris l'identifiant du résumé et le type de présentation vous seront envoyés une fois les résumées évalués par le comité scientifique.</p>
                            </div>
                        </div>

                        <!-- Raisons de rejet -->
                        <div class="bg-gradient-to-r from-orange-50 to-yellow-50 rounded-xl p-6 border border-orange-100">
                            <h3 class="text-xl font-bold text-orange-800 mb-4 flex items-center gap-2">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                                </svg>
                                Raisons possibles de rejet
                            </h3>
                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <p class="text-gray-700 mb-3">Pour les résumés qui ne sont pas acceptés, les raisons possibles de rejet peuvent inclure :</p>
                                <ul class="space-y-2 text-gray-700">
                                    <li>• Votre résumé ne contient pas assez de données suffisantes, particulièrement s'il s'agit d'un rapport de cas unique</li>
                                    <li>• Vous ou votre institution avez soumis un résumé sur un sujet similaire accepté lors des derniers congrès de la SMD.</li>
                                    <li>• Le résumé n'a pas été présenté de manière à être compréhensible par les reviewers</li>
                                </ul>
                                <div class="mt-4 p-3 bg-orange-50 rounded-lg border border-orange-200">
                                    <p class="text-orange-800 font-medium">💡 Recommandation :</p>
                                    <p class="text-gray-700 mt-1">Le comité scientifique recommande d'avoir une structure claire et de toujours faire relire votre résumé par un collègue non familier avec le travail pour vérifier la clarté et l'utilisation de la langue avant la soumission.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Évaluation et Décision -->
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-gradient-to-r from-purple-50 to-indigo-50 rounded-xl p-6 border border-purple-100">
                                <h3 class="text-xl font-bold text-purple-800 mb-4 flex items-center gap-2">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                    </svg>
                                    Évaluation
                                </h3>
                                <div class="bg-white rounded-lg p-4 shadow-sm">
                                    <p class="text-gray-700">Toutes les soumissions seront évaluées par les membres du comité scientifique avec un accent sur la <strong>qualité</strong> et surtout la <strong>nouveauté</strong> du contenu.</p>
                                </div>
                            </div>
                            
                            <div class="bg-gradient-to-r from-teal-50 to-cyan-50 rounded-xl p-6 border border-teal-100">
                                <h3 class="text-xl font-bold text-teal-800 mb-4 flex items-center gap-2">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                    </svg>
                                    Décision
                                </h3>
                                <div class="bg-white rounded-lg p-4 shadow-sm space-y-2">
                                    <p class="text-gray-700">• La décision sur les résumés sera finalisée en fonction de la note moyenne.</p>
                                    <p class="text-gray-700">• Certains résumés peuvent être acceptés pour une présentation orale des travaux.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Inscription -->
                        <div class="bg-gradient-to-r from-gray-50 to-slate-50 rounded-xl p-6 border border-gray-200">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                                Inscription
                            </h3>
                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <p class="text-gray-700">Les auteurs présentateurs des résumés acceptés doivent assister au congrès sur place pour la présentation orale lors des sessions dédiées à côtés des bornes d'affichage.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Footer -->
                <div class="p-6 border-t border-gray-200 bg-gray-50 rounded-b-2xl">
                    <div class="flex justify-center">
                        <button onclick="closeConditionsModal()" class="bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white px-8 py-3 rounded-lg font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                            Fermer
                        </button>
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

            <!-- Bouton Conditions générales -->
            <div class="mb-6 text-center">
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