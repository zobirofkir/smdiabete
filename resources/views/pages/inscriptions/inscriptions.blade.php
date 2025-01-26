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
                    <label for="phone" class="block text-sm font-medium text-gray-700">Téléphone*</label>
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
                    <input type="text" id="specialite" name="specialite" required class="mt-2 p-3 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Spécialité" value="{{ old('specialite') }}">
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
                            onclick="togglePaymentFields('laboratoire')" required>
                        <label for="laboratoire_payment" class="ml-2 text-sm font-medium text-gray-700">Laboratoire</label>
                    </div>
                    <div class="mt-2">
                        <input type="radio" id="virement_payment" name="payment_method" value="virement"
                            {{ old('payment_method') == 'virement' ? 'checked' : '' }}
                            onclick="togglePaymentFields('virement')">
                        <label for="virement_payment" class="ml-2 text-sm font-medium text-gray-700">
                            Paiement par virement (RIB : 007 8260002683000305367 78)
                        </label>
                    </div>
                </div>
                @error('payment_method')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            {{-- Upload PDF Section (Hidden by Default) --}}
            <div id="rib_pdf_upload" class="mt-6 hidden">
                <label for="rib_pdf" class="block text-sm font-medium text-gray-700">Téléchargez le RIB en PDF*</label>
                <input type="file" id="rib_pdf" name="rib_pdf" accept="application/pdf" class="mt-2 p-3 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                @error('rib_pdf')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            {{-- List of Laboratories (hidden by default) --}}
            <div id="laboratoire_list" class="mt-6">
                <label for="laboratoire" class="block text-sm font-medium text-gray-700">Choisissez le laboratoire*</label>
                <select id="laboratoire" name="laboratoire" class="mt-2 p-3 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" onchange="toggleOtherLaboratoireInput(this)">
                    <option value="">-</option>
                    <option value="laboratoire_1" {{ old('laboratoire') == 'laboratoire_1' ? 'selected' : '' }}>Sanofi</option>
                    <option value="laboratoire_2" {{ old('laboratoire') == 'laboratoire_2' ? 'selected' : '' }}>Novo Nordisk</option>
                    <option value="laboratoire_3" {{ old('laboratoire') == 'laboratoire_3' ? 'selected' : '' }}>Novartis</option>
                    <option value="laboratoire_4" {{ old('laboratoire') == 'laboratoire_4' ? 'selected' : '' }}>Amea</option>
                    <option value="laboratoire_5" {{ old('laboratoire') == 'laboratoire_5' ? 'selected' : '' }}>Pharmacare</option>
                    <option value="laboratoire_6" {{ old('laboratoire') == 'laboratoire_6' ? 'selected' : '' }}>AtlasPharm</option>
                    <option value="laboratoire_7" {{ old('laboratoire') == 'laboratoire_7' ? 'selected' : '' }}>Abbott</option>
                    <option value="laboratoire_8" {{ old('laboratoire') == 'laboratoire_8' ? 'selected' : '' }}>Galderma</option>
                    <option value="laboratoire_9" {{ old('laboratoire') == 'laboratoire_9' ? 'selected' : '' }}>Zénith Pharma</option>
                    <option value="laboratoire_10" {{ old('laboratoire') == 'laboratoire_10' ? 'selected' : '' }}>Servier</option>
                    <option value="laboratoire_11" {{ old('laboratoire') == 'laboratoire_11' ? 'selected' : '' }}>AstraZeneca</option>
                    <option value="laboratoire_12" {{ old('laboratoire') == 'laboratoire_12' ? 'selected' : '' }}>Dislog</option>
                    <option value="laboratoire_13" {{ old('laboratoire') == 'laboratoire_13' ? 'selected' : '' }}>Afric-Phar</option>
                    <option value="laboratoire_14" {{ old('laboratoire') == 'laboratoire_14' ? 'selected' : '' }}>SunPharma</option>
                    <option value="laboratoire_15" {{ old('laboratoire') == 'laboratoire_15' ? 'selected' : '' }}>Bottu</option>
                    <option value="laboratoire_16" {{ old('laboratoire') == 'laboratoire_16' ? 'selected' : '' }}>Lilly</option>
                    <option value="laboratoire_17" {{ old('laboratoire') == 'laboratoire_17' ? 'selected' : '' }}>Boehringer Ingelheim</option>
                    <option value="laboratoire_18" {{ old('laboratoire') == 'laboratoire_18' ? 'selected' : '' }}>Gylmed</option>
                    <option value="laboratoire_19" {{ old('laboratoire') == 'laboratoire_19' ? 'selected' : '' }}>Medavi</option>
                    <option value="laboratoire_20" {{ old('laboratoire') == 'laboratoire_20' ? 'selected' : '' }}>Merck</option>
                    <option value="laboratoire_21" {{ old('laboratoire') == 'laboratoire_21' ? 'selected' : '' }}>McPharma</option>
                    <option value="laboratoire_22" {{ old('laboratoire') == 'laboratoire_22' ? 'selected' : '' }}>Eramedic</option>
                    <option value="laboratoire_23" {{ old('laboratoire') == 'laboratoire_23' ? 'selected' : '' }}>Hikma</option>
                    <option value="laboratoire_24" {{ old('laboratoire') == 'laboratoire_24' ? 'selected' : '' }}>Phi</option>
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

            <div class="my-6">
                <label>
                    <input type="radio" name="status" value="sur-place">
                    Sur place
                </label><br>

                <label>
                    <input type="radio" name="status" value="invite">
                    Invité(e)
                </label>
            </div>

            <div class="my-6">
                <h1>RGPD</h1>
                <label>
                    <input type="radio" name="status" value="sur-place" required>
                    J'accepte de recevoir les emails du congrès et les nouveautés des événements.
                </label>
            </div>

            <button type="submit" class="mt-6 bg-sky-500 hover:bg-sky-700 text-white font-bold py-3 px-6 rounded-md w-full">
                SOUMETTRE
            </button>
        </form>

    </section>


    <script>
        function toggleOtherLaboratoireInput(select) {
            const otherInputDiv = document.getElementById('other_laboratoire_input');
            if (select.value === 'other') {
                otherInputDiv.classList.remove('hidden');
            } else {
                otherInputDiv.classList.add('hidden');
                // Clear the input value if it's hidden
                document.getElementById('other_laboratoire').value = '';
            }
        }
    </script>

    <script>
        function togglePaymentFields(method) {
            const ribPdfUpload = document.getElementById('rib_pdf_upload');
            const laboratoireList = document.getElementById('laboratoire_list');

            if (method === 'laboratoire') {
                laboratoireList.classList.remove('hidden');
                ribPdfUpload.classList.add('hidden');
            } else if (method === 'virement') {
                ribPdfUpload.classList.remove('hidden');
                laboratoireList.classList.add('hidden');
            }
        }

        // لتعيين الحقول بناءً على القيم القديمة عند تحميل الصفحة
        document.addEventListener('DOMContentLoaded', function () {
            const selectedMethod = "{{ old('payment_method') }}";
            if (selectedMethod) {
                togglePaymentFields(selectedMethod);
            }
        });
    </script>

</x-app-layout>
