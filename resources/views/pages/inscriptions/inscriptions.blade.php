<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-slate-50 to-blue-50 py-8 px-4">
        <div class="max-w-4xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent mb-4">INSCRIPTION</h1>
                <p class="text-gray-600 text-lg">Rejoignez notre événement médical</p>
            </div>

            <!-- Form Container -->
            <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                <div class="bg-gradient-to-r from-blue-600 to-indigo-600 p-6">
                    <h2 class="text-white text-xl font-semibold">Formulaire d'inscription</h2>
                </div>
                
                <form action="{{ route('inscriptions.store') }}" method="POST" class="p-8" enctype="multipart/form-data">
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
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-gray-800 mb-6 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                            </svg>
                            Informations personnelles
                        </h3>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label for="lastname" class="block text-sm font-semibold text-gray-700">Nom <span class="text-red-500">*</span></label>
                                <input type="text" id="lastname" name="lastname" required 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 hover:border-gray-400" 
                                    placeholder="Votre nom" value="{{ old('lastname') }}">
                                @error('lastname')
                                    <span class="text-red-500 text-sm flex items-center mt-1">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="space-y-2">
                                <label for="firstname" class="block text-sm font-semibold text-gray-700">Prénom <span class="text-red-500">*</span></label>
                                <input type="text" id="firstname" name="firstname" required 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 hover:border-gray-400" 
                                    placeholder="Votre prénom" value="{{ old('firstname') }}">
                                @error('firstname')
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

                    {{-- Contact Information Section --}}
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-gray-800 mb-6 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                            </svg>
                            Informations de contact
                        </h3>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label for="phone" class="block text-sm font-semibold text-gray-700">Téléphone Mobile <span class="text-red-500">*</span></label>
                                <input type="tel" id="phone" name="phone" required 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 hover:border-gray-400" 
                                    placeholder="Votre téléphone" value="{{ old('phone') }}">
                                @error('phone')
                                    <span class="text-red-500 text-sm flex items-center mt-1">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="space-y-2">
                                <label for="email" class="block text-sm font-semibold text-gray-700">Email <span class="text-red-500">*</span></label>
                                <input type="email" id="email" name="email" required 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 hover:border-gray-400" 
                                    placeholder="Votre email" value="{{ old('email') }}">
                                @error('email')
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

                    {{-- Professional Information Section --}}
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-gray-800 mb-6 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"/>
                                <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"/>
                            </svg>
                            Informations professionnelles
                        </h3>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label for="secteur" class="block text-sm font-semibold text-gray-700">Secteur <span class="text-red-500">*</span></label>
                                <select id="secteur" name="secteur" required 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 hover:border-gray-400">
                                    <option value="">Sélectionnez votre secteur</option>
                                    <option value="public" {{ old('secteur') == 'public' ? 'selected' : '' }}>Public</option>
                                    <option value="private" {{ old('secteur') == 'private' ? 'selected' : '' }}>Privé</option>
                                </select>
                                @error('secteur')
                                    <span class="text-red-500 text-sm flex items-center mt-1">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="space-y-2">
                                <label for="type" class="block text-sm font-semibold text-gray-700">Type <span class="text-red-500">*</span></label>
                                <select id="type" name="type" required 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 hover:border-gray-400">
                                    <option value="">Sélectionnez votre type</option>
                                    <option value="specialiste" {{ old('type') == 'specialiste' ? 'selected' : '' }}>Spécialiste</option>
                                    <option value="resident" {{ old('type') == 'resident' ? 'selected' : '' }}>Résidant</option>
                                </select>
                                @error('type')
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

                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label for="specialite" class="block text-sm font-semibold text-gray-700">Spécialité <span class="text-red-500">*</span></label>
                                <select id="specialite" name="specialite" required 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 hover:border-gray-400">
                                    <option value="Endocrinologie">Endocrinologie</option>
                                    <option value="Cardiologie">Cardiologie</option>
                                    <option value="Néphrologie">Néphrologie</option>
                                    <option value="Médecin Généraliste">Médecine générale</option>
                                    <option value="Autres">Autres</option>
                                </select>
                                <input type="text" id="otherSpecialite" name="other_specialite" 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 hover:border-gray-400 hidden" 
                                    placeholder="Votre spécialité" value="{{ old('other_specialite') }}">
                                @error('specialite')
                                    <span class="text-red-500 text-sm flex items-center mt-1">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="space-y-2">
                                <label for="ville" class="block text-sm font-semibold text-gray-700">Ville <span class="text-red-500">*</span></label>
                                <input type="text" id="ville" name="ville" required 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 hover:border-gray-400" 
                                    placeholder="Votre ville" value="{{ old('ville') }}">
                                @error('ville')
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

                    {{-- Registration Type Section --}}
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-gray-800 mb-6 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"/>
                            </svg>
                            Type d'inscription <span class="text-red-500">*</span>
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <label class="relative cursor-pointer">
                                <input type="radio" id="inscription_seule" name="inscription_type" value="seule" required
                                    class="sr-only peer" {{ old('inscription_type') == 'seule' ? 'checked' : '' }}>
                                <div class="p-6 border-2 border-gray-200 rounded-xl transition-all duration-200 peer-checked:border-blue-500 peer-checked:bg-blue-50 hover:border-gray-300">
                                    <div class="flex items-center">
                                        <div class="w-5 h-5 border-2 border-gray-300 rounded-full peer-checked:border-blue-500 peer-checked:bg-blue-500 flex items-center justify-center">
                                            <div class="w-2 h-2 bg-white rounded-full opacity-0 peer-checked:opacity-100"></div>
                                        </div>
                                        <div class="ml-3">
                                            <h4 class="font-semibold text-gray-800">Inscription Seule</h4>
                                            <p class="text-sm text-gray-600">Participation à l'événement uniquement</p>
                                        </div>
                                    </div>
                                </div>
                            </label>
                            
                            <label class="relative cursor-pointer">
                                <input type="radio" id="inscription_hebergement" name="inscription_type" value="hebergement"
                                    class="sr-only peer" {{ old('inscription_type') == 'hebergement' ? 'checked' : '' }}>
                                <div class="p-6 border-2 border-gray-200 rounded-xl transition-all duration-200 peer-checked:border-blue-500 peer-checked:bg-blue-50 hover:border-gray-300">
                                    <div class="flex items-center">
                                        <div class="w-5 h-5 border-2 border-gray-300 rounded-full peer-checked:border-blue-500 peer-checked:bg-blue-500 flex items-center justify-center">
                                            <div class="w-2 h-2 bg-white rounded-full opacity-0 peer-checked:opacity-100"></div>
                                        </div>
                                        <div class="ml-3">
                                            <h4 class="font-semibold text-gray-800">Inscription + Hébergement</h4>
                                            <p class="text-sm text-gray-600">Participation avec hébergement inclus</p>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>
                        @error('inscription_type')
                            <span class="text-red-500 text-sm flex items-center mt-2">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    {{-- Accommodation Details Section --}}
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-gray-800 mb-6 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                            </svg>
                            Détails de l'hébergement
                        </h3>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label for="arrival_date" class="block text-sm font-semibold text-gray-700">Date d'arrivée <span class="text-red-500">*</span></label>
                                <select id="arrival_date" name="arrival_date" disabled 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 hover:border-gray-400 disabled:bg-gray-100 disabled:cursor-not-allowed">
                                    <option value="">Sélectionnez une date</option>
                                    <option value="2025-05-29" {{ old('arrival_date') == '2025-05-29' ? 'selected' : '' }}>29/05/2025</option>
                                    <option value="2025-05-30" {{ old('arrival_date') == '2025-05-30' ? 'selected' : '' }}>30/05/2025</option>
                                    <option value="2025-05-31" {{ old('arrival_date') == '2025-05-31' ? 'selected' : '' }}>31/05/2025</option>
                                </select>
                                @error('arrival_date')
                                    <span class="text-red-500 text-sm flex items-center mt-1">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="space-y-2">
                                <label for="departure_date" class="block text-sm font-semibold text-gray-700">Date de départ <span class="text-red-500">*</span></label>
                                <select id="departure_date" name="departure_date" disabled 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 hover:border-gray-400 disabled:bg-gray-100 disabled:cursor-not-allowed">
                                    <option value="">Sélectionnez une date</option>
                                    <option value="2025-05-30" {{ old('departure_date') == '2025-05-30' ? 'selected' : '' }}>30/05/2025</option>
                                    <option value="2025-05-31" {{ old('departure_date') == '2025-05-31' ? 'selected' : '' }}>31/05/2025</option>
                                    <option value="2025-06-01" {{ old('departure_date') == '2025-06-01' ? 'selected' : '' }}>01/06/2025</option>
                                </select>
                                @error('departure_date')
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
                    </div>

                    {{-- RGPD Consent Section --}}
                    <div class="mb-8">
                        <div class="bg-blue-50 border border-blue-200 rounded-xl p-6">
                            <div class="flex items-start">
                                <input type="radio" name="rgpd_consent" value="accepted" required 
                                    class="mt-1 h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300">
                                <label class="ml-3 text-sm text-gray-700 leading-relaxed">
                                    <span class="font-semibold">Consentement RGPD :</span> J'accepte de recevoir les emails du congrès et les nouveautés des événements. <span class="text-red-500">*</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    {{-- Submit Button --}}
                    <div class="text-center">
                        <button type="submit" 
                            class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-bold py-4 px-8 rounded-xl transition-all duration-200 transform hover:scale-[1.02] focus:outline-none focus:ring-4 focus:ring-blue-300 shadow-lg">
                            <span class="flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.293l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd"/>
                                </svg>
                                SOUMETTRE L'INSCRIPTION
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{asset('assets/js/inscriptions.js')}}"></script>
</x-app-layout>
