<div class="mb-12">
    <div class="flex items-center mb-8">
        <div class="flex items-center justify-center w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-xl mr-4 shadow-lg">
            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
            </svg>
        </div>
        <div>
            <h3 class="text-2xl font-bold text-gray-900">Informations personnelles</h3>
            <p class="text-gray-600">Vos données personnelles de base</p>
        </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="group">
            <label for="lastname" class="block text-sm font-bold text-gray-800 mb-3">Nom <span class="text-red-500">*</span></label>
            <div class="relative">
                <input type="text" id="lastname" name="lastname" required 
                    class="w-full px-6 py-4 bg-gray-50 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-300 hover:border-gray-300 group-hover:shadow-md text-gray-900 placeholder-gray-500" 
                    placeholder="Entrez votre nom" value="{{ old('lastname') }}">
                <div class="absolute inset-y-0 right-0 flex items-center pr-6">
                    <svg class="w-5 h-5 text-gray-400 group-focus-within:text-blue-500 transition-colors" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                    </svg>
                </div>
            </div>
            @error('lastname')
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
            <label for="firstname" class="block text-sm font-bold text-gray-800 mb-3">Prénom <span class="text-red-500">*</span></label>
            <div class="relative">
                <input type="text" id="firstname" name="firstname" required 
                    class="w-full px-6 py-4 bg-gray-50 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-300 hover:border-gray-300 group-hover:shadow-md text-gray-900 placeholder-gray-500" 
                    placeholder="Entrez votre prénom" value="{{ old('firstname') }}">
                <div class="absolute inset-y-0 right-0 flex items-center pr-6">
                    <svg class="w-5 h-5 text-gray-400 group-focus-within:text-blue-500 transition-colors" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                    </svg>
                </div>
            </div>
            @error('firstname')
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