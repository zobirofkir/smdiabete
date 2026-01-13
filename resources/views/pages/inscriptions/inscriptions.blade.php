<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-indigo-50 via-white to-cyan-50 py-12 px-4 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
        <div class="absolute top-0 left-0 w-72 h-72 bg-blue-400 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob"></div>
        <div class="absolute top-0 right-0 w-72 h-72 bg-purple-400 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-8 left-20 w-72 h-72 bg-pink-400 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-4000"></div>
        
        <div class="max-w-5xl mx-auto relative ">
            <!-- Header -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl mb-6 shadow-lg">
                    <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h1 class="text-5xl md:text-6xl font-black bg-gradient-to-r from-gray-900 via-blue-800 to-indigo-800 bg-clip-text text-transparent mb-4 tracking-tight">INSCRIPTION</h1>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto leading-relaxed">Rejoignez notre événement médical d'excellence et participez à l'avenir de la médecine</p>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-indigo-600 mx-auto mt-6 rounded-full"></div>
            </div>
 
            <!-- Pricing Info Button -->
            <div class="text-center mb-8">
                <button type="button" onclick="openPricingModal()" 
                    class="group relative bg-gradient-to-r from-amber-500 to-orange-500 hover:from-amber-600 hover:to-orange-600 text-white font-bold py-4 px-8 rounded-2xl transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-amber-500/50 shadow-xl overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-r from-orange-600 to-red-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <span class="relative z-10 flex items-center text-lg">
                        <svg class="w-6 h-6 mr-3 group-hover:animate-bounce" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"/>
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"/>
                        </svg>
                        MONTANT DE L'INSCRIPTION
                    </span>
                </button>
            </div>

            <!-- Pricing Modal -->
            @include('components.inscription.inscription-modal')

            <!-- Form Container -->
            <div class="bg-white/80 backdrop-blur-xl rounded-3xl shadow-2xl border border-white/20 overflow-hidden relative">
                <!-- Decorative Elements -->
                <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-600"></div>                
                <form action="{{ route('inscriptions.store') }}" method="POST" class="p-10" enctype="multipart/form-data">
                    @csrf

                    {{-- Success and Error Messages --}}
                    @if (session('success'))
                        <div class="bg-emerald-50 border-l-4 border-emerald-400 text-emerald-700 p-4 rounded-r-lg mb-6" role="alert">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="font-medium">{{ session('success') }}</span>
                            </div>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="bg-red-50 border-l-4 border-red-400 text-red-700 p-4 rounded-r-lg mb-6" role="alert">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                </svg>
                                <span class="font-medium">{{ session('error') }}</span>
                            </div>
                        </div>
                    @endif

                    {{-- Personal Information Section --}}
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

                    {{-- Contact Information Section --}}
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
                    {{-- Professional Information Section --}}
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
                                <div class="relative">
                                    <select id="secteur" name="secteur" required 
                                        class="w-full px-6 py-4 bg-gray-50 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-purple-500/20 focus:border-purple-500 transition-all duration-300 hover:border-gray-300 group-hover:shadow-md text-gray-900 appearance-none">
                                        <option value="">Sélectionnez votre secteur</option>
                                        <option value="public" {{ old('secteur') == 'public' ? 'selected' : '' }}>Public</option>
                                        <option value="private" {{ old('secteur') == 'private' ? 'selected' : '' }}>Privé</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-6 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-400 group-focus-within:text-purple-500 transition-colors" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                </div>
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
                                <div class="relative">
                                    <select id="type" name="type" required 
                                        class="w-full px-6 py-4 bg-gray-50 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-purple-500/20 focus:border-purple-500 transition-all duration-300 hover:border-gray-300 group-hover:shadow-md text-gray-900 appearance-none">
                                        <option value="">Sélectionnez votre type</option>
                                        <option value="specialiste" {{ old('type') == 'specialiste' ? 'selected' : '' }}>Spécialiste</option>
                                        <option value="resident" {{ old('type') == 'resident' ? 'selected' : '' }}>Résidant</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-6 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-400 group-focus-within:text-purple-500 transition-colors" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                </div>
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
                                <div class="relative">
                                    <select id="specialite" name="specialite" required 
                                        class="w-full px-6 py-4 bg-gray-50 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-purple-500/20 focus:border-purple-500 transition-all duration-300 hover:border-gray-300 group-hover:shadow-md text-gray-900 appearance-none">
                                        <option value="Endocrinologie">Endocrinologie</option>
                                        <option value="Cardiologie">Cardiologie</option>
                                        <option value="Néphrologie">Néphrologie</option>
                                        <option value="Médecin Généraliste">Médecine générale</option>
                                        <option value="Autres">Autres</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-6 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-400 group-focus-within:text-purple-500 transition-colors" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                </div>
                                <input type="text" id="otherSpecialite" name="other_specialite" 
                                    class="w-full px-6 py-4 bg-gray-50 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-purple-500/20 focus:border-purple-500 transition-all duration-300 hover:border-gray-300 text-gray-900 placeholder-gray-500 hidden mt-3" 
                                    placeholder="Spécifiez votre spécialité" value="{{ old('other_specialite') }}">
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
                                <div class="relative">
                                    <input type="text" id="ville" name="ville" required 
                                        class="w-full px-6 py-4 bg-gray-50 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-purple-500/20 focus:border-purple-500 transition-all duration-300 hover:border-gray-300 group-hover:shadow-md text-gray-900 placeholder-gray-500" 
                                        placeholder="Entrez votre ville" value="{{ old('ville') }}">
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-6">
                                        <svg class="w-5 h-5 text-gray-400 group-focus-within:text-purple-500 transition-colors" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                </div>
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
                    </div>

                    {{-- Registration Type Section --}}
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
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <label class="relative cursor-pointer group">
                                <input type="radio" id="inscription_seule" name="inscription_type" value="seule" required
                                    class="sr-only peer" {{ old('inscription_type') == 'seule' ? 'checked' : '' }}>
                                <div class="p-8 border-3 border-gray-200 rounded-2xl transition-all duration-300 peer-checked:border-orange-500 peer-checked:bg-gradient-to-br peer-checked:from-orange-50 peer-checked:to-red-50 hover:border-gray-300 hover:shadow-lg group-hover:scale-[1.02]">
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 border-3 border-gray-300 rounded-full peer-checked:border-orange-500 peer-checked:bg-orange-500 flex items-center justify-center mt-1 transition-all duration-300">
                                            <div class="w-3 h-3 bg-white rounded-full opacity-0 peer-checked:opacity-100 transition-opacity duration-300"></div>
                                        </div>
                                        <div class="ml-4">
                                            <h4 class="text-xl font-bold text-gray-800 mb-2">Inscription Seule</h4>
                                            <p class="text-gray-600 leading-relaxed">Participation à l'événement uniquement avec accès à toutes les sessions</p>
                                            <div class="mt-3 flex items-center text-orange-600">
                                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                                </svg>
                                                <span class="text-sm font-medium">Accès complet</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </label>
                            
                            <label class="relative cursor-pointer group">
                                <input type="radio" id="inscription_hebergement" name="inscription_type" value="hebergement"
                                    class="sr-only peer" {{ old('inscription_type') == 'hebergement' ? 'checked' : '' }}>
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

                    {{-- Accommodation Details Section --}}
                    <div class="mb-12">
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
                                    <select id="arrival_date" name="arrival_date" disabled 
                                        class="w-full px-6 py-4 bg-gray-100 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-teal-500/20 focus:border-teal-500 transition-all duration-300 hover:border-gray-300 text-gray-500 appearance-none disabled:cursor-not-allowed">
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
                                    <select id="departure_date" name="departure_date" disabled 
                                        class="w-full px-6 py-4 bg-gray-100 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-teal-500/20 focus:border-teal-500 transition-all duration-300 hover:border-gray-300 text-gray-500 appearance-none disabled:cursor-not-allowed">
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

                    {{-- Payment Information Section --}}
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-gray-800 mb-6 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"/>
                                <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"/>
                            </svg>
                            Prise en charge par laboratoire <span class="text-red-500">*</span>
                        </h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                            <label class="relative cursor-pointer">
                                <input type="radio" id="payment_yes" name="payment_choice" value="yes" onclick="handlePaymentChoice('yes')"
                                    class="sr-only peer">
                                <div class="p-6 border-2 border-gray-200 rounded-xl transition-all duration-200 peer-checked:border-green-500 peer-checked:bg-green-50 hover:border-gray-300">
                                    <div class="flex items-center">
                                        <div class="w-5 h-5 border-2 border-gray-300 rounded-full peer-checked:border-green-500 peer-checked:bg-green-500 flex items-center justify-center">
                                            <div class="w-2 h-2 bg-white rounded-full opacity-0 peer-checked:opacity-100"></div>
                                        </div>
                                        <div class="ml-3">
                                            <h4 class="font-semibold text-gray-800">Oui</h4>
                                            <p class="text-sm text-gray-600">Prise en charge par un laboratoire</p>
                                        </div>
                                    </div>
                                </div>
                            </label>
                            
                            <label class="relative cursor-pointer">
                                <input type="radio" id="payment_no" name="payment_choice" value="no" onclick="handlePaymentChoice('no')"
                                    class="sr-only peer">
                                <div class="p-6 border-2 border-gray-200 rounded-xl transition-all duration-200 peer-checked:border-red-500 peer-checked:bg-red-50 hover:border-gray-300">
                                    <div class="flex items-center">
                                        <div class="w-5 h-5 border-2 border-gray-300 rounded-full peer-checked:border-red-500 peer-checked:bg-red-500 flex items-center justify-center">
                                            <div class="w-2 h-2 bg-white rounded-full opacity-0 peer-checked:opacity-100"></div>
                                        </div>
                                        <div class="ml-3">
                                            <h4 class="font-semibold text-gray-800">Non</h4>
                                            <p class="text-sm text-gray-600">Paiement personnel</p>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>

                        <div id="payment_fields" class="hidden bg-gray-50 p-6 rounded-xl border border-gray-200">
                            <div class="space-y-6">
                                {{-- List of Laboratories (hidden by default) --}}
                                <div id="laboratoire_list">
                                    <label for="laboratoire" class="block text-sm font-semibold text-gray-700 mb-3">Choisissez le laboratoire <span class="text-red-500">*</span></label>
                                    <select id="laboratoire" name="laboratoire" onchange="toggleOtherLaboratoireInput(this)"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 hover:border-gray-400">
                                        <option value="">Sélectionnez un laboratoire</option>
                                    <option value="Sanofi" {{ old('laboratoire') == 'Sanofi' ? 'selected' : '' }}>Sanofi</option>
                                    <option value="Novo Nordisk" {{ old('laboratoire') == 'Novo Nordisk' ? 'selected' : '' }}>Novo Nordisk</option>
                                    <option value="Novartis" {{ old('laboratoire') == 'Novartis' ? 'selected' : '' }}>Novartis</option>
                                    <option value="Amea" {{ old('laboratoire') == 'Amea' ? 'selected' : '' }}>Amea</option>
                                    <option value="Pharmacare" {{ old('laboratoire') == 'Pharmacare' ? 'selected' : '' }}>Pharmacare</option>
                                    <option value="AtlasPharm" {{ old('laboratoire') == 'AtlasPharm' ? 'selected' : '' }}>AtlasPharm</option>
                                    <option value="Abbott" {{ old('laboratoire') == 'Abbott' ? 'selected' : '' }}>Abbott</option>
                                    <option value="Galderma" {{ old('laboratoire') == 'Galderma' ? 'selected' : '' }}>Galderma</option>
                                    <option value="Zénith Pharma" {{ old('laboratoire') == 'Zénith Pharma' ? 'selected' : '' }}>Zénith Pharma</option>
                                    <option value="Servier" {{ old('laboratoire') == 'Servier' ? 'selected' : '' }}>Servier</option>
                                    <option value="AstraZeneca" {{ old('laboratoire') == 'AstraZeneca' ? 'selected' : '' }}>AstraZeneca</option>
                                    <option value="Dislog" {{ old('laboratoire') == 'Dislog' ? 'selected' : '' }}>Dislog</option>
                                    <option value="Afric-Phar" {{ old('laboratoire') == 'Afric-Phar' ? 'selected' : '' }}>Afric-Phar</option>
                                    <option value="SunPharma" {{ old('laboratoire') == 'SunPharma' ? 'selected' : '' }}>SunPharma</option>
                                    <option value="Bottu" {{ old('laboratoire') == 'Bottu' ? 'selected' : '' }}>Bottu</option>
                                    <option value="Lilly" {{ old('laboratoire') == 'Lilly' ? 'selected' : '' }}>Lilly</option>
                                    <option value="Boehringer Ingelheim" {{ old('laboratoire') == 'Boehringer Ingelheim' ? 'selected' : '' }}>Boehringer Ingelheim</option>
                                    <option value="Gylmed" {{ old('laboratoire') == 'Gylmed' ? 'selected' : '' }}>Gylmed</option>
                                    <option value="Medavi" {{ old('laboratoire') == 'Medavi' ? 'selected' : '' }}>Medavi</option>
                                    <option value="Merck" {{ old('laboratoire') == 'Merck' ? 'selected' : '' }}>Merck</option>
                                    <option value="McPharma" {{ old('laboratoire') == 'McPharma' ? 'selected' : '' }}>McPharma</option>
                                    <option value="Eramedic" {{ old('laboratoire') == 'Eramedic' ? 'selected' : '' }}>Eramedic</option>
                                    <option value="Hikma" {{ old('laboratoire') == 'Hikma' ? 'selected' : '' }}>Hikma</option>
                                    <option value="Phi" {{ old('laboratoire') == 'Phi' ? 'selected' : '' }}>Phi</option>
                                        <option value="other">Autre</option>
                                    </select>
                                    @error('laboratoire')
                                        <span class="text-red-500 text-sm flex items-center mt-1">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                            </svg>
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div id="other_laboratoire_input" class="hidden">
                                    <label for="other_laboratoire" class="block text-sm font-semibold text-gray-700 mb-3">Entrez le nom du laboratoire</label>
                                    <input type="text" id="other_laboratoire" name="other_laboratoire" 
                                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 hover:border-gray-400" 
                                        placeholder="Nom du laboratoire">
                                    @error('other_laboratoire')
                                        <span class="text-red-500 text-sm flex items-center mt-1">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                            </svg>
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div id="status_select" class="hidden">
                                    <label for="status" class="block text-sm font-semibold text-gray-700 mb-3">Statut du paiement <span class="text-red-500">*</span></label>
                                    <select id="status" name="laboratoire_status" 
                                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 hover:border-gray-400">
                                        <option value="encours">En Cours</option>
                                        <option value="confirme">Confirmé</option>
                                    </select>
                                </div>
                            </div>
                            @error('payment_method')
                                <span class="text-red-500 text-sm flex items-center mt-2">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        {{-- Personal Payment Section --}}
                        <div id="personal_payment" class="hidden bg-gray-50 p-6 rounded-xl border border-gray-200">
                            <h4 class="text-lg font-semibold text-gray-800 mb-4">Paiement personnel</h4>
                            <div class="space-y-4">
                                <label class="relative cursor-pointer">
                                    <input type="radio" name="payment_method" value="virement" onclick="toggleVirementUpload(true)"
                                        class="sr-only peer" {{ old('payment_method') == 'virement' ? 'checked' : '' }}>
                                    <div class="p-4 border-2 border-gray-200 rounded-xl transition-all duration-200 peer-checked:border-blue-500 peer-checked:bg-blue-50 hover:border-gray-300">
                                        <div class="flex items-center">
                                            <div class="w-5 h-5 border-2 border-gray-300 rounded-full peer-checked:border-blue-500 peer-checked:bg-blue-500 flex items-center justify-center">
                                                <div class="w-2 h-2 bg-white rounded-full opacity-0 peer-checked:opacity-100"></div>
                                            </div>
                                            <div class="ml-3">
                                                <h5 class="font-semibold text-gray-800">Paiement par virement</h5>
                                                <p class="text-sm text-gray-600">Téléchargez votre RIB au format PDF</p>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                                
                                <div id="virement_upload" class="hidden mt-4">
                                    <label for="rib_pdf" class="block text-sm font-semibold text-gray-700 mb-3">
                                        Télécharger votre RIB (PDF) <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <input type="file" id="rib_pdf" name="rib_pdf" accept=".pdf"
                                            class="w-full px-4 py-3 border-2 border-dashed border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 hover:border-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                                        <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM6.293 6.707a1 1 0 010-1.414l3-3a1 1 0 011.414 0l3 3a1 1 0 01-1.414 1.414L11 5.414V13a1 1 0 11-2 0V5.414L7.707 6.707a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="text-xs text-gray-500 mt-2">Format accepté: PDF (max 2 Mo)</p>
                                    @error('rib_pdf')
                                        <span class="text-red-500 text-sm flex items-center mt-1">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                            </svg>
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- RGPD Consent Section --}}
                    <div class="mb-12">
                        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 border-2 border-blue-200 rounded-2xl p-8 relative overflow-hidden">
                            <div class="absolute top-0 right-0 w-32 h-32 bg-blue-200 rounded-full opacity-20 transform translate-x-16 -translate-y-16"></div>
                            <div class="relative z-10">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input type="radio" name="rgpd_consent" value="accepted" required 
                                            class="w-5 h-5 text-blue-600 focus:ring-blue-500 focus:ring-4 focus:ring-blue-500/20 border-2 border-gray-300 rounded transition-all duration-200">
                                    </div>
                                    <div class="ml-4">
                                        <label class="text-gray-800 leading-relaxed cursor-pointer">
                                            <span class="text-lg font-bold text-blue-800">Consentement RGPD</span> <span class="text-red-500 text-lg">*</span>
                                            <p class="mt-2 text-gray-700">J'accepte de recevoir les emails du congrès et les nouveautés des événements médicaux. Vous pouvez vous désabonner à tout moment.</p>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Submit Button --}}
                    <div class="text-center">
                        <button type="submit" 
                            class="group relative w-full bg-gradient-to-r from-slate-900 via-blue-900 to-indigo-900 hover:from-slate-800 hover:via-blue-800 hover:to-indigo-800 text-white font-bold py-6 px-12 rounded-2xl transition-all duration-300 transform hover:scale-[1.02] focus:outline-none focus:ring-4 focus:ring-blue-500/50 shadow-2xl overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-indigo-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <span class="relative z-10 flex items-center justify-center text-xl">
                                <svg class="w-6 h-6 mr-3 group-hover:animate-pulse" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.293l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd"/>
                                </svg>
                                SOUMETTRE L'INSCRIPTION
                            </span>
                        </button>
                        <p class="mt-4 text-sm text-gray-500">En soumettant ce formulaire, vous confirmez que toutes les informations sont exactes.</p>
                    </div>
                </form>
                
                <!-- Bottom Section -->
                <div class="bg-gradient-to-r from-gray-50 to-blue-50 p-8 border-t border-gray-100">
                    <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                        <!-- Contact Info -->
                        <div class="flex items-center text-gray-700">
                            <div class="flex items-center justify-center w-10 h-10 bg-gradient-to-r from-green-500 to-emerald-500 rounded-xl mr-3 shadow-lg">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800">Comité d'organisation</p>
                                <p class="text-green-600 font-bold">+212 645-616510</p>
                            </div>
                        </div>
                        
                        <!-- Programme Button -->
                        {{-- <a href="#" 
                           class="group relative bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-bold py-4 px-8 rounded-2xl transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-indigo-500/50 shadow-xl overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <span class="relative z-10 flex items-center text-lg">
                                <svg class="w-6 h-6 mr-3 group-hover:rotate-12 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"/>
                                </svg>
                                CONSULTER LE PROGRAMME
                            </span>
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="{{asset('assets/css/form-animations.css')}}">
    <script src="{{asset('assets/js/inscriptions.js')}}"></script>
    
    <script>
        function openPricingModal() {
            document.getElementById('pricingModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }
        
        function closePricingModal() {
            document.getElementById('pricingModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
        
        // Close modal when clicking outside
        document.getElementById('pricingModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closePricingModal();
            }
        });
        
        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closePricingModal();
            }
        });
    </script>
    
    <style>
        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(12deg); }
        }
        .group:hover .group-hover\:rotate-12 {
            animation: rotate 0.3s ease-in-out;
        }
    </style>
</x-app-layout>
