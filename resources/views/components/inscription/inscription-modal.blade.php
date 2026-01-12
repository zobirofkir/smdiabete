<div id="pricingModal" class="fixed inset-0 bg-black bg-opacity-50 z-[9999] hidden flex items-center justify-center p-2 sm:p-4">
    <div class="bg-white rounded-2xl sm:rounded-3xl shadow-2xl max-w-4xl w-full max-h-[95vh] sm:max-h-[90vh] overflow-y-auto">
        <div class="p-4 sm:p-6 lg:p-8">
            <div class="flex justify-between items-start mb-4 sm:mb-6">
                <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900 pr-4">Montant de l'inscription</h2>
                <button onclick="closePricingModal()" class="text-gray-400 hover:text-gray-600 transition-colors flex-shrink-0">
                    <svg class="w-6 h-6 sm:w-8 sm:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            
            <div class="space-y-4 sm:space-y-6">
                <!-- Standard Registration -->
                <div class="bg-gradient-to-r from-blue-50 to-indigo-50 p-4 sm:p-6 rounded-xl sm:rounded-2xl border border-blue-200">
                    <h3 class="text-lg sm:text-xl font-bold text-blue-800 mb-3 sm:mb-4">Droits d'inscription :</h3>
                    <p class="text-sm sm:text-base text-gray-700 mb-2 sm:mb-3">(droit d'entrée, cartables, pauses-café, déjeuner du vendredi et samedi + Dîner de Samedi)</p>
                    <p class="text-sm sm:text-base text-gray-700 mb-1 sm:mb-2">• Accès Session ADA – Certifiée</p>
                    <p class="text-sm sm:text-base text-gray-700 mb-3 sm:mb-4">• Accès Session EASD</p>
                    <div class="text-lg sm:text-xl lg:text-2xl font-bold text-blue-800">6000,00 DHS / 600,00 € / 600,00 $</div>
                </div>

                <!-- Hotel Packages -->
                <div class="grid gap-4 sm:gap-6 lg:grid-cols-2">
                    <div class="bg-gradient-to-r from-green-50 to-emerald-50 p-4 sm:p-6 rounded-xl sm:rounded-2xl border border-green-200">
                        <h3 class="text-base sm:text-lg lg:text-xl font-bold text-green-800 mb-3 sm:mb-4 leading-tight">Forfait package congrès 2 ou 3 nuits : HOTEL IDOU MALABATA</h3>
                        <p class="text-sm sm:text-base text-gray-700 mb-2">(Lieu du Congrès)</p>
                        <div class="text-lg sm:text-xl lg:text-2xl font-bold text-green-800 mb-3 sm:mb-4">13 000,00 DHS</div>
                        <p class="text-sm sm:text-base text-gray-700 mb-2">(Comprenant l'inscription et 3 nuitées du :</p>
                        <ul class="text-sm sm:text-base text-gray-700 mb-3 sm:mb-4 space-y-1">
                            <li>• Jeudi avec dîner</li>
                            <li>• Vendredi déjeuner / dîner</li>
                            <li>• Samedi déjeuner / dîner</li>
                        </ul>
                        <p class="text-xs sm:text-sm text-gray-600">Supplément Double Hébergement Petit Déj : 300,00 DHS Par jour</p>
                    </div>

                    <div class="bg-gradient-to-r from-purple-50 to-pink-50 p-4 sm:p-6 rounded-xl sm:rounded-2xl border border-purple-200">
                        <h3 class="text-base sm:text-lg lg:text-xl font-bold text-purple-800 mb-3 sm:mb-4 leading-tight">Forfait package congrès 2 ou 3 nuits : Hôtel Farah TANGER</h3>
                        <p class="text-sm sm:text-base text-gray-700 mb-2">(5 Mnt du lieu du Congrès)</p>
                        <div class="text-lg sm:text-xl lg:text-2xl font-bold text-purple-800 mb-3 sm:mb-4">11 000,00 DHS</div>
                        <p class="text-sm sm:text-base text-gray-700 mb-2">Inscription et 3 nuitées :</p>
                        <ul class="text-sm sm:text-base text-gray-700 mb-3 sm:mb-4 space-y-1">
                            <li>• Dîner Jeudi</li>
                            <li>• Vendredi dîner</li>
                        </ul>
                        <p class="text-xs sm:text-sm text-gray-600">Supplément Double Hébergement Petit Déj : 200,00 DHS par jour</p>
                    </div>
                </div>

                <!-- Meal Tickets -->
                <div class="grid gap-4 sm:gap-6 sm:grid-cols-2">
                    <div class="bg-gradient-to-r from-orange-50 to-red-50 p-4 sm:p-6 rounded-xl sm:rounded-2xl border border-orange-200">
                        <h3 class="text-base sm:text-lg lg:text-xl font-bold text-orange-800 mb-3 sm:mb-4">Ticket repas seul IDOU MALABATA</h3>
                        <div class="text-lg sm:text-xl lg:text-2xl font-bold text-orange-800">450,00 DHS</div>
                    </div>

                    <div class="bg-gradient-to-r from-teal-50 to-cyan-50 p-4 sm:p-6 rounded-xl sm:rounded-2xl border border-teal-200">
                        <h3 class="text-base sm:text-lg lg:text-xl font-bold text-teal-800 mb-3 sm:mb-4">Ticket repas seul Hôtel Farah</h3>
                        <div class="text-lg sm:text-xl lg:text-2xl font-bold text-teal-800">350,00 DHS</div>
                    </div>
                </div>

                <!-- Gala Dinner -->
                <div class="bg-gradient-to-r from-yellow-50 to-amber-50 p-4 sm:p-6 rounded-xl sm:rounded-2xl border border-yellow-200">
                    <h3 class="text-base sm:text-lg lg:text-xl font-bold text-yellow-800 mb-3 sm:mb-4">Dîner DE GALA</h3>
                    <div class="text-lg sm:text-xl lg:text-2xl font-bold text-yellow-800">900,00 DHS</div>
                </div>

                <!-- Workshops -->
                <div class="bg-gradient-to-r from-gray-50 to-slate-50 p-4 sm:p-6 rounded-xl sm:rounded-2xl border border-gray-200">
                    <h3 class="text-base sm:text-lg lg:text-xl font-bold text-gray-800 mb-3 sm:mb-4">Inscription « Ateliers » :</h3>
                    <p class="text-sm sm:text-base text-gray-700 mb-2">INSCRIPTION OBLIGATOIRE / Places limitées</p>
                    <div class="text-lg sm:text-xl lg:text-2xl font-bold text-green-600">Gratuite</div>
                </div>

                <!-- Residents Section -->
                <div class="bg-gradient-to-r from-indigo-50 to-blue-50 p-4 sm:p-6 rounded-xl sm:rounded-2xl border border-indigo-200">
                    <h3 class="text-base sm:text-lg lg:text-xl font-bold text-indigo-800 mb-3 sm:mb-4">RÉSIDENTS (internes) : HÔTEL FARAH TANGER</h3>
                    <div class="space-y-3 sm:space-y-4">
                        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-2">
                            <span class="text-sm sm:text-base text-gray-700">Inscription avec hébergement 3 nuits (en chambre double) 2 Résidents</span>
                            <span class="text-base sm:text-lg lg:text-xl font-bold text-indigo-800">14 500,00 DHS</span>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-2">
                            <span class="text-sm sm:text-base text-gray-700">Inscription avec hébergement 3 nuits (en chambre Single) 1 Résident</span>
                            <span class="text-base sm:text-lg lg:text-xl font-bold text-indigo-800">9 300,00 DHS</span>
                        </div>
                        <div class="border-t pt-3 sm:pt-4">
                            <p class="text-sm sm:text-base text-gray-700 mb-2">Inscription + repas (sans nuitée)</p>
                            <div class="text-base sm:text-lg lg:text-xl font-bold text-indigo-800 mb-2">4 500,00 DHS</div>
                            <p class="text-xs sm:text-sm text-gray-600 mb-2">(Droit d'entrée, cartables, pauses-café, déjeuner du vendredi et samedi + Dîner de Samedi)</p>
                            <p class="text-xs sm:text-sm text-gray-600">• Accès Session ADA – Certifiée</p>
                            <p class="text-xs sm:text-sm text-gray-600">• Accès Session EASD</p>
                        </div>
                    </div>
                </div>

                <!-- Event Info -->
                <div class="bg-gradient-to-r from-red-50 to-pink-50 p-4 sm:p-6 rounded-xl sm:rounded-2xl border border-red-200 text-center">
                    <h3 class="text-base sm:text-lg lg:text-xl font-bold text-red-800 mb-2">Tanger : 26 – 29 Mars 2026</h3>
                    <p class="text-sm sm:text-base text-gray-700">Hôtel IDOU MALABATA – Tanger</p>
                </div>
            </div>
        </div>
    </div>
</div>
