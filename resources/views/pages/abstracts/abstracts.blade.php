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
                    <div class="max-w-4xl mx-auto space-y-8 text-gray-700">
                        <!-- Principales dates limites -->
                        <div class="space-y-4">
                            <h3 class="text-xl font-bold text-gray-900 border-b border-gray-200 pb-2">Principales dates limites – en un coup d'œil</h3>
                            <ul class="space-y-2 ml-4">
                                <li>• Date limite de soumission des abstracts : <strong>10 février 2026</strong></li>
                                <li>• Date limite pour l'envoi des e-posters : <strong>15 février 2026</strong></li>
                                <li>• Début du congrès : <strong>26 mars 2026</strong></li>
                                <li>• Fin du congrès : <strong>29 mars 2026</strong></li>
                            </ul>
                        </div>

                        <div class="border-t border-gray-300 my-6"></div>

                        <!-- Soumission des résumés -->
                        <div class="space-y-4">
                            <h3 class="text-xl font-bold text-gray-900 border-b border-gray-200 pb-2">Soumission des résumés des travaux scientifiques</h3>
                            <h4 class="text-lg font-semibold text-gray-800">Soumettre un abstract</h4>
                            <div class="space-y-2">
                                <p>La date limite de soumission des abstracts est fixée au <strong>10 février 2026</strong>.</p>
                                <p>La date de notification de l'acceptation des travaux soumis est le <strong>10 mars 2026</strong>.</p>
                                <p>La date limite pour l'envoi des e-posters est le <strong>15 février 2026</strong>.</p>
                                <p>Veuillez consulter les Instructions de soumission pour plus d'informations (voir ci-dessous).</p>
                            </div>
                        </div>

                        <div class="border-t border-gray-300 my-6"></div>

                        <!-- Considérations générales -->
                        <div class="space-y-4">
                            <h3 class="text-xl font-bold text-gray-900 border-b border-gray-200 pb-2">Considérations générales</h3>
                            <div class="space-y-3">
                                <p>Assurez-vous que toutes vos informations sont à jour afin de recevoir les notifications pertinentes.</p>
                                <p>Cliquez sur l'onglet « Soumettre votre abstract » dans la barre de navigation pour commencer la soumission.</p>
                                <p>Le texte du résumé ne doit pas dépasser le nombre de mots autorisé au total ni le nombre maximal par section.</p>
                                <p>Les titres des résumés peuvent contenir un maximum de <strong>25 mots</strong> et <strong>120 caractères</strong>.</p>
                                <p>Un email de confirmation vous sera envoyé après la soumission de votre résumé.</p>
                                <p>La confirmation d'acceptation ou de rejet, incluant l'identifiant du résumé et le type de présentation, vous sera communiquée après l'évaluation des résumés par le comité scientifique.</p>
                            </div>
                        </div>

                        <div class="border-t border-gray-300 my-6"></div>

                        <!-- Motifs possibles de rejet -->
                        <div class="space-y-4">
                            <h3 class="text-xl font-bold text-gray-900 border-b border-gray-200 pb-2">Motifs possibles de rejet</h3>
                            <p>Pour les résumés qui ne sont pas acceptés, les raisons possibles de rejet peuvent inclure :</p>
                            <ul class="space-y-2 ml-4">
                                <li>• Données insuffisantes, notamment s'il s'agit d'un rapport de cas unique.</li>
                                <li>• Soumission par vous ou votre institution d'un résumé sur un sujet similaire déjà accepté lors des précédents congrès de la SMD.</li>
                                <li>• Présentation du résumé jugée peu claire ou difficilement compréhensible par les reviewers.</li>
                            </ul>
                            <p class="mt-4">Le comité scientifique recommande vivement :</p>
                            <ul class="space-y-2 ml-4">
                                <li>• d'adopter une structure claire,</li>
                                <li>• de faire relire le résumé par un collègue non familier avec le travail afin de vérifier la clarté et la qualité de la langue avant soumission.</li>
                            </ul>
                        </div>

                        <div class="border-t border-gray-300 my-6"></div>

                        <!-- Évaluation -->
                        <div class="space-y-4">
                            <h3 class="text-xl font-bold text-gray-900 border-b border-gray-200 pb-2">Évaluation</h3>
                            <p>Toutes les soumissions seront évaluées par les membres du comité scientifique, avec une attention particulière portée à la qualité scientifique et à la nouveauté du contenu.</p>
                        </div>

                        <div class="border-t border-gray-300 my-6"></div>

                        <!-- Décision -->
                        <div class="space-y-4">
                            <h3 class="text-xl font-bold text-gray-900 border-b border-gray-200 pb-2">Décision</h3>
                            <p>La décision concernant les résumés sera finalisée sur la base de la note moyenne attribuée par les évaluateurs.</p>
                            <p>Certains résumés pourront être acceptés pour une présentation orale.</p>
                        </div>

                        <div class="border-t border-gray-300 my-6"></div>

                        <!-- Inscription -->
                        <div class="space-y-4">
                            <h3 class="text-xl font-bold text-gray-900 border-b border-gray-200 pb-2">Inscription</h3>
                            <p>Les auteurs présentateurs des résumés acceptés doivent assister au congrès sur place afin d'assurer la présentation orale lors des sessions dédiées, à proximité des panneaux d'affichage (e-posters).</p>
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