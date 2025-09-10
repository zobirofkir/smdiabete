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

                <!-- Form Section -->
                <div id="formSection" class="overflow-hidden max-h-0 transition-all duration-700 ease-in-out mt-6 bg-white p-8 rounded-lg shadow-lg hidden">
                    <form id="masterclassForm" action="{{ route('masterclass.store') }}" method="POST" class="space-y-6">

                        @csrf

                    <!-- First Name -->
                    <div class="flex flex-col gap-1">
                        <label for="firstname" class="text-sm font-medium text-gray-700">Prénom</label>
                        <input type="text" id="firstname" name="firstname" class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm py-2 px-4 text-md" placeholder="Votre prénom" value="{{ old('firstname') }}" required />
                        @error('firstname')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Last Name -->
                    <div class="flex flex-col gap-1">
                        <label for="lastname" class="text-sm font-medium text-gray-700">Nom</label>
                        <input type="text" id="lastname" name="lastname" class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm py-2 px-4 text-md" placeholder="Votre nom" value="{{ old('lastname') }}" required />
                        @error('lastname')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Ville -->
                    <div class="flex flex-col gap-1">
                        <label for="ville" class="text-sm font-medium text-gray-700">Ville</label>
                        <input type="text" id="ville" name="ville" class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm py-2 px-4 text-md" placeholder="Votre ville" value="{{ old('ville') }}" required />
                        @error('ville')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Secteur -->
                    <div class="flex flex-col gap-1">
                        <label for="secteur" class="text-sm font-medium text-gray-700">Secteur</label>
                        <select id="secteur" name="secteur" class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm py-2 px-4 text-md" required>
                            <option value="" disabled selected>Choisissez un secteur</option>
                            <option value="public" {{ old('secteur') == 'public' ? 'selected' : '' }}>Public</option>
                            <option value="liberal" {{ old('secteur') == 'liberal' ? 'selected' : '' }}>Liberal</option>
                            <option value="chu" {{ old('secteur') == 'chu' ? 'selected' : '' }}>CHU</option>
                        </select>
                        @error('secteur')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Adresse -->
                    <div class="flex flex-col gap-1">
                        <label for="adresse" class="text-sm font-medium text-gray-700">Adresse</label>
                        <input type="text" id="adresse" name="adresse" class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm py-2 px-4 text-md" placeholder="Votre adresse" value="{{ old('adresse') }}" required />
                        @error('adresse')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Objectif -->
                    <div class="flex flex-col gap-1">
                        <label for="objectif" class="text-sm font-medium text-gray-700">Objectif</label>
                        <textarea id="objectif" name="objectif" class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm py-2 px-4 text-md" placeholder="Votre objectif" rows="4" required>{{ old('objectif') }}</textarea>
                        @error('objectif')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="flex flex-col gap-1">
                        <label for="email" class="text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm py-2 px-4 text-md" placeholder="Votre adresse email" value="{{ old('email') }}" required />
                        @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Phone -->
                    <div class="flex flex-col gap-1">
                        <label for="phone" class="text-sm font-medium text-gray-700">Téléphone</label>
                        <input type="tel" id="phone" name="phone" class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm py-2 px-4 text-md" placeholder="Votre numéro de téléphone" value="{{ old('phone') }}" required />
                        @error('phone')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Participation Mode -->
                    <div class="flex flex-col gap-1">
                        <label for="participation_mode" class="text-sm font-medium text-gray-700">Mode de participation</label>
                        <select id="participation_mode" name="participation_mode" class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm py-2 px-4 text-md" required>
                            <option value="" disabled selected>Choisissez un mode</option>
                            <option value="presentiel" {{ old('participation_mode') == 'presentiel' ? 'selected' : '' }}>En présentiel</option>
                            <option value="virtuel" {{ old('participation_mode') == 'virtuel' ? 'selected' : '' }}>Virtuel</option>
                        </select>
                        @error('participation_mode')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="w-full py-3 bg-blue-800 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition-colors">
                            Soumettre
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Text Section -->
        <div class="max-w-4xl mx-auto px-4 py-12 text-gray-800">
            <h1 class="text-4xl sm:text-5xl font-extrabold text-center text-blue-900 mb-6">
                Société Marocaine de Diabétologie
            </h1>
            <h2 class="text-3xl sm:text-4xl font-semibold text-center text-gray-700 mb-6">
                Master Class 2025: Diabète et Nouvelles Technologies
            </h2>
            <p class="text-justify leading-relaxed mb-8 text-lg sm:text-xl">
                Dans le cadre du développement professionnel continu, la Société Marocaine de Diabétologie organise pour l'année 2025 un Master Class intitulé "Diabète et Nouvelles Technologies" en collaboration avec le CHU de Oujda et l'Hôpital Militaire Avicenne de Marrakech.
            </p>

            <div class="grid gap-8 md:grid-cols-2">
                <!-- Left Section -->
                <div>
                    <h3 class="font-bold text-lg text-blue-800 mb-4">Durée de la formation</h3>
                    <ul class="list-disc list-inside text-gray-700 space-y-2 mb-8">
                        <li>1<sup>er</sup> séminaire : 19 Avril 2025</li>
                        <li>2<sup>ème</sup> séminaire : 12 Juillet 2025</li>
                        <li>3<sup>ème</sup> séminaire : 11 Octobre 2025</li>
                    </ul>

                    <h3 class="font-bold text-lg text-blue-800 mb-4">Coordinateurs du Master Class</h3>
                    <ul class="list-disc list-inside text-gray-700 space-y-2 mb-8">
                        <li>Pr. BAÏZRI HICHAM</li>
                        <li>Pr. LATRECH HANANE</li>
                    </ul>

                    <h3 class="font-bold text-lg text-blue-800 mb-4">Objectifs pédagogiques</h3>
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li>Maîtrise et pratique de l'insulinothérapie fonctionnelle</li>
                        <li>Maîtrise des principes de fonctionnement des CGM</li>
                        <li>Mise en place de CGM et interprétation des données des AGP</li>
                        <li>Maîtrise des pompes à insuline externe</li>
                        <li>Mise en place et réglage des pompes à insuline externe</li>
                        <li>Gestion des patients diabétiques sous pompe à insuline externe</li>
                    </ul>
                </div>

                <!-- Right Section -->
                <div>
                    <h3 class="font-bold text-lg text-blue-800 mb-4">Cette formation comportera :</h3>
                    <ul class="list-disc list-inside text-gray-700 space-y-2 mb-8">
                        <li>Un test de prérequis</li>
                        <li>Des exposés théoriques (avec des supports pédagogiques PDF)</li>
                        <li>Ateliers pratiques et interactions avec patients</li>
                        <li>Examen final certifiant</li>
                    </ul>

                    <h3 class="font-bold text-lg text-blue-800 mb-4">Conditions d'inscription :</h3>
                    <ul class="list-disc list-inside text-gray-700 space-y-2 mb-8">
                        <li>Formation ouverte aux médecins titulaires d'un diplôme de spécialité</li>
                        <li>Date limite d'inscription : <span class="font-semibold text-red-600">10 Janvier 2025</span></li>
                        <li>Tarifs d'inscription : <span class="font-semibold">15,000 Dhs</span></li>
                        <li>Le paiement peut être effectué par virement au compte suivant :</li>
                        <li>
                            <span class="font-semibold">Société Marocaine de Diabétologie</span> - RIB : 007 826
                            0002683000305367 78
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
