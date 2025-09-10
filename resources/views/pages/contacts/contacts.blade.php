<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-full mb-6">
                    <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent mb-4">
                    Contactez-nous
                </h1>
                <p class="text-lg md:text-xl text-gray-600 max-w-2xl mx-auto">
                    Nous sommes là pour répondre à toutes vos questions et vous accompagner
                </p>
            </div>

            <!-- Main Content -->
            <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-white rounded-3xl shadow-2xl p-8 lg:p-12 border border-gray-100">
                    <div class="mb-8">
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">Envoyez-nous un message</h2>
                        <p class="text-gray-600">Remplissez le formulaire ci-dessous et nous vous répondrons dans les plus brefs délais.</p>
                    </div>

                    @if(session('success'))
                        <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-xl">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contacts.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <!-- Name Field -->
                        <div class="space-y-2">
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                    </svg>
                                    Votre nom
                                </span>
                            </label>
                            <input type="text" id="name" name="name" required
                                class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition-all duration-300 text-gray-800 placeholder-gray-400"
                                placeholder="Entrez votre nom complet">
                        </div>

                        <!-- Email Field -->
                        <div class="space-y-2">
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                    </svg>
                                    Adresse email
                                </span>
                            </label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition-all duration-300 text-gray-800 placeholder-gray-400"
                                placeholder="votre.email@exemple.com">
                        </div>

                        <!-- Message Field -->
                        <div class="space-y-2">
                            <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z" clip-rule="evenodd"/>
                                    </svg>
                                    Votre message
                                </span>
                            </label>
                            <textarea id="message" name="message" rows="6" required
                                class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition-all duration-300 text-gray-800 placeholder-gray-400 resize-none"
                                placeholder="Décrivez votre demande ou question..."></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit"
                            class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-semibold py-4 px-8 rounded-xl transition-all duration-300 transform hover:scale-105 hover:shadow-xl flex items-center justify-center space-x-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"/>
                            </svg>
                            <span>Envoyer le message</span>
                        </button>
                    </form>
                </div>

                <!-- Map and Info Section -->
                <div class="space-y-8">
                    <!-- Contact Info Cards -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-6">
                        <!-- Address Card -->
                        <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800 mb-2">Adresse</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        123 Avenue de la Santé<br>
                                        Casablanca, Maroc<br>
                                        20000
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Phone Card -->
                        <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800 mb-2">Téléphone</h3>
                                    <p class="text-gray-600 text-sm">
                                        +212 6 62 63 05 59<br>
                                        +212 762-011226
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Email Card -->
                        <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100 hover:shadow-xl transition-shadow duration-300 sm:col-span-2 lg:col-span-1">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800 mb-2">Email</h3>
                                    <p class="text-gray-600 text-sm">
                                        contact@smdiabete.ma<br>
                                        info@smdiabete.ma
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Map Section -->
                    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-gray-100">
                        <div class="p-6 border-b border-gray-100">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Notre localisation</h3>
                            <p class="text-gray-600">Trouvez-nous facilement grâce à cette carte interactive</p>
                        </div>
                        <div class="relative" style="height: 400px;">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.2!2d-7.6!3d33.6!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzPCsDM2JzAwLjAiTiA3wrAzNicwMC4wIlc!5e0!3m2!1sen!2sma!4v1234567890123" 
                                class="absolute inset-0 w-full h-full border-0" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/10 via-transparent to-transparent pointer-events-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
