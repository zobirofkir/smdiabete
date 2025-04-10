<x-app-layout>
    <div class="flex justify-center mt-20">
        <h1 class="text-sky-500 text-3xl font-bold">INSCRIPTION</h1>
    </div>
    <section class="fade-in flex justify-center items-center mt-[100px] mb-[150px]">
        <form action="{{ route('inscriptions.store') }}" method="POST" class="bg-white p-8 rounded-lg shadow-lg md:w-[60%] w-full max-w-4xl" enctype="multipart/form-data">
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
                    <label for="lastname" class="block text-sm font-medium text-gray-700">Nom*</label>
                    <input type="text" id="lastname" name="lastname" required class="mt-2 p-3 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Votre nom" value="{{ old('lastname') }}">
                    @error('lastname')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="firstname" class="block text-sm font-medium text-gray-700">Prénom*</label>
                    <input type="text" id="firstname" name="firstname" required class="mt-2 p-3 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Votre prénom" value="{{ old('firstname') }}">
                    @error('firstname')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-6">
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">Téléphone Mobile *</label>
                    <input type="tel" id="phone" name="phone" required class="mt-2 p-3 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Votre téléphone" value="{{ old('phone') }}">
                    @error('phone')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email *</label>
                    <input type="email" id="email" name="email" required class="mt-2 p-3 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Votre email" value="{{ old('email') }}">
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-6">
                <div>
                    <label for="secteur" class="block text-sm font-medium text-gray-700">Secteur*</label>
                    <select id="secteur" name="secteur" required class="mt-2 p-3 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="">-</option>
                        <option value="public" {{ old('secteur') == 'public' ? 'selected' : '' }}>Public</option>
                        <option value="private" {{ old('secteur') == 'private' ? 'selected' : '' }}>Privé</option>
                    </select>
                    @error('secteur')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="type" class="block text-sm font-medium text-gray-700">Type*</label>
                    <select id="type" name="type" required class="mt-2 p-3 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="">-</option>
                        <option value="specialiste" {{ old('type') == 'specialiste' ? 'selected' : '' }}>Spécialiste</option>
                        <option value="resident" {{ old('type') == 'resident' ? 'selected' : '' }}>Résidant</option>
                    </select>

                    @error('type')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-6">
                <div>
                    <label for="specialite" class="block text-sm font-medium text-gray-700">Spécialité*</label>
                    <select id="specialite" name="specialite" required class="mt-2 p-3 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="Endocrinologie">Endocrinologie</option>
                        <option value="Cardiologie">Cardiologie</option>
                        <option value="Néphrologie">Néphrologie</option>
                        <option value="Médecin Généraliste">Médecine générale</option>
                        <option value="Autres">Autres</option>
                    </select>

                    <input type="text" id="otherSpecialite" name="other_specialite" class="mt-2 p-3 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 hidden" placeholder="Votre spécialité" value="{{ old('other_specialite') }}">

                    @error('specialite')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="ville" class="block text-sm font-medium text-gray-700">Ville*</label>
                    <input type="text" id="ville" name="ville" required class="mt-2 p-3 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Votre ville" value="{{ old('ville') }}">
                    @error('ville')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mt-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">Type d'inscription*</label>
                <div class="flex flex-col sm:flex-row justify-between items-center w-full gap-4">

                    <div class="flex items-center justify-between">
                        <input type="radio" id="inscription_seule" name="inscription_type" value="seule" required
                            class="h-4 w-4 text-sky-600 focus:ring-sky-500 border-gray-300"
                            {{ old('inscription_type') == 'seule' ? 'checked' : '' }}>
                        <label for="inscription_seule" class="ml-2 block text-sm text-gray-700">Inscription Seule</label>
                    </div>
                    <div class="flex items-center">
                        <input type="radio" id="inscription_hebergement" name="inscription_type" value="hebergement"
                            class="h-4 w-4 text-sky-600 focus:ring-sky-500 border-gray-300"
                            {{ old('inscription_type') == 'hebergement' ? 'checked' : '' }}>
                        <label for="inscription_hebergement" class="ml-2 block text-sm text-gray-700">Inscription + Hébergement</label>
                    </div>
                </div>
                @error('inscription_type')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-6">
                <div>
                    <label for="arrival_date" class="block text-sm font-medium text-gray-700">Date d'arrivée*</label>
                    <select id="arrival_date" name="arrival_date" disabled class="mt-2 p-3 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="">-</option>
                        <option value="2025-05-29" {{ old('arrival_date') == '2025-05-29' ? 'selected' : '' }}>29/05/2025</option>
                        <option value="2025-05-30" {{ old('arrival_date') == '2025-05-30' ? 'selected' : '' }}>30/05/2025</option>
                        <option value="2025-05-31" {{ old('arrival_date') == '2025-05-31' ? 'selected' : '' }}>31/05/2025</option>
                    </select>
                    @error('arrival_date')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="departure_date" class="block text-sm font-medium text-gray-700">Date de départ*</label>
                    <select id="departure_date" name="departure_date" disabled class="mt-2 p-3 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="">-</option>
                        <option value="2025-05-30" {{ old('departure_date') == '2025-05-30' ? 'selected' : '' }}>30/05/2025</option>
                        <option value="2025-05-31" {{ old('departure_date') == '2025-05-31' ? 'selected' : '' }}>31/05/2025</option>
                        <option value="2025-06-01" {{ old('departure_date') == '2025-06-01' ? 'selected' : '' }}>01/06/2025</option>
                    </select>
                    @error('departure_date')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mt-6">
                <label class="block text-sm font-medium text-gray-700">Type de paiement*</label>
                <label class="block text-sm font-medium text-gray-700 mb-2">Prise en charge par laboratoire * :</label>

                <div class="mt-2">
                    <div class="flex gap-4 mb-4">
                        <div>
                            <input type="radio" id="payment_yes" name="payment_choice" value="yes"
                                onclick="handlePaymentChoice('yes')">
                            <label for="payment_yes" class="ml-2 text-sm font-medium text-gray-700">Oui</label>
                        </div>
                        <div>
                            <input type="radio" id="payment_no" name="payment_choice" value="no"
                                onclick="handlePaymentChoice('no')">
                            <label for="payment_no" class="ml-2 text-sm font-medium text-gray-700">Non</label>
                        </div>
                    </div>

                    <div id="contact_message" class="hidden mt-4 p-4 bg-blue-50 text-blue-700 rounded-md">
                        Veuillez contacter la comité d'organisation de la SMD 2025 sur le numéro : 0762011226
                    </div>

                    <div id="payment_fields" class="hidden">
                        <div class="mt-2">
                            {{-- List of Laboratories (hidden by default) --}}
                            <div id="laboratoire_list" class="mt-6">
                                <label for="laboratoire" class="block text-sm font-medium text-gray-700">Choisissez le laboratoire*</label>
                                <select id="laboratoire" name="laboratoire" class="mt-2 p-3 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" onchange="toggleOtherLaboratoireInput(this)">
                                    <option value="">-</option>
                                    <option value="Sanofi" {{ old('laboratoire') == 'Sanofi' ? 'selected' : '' }}>Sanofi</option>
                                    <option value="Novo Nordisk" {{ old('laboratoire') == 'Novo Nordisk' ? 'selected' : '' }}>Novo Nordisk</option>
                                    <option value="Novartis" {{ old('laboratoire') == 'Novartis' ? 'selected' : '' }}>Novartis</option>
                                    <option value="Amea" {{ old('laboratoire') == 'Amea' ? 'selected' : '' }}>Amea</option>
                                    <option value="Pharmacare" {{ old('laboratoire') == 'Pharmacare' ? 'selected' : '' }}>Pharmacare</option>
                                    <option value="AtlasPharm" {{ old('laboratoire') == 'AtlasPharm' ? 'selected' : '' }}>AtlasPharm</option>
                                    <option value="Abbott" {{ old('laboratoire') == 'Abbott' ? 'selected' : '' }}>Abbott</option>
                                    <option value="Galderma" {{ old('laboratoire') == 'Galderma' ? 'selected' : '' }}>Galderma</option>
                                    <option value="Zénith Pharma" {{ old('laboratoire') == 'Zénith Pharma' ? 'selected' : '' }}>Zénith Pharma</option>
                                    <option value="Servier" {{ old('laboratoire') == 'Servier' ? 'selected' : '' }}>Servier</option>
                                    <option value="AstraZeneca" {{ old('laboratoire') == 'AstraZeneca' ? 'selected' : '' }}>AstraZeneca</option>
                                    <option value="Dislog" {{ old('laboratoire') == 'Dislog' ? 'selected' : '' }}>Dislog</option>
                                    <option value="Afric-Phar" {{ old('laboratoire') == 'Afric-Phar' ? 'selected' : '' }}>Afric-Phar</option>
                                    <option value="SunPharma" {{ old('laboratoire') == 'SunPharma' ? 'selected' : '' }}>SunPharma</option>
                                    <option value="Bottu" {{ old('laboratoire') == 'Bottu' ? 'selected' : '' }}>Bottu</option>
                                    <option value="Lilly" {{ old('laboratoire') == 'Lilly' ? 'selected' : '' }}>Lilly</option>
                                    <option value="Boehringer Ingelheim" {{ old('laboratoire') == 'Boehringer Ingelheim' ? 'selected' : '' }}>Boehringer Ingelheim</option>
                                    <option value="Gylmed" {{ old('laboratoire') == 'Gylmed' ? 'selected' : '' }}>Gylmed</option>
                                    <option value="Medavi" {{ old('laboratoire') == 'Medavi' ? 'selected' : '' }}>Medavi</option>
                                    <option value="Merck" {{ old('laboratoire') == 'Merck' ? 'selected' : '' }}>Merck</option>
                                    <option value="McPharma" {{ old('laboratoire') == 'McPharma' ? 'selected' : '' }}>McPharma</option>
                                    <option value="Eramedic" {{ old('laboratoire') == 'Eramedic' ? 'selected' : '' }}>Eramedic</option>
                                    <option value="Hikma" {{ old('laboratoire') == 'Hikma' ? 'selected' : '' }}>Hikma</option>
                                    <option value="Phi" {{ old('laboratoire') == 'Phi' ? 'selected' : '' }}>Phi</option>
                                    <option value="other">Autre</option>
                                </select>

                                @error('laboratoire')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div id="other_laboratoire_input" class="mt-4 hidden">
                                <label for="other_laboratoire" class="block text-sm font-medium text-gray-700">Entrez le nom du laboratoire</label>
                                <input type="text" id="other_laboratoire" name="other_laboratoire" class="mt-2 p-3 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                @error('other_laboratoire')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div id="status_select" class="mt-4 hidden">
                                <label for="status" class="block text-sm font-medium text-gray-700">Statut du paiement *</label>
                                <select id="status" name="laboratoire_status" class="mt-2 p-3 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                    <option value="encours">En Cours</option>
                                    <option value="confirme">Confirmé</option>
                                </select>
                            </div>

                        </div>
                        @error('payment_method')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
            </div>

            <div class="mt-6 mb-2 text-center">
                <div>
                    <input type="radio" name="rgpd_consent" value="accepted" required>
                    <label for="surplace_payment" class="ml-2 text-md font-medium text-gray-400">
                        J'accepte de recevoir les emails du congrès et les nouveautés des événements.
                    </label>
                </div>
            </div>

            <button type="submit" class="bg-sky-500 hover:bg-sky-700 text-white font-bold py-3 px-6 rounded-md w-full">
                SOUMETTRE
            </button>
        </form>

    </section>


    <script src="{{asset('assets/js/inscriptions.js')}}"></script>
</x-app-layout>
