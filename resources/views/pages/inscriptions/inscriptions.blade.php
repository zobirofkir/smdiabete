<x-app-layout>
    <section class="fade-in flex justify-center items-center h-screen mt-[150px]">
        <form action="{{ route('inscriptions.store') }}" method="POST" class="bg-white p-8 rounded-lg shadow-lg md:w-[60%] w-full max-w-4xl">
            @csrf

            {{-- Success and Error Messages --}}
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

            {{-- Form Fields --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label for="firstname" class="block text-sm font-medium text-gray-700">Prénom*</label>
                    <input type="text" id="firstname" name="firstname" required class="mt-2 p-3 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Votre prénom" value="{{ old('firstname') }}">
                    @error('firstname')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="lastname" class="block text-sm font-medium text-gray-700">Nom*</label>
                    <input type="text" id="lastname" name="lastname" required class="mt-2 p-3 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Votre nom" value="{{ old('lastname') }}">
                    @error('lastname')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-6">
                <div>
                    <label for="ville" class="block text-sm font-medium text-gray-700">Ville*</label>
                    <input type="text" id="ville" name="ville" required class="mt-2 p-3 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Votre ville" value="{{ old('ville') }}">
                    @error('ville')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="secteur" class="block text-sm font-medium text-gray-700">Secteur*</label>
                    <select id="secteur" name="secteur" required class="mt-2 p-3 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="">-</option>
                        <option value="public" {{ old('secteur') == 'public' ? 'selected' : '' }}>Public</option>
                        <option value="liberal" {{ old('secteur') == 'liberal' ? 'selected' : '' }}>Libéral</option>
                        <option value="chu" {{ old('secteur') == 'chu' ? 'selected' : '' }}>Chu</option>
                    </select>
                    @error('secteur')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 my-10">
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">Téléphone*</label>
                    <input type="tel" id="phone" name="phone" required class="mt-2 p-3 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Votre téléphone" value="{{ old('phone') }}">
                    @error('phone')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email*</label>
                    <input type="email" id="email" name="email" required class="mt-2 p-3 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Votre email" value="{{ old('email') }}">
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div>
                <label for="adresse" class="block text-sm font-medium text-gray-700 mt-6">Adresse*</label>
                <textarea id="adresse" name="adresse" rows="3" required class="mt-2 p-3 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Votre adresse">{{ old('adresse') }}</textarea>
                @error('adresse')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="objectif" class="block text-sm font-medium text-gray-700 mt-6">Objectif attendu de la formation*</label>
                <textarea id="objectif" name="objectif" rows="4" class="mt-2 p-3 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Vos objectifs">{{ old('objectif') }}</textarea>
                @error('objectif')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="mt-6 bg-sky-500 hover:bg-sky-700 text-white font-bold py-3 px-6 rounded-md w-full">
                VALIDER
            </button>
        </form>
    </section>

    <section class="bg-white p-8 md:mt-12 mt-20">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8 text-sky-700 mt-12">Master Class 2025 Diabète et Nouvelles Technologies</h2>
            <button id="toggle-btn" class="text-sky-500 px-4 py-2 rounded mb-4">Lire la suite</button>

            <div id="toggle-content" class="transition-all duration-500 ease-in-out max-h-0 overflow-auto">
                <p class="text-lg text-gray-700 mb-6 text-sky-900">
                    Dans le cadre du développement professionnel continu, la Société Marocaine de Diabétologie organise pour l’année 2025 un Master Class intitulé <strong>“Diabète et Nouvelles technologies”</strong> en collaboration avec le CHU de Oujda et l’Hôpital Militaire Avicenne de Marrakech.
                </p>

                <h3 class="text-xl font-semibold mb-4 text-sky-500">Durée de la formation</h3>
                <ul class="list-inside list-disc text-gray-700 mb-6 flex flex-col gap-4">
                    <li class="text-semibold text-sky-900"><strong>1er séminaire:</strong> 19 avril 2025</li>
                    <li class="text-semibold text-sky-900"><strong>2ème séminaire:</strong> 12 juillet 2025</li>
                    <li class="text-semibold text-sky-900"><strong>3ème séminaire:</strong> 11 octobre 2025</li>
                </ul>

                <h3 class="text-xl font-semibold mb-4 text-sky-500">Coordinateurs du Master Class</h3>
                <ul class="list-inside list-disc text-gray-700 mb-6 flex flex-col gap-4">
                    <li class="text-semibold text-sky-900">Pr BAÏZRI HICHAM</li>
                    <li class="text-semibold text-sky-900">Pr LATRECH HANANE</li>
                </ul>

                <h3 class="text-xl font-semibold mb-4 text-sky-500">Equipe de formateurs</h3>
                <p class="text-gray-700 mb-6">
                    <strong>Hôpital Militaire Avicenne de Marrakech:</strong>
                    <ul class="list-inside list-disc flex flex-col gap-4">
                        <li class="text-semibold text-sky-900">Pr BAÏZRI HICHAM: Chef de service et Pr de l’Enseignement Supérieur</li>
                        <li class="text-semibold text-sky-900">Pr MEFTAH AZZELARAB: Pr Agrégé</li>
                        <li class="text-semibold text-sky-900">Pr ABAÏNOU LAHOUSSAÏNE: Pr Assistant</li>
                    </ul>

                    <div class="my-10">
                        <p class="mb-10">
                            <strong>CHU Oujda:</strong>
                        </p>
                        <ul class="list-inside list-disc flex flex-col gap-4">
                            <li class="text-semibold text-sky-900">Pr LATRACH HANANE: Chef de service et Pr de l’Enseignement Supérieur</li>
                            <li class="text-semibold text-sky-900">Pr ROUF SIHAM: Pr Agrégé</li>
                            <li class="text-semibold text-sky-900">Pr BOUICHRAT NISRINE: Maître de conférences</li>
                        </ul>
                    </div>
                </p>

                <h3 class="text-xl font-semibold mb-4 text-sky-500">Objectifs pédagogiques</h3>
                <ul class="list-inside list-disc text-gray-700 mb-6 flex flex-col gap-4">
                    <li class="text-semibold text-sky-900">Maitrise et pratique de l’insulinothérapie fonctionnelle</li>
                    <li class="text-semibold text-sky-900">Maitrise des principes de fonctionnement des CGM</li>
                    <li class="text-semibold text-sky-900">Mise en place de CGM et interprétation des données des AGP</li>
                    <li class="text-semibold text-sky-900">Maitrise des principes de fonctionnement des pompes à insuline externe</li>
                    <li class="text-semibold text-sky-900">Mise en place et réglage des pompes à insuline externes</li>
                    <li class="text-semibold text-sky-900">Gestion des patients diabétiques sous pompe à insuline externes</li>
                </ul>

                <h3 class="text-xl font-semibold mb-4 text-sky-500">Conditions d’inscription</h3>
                <p class="text-gray-700 mb-6">
                    Cette formation est ouverte à tous les médecins marocains titulaires d’un diplôme de spécialité en endocrinologie maladies métaboliques.
                </p>

                <h3 class="text-xl font-semibold mb-4 text-sky-500">Tarif d’inscription</h3>
                <p class="text-gray-700 mb-6">15 000,00 Dhs</p>

                <h3 class="text-xl font-semibold mb-4 text-sky-500">Date limite d’inscription</h3>
                <p class="text-gray-700 mb-6">10 janvier 2025</p>
            </div>
        </div>
    </section>
</x-app-layout>
