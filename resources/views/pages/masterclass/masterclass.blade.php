<x-app-layout>
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-indigo-900 overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-24">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight">
                    Master Class 2025
                </h1>
                <p class="text-xl md:text-2xl text-blue-100 mb-8 max-w-3xl mx-auto">
                    Diabète et Nouvelles Technologies
                </p>
                <div class="inline-flex items-center px-8 py-4 bg-white text-blue-900 font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                    <span class="text-lg">Société Marocaine de Diabétologie</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="bg-gray-50 min-h-screen">
        <!-- Image & Registration Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Image Section -->
                <div class="order-2 lg:order-1">
                    <div class="relative group">
                        <img
                            src="{{ asset('assets/images/affiche/affiche-two.jpeg') }}"
                            alt="Affiche Master Class 2025"
                            class="w-full h-auto rounded-2xl shadow-2xl transform group-hover:scale-105 transition-transform duration-500"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent rounded-2xl"></div>
                    </div>
                </div>

                <!-- Registration CTA -->
                <div class="order-1 lg:order-2">
                    <div class="bg-white rounded-3xl shadow-2xl p-8 lg:p-12 border border-gray-100">
                        <div class="text-center">
                            <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full mb-6">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                            <h2 class="text-3xl font-bold text-gray-900 mb-4">Inscription Ouverte</h2>
                            <p class="text-gray-600 mb-8 text-lg">Rejoignez notre formation d'excellence en diabétologie</p>
                            
                            <div class="space-y-4 mb-8">
                                <div class="flex items-center justify-center text-gray-700">
                                    <svg class="w-5 h-5 text-red-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="font-semibold">Date limite: 10 Janvier 2025</span>
                                </div>
                                <div class="flex items-center justify-center text-gray-700">
                                    <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="font-semibold">Tarif: 15,000 Dhs</span>
                                </div>
                            </div>
                            
                            <button 
                                onclick="window.location.href='https://wa.me/212662630559'"
                                class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white font-bold py-4 px-8 rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 flex items-center justify-center space-x-3"
                            >
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.106"/>
                                </svg>
                                <span>S'inscrire via WhatsApp</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Program Details Section -->
        <div class="bg-white py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Programme de Formation</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Une formation d'excellence en collaboration avec le CHU de Oujda et l'Hôpital Militaire Avicenne de Marrakech</p>
                </div>

                <!-- Timeline -->
                <div class="mb-16">
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="text-center group">
                            <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full mb-4 group-hover:bg-blue-200 transition-colors">
                                <span class="text-2xl font-bold text-blue-600">1</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">1er Séminaire</h3>
                            <p class="text-blue-600 font-semibold text-lg">19 Avril 2025</p>
                        </div>
                        <div class="text-center group">
                            <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full mb-4 group-hover:bg-blue-200 transition-colors">
                                <span class="text-2xl font-bold text-blue-600">2</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">2ème Séminaire</h3>
                            <p class="text-blue-600 font-semibold text-lg">12 Juillet 2025</p>
                        </div>
                        <div class="text-center group">
                            <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full mb-4 group-hover:bg-blue-200 transition-colors">
                                <span class="text-2xl font-bold text-blue-600">3</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">3ème Séminaire</h3>
                            <p class="text-blue-600 font-semibold text-lg">11 Octobre 2025</p>
                        </div>
                    </div>
                </div>

                <!-- Coordinators -->
                <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-3xl p-8 mb-16">
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Coordinateurs du Master Class</h3>
                    </div>
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="text-center">
                            <div class="bg-white rounded-2xl p-6 shadow-lg">
                                <div class="w-20 h-20 bg-blue-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                                    <svg class="w-10 h-10 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h4 class="text-xl font-semibold text-gray-900">Pr. BAÏZRI HICHAM</h4>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="bg-white rounded-2xl p-6 shadow-lg">
                                <div class="w-20 h-20 bg-blue-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                                    <svg class="w-10 h-10 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h4 class="text-xl font-semibold text-gray-900">Pr. LATRECH HANANE</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Objectives Section -->
        <div class="bg-gray-50 py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Objectifs Pédagogiques</h2>
                    <p class="text-xl text-gray-600">Maîtrisez les technologies de pointe en diabétologie</p>
                </div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Insulinothérapie Fonctionnelle</h3>
                        <p class="text-gray-600">Maîtrise et pratique de l'insulinothérapie fonctionnelle</p>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">CGM & AGP</h3>
                        <p class="text-gray-600">Maîtrise des CGM et interprétation des données AGP</p>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Pompes à Insuline</h3>
                        <p class="text-gray-600">Mise en place et gestion des pompes à insuline externe</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Program Structure -->
        <div class="bg-white py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-16">
                    <!-- Formation Content -->
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-8">Contenu de la Formation</h2>
                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">Test de Prérequis</h3>
                                    <p class="text-gray-600">Evaluation initiale des connaissances</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">Exposés Théoriques</h3>
                                    <p class="text-gray-600">Supports pédagogiques PDF inclus</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">Ateliers Pratiques</h3>
                                    <p class="text-gray-600">Interactions directes avec patients</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">Examen Final Certifiant</h3>
                                    <p class="text-gray-600">Certification officielle</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Registration Info -->
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-8">Conditions d'Inscription</h2>
                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8">
                            <div class="space-y-6">
                                <div class="flex items-center space-x-3">
                                    <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-700">Formation ouverte aux médecins spécialistes</span>
                                </div>
                                                                
                                <div class="flex items-center space-x-3">
                                    <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-700">Tarif: <span class="font-bold text-green-600">15,000 Dhs</span></span>
                                </div>
                                
                                <div class="mt-8 p-4 bg-white rounded-xl border border-gray-200">
                                    <h4 class="font-semibold text-gray-900 mb-2">Informations de Paiement</h4>
                                    <p class="text-sm text-gray-600 mb-2">Virement bancaire au compte:</p>
                                    <p class="text-sm font-mono bg-gray-50 p-2 rounded text-gray-800">
                                        Société Marocaine de Diabétologie<br>
                                        RIB: 007 826 0002683000305367 78
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Section -->
        <div class="bg-gradient-to-r from-blue-900 to-indigo-900 py-20">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold text-white mb-6">Formation d'Excellence</h2>
                <p class="text-xl text-blue-100 leading-relaxed">
                    Dans le cadre du développement professionnel continu, la Société Marocaine de Diabétologie organise pour l'année 2025 un Master Class intitulé "Diabète et Nouvelles Technologies" en collaboration avec le CHU de Oujda et l'Hôpital Militaire Avicenne de Marrakech.
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
