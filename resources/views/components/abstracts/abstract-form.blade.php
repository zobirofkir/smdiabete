<!-- Deadline Notice Modal -->
<div id="deadlineModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center">
    <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full mx-4">
        <div class="p-8 text-center">
            <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <div class="text-4xl mb-4">⏰</div>
            <h3 class="text-xl font-semibold text-gray-900 mb-4">Information importante</h3>
            <div class="text-lg font-bold text-red-600 mb-6">
                Date limite d'acceptation : 10 février 2026
            </div>
            <button onclick="closeDeadlineModal()" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-200 font-medium">
                Lu et approuvé
            </button>
        </div>
    </div>
</div>

<form id="abstractForm" action="{{ route('abstracts.store') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200 opacity-50 pointer-events-none" disabled>
    @csrf
    <!-- 1. Informations personnelles -->
    <div class="p-6 border-b border-gray-200">
        <div class="flex items-center mb-6">
            <div class="bg-blue-100 p-3 rounded-full mr-4">
                <i class="fas fa-user text-blue-600 text-xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800">1. Informations du Soumissionnaire</h3>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Nom -->
            <div>
                <label class="block text-gray-700 font-medium mb-2" for="nom">
                    Nom <span class="text-red-500">*</span>
                </label>
                <input type="text" id="nom" name="nom" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200">
            </div>
            
            <!-- Prénom -->
            <div>
                <label class="block text-gray-700 font-medium mb-2" for="prenom">
                    Prénom <span class="text-red-500">*</span>
                </label>
                <input type="text" id="prenom" name="prenom" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200">
            </div>
            
            <!-- Titre -->
            <div class="md:col-span-2">
                <label class="block text-gray-700 font-medium mb-3">Titre</label>
                <div class="flex flex-wrap gap-4">
                    <label class="inline-flex items-center">
                        <input type="radio" name="titre" value="Dr" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 text-gray-700">Dr</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="titre" value="Pr" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 text-gray-700">Pr</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="titre" value="M." class="h-5 w-5 text-blue-600">
                        <span class="ml-2 text-gray-700">M.</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="titre" value="Mme" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 text-gray-700">Mme</span>
                    </label>
                </div>
            </div>
            
            <!-- Email -->
            <div>
                <label class="block text-gray-700 font-medium mb-2" for="email">
                    Email <span class="text-red-500">*</span>
                </label>
                <input type="email" id="email" name="email" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200">
            </div>
            
            <!-- Téléphone -->
            <div>
                <label class="block text-gray-700 font-medium mb-2" for="telephone">
                    Tél <span class="text-red-500">*</span>
                </label>
                <input type="tel" id="telephone" name="telephone" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200">
            </div>
            
            <!-- Institution -->
            <div>
                <label class="block text-gray-700 font-medium mb-2" for="institution">
                    Institution / Hôpital / Université <span class="text-red-500">*</span>
                </label>
                <input type="text" id="institution" name="institution" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200">
            </div>
            
            <!-- Ville -->
            <div>
                <label class="block text-gray-700 font-medium mb-2" for="ville">
                    Ville <span class="text-red-500">*</span>
                </label>
                <input type="text" id="ville" name="ville" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200">
            </div>
            
            <!-- Pays -->
            <div>
                <label class="block text-gray-700 font-medium mb-2" for="pays">
                    Pays <span class="text-red-500">*</span>
                </label>
                <select id="pays" name="pays" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200">
                    <option value="">Sélectionnez un pays</option>
                    <option value="maroc">Maroc</option>
                    <option value="france">France</option>
                    <option value="algerie">Algérie</option>
                    <option value="tunisie">Tunisie</option>
                    <option value="belgique">Belgique</option>
                    <option value="suisse">Suisse</option>
                    <option value="canada">Canada</option>
                    <option value="espagne">Espagne</option>
                    <option value="allemagne">Allemagne</option>
                    <option value="italie">Italie</option>
                    <option value="royaume-uni">Royaume-Uni</option>
                    <option value="etats-unis">États-Unis</option>
                    <option value="egypte">Égypte</option>
                    <option value="senegal">Sénégal</option>
                    <option value="cote-ivoire">Côte d'Ivoire</option>
                    <option value="mauritanie">Mauritanie</option>
                    <option value="mali">Mali</option>
                    <option value="burkina-faso">Burkina Faso</option>
                    <option value="niger">Niger</option>
                    <option value="tchad">Tchad</option>
                    <option value="cameroun">Cameroun</option>
                    <option value="gabon">Gabon</option>
                    <option value="congo">Congo</option>
                    <option value="madagascar">Madagascar</option>
                    <option value="liban">Liban</option>
                    <option value="syrie">Syrie</option>
                    <option value="jordanie">Jordanie</option>
                    <option value="arabie-saoudite">Arabie Saoudite</option>
                    <option value="emirats-arabes-unis">Émirats Arabes Unis</option>
                    <option value="qatar">Qatar</option>
                    <option value="koweit">Koweït</option>
                    <option value="autre">Autre</option>
                </select>
            </div>
        </div>
    </div>

    <!-- 2. Co-auteurs -->
    <div class="p-6 border-b border-gray-200">
        <div class="flex items-center mb-6">
            <div class="bg-green-100 p-3 rounded-full mr-4">
                <i class="fas fa-users text-green-600 text-xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800">2. Co-auteurs</h3>
        </div>
        
        <div id="coauteurs-container">
            <div class="coauteur-field mb-4">
                <label class="block text-gray-700 font-medium mb-2" for="coauteur_1">
                    Co-auteur(s) (Nom, Prénom – Institution)
                </label>
                <div class="flex">
                    <input type="text" id="coauteur_1" name="coauteurs[]"
                            class="flex-grow px-4 py-3 border border-gray-300 rounded-l-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                            placeholder="Nom, Prénom – Institution">
                    <button type="button" onclick="removeCoauteur(this)" class="bg-red-500 text-white px-4 rounded-r-lg hover:bg-red-600 transition duration-200 hidden">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <button type="button" onclick="addCoauteur()" class="mt-4 flex items-center text-blue-600 font-medium hover:text-blue-800 transition duration-200">
            <i class="fas fa-plus-circle mr-2"></i> Ajouter un co-auteur
        </button>
    </div>

    <!-- 3. Informations sur l'abstract -->
    <div class="p-6 border-b border-gray-200">
        <div class="flex items-center mb-6">
            <div class="bg-purple-100 p-3 rounded-full mr-4">
                <i class="fas fa-file-alt text-purple-600 text-xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800">3. Informations sur l'abstract</h3>
        </div>
        
        <!-- Titre de l'abstract -->
        <div class="mb-6">
            <label class="block text-gray-700 font-medium mb-2" for="abstract_titre">
                Titre de l'abstract <span class="text-red-500">*</span>
            </label>
            <input type="text" id="abstract_titre" name="abstract_titre" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200">
        </div>
        
        <!-- Type de présentation -->
        <div>
            <label class="block text-gray-700 font-medium mb-3">Type de présentation souhaité <span class="text-red-500">*</span></label>
            <div class="flex flex-col sm:flex-row sm:space-x-8 space-y-3 sm:space-y-0">
                <label class="inline-flex items-center">
                    <input type="radio" name="presentation_type" value="oral" required class="h-5 w-5 text-blue-600">
                    <span class="ml-3 text-gray-700">
                        <i class="fas fa-microphone mr-2"></i> Communication orale
                    </span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" name="presentation_type" value="poster" required class="h-5 w-5 text-blue-600">
                    <span class="ml-3 text-gray-700">
                        <i class="fas fa-image mr-2"></i> Poster
                    </span>
                </label>
            </div>
        </div>
    </div>

    <!-- 4. Contenu scientifique -->
    <div class="p-6 border-b border-gray-200">
        <div class="flex items-center mb-6">
            <div class="bg-amber-100 p-3 rounded-full mr-4">
                <i class="fas fa-flask text-amber-600 text-xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800">4. Contenu scientifique</h3>
        </div>
        
        <p class="text-gray-600 mb-6">Vous pouvez soit remplir les sections ci-dessous, soit soumettre un texte complet dans la zone alternative.</p>
        
        <!-- Sections structurées -->
        <div class="space-y-6">
            <!-- Introduction -->
            <div>
                <label class="block text-gray-700 font-medium mb-2" for="introduction">
                    Introduction / Contexte (max. 50 mots)
                </label>
                <textarea id="introduction" name="introduction" rows="3"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                            oninput="updateWordCount(this, 'intro-count')"></textarea>
                <div class="flex justify-between text-sm text-gray-500 mt-1">
                    <span id="intro-count">0 mots</span>
                    <span>Maximum: 50 mots</span>
                </div>
            </div>
            
            <!-- Objectifs -->
            <div>
                <label class="block text-gray-700 font-medium mb-2" for="objectifs">
                    Objectif(s) (max. 50 mots)
                </label>
                <textarea id="objectifs" name="objectifs" rows="3"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                            oninput="updateWordCount(this, 'obj-count')"></textarea>
                <div class="flex justify-between text-sm text-gray-500 mt-1">
                    <span id="obj-count">0 mots</span>
                    <span>Maximum: 50 mots</span>
                </div>
            </div>
            
            <!-- Méthodes -->
            <div>
                <label class="block text-gray-700 font-medium mb-2" for="methodes">
                    Méthodes (max. 100 mots)
                </label>
                <textarea id="methodes" name="methodes" rows="4"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                            oninput="updateWordCount(this, 'meth-count')"></textarea>
                <div class="flex justify-between text-sm text-gray-500 mt-1">
                    <span id="meth-count">0 mots</span>
                    <span>Maximum: 100 mots</span>
                </div>
            </div>
            
            <!-- Résultats -->
            <div>
                <label class="block text-gray-700 font-medium mb-2" for="resultats">
                    Résultats (max. 100 mots)
                </label>
                <textarea id="resultats" name="resultats" rows="4"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                            oninput="updateWordCount(this, 'res-count')"></textarea>
                <div class="flex justify-between text-sm text-gray-500 mt-1">
                    <span id="res-count">0 mots</span>
                    <span>Maximum: 100 mots</span>
                </div>
            </div>
            
            <!-- Conclusion -->
            <div>
                <label class="block text-gray-700 font-medium mb-2" for="conclusion">
                    Conclusion (max. 50 mots)
                </label>
                <textarea id="conclusion" name="conclusion" rows="3"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                            oninput="updateWordCount(this, 'concl-count')"></textarea>
                <div class="flex justify-between text-sm text-gray-500 mt-1">
                    <span id="concl-count">0 mots</span>
                    <span>Maximum: 50 mots</span>
                </div>
            </div>
        </div>
        
        <!-- Alternative : Texte complet -->
        <div class="mt-8 pt-6 border-t border-gray-200">
            <h4 class="text-lg font-bold text-gray-800 mb-4">Ou alternative : Texte complet de l'abstract (max. 300 mots)</h4>
            <textarea id="abstract_complet" name="abstract_complet" rows="6"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                        oninput="updateWordCount(this, 'full-count')"></textarea>
            <div class="flex justify-between text-sm text-gray-500 mt-1">
                <span id="full-count">0 mots</span>
                <span>Maximum: 300 mots</span>
            </div>
        </div>
    </div>

    <!-- 6. Langue de soumission -->
    <div class="p-6 border-b border-gray-200">
        <div class="flex items-center mb-6">
            <div class="bg-indigo-100 p-3 rounded-full mr-4">
                <i class="fas fa-globe text-indigo-600 text-xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800">6. Langue de soumission</h3>
        </div>
        
        <div class="flex flex-col sm:flex-row sm:space-x-8 space-y-3 sm:space-y-0">
            <label class="inline-flex items-center">
                <input type="radio" name="langue" value="francais" class="h-5 w-5 text-blue-600" checked>
                <span class="ml-3 text-gray-700">
                    <i class="fas fa-flag mr-2"></i> Français
                </span>
            </label>
            <label class="inline-flex items-center">
                <input type="radio" name="langue" value="anglais" class="h-5 w-5 text-blue-600">
                <span class="ml-3 text-gray-700">
                    <i class="fas fa-flag-usa mr-2"></i> Anglais
                </span>
            </label>
        </div>
    </div>

    <!-- 7. Téléversement -->
    <div class="p-6 border-b border-gray-200">
        <div class="flex items-center mb-6">
            <div class="bg-pink-100 p-3 rounded-full mr-4">
                <i class="fas fa-paperclip text-pink-600 text-xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800">7. Téléversement (optionnel)</h3>
        </div>
        
        <div class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center">
            <i class="fas fa-cloud-upload-alt text-gray-400 text-4xl mb-4"></i>
            <p class="text-gray-700 mb-2">Glissez-déposez votre fichier ici ou</p>
            <label for="file-upload" class="cursor-pointer bg-blue-600 text-white font-medium py-3 px-6 rounded-lg hover:bg-blue-700 transition duration-200 inline-block">
                <i class="fas fa-folder-open mr-2"></i> Parcourir les fichiers
            </label>
            <input id="file-upload" type="file" name="abstract_file" class="hidden" accept=".doc,.docx,.pdf">
            <p class="text-gray-500 text-sm mt-4">Formats acceptés : Word (.doc, .docx) ou PDF (.pdf)</p>
            <p class="text-gray-500 text-sm">Taille maximale : 10 MB</p>
        </div>
        <div id="file-name" class="mt-4 text-gray-700 hidden">
            <i class="fas fa-file mr-2"></i><span></span>
        </div>
    </div>

    <!-- 8. Déclaration et validation -->
    <div class="p-6">
        <div class="flex items-center mb-6">
            <div class="bg-blue-100 p-3 rounded-full mr-4">
                <i class="fas fa-check-circle text-blue-600 text-xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800">8. Déclaration et validation</h3>
        </div>
        
        <div class="space-y-4 mb-8">
            <label class="flex items-start">
                <input type="checkbox" name="declaration_approval" class="h-5 w-5 text-blue-600 mt-1 mr-3" required>
                <span class="text-gray-700">Tous les auteurs ont approuvé la soumission</span>
            </label>
            <label class="flex items-start">
                <input type="checkbox" name="declaration_conditions" class="h-5 w-5 text-blue-600 mt-1 mr-3" required>
                <span class="text-gray-700">J’accepte les conditions générales</span>
            </label>
        </div>
        
        <!-- Bouton de soumission -->
        <div class="text-center">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-10 rounded-lg shadow-lg transition duration-300 transform hover:scale-105">
                <i class="fas fa-paper-plane mr-3"></i> Soumettre l'abstract
            </button>
            <p class="text-gray-500 text-sm mt-4">Vous recevrez un email de confirmation après soumission</p>
        </div>
    </div>
</form>
