<!-- Payment Information Section -->
<div class="mb-12">
    <div class="flex items-center mb-8">
        <div class="flex items-center justify-center w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-500 rounded-xl mr-4 shadow-lg">
            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"/>
                <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"/>
            </svg>
        </div>
        <div>
            <h3 class="text-2xl font-bold text-gray-900">Prise en charge par laboratoire</h3>
            <p class="text-gray-600">Informations de paiement <span class="text-red-500">*</span></p>
        </div>
    </div>
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
        <div class="group">
            <label class="relative cursor-pointer">
                <input type="radio" name="payment_choice" value="yes" {{ old('payment_choice') == 'yes' ? 'checked' : '' }} 
                    class="peer sr-only" required onchange="togglePaymentFields()">
                <div class="p-6 border-2 border-gray-200 rounded-2xl transition-all duration-300 peer-checked:border-green-500 peer-checked:bg-gradient-to-br peer-checked:from-green-50 peer-checked:to-emerald-50 hover:border-gray-300 hover:shadow-lg">
                    <div class="flex items-center">
                        <div class="w-5 h-5 border-2 border-gray-300 rounded-full peer-checked:border-green-500 peer-checked:bg-green-500 flex items-center justify-center transition-all duration-300">
                            <div class="w-2 h-2 bg-white rounded-full opacity-0 peer-checked:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <div class="ml-3">
                            <h4 class="text-lg font-bold text-gray-800">Oui</h4>
                            <p class="text-gray-600 text-sm">Prise en charge par un laboratoire</p>
                        </div>
                    </div>
                </div>
            </label>
        </div>

        <div class="group">
            <label class="relative cursor-pointer">
                <input type="radio" name="payment_choice" value="no" {{ old('payment_choice') == 'no' ? 'checked' : '' }} 
                    class="peer sr-only" required onchange="togglePaymentFields()">
                <div class="p-6 border-2 border-gray-200 rounded-2xl transition-all duration-300 peer-checked:border-red-500 peer-checked:bg-gradient-to-br peer-checked:from-red-50 peer-checked:to-pink-50 hover:border-gray-300 hover:shadow-lg">
                    <div class="flex items-center">
                        <div class="w-5 h-5 border-2 border-gray-300 rounded-full peer-checked:border-red-500 peer-checked:bg-red-500 flex items-center justify-center transition-all duration-300">
                            <div class="w-2 h-2 bg-white rounded-full opacity-0 peer-checked:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <div class="ml-3">
                            <h4 class="text-lg font-bold text-gray-800">Non</h4>
                            <p class="text-gray-600 text-sm">Paiement personnel</p>
                        </div>
                    </div>
                </div>
            </label>
        </div>
    </div>

    @error('payment_choice')
        <div class="mb-4 p-3 bg-red-50 border border-red-200 rounded-xl">
            <span class="text-red-600 text-sm flex items-center">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                </svg>
                {{ $message }}
            </span>
        </div>
    @enderror

    <div id="laboratoire-section" style="display: none;">
        <div class="group">
            <label for="laboratoire" class="block text-sm font-bold text-gray-800 mb-3">Nom du laboratoire</label>
            <select id="laboratoire" name="laboratoire" 
                class="w-full px-6 py-4 bg-gray-50 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-green-500/20 focus:border-green-500 transition-all duration-300 hover:border-gray-300 text-gray-900" 
                onchange="toggleOtherLaboratoire()">
                <option value="">Sélectionnez un laboratoire</option>
                <option value="Laboratoire A" {{ old('laboratoire') == 'Laboratoire A' ? 'selected' : '' }}>Laboratoire A</option>
                <option value="Laboratoire B" {{ old('laboratoire') == 'Laboratoire B' ? 'selected' : '' }}>Laboratoire B</option>
                <option value="Autre" {{ old('laboratoire') == 'Autre' ? 'selected' : '' }}>Autre</option>
            </select>
            @error('laboratoire')
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

        <div id="other-laboratoire" class="{{ old('laboratoire') == 'Autre' ? '' : 'hidden' }} mt-4">
            <div class="group">
                <label for="other_laboratoire" class="block text-sm font-bold text-gray-800 mb-3">Entrez le nom du laboratoire</label>
                <input type="text" id="other_laboratoire" name="other_laboratoire" value="{{ old('other_laboratoire') }}" 
                    class="w-full px-6 py-4 bg-gray-50 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-green-500/20 focus:border-green-500 transition-all duration-300 hover:border-gray-300 text-gray-900 placeholder-gray-500" 
                    placeholder="Nom du laboratoire">
                @error('other_laboratoire')
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

        <div id="status-select" class="hidden mt-4">
            <div class="group">
                <label for="laboratoire_status" class="block text-sm font-bold text-gray-800 mb-3">Statut du paiement</label>
                <select id="laboratoire_status" name="laboratoire_status" 
                    class="w-full px-6 py-4 bg-gray-50 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-green-500/20 focus:border-green-500 transition-all duration-300 hover:border-gray-300 text-gray-900">
                    <option value="encours" {{ old('laboratoire_status') == 'encours' ? 'selected' : '' }}>En Cours</option>
                    <option value="confirme" {{ old('laboratoire_status') == 'confirme' ? 'selected' : '' }}>Confirmé</option>
                </select>
            </div>
        </div>

        <div id="rib-upload" style="display: none;" class="mt-4">
            <div class="group">
                <label for="rib_pdf" class="block text-sm font-bold text-gray-800 mb-3">RIB PDF <span class="text-red-500">*</span></label>
                <div class="relative">
                    <input type="file" id="rib_pdf" name="rib_pdf" accept=".pdf" 
                        class="w-full px-6 py-4 bg-gray-50 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-green-500/20 focus:border-green-500 transition-all duration-300 hover:border-gray-300 text-gray-900 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100">
                    <div class="absolute inset-y-0 right-0 flex items-center pr-6 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM6.293 6.707a1 1 0 010-1.414l3-3a1 1 0 011.414 0l3 3a1 1 0 01-1.414 1.414L11 5.414V13a1 1 0 11-2 0V5.414L7.707 6.707a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
                <p class="mt-1 text-sm text-gray-500">Format PDF uniquement, taille max 5MB</p>
                @error('rib_pdf')
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
</div>

<script>
function togglePaymentFields() {
    const paymentChoice = document.querySelector('input[name="payment_choice"]:checked');
    const laboratoireSection = document.getElementById('laboratoire-section');
    const ribUpload = document.getElementById('rib-upload');
    
    if (paymentChoice && paymentChoice.value === 'yes') {
        laboratoireSection.style.display = 'block';
        ribUpload.style.display = 'block';
    } else {
        laboratoireSection.style.display = 'none';
        ribUpload.style.display = 'none';
    }
}

function toggleOtherLaboratoire() {
    const select = document.getElementById('laboratoire');
    const otherDiv = document.getElementById('other-laboratoire');
    const statusDiv = document.getElementById('status-select');
    
    if (select.value === 'Autre') {
        otherDiv.classList.remove('hidden');
        statusDiv.classList.add('hidden');
    } else if (select.value !== '') {
        otherDiv.classList.add('hidden');
        statusDiv.classList.remove('hidden');
    } else {
        otherDiv.classList.add('hidden');
        statusDiv.classList.add('hidden');
    }
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
    togglePaymentFields();
    toggleOtherLaboratoire();
});
</script>