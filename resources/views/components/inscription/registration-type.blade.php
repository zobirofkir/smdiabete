<!-- Registration Type Section -->
<div class="mb-12">
    <div class="flex items-center mb-8">
        <div class="flex items-center justify-center w-12 h-12 bg-gradient-to-r from-orange-500 to-red-500 rounded-xl mr-4 shadow-lg">
            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"/>
            </svg>
        </div>
        <div>
            <h3 class="text-2xl font-bold text-gray-900">Type d'inscription</h3>
            <p class="text-gray-600">Choisissez votre formule <span class="text-red-500">*</span></p>
        </div>
    </div>
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="group">
            <label class="relative cursor-pointer">
                <input type="radio" name="inscription_type" value="seule" {{ old('inscription_type') == 'seule' ? 'checked' : '' }} 
                    class="peer sr-only" required onchange="toggleAccommodation()">
                <div class="p-8 border-3 border-gray-200 rounded-2xl transition-all duration-300 peer-checked:border-blue-500 peer-checked:bg-gradient-to-br peer-checked:from-blue-50 peer-checked:to-indigo-50 hover:border-gray-300 hover:shadow-lg group-hover:scale-[1.02]">
                    <div class="flex items-start">
                        <div class="w-6 h-6 border-3 border-gray-300 rounded-full peer-checked:border-blue-500 peer-checked:bg-blue-500 flex items-center justify-center mt-1 transition-all duration-300">
                            <div class="w-3 h-3 bg-white rounded-full opacity-0 peer-checked:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-xl font-bold text-gray-800 mb-2">Inscription seule</h4>
                            <p class="text-gray-600 leading-relaxed">Participation au congrès uniquement, sans hébergement</p>
                            <div class="mt-3 flex items-center text-blue-600">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm font-medium">Formule simple</span>
                            </div>
                        </div>
                    </div>
                </div>
            </label>
        </div>

        <div class="group">
            <label class="relative cursor-pointer">
                <input type="radio" name="inscription_type" value="hebergement" {{ old('inscription_type') == 'hebergement' ? 'checked' : '' }} 
                    class="peer sr-only" required onchange="toggleAccommodation()">
                <div class="p-8 border-3 border-gray-200 rounded-2xl transition-all duration-300 peer-checked:border-orange-500 peer-checked:bg-gradient-to-br peer-checked:from-orange-50 peer-checked:to-red-50 hover:border-gray-300 hover:shadow-lg group-hover:scale-[1.02]">
                    <div class="flex items-start">
                        <div class="w-6 h-6 border-3 border-gray-300 rounded-full peer-checked:border-orange-500 peer-checked:bg-orange-500 flex items-center justify-center mt-1 transition-all duration-300">
                            <div class="w-3 h-3 bg-white rounded-full opacity-0 peer-checked:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-xl font-bold text-gray-800 mb-2">Inscription + Hébergement</h4>
                            <p class="text-gray-600 leading-relaxed">Participation avec hébergement inclus dans un hôtel partenaire</p>
                            <div class="mt-3 flex items-center text-orange-600">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm font-medium">Formule complète</span>
                            </div>
                        </div>
                    </div>
                </div>
            </label>
        </div>
    </div>
    
    @error('inscription_type')
        <div class="mt-4 p-3 bg-red-50 border border-red-200 rounded-xl">
            <span class="text-red-600 text-sm flex items-center">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                </svg>
                {{ $message }}
            </span>
        </div>
    @enderror
</div>