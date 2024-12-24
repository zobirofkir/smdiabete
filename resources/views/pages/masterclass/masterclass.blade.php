<x-app-layout>
    <div class="min-h-screen flex flex-col items-center py-8 relative bg-gray-50">
    <!-- Modal Container -->
    <div id="inscription-modal" class="fixed inset-0 flex justify-center items-center bg-gray-900 bg-opacity-50 z-50 hidden">
        <div class="bg-white shadow-xl rounded-lg p-4 sm:p-8 w-full max-w-sm sm:max-w-3xl mx-4 transform transition-all duration-500 scale-95 opacity-0 modal-content">
            <div class="relative z-10 w-full">
                <button id="close-modal" class="absolute top-4 right-4 text-sky-700 text-2xl hover:text-sky-500 focus:outline-none">&times;</button>

                <h1 class="text-2xl sm:text-4xl font-bold text-sky-800 mb-6 text-center">Formulaire d’inscription</h1>

                <form method="POST" action="{{ route('masterclass.store') }}">
                    @csrf

                    <!-- Input Fields -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-sky-700 font-bold mb-2">Nom, Prénom</label>
                            <input type="text" name="username" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-600" placeholder="Votre nom et prénom">
                            @error('username') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label class="block text-sky-700 font-bold mb-2">Ville</label>
                            <input type="text" name="ville" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-600" placeholder="Votre ville">
                            @error('ville') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sky-700 font-bold mb-2">Secteur</label>
                        <select name="secteur" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-600">
                            <option value="public">Public</option>
                            <option value="liberal">Libéral</option>
                            <option value="chu">Chu</option>
                        </select>
                        @error('secteur') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-sky-700 font-bold mb-2">Tel</label>
                            <input type="text" name="phone" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-600" placeholder="Votre numéro de téléphone">
                            @error('phone') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label class="block text-sky-700 font-bold mb-2">Email</label>
                            <input type="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-600" placeholder="Votre email">
                            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sky-700 font-bold mb-2">Adresse</label>
                        <input type="text" name="adresse" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-600" placeholder="Votre adresse">
                        @error('adresse') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block text-sky-700 font-bold mb-2">Objectifs attendus de la formation</label>
                        <textarea name="objectif" rows="4" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-600" placeholder="Vos attentes"></textarea>
                        @error('objectif') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit" class="w-full bg-sky-600 text-white py-3 rounded-lg font-semibold hover:bg-sky-700 transition duration-300">
                        S’inscrire
                    </button>
                </form>
            </div>
        </div>
    </div>

        <!-- Main Section -->
        <div class="relative z-10 w-full container mx-auto bg-white rounded-lg p-8 md:px-0 px-10 flex flex-wrap md:flex-nowrap">
            <div class="w-full md:w-1/2 flex justify-center items-center mb-8 md:mb-0">
                <img src="{{ asset('assets/images/affiche/affiche-two.jpeg') }}" alt="Master Class" class="w-full max-h-auto object-cover rounded-lg shadow-md">
            </div>

            <div class="w-full md:w-1/2 md:px-6 px-0">

                <div class="flex justify-center mb-4">
                    <button id="open-modal" class="bg-sky-600 hover:bg-sky-700 text-white font-bold py-2 px-20 rounded-full transition-colors duration-300 ease-in-out">
                        Inscription
                    </button>
                </div>

                <div class="dropdowninscription-screen bg-sky-50 shadow-lg rounded-lg p-6 space-y-4">
                    <p class="text-sky-800 text-lg leading-relaxed">
                        Dans le cadre du développement professionnel continu, la Société Marocaine de Diabétologie organise pour l’année 2025 un Master Class intitulé “Diabète et Nouvelles Technologies” en collaboration avec le CHU de Oujda et l’Hôpital Militaire Avicenne de Marrakech.
                    </p>
                    <p class="text-sky-800 text-lg leading-relaxed">
                        Durée de la formation : un an réparti en trois séminaires :
                    </p>
                    <ul class="list-disc list-inside text-sky-700 space-y-2">
                        <li>1er séminaire : 19 Avril 2025</li>
                        <li>2ème séminaire : 12 Juillet 2025</li>
                        <li>3ème séminaire : 11 Octobre 2025</li>
                    </ul>
                    <p class="text-sky-800 text-lg leading-relaxed">
                        Coordinateurs du Master Class : Pr. BAÏZRI HICHAM — Pr. LATRECH HANANE
                    </p>
                    <p class="text-sky-800 text-lg leading-relaxed">
                        Equipe de formateurs :
                    </p>
                    <ul class="list-disc list-inside text-sky-700 space-y-2">
                        <li>CHU Oujda :</li>
                        <ul class="list-disc list-inside ml-6 space-y-1">
                            <li>Pr. LATRACH HANANE : Chef de service et Pr de l’Enseignement Supérieur</li>
                            <li>Pr. ROUF SIHAM : Pr Agrégé</li>
                            <li>Pr. BOUICHRAT NISRINE : Maître de conférences</li>
                        </ul>
                        <li>Hôpital Militaire Avicenne de Marrakech :</li>
                        <ul class="list-disc list-inside ml-6 space-y-1">
                            <li>Pr. BAÏZRI HICHAM : Chef de service et Pr de l’Enseignement Supérieur</li>
                            <li>Pr. MEFTAH AZZELARAB : Pr Agrégé</li>
                            <li>Pr. ABAÏNOU LAHOUSSAÏNE : Pr Assistant</li>
                        </ul>
                    </ul>
                    <p class="text-sky-800 text-lg leading-relaxed">
                        Les objectifs de cette formation sont la maitrise des principales technologies pouvant améliorer la prise en charge du patient diabétique marocain.
                    </p>
                    <p class="text-sky-800 text-lg leading-relaxed">
                        Objectifs pédagogiques :
                    </p>
                    <ul class="list-disc list-inside text-sky-700 space-y-2">
                        <li>Maitrise et pratique de l’insulinothérapie fonctionnelle</li>
                        <li>Maitrise des principes de fonctionnement des CGM</li>
                        <li>Mise en place de CGM et interprétation des données des AGP</li>
                        <li>Maitrise des principes de fonctionnement des pompes à insuline externe</li>
                        <li>Mise en place et réglage des pompes à insuline externes</li>
                        <li>Gestion des patients diabétiques sous pompe à insuline externes</li>
                    </ul>
                    <p class="text-sky-800 text-lg leading-relaxed">
                        Cette formation comportera :
                    </p>
                    <ul class="list-disc list-inside text-sky-700 space-y-2">
                        <li>Un test de prérequis</li>
                        <li>Des exposés théoriques (avec un support pédagogique PDF)</li>
                        <li>Ateliers pratiques et interactifs avec patients</li>
                        <li>Examen final certifiant</li>
                    </ul>
                    <p class="text-sky-800 text-lg leading-relaxed">
                        Comité d’organisation de la SMD :
                    </p>
                    <ul class="list-disc list-inside text-sky-700 space-y-2">
                        <li>Dr. ABAHOU SONIA</li>
                        <li>Dr. CHANA MOUNIA</li>
                        <li>Dr. EL ALAOUI MOULAY EL HASSAN</li>
                    </ul>
                    <p class="text-sky-800 text-lg leading-relaxed">
                        Conditions d’inscription :
                    </p>
                    <ul class="list-disc list-inside text-sky-700 space-y-2">
                        <li>Cette formation est ouverte à tous les médecins marocains titulaires d’un diplôme de spécialité en endocrinologie maladies métaboliques.</li>
                        <li>Les intéressés devront remplir le formulaire d’inscription accompagné d’une lettre de motivation et d’un curriculum vitae.</li>
                    </ul>
                    <p class="text-sky-800 text-lg leading-relaxed">
                        Tarif d’inscription : 15 000,00 Dhs
                    </p>
                    <p class="text-sky-800 text-lg leading-relaxed">
                        Date limite d’inscription : 05 janvier 2025
                    </p>
                    <p class="text-sky-700 text-lg leading-relaxed">
                        Le paiement par virement ou versement au numéro de compte suivant :
                    </p>
                    <p class="text-sky-700 text-lg leading-relaxed">
                        Société Marocaine de Diabétologie
                    </p>
                    <p class="text-sky-700 text-lg leading-relaxed">
                        RIB : 007 82600026830000305367
                    </p>
                    <p class="text-sky-800 text-lg leading-relaxed">
                        Pour s’inscrire veuillez cliquer sur le lien suivant :
                    </p>
                    <p class="text-lg">
                        <a href="https://www.smdiabete.org/masterclass" class="text-blue-500 hover:text-blue-700 underline">
                            www.smdiabete.org/masterclass
                        </a>
                    </p>
                </div>

            </div>
        </div>
    </div>

</x-app-layout>
