<!-- Accommodation Details Section -->
<div class="mb-12" id="accommodation-section" style="display: none;">
    <div class="flex items-center mb-8">
        <div class="flex items-center justify-center w-12 h-12 bg-gradient-to-r from-teal-500 to-cyan-500 rounded-xl mr-4 shadow-lg">
            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
            </svg>
        </div>
        <div>
            <h3 class="text-2xl font-bold text-gray-900">Détails de l'hébergement</h3>
            <p class="text-gray-600">Dates de séjour</p>
        </div>
    </div>
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="group">
            <label for="arrival_date" class="block text-sm font-bold text-gray-800 mb-3">Date d'arrivée <span class="text-red-500">*</span></label>
            <div class="relative">
                <select id="arrival_date" name="arrival_date" 
                    class="w-full px-6 py-4 bg-gray-50 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-teal-500/20 focus:border-teal-500 transition-all duration-300 hover:border-gray-300 text-gray-900 appearance-none">
                    <option value="">Sélectionnez une date</option>
                    <option value="2025-05-29" {{ old('arrival_date') == '2025-05-29' ? 'selected' : '' }}>29/05/2025</option>
                    <option value="2025-05-30" {{ old('arrival_date') == '2025-05-30' ? 'selected' : '' }}>30/05/2025</option>
                    <option value="2025-05-31" {{ old('arrival_date') == '2025-05-31' ? 'selected' : '' }}>31/05/2025</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center pr-6 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </div>
            </div>
            @error('arrival_date')
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
            <label for="departure_date" class="block text-sm font-bold text-gray-800 mb-3">Date de départ <span class="text-red-500">*</span></label>
            <div class="relative">
                <select id="departure_date" name="departure_date" 
                    class="w-full px-6 py-4 bg-gray-50 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-teal-500/20 focus:border-teal-500 transition-all duration-300 hover:border-gray-300 text-gray-900 appearance-none">
                    <option value="">Sélectionnez une date</option>
                    <option value="2025-05-30" {{ old('departure_date') == '2025-05-30' ? 'selected' : '' }}>30/05/2025</option>
                    <option value="2025-05-31" {{ old('departure_date') == '2025-05-31' ? 'selected' : '' }}>31/05/2025</option>
                    <option value="2025-06-01" {{ old('departure_date') == '2025-06-01' ? 'selected' : '' }}>01/06/2025</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center pr-6 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </div>
            </div>
            @error('departure_date')
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