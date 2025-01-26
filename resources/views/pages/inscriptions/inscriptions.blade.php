<x-app-layout>
    <section class="fade-in flex justify-center items-center mt-[150px] mb-[150px]">
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
                    <label for="sex" class="block text-sm font-medium text-gray-700">Vous êtes un*</label>
                    <select id="sex" name="sex" required class="mt-2 p-3 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="">-</option>
                        <option value="dr" {{ old('sex') == 'dr' ? 'selected' : '' }}>Dr</option>
                        <option value="pr" {{ old('sex') == 'pr' ? 'selected' : '' }}>Pr</option>
                    </select>
                    @error('sex')
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
            <div id="laboratoire_list" class="mt-6 hidden">
                <label for="laboratoire" class="block text-sm font-medium text-gray-700">Choisissez un laboratoire*</label>
                <select id="laboratoire" name="laboratoire" class="mt-2 p-3 w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="">-</option>
                    <option value="laboratoire_1" {{ old('laboratoire') == 'laboratoire_1' ? 'selected' : '' }}>Laboratoire 1</option>
                    <option value="laboratoire_2" {{ old('laboratoire') == 'laboratoire_2' ? 'selected' : '' }}>Laboratoire 2</option>
                    <option value="laboratoire_3" {{ old('laboratoire') == 'laboratoire_3' ? 'selected' : '' }}>Laboratoire 3</option>
                </select>
                @error('laboratoire')
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

            <button type="submit" class="mt-6 bg-sky-500 hover:bg-sky-700 text-white font-bold py-3 px-6 rounded-md w-full">
                VALIDER
            </button>
        </form>


    </section>

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
