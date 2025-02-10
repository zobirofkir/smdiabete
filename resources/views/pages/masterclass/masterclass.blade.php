<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8">
        <!-- Image Section -->
        <div class="max-w-4xl mx-auto mb-8">
            <img
                src="{{ asset('assets/images/affiche/affiche-two.jpeg') }}"
                alt="Affiche Master Class 2025"
                class="w-full h-auto rounded-lg shadow-lg"
            />
        </div>

            <!-- Dropdown Form Section -->
            <div class="max-w-4xl mx-auto mb-12">
                <!-- Header Section -->
                {{-- <div class="bg-blue-800 text-white rounded-lg shadow-lg p-6 cursor-pointer transition-transform transform hover:scale-105" onclick="toggleForm()">
                    <h3 class="text-xl font-bold text-center">Inscription au Master Class 2025</h3>
                </div> --}}

                <div class="bg-blue-800 text-white rounded-lg shadow-lg p-6 cursor-pointer transition-transform transform hover:scale-105" onclick="window.location.href='https://wa.me/212662630559'">
                    <h3 class="text-xl font-bold text-center">Inscription au Master Class 2025</h3>
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


<!-- Toastify Success Notification -->
@if (session('success'))
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            Toastify({
                text: "{{ session('success') }}",
                duration: 3000,
                close: true,
                gravity: "top",
                position: "right",
                backgroundColor: "green",
            }).showToast();
        });
    </script>
@endif

<!-- Toastify Error Notification for Validation Errors -->
@if ($errors->any())
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            @foreach ($errors->all() as $error)
                Toastify({
                    text: "{!! $error !!}",
                    duration: 5000,
                    close: true,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "red",
                }).showToast();
            @endforeach
        });
    </script>
@endif


</x-app-layout>
