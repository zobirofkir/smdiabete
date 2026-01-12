<div class="mb-12">
    <div class="flex items-center mb-8">
        <div class="flex items-center justify-center w-12 h-12 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-xl mr-4 shadow-lg">
            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
            </svg>
        </div>
        <div>
            <h3 class="text-2xl font-bold text-gray-900">Informations de contact</h3>
            <p class="text-gray-600">Comment vous joindre</p>
        </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="group">
            <label for="phone" class="block text-sm font-bold text-gray-800 mb-3">Téléphone Mobile <span class="text-red-500">*</span></label>
            <div class="relative">
                <input type="tel" id="phone" name="phone" required 
                    class="w-full px-6 py-4 bg-gray-50 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500 transition-all duration-300 hover:border-gray-300 group-hover:shadow-md text-gray-900 placeholder-gray-500" 
                    placeholder="+212 6XX XXX XXX" value="{{ old('phone') }}">
                <div class="absolute inset-y-0 right-0 flex items-center pr-6">
                    <svg class="w-5 h-5 text-gray-400 group-focus-within:text-emerald-500 transition-colors" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                    </svg>
                </div>
            </div>
            @error('phone')
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
            <label for="email" class="block text-sm font-bold text-gray-800 mb-3">Email <span class="text-red-500">*</span></label>
            <div class="relative">
                <input type="email" id="email" name="email" required 
                    class="w-full px-6 py-4 bg-gray-50 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500 transition-all duration-300 hover:border-gray-300 group-hover:shadow-md text-gray-900 placeholder-gray-500" 
                    placeholder="votre@email.com" value="{{ old('email') }}">
                <div class="absolute inset-y-0 right-0 flex items-center pr-6">
                    <svg class="w-5 h-5 text-gray-400 group-focus-within:text-emerald-500 transition-colors" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                    </svg>
                </div>
            </div>
            @error('email')
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