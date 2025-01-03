<x-app-layout>
    <section class="fade-in flex justify-center items-center h-screen mt-[150px] mb-[150px]">
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
</x-app-layout>
