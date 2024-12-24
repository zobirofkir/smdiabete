<x-app-layout>
    <div class="min-h-screen flex flex-col items-center py-6 relative">

        <div class="relative z-10 w-full max-w-6xl mx-auto bg-white shadow-lg rounded-lg p-6 flex flex-wrap md:flex-nowrap">
            <!-- Left Section: Image -->
            <div class="w-full md:w-1/2 flex justify-center items-center mb-6 md:mb-0">
                <img src="{{ asset('assets/images/affiche/affiche-two.jpeg') }}" alt="Master Class" class="w-full max-h-auto object-cover rounded-lg shadow-md">
            </div>

            <!-- Right Section: Form -->
            <div class="w-full md:w-1/2 px-4">
                <h1 class="text-4xl font-bold text-sky-800 mb-6 text-center">Formulaire d’inscription</h1>

                <form method="POST" action="{{ route('masterclass.store') }}">
                    @csrf

                    <!-- Success/Error Messages -->
                    @if (session('success'))
                        <div class="bg-green-50 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-4" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="bg-red-50 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-4" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <!-- Input Fields -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                        <!-- Name -->
                        <div>
                            <label class="block text-sky-700 font-bold mb-2">Nom, Prénom</label>
                            <input type="text" name="username" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-600" placeholder="Votre nom et prénom">
                            @error('username')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- City -->
                        <div>
                            <label class="block text-sky-700 font-bold mb-2">Ville</label>
                            <input type="text" name="ville" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-600" placeholder="Votre ville">
                            @error('ville')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-4">
                        <!-- Sector -->
                        <label class="block text-sky-700 font-bold mb-2">Secteur</label>
                        <select name="secteur" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-600">
                            <option value="public">Public</option>
                            <option value="liberal">Libéral</option>
                            <option value="chu">Chu</option>
                        </select>
                        @error('secteur')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                        <!-- Phone -->
                        <div>
                            <label class="block text-sky-700 font-bold mb-2">Tel</label>
                            <input type="text" name="phone" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-600" placeholder="Votre numéro de téléphone">
                            @error('phone')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Email -->
                        <div>
                            <label class="block text-sky-700 font-bold mb-2">Email</label>
                            <input type="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-600" placeholder="Votre email">
                            @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="mb-4">
                        <label class="block text-sky-700 font-bold mb-2">Adresse</label>
                        <input type="text" name="adresse" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-600" placeholder="Votre adresse">
                        @error('adresse')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Objectives -->
                    <div class="mb-6">
                        <label class="block text-sky-700 font-bold mb-2">Objectifs attendus de la formation</label>
                        <textarea name="objectif" rows="4" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-600" placeholder="Vos attentes"></textarea>
                        @error('objectif')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full bg-sky-600 text-white py-3 rounded-lg font-semibold hover:bg-sky-700 transition duration-300">
                        S’inscrire
                    </button>
                </form>
            </div>
        </div>

        <div class="relative z-10 w-full max-w-4xl mt-6">
            <div class="flex justify-center">
                <button id="toggle-btn" class="bg-sky-900 text-white px-20 text-center whitespace-nowrap py-2 rounded-lg hover:bg-sky-900">Afficher plus de détails</button>
            </div>
            <div id="toggle-content" class="dropdowninscription-h overflow-hidden transition-all">
                <div class="mt-4 bg-sky-50 shadow-lg rounded-lg p-6">
                    <p class="text-sky-800 mb-4">Dans le cadre du développement professionnel continu, la Société Marocaine de Diabétologie organise pour l’année 2025 un Master Class intitulé “Diabète et Nouvelles technologies” en collaboration avec le CHU de Oujda et l’Hôpital Militaire Avicenne de Marrakech.</p>
                    <p class="text-sky-800 mb-4">Durée de la formation : un an réparti en trois séminaires :</p>
                    <ul class="list-disc list-inside text-sky-700 mb-4">
                        <li>1er séminaire : 19 avril 2025</li>
                        <li>2ème séminaire : 12 juillet 2025</li>
                        <li>3ème séminaire : 11 octobre 2025</li>
                    </ul>
                    <p class="text-sky-800 mb-4">Coordinateurs du Master Class : Pr ¨BAÏZRI HICHAM – Pr LATRECH HANANE</p>
                    <p class="text-sky-800 mb-4">Equipe de formateurs :</p>
                    <ul class="list-disc list-inside text-sky-700 mb-4">
                        <li>Hôpital Militaire Avicenne de Marrakech :</li>
                        <ul class="list-disc list-inside ml-6">
                            <li>Pr BAÏZRI HICHAM : Chef de service et Pr de l’Enseignement Supérieur</li>
                            <li>Pr MEFTAH AZZELARAB : Pr Agrégé</li>
                            <li>Pr ABAÏNOU LAHOUSSAÏNE : Pr Assistant</li>
                        </ul>
                        <li>CHU Oujda :</li>
                        <ul class="list-disc list-inside ml-6">
                            <li>Pr LATRACH HANANE : Chef de service et Pr de l’Enseignement Supérieur</li>
                            <li>Pr ROUF SIHAM : Pr Agrégé</li>
                            <li>Pr BOUICHRAT NISRINE : Maître de conférences</li>
                        </ul>
                    </ul>
                    <p class="text-sky-800 mb-4">Les objectifs de cette formation sont la maitrise des principales technologies pouvant améliorer la prise en charge du patient diabétique marocain.</p>
                    <p class="text-sky-800 mb-4">Objectifs pédagogiques :</p>
                    <ul class="list-disc list-inside text-sky-700 mb-4">
                        <li>Maitrise et pratique de l’insulinothérapie fonctionnelle,</li>
                        <li>Maitrise des principes de fonctionnement des CGM,</li>
                        <li>Mise en place de CGM et interprétation des données des AGP,</li>
                        <li>Maitrise des principes de fonctionnement des pompes à insuline externe,</li>
                        <li>Mise en place et réglage des pompes à insuline externes,</li>
                        <li>Gestion des patients diabétiques sous pompe à insuline externes,</li>
                    </ul>
                    <p class="text-sky-800 mb-4">Cette formation comportera :</p>
                    <ul class="list-disc list-inside text-sky-700 mb-4">
                        <li>Un test de prérequis,</li>
                        <li>Des exposés théoriques (avec un support pédagogique PDF),</li>
                        <li>Ateliers pratiques et interactifs avec patients,</li>
                        <li>Examen final certifiant.</li>
                    </ul>
                    <p class="text-sky-800 mb-4">Comité d’organisation de la SMD :</p>
                    <ul class="list-disc list-inside text-sky-700 mb-4">
                        <li>Dr ABAHOU SONIA</li>
                        <li>Dr CHANA MOUNIA</li>
                        <li>Dr EL ALAOUI MOULAY EL HASSAN</li>
                    </ul>
                    <p class="text-sky-800 mb-4">Conditions d’inscription :</p>
                    <ul class="list-disc list-inside text-sky-700 mb-4">
                        <li>Cette formation est ouverte à tous les médecins marocains titulaires d’un diplôme de spécialité en endocrinologie maladies métaboliques.</li>
                        <li>Les intéressés devront remplir le formulaire d’inscription accompagné d’une lettre de motivation et d’un curriculum vitae.</li>
                    </ul>
                    <p class="text-sky-800 mb-4">Tarif d’inscription : 15 000,00 Dhs</p>
                    <p class="text-sky-700 mb-4">Le paiement par virement ou versement au numéro de compte suivant :</p>
                    <p class="text-sky-700 mb-4">Société Marocaine de Diabétologie</p>
                    <p class="text-sky-700 mb-4">RIB : 007 82600026830000305367</p>
                    <p class="text-sky-800 mb-4">Pour s’inscrire veuillez cliquer sur le lien suivant :</p>
                    <p><a href="https://www.smdiabete.org/masterclass" class="text-blue-500 underline">www.smdiabete.org/masterclass</a></p>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
