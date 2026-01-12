<!-- Professional Information Section -->
<div class="mb-12">
    <div class="flex items-center mb-8">
        <div class="flex items-center justify-center w-12 h-12 bg-gradient-to-r from-purple-500 to-indigo-500 rounded-xl mr-4 shadow-lg">
            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"/>
                <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"/>
            </svg>
        </div>
        <div>
            <h3 class="text-2xl font-bold text-gray-900">Informations professionnelles</h3>
            <p class="text-gray-600">Votre profil médical</p>
        </div>
    </div>
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="group">
            <label for="secteur" class="block text-sm font-bold text-gray-800 mb-3">Secteur <span class="text-red-500">*</span></label>
            <select id="secteur" name="secteur" required 
                class="w-full px-6 py-4 bg-gray-50 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-purple-500/20 focus:border-purple-500 transition-all duration-300 hover:border-gray-300 text-gray-900">
                <option value="">Sélectionnez votre secteur</option>
                <option value="public" {{ old('secteur') == 'public' ? 'selected' : '' }}>Public</option>
                <option value="private" {{ old('secteur') == 'private' ? 'selected' : '' }}>Privé</option>
            </select>
            @error('secteur')
                <div class="mt-2 p-3 bg-red-50 border border-red-200 rounded-xl">
                    <span class="text-red-600 text-sm flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        {{ $message }}
                    </span>
                </div>
            @enderror
        </div>

        <div class="group">
            <label for="type" class="block text-sm font-bold text-gray-800 mb-3">Type <span class="text-red-500">*</span></label>
            <select id="type" name="type" required 
                class="w-full px-6 py-4 bg-gray-50 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-purple-500/20 focus:border-purple-500 transition-all duration-300 hover:border-gray-300 text-gray-900">
                <option value="">Sélectionnez votre type</option>
                <option value="specialiste" {{ old('type') == 'specialiste' ? 'selected' : '' }}>Spécialiste</option>
                <option value="resident" {{ old('type') == 'resident' ? 'selected' : '' }}>Résident</option>
            </select>
            @error('type')
                <div class="mt-2 p-3 bg-red-50 border border-red-200 rounded-xl">
                    <span class="text-red-600 text-sm flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        {{ $message }}
                    </span>
                </div>
            @enderror
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-8">
        <div class="group">
            <label for="specialite" class="block text-sm font-bold text-gray-800 mb-3">Spécialité <span class="text-red-500">*</span></label>
            <select id="specialite" name="specialite" required 
                class="w-full px-6 py-4 bg-gray-50 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-purple-500/20 focus:border-purple-500 transition-all duration-300 hover:border-gray-300 text-gray-900" 
                onchange="toggleOtherSpecialite()">
                <option value="">Sélectionnez votre spécialité</option>
                <option value="Endocrinologie" {{ old('specialite') == 'Endocrinologie' ? 'selected' : '' }}>Endocrinologie</option>
                <option value="Médecine interne" {{ old('specialite') == 'Médecine interne' ? 'selected' : '' }}>Médecine interne</option>
                <option value="Cardiologie" {{ old('specialite') == 'Cardiologie' ? 'selected' : '' }}>Cardiologie</option>
                <option value="Autres" {{ old('specialite') == 'Autres' ? 'selected' : '' }}>Autres</option>
            </select>
            @error('specialite')
                <div class="mt-2 p-3 bg-red-50 border border-red-200 rounded-xl">
                    <span class="text-red-600 text-sm flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        {{ $message }}
                    </span>
                </div>
            @enderror
        </div>

        <div class="group">
            <label for="ville" class="block text-sm font-bold text-gray-800 mb-3">Ville <span class="text-red-500">*</span></label>
            <input type="text" id="ville" name="ville" required 
                class="w-full px-6 py-4 bg-gray-50 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-purple-500/20 focus:border-purple-500 transition-all duration-300 hover:border-gray-300 text-gray-900 placeholder-gray-500" 
                placeholder="Entrez votre ville" value="{{ old('ville') }}">
            @error('ville')
                <div class="mt-2 p-3 bg-red-50 border border-red-200 rounded-xl">
                    <span class="text-red-600 text-sm flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        {{ $message }}
                    </span>
                </div>
            @enderror
        </div>
    </div>

    <div id="other-specialite" class="{{ old('specialite') == 'Autres' ? '' : 'hidden' }} mt-8">
        <div class="group">
            <label for="other_specialite" class="block text-sm font-bold text-gray-800 mb-3">Précisez votre spécialité</label>
            <input type="text" id="other_specialite" name="other_specialite" value="{{ old('other_specialite') }}" 
                class="w-full px-6 py-4 bg-gray-50 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-purple-500/20 focus:border-purple-500 transition-all duration-300 hover:border-gray-300 text-gray-900 placeholder-gray-500" 
                placeholder="Précisez votre spécialité...">
            @error('other_specialite')
                <div class="mt-2 p-3 bg-red-50 border border-red-200 rounded-xl">
                    <span class="text-red-600 text-sm flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        {{ $message }}
                    </span>
                </div>
            @enderror
        </div>
    </div>
</div>

<script>
function toggleOtherSpecialite() {
    const select = document.getElementById('specialite');
    const otherDiv = document.getElementById('other-specialite');
    const otherInput = document.getElementById('other_specialite');
    
    if (select.value === 'Autres') {
        otherDiv.classList.remove('hidden');
        otherInput.focus();
    } else {
        otherDiv.classList.add('hidden');
        otherInput.value = '';
    }
}
</script>