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
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
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
                        <option value="residant" {{ old('type') == 'residant' ? 'selected' : '' }}>Résidant</option>
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

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-6">
                <div>
                    <label for="arrival_date" class="block text-sm font-medium text-gray-700">Date d'arrivée*</label>
                    <input type="date" id="arrival_date" name="arrival_date" required class="mt-2 p-3 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" value="{{ old('arrival_date') }}">
                    @error('arrival_date')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="departure_date" class="block text-sm font-medium text-gray-700">Date de départ*</label>
                    <input type="date" id="departure_date" name="departure_date" required class="mt-2 p-3 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" value="{{ old('departure_date') }}">
                    @error('departure_date')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mt-6">
                <label class="block text-sm font-medium text-gray-700">Mode de paiement*</label>
                <div class="mt-2">
                    <div>
                        <input type="radio" id="laboratoire_payment" name="payment_method" value="laboratoire"
                            {{ old('payment_method') == 'laboratoire' ? 'checked' : '' }}
                            onclick="togglePaymentFields('laboratoire')">
                        <label for="laboratoire_payment" class="ml-2 text-sm font-medium text-gray-700">Laboratoire</label>
                    </div>

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

                    <div class="mt-2">
                        <input type="radio" id="virement_payment" name="payment_method" value="virement"
                            {{ old('payment_method') == 'virement' ? 'checked' : '' }}
                            onclick="togglePaymentFields('virement')">
                        <label for="virement_payment" class="ml-2 text-sm font-medium text-gray-700">
                            Paiement par virement (RIB : 007 8260002683000305367 78)
                        </label>
                    </div>

                    {{-- Upload PDF Section (Hidden by Default) --}}
                    <div id="rib_pdf_upload" class="mt-6 hidden">
                        <label for="rib_pdf" class="block text-sm font-medium text-gray-700">Téléchargez le RIB en PDF*</label>
                        <input type="file" id="rib_pdf" name="rib_pdf" accept="application/pdf" class="mt-2 p-3 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        @error('rib_pdf')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>


                    {{-- <div class="mt-2">
                        <input type="radio" id="surplace_payment" name="payment_method" value="sur-place"
                            {{ old('payment_method') == 'sur-place' ? 'checked' : '' }}
                            onclick="togglePaymentFields('sur-place')">
                        <label for="surplace_payment" class="ml-2 text-sm font-medium text-gray-700">Sur place</label>
                    </div> --}}

                </div>
                @error('payment_method')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
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
