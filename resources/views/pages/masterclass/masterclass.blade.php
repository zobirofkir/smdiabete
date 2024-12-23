<x-app-layout>
    <div class="min-h-screen flex flex-col items-center py-6 relative">
        <!-- Affiche Image as background -->
        <div class="absolute inset-0 bg-cover bg-center z-0 md:block hidden" style="background-image: url('{{ asset('assets/images/affiche/affiche-three.gif') }}');"></div>

        <!-- Formulaire d’inscription -->
        <div class="relative z-10 w-full max-w-4xl bg-sky-50 shadow-lg rounded-lg p-6">
            <h1 class="text-3xl font-bold text-sky-800 mb-6 text-center">Formulaire d’inscription</h1>
            <form method="POST" action="{{ route('masterclass.store') }}">
                @csrf

                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-4" role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif
                @if (session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-4" role="alert">
                        <span class="block sm:inline">{{ session('error') }}</span>
                    </div>
                @endif

                <div class="mb-4">
                    <label class="block text-sky-700 font-bold mb-2">Nom, Prénom</label>
                    <input type="text" name="username" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-600">
                    @error('username')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-sky-700 font-bold mb-2">Ville</label>
                    <input type="text" name="ville" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-600">
                    @error('ville')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
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

                <div class="mb-4">
                    <label class="block text-sky-700 font-bold mb-2">Tel</label>
                    <input type="text" name="phone" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-600">
                    @error('phone')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-sky-700 font-bold mb-2">Email</label>
                    <input type="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-600">
                    @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-sky-700 font-bold mb-2">Adresse</label>
                    <input type="text" name="adresse" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-600">
                    @error('adresse')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-sky-700 font-bold mb-2">Objectifs attendus de la formation</label>
                    <textarea name="objectif" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-600"></textarea>
                    @error('objectif')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="bg-sky-600 text-white px-6 py-2 rounded-lg hover:bg-sky-700">S’inscrire</button>
            </form>

        </div>

        <div class="relative z-10 w-full max-w-4xl mt-6">
            <div class="flex justify-center ">
                <button id="toggle-btn" class="bg-sky-900 text-white px-20 text-center whitespace-nowrap py-2 rounded-lg hover:bg-sky-900">Afficher plus de détails</button>
            </div>
            <div id="toggle-content" class="dropdowninscription-h overflow-hidden transition-all">
                <div class="mt-4 bg-sky-50 shadow-lg rounded-lg p-6">
                    <p class="text-sky-800 mb-4">Dans le cadre du développement professionnel continu...</p>
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
                    <p class="text-sky-800 mb-4">Les objectifs de cette formation sont la maîtrise des principales technologies...</p>
                    <p class="text-sky-700 mb-4">Cette formation est ouverte à tous les médecins marocains titulaires...</p>
                    <p class="text-sky-800 mb-4">Tarif d’inscription : 15 000,00 Dhs</p>
                    <p class="text-sky-700 mb-4">Le paiement par virement ou versement au numéro de compte suivant :</p>
                    <p class="text-sky-700 mb-4">Société Marocaine de Diabétologie</p>
                    <p class="text-sky-700 mb-4">RIB : 007 82600026830000305367</p>
                    <p class="text-sky-800">Pour s’inscrire veuillez cliquer sur le lien suivant :</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
