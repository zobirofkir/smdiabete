<x-app-layout>
    <section class="min-h-screen bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left Side - Form -->
                <div class="order-2 lg:order-1">
                    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8">
                        <div class="mb-8">
                            <h1 class="text-3xl font-bold text-gray-900 mb-2">Formulaire d'Inscription</h1>
                            <p class="text-gray-600">Rejoignez notre communauté professionnelle</p>
                        </div>

                        <form class="space-y-5">
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Prénom</label>
                                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Votre prénom">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
                                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Votre nom">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="votre@email.com">
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Téléphone</label>
                                    <input type="tel" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="+33 1 23 45 67 89">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Date de naissance</label>
                                    <input type="date" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Profession</label>
                                <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                    <option>Sélectionnez votre profession</option>
                                    <option>Médecin</option>
                                    <option>Infirmier(ère)</option>
                                    <option>Pharmacien(ne)</option>
                                    <option>Étudiant(e)</option>
                                    <option>Autre</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Message (optionnel)</label>
                                <textarea rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 resize-none" placeholder="Votre message..."></textarea>
                            </div>

                            <div class="flex items-start space-x-2">
                                <input type="checkbox" id="terms" class="mt-1 w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                <label for="terms" class="text-sm text-gray-700">
                                    J'accepte les <a href="#" class="text-blue-600 hover:underline">conditions d'utilisation</a>
                                </label>
                            </div>

                            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 px-6 rounded-lg font-medium transition-colors">
                                S'inscrire maintenant
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Right Side - Image -->
                <div class="order-1 lg:order-2">
                    <img src="{{ asset('assets/images/inscription_form/affiche.jpeg') }}" 
                         alt="Inscription Affiche" 
                         class="w-full rounded-2xl shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Bottom Image -->
    <section class="py-12 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <img src="{{ asset('assets/images/inscription_form/affiche_two.jpeg') }}" 
                 alt="Affiche Two" 
                 class="w-full rounded-2xl shadow-lg">
        </div>
    </section>
</x-app-layout>