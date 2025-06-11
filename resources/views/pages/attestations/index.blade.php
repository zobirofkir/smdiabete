<x-app-layout>
    <div class="max-w-2xl mx-auto py-12 px-6">
        <h2 class="text-3xl font-bold text-blue-700 mb-8 text-center">Demande d’attestation</h2>

        <form method="POST" action="{{ route('attestation.store') }}" 
              class="bg-white p-8 rounded-2xl shadow-xl space-y-6 border border-blue-100">
            @csrf

            {{-- Nom --}}
            <div>
                <label for="nom" class="block text-sm font-semibold text-blue-700">Nom</label>
                <input type="text" id="nom" name="nom" required
                    class="mt-1 w-full rounded-xl border border-blue-300 bg-white text-blue-800 placeholder-blue-400 shadow-sm focus:border-blue-500 focus:ring-blue-200 focus:ring-2 p-2">
            </div>

            {{-- Prénom --}}
            <div>
                <label for="prenom" class="block text-sm font-semibold text-blue-700">Prénom</label>
                <input type="text" id="prenom" name="prenom" required
                    class="mt-1 w-full rounded-xl border border-blue-300 bg-white text-blue-800 placeholder-blue-400 shadow-sm focus:border-blue-500 focus:ring-blue-200 focus:ring-2 p-2">
            </div>

            {{-- Email --}}
            <div>
                <label for="email" class="block text-sm font-semibold text-blue-700">Email</label>
                <input type="email" id="email" name="email" required
                    class="mt-1 w-full rounded-xl border border-blue-300 bg-white text-blue-800 placeholder-blue-400 shadow-sm focus:border-blue-500 focus:ring-blue-200 focus:ring-2 p-2">
            </div>

            {{-- Type d’attestation --}}
            <div>
                <label for="attestation" class="block text-sm font-semibold text-blue-700">Type d’attestation</label>
                <select id="attestation" name="attestation" required
                    class="mt-1 w-full rounded-xl border border-blue-300 bg-white text-black shadow-sm focus:border-blue-500 focus:ring-blue-200 focus:ring-2">
                    <option value="">-- Sélectionnez --</option>
                    <option value="presence">Attestation de présence</option>
                    <option value="affichee">Attestation de communication affichée</option>
                    <option value="orale">Attestation de communication orale</option>
                </select>
            </div>

            {{-- Bouton d'envoi --}}
            <div class="text-center pt-4">
                <button type="submit"
                    class="inline-flex items-center justify-center px-6 py-2 bg-blue-500 hover:bg-blue-700 text-white text-sm font-semibold rounded-xl transition duration-200 shadow-md">
                    Envoyer
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
