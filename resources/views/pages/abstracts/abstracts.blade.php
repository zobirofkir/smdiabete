<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Soumission d'Abstract - 3ème Congrès National de Diabétologie 2026
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- En-tête du congrès -->
            <div class="text-center mb-10">
                <h1 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">FORMULAIRE DE SOUMISSION D'ABSTRACTS</h1>
                <div class="bg-gradient-to-r from-blue-600 to-teal-500 h-1 w-24 mx-auto mb-4"></div>
                <h2 class="text-2xl font-bold text-gray-800">3ème Congrès National de Diabétologie 2026</h2>
                <p class="text-gray-600 mt-2">Soumettez votre abstract avant le 15 septembre 2026</p>
            </div>

            <!-- Formulaire principal -->
            <form id="abstractForm" class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200">
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
                                    <input type="radio" name="titre" value="dr" class="h-5 w-5 text-blue-600">
                                    <span class="ml-2 text-gray-700">Dr</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="titre" value="pr" class="h-5 w-5 text-blue-600">
                                    <span class="ml-2 text-gray-700">Pr</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="titre" value="mr" class="h-5 w-5 text-blue-600">
                                    <span class="ml-2 text-gray-700">M.</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="titre" value="mme" class="h-5 w-5 text-blue-600">
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
                                Téléphone
                            </label>
                            <input type="tel" id="telephone" name="telephone"
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
                                <option value="france">France</option>
                                <option value="suisse">Suisse</option>
                                <option value="belgique">Belgique</option>
                                <option value="canada">Canada</option>
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
                            <input type="checkbox" name="declaration_original" class="h-5 w-5 text-blue-600 mt-1 mr-3" required>
                            <span class="text-gray-700">Je certifie que cet abstract est original et n'a pas été publié auparavant</span>
                        </label>
                        <label class="flex items-start">
                            <input type="checkbox" name="declaration_approval" class="h-5 w-5 text-blue-600 mt-1 mr-3" required>
                            <span class="text-gray-700">Tous les auteurs ont approuvé la soumission</span>
                        </label>
                        <label class="flex items-start">
                            <input type="checkbox" name="declaration_conditions" class="h-5 w-5 text-blue-600 mt-1 mr-3" required>
                            <span class="text-gray-700">J'accepte les conditions du congrès</span>
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

            <!-- Message de confirmation (caché initialement) -->
            <div id="confirmationMessage" class="hidden mt-8 bg-gradient-to-r from-blue-50 to-teal-50 border border-blue-200 rounded-xl p-8 text-center shadow-lg">
                <div class="text-blue-600 text-5xl mb-6">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h3 class="text-2xl font-bold text-blue-800 mb-4">Merci pour votre soumission !</h3>
                <p class="text-blue-700 text-lg mb-2">Votre abstract a été reçu avec succès.</p>
                <p class="text-blue-600">Un email de confirmation vous sera envoyé.</p>
                <button onclick="resetForm()" class="mt-6 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-lg transition duration-200">
                    <i class="fas fa-plus mr-2"></i> Soumettre un autre abstract
                </button>
            </div>

            <!-- Instructions -->
            <div class="mt-10 bg-blue-50 rounded-xl p-6 border border-blue-200">
                <h3 class="text-xl font-bold text-blue-900 mb-4 flex items-center">
                    <i class="fas fa-info-circle mr-3"></i> Instructions importantes
                </h3>
                <ul class="space-y-2 text-blue-800">
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-600 mt-1 mr-3"></i>
                        <span>Tous les champs marqués d'un astérisque (*) sont obligatoires.</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-600 mt-1 mr-3"></i>
                        <span>Respectez les limites de mots indiquées pour chaque section.</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-600 mt-1 mr-3"></i>
                        <span>La date limite de soumission est le 15 septembre 2026.</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-600 mt-1 mr-3"></i>
                        <span>Vous recevrez une confirmation par email dans les 48 heures.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        // Gestion des co-auteurs
        let coauteurCount = 1;
        
        function addCoauteur() {
            coauteurCount++;
            const container = document.getElementById('coauteurs-container');
            const newField = document.createElement('div');
            newField.className = 'coauteur-field mb-4';
            newField.innerHTML = `
                <label class="block text-gray-700 font-medium mb-2" for="coauteur_${coauteurCount}">
                    Co-auteur(s) (Nom, Prénom – Institution)
                </label>
                <div class="flex">
                    <input type="text" id="coauteur_${coauteurCount}" name="coauteurs[]"
                           class="flex-grow px-4 py-3 border border-gray-300 rounded-l-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                           placeholder="Nom, Prénom – Institution">
                    <button type="button" onclick="removeCoauteur(this)" class="bg-red-500 text-white px-4 rounded-r-lg hover:bg-red-600 transition duration-200">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            `;
            container.appendChild(newField);
            
            // Afficher le bouton de suppression pour le premier champ
            if (coauteurCount === 2) {
                document.querySelector('.coauteur-field:first-child button').classList.remove('hidden');
            }
        }
        
        function removeCoauteur(button) {
            const field = button.closest('.coauteur-field');
            field.remove();
            
            // Cacher le bouton de suppression du premier champ s'il est le seul restant
            const remainingFields = document.querySelectorAll('.coauteur-field');
            if (remainingFields.length === 1) {
                remainingFields[0].querySelector('button').classList.add('hidden');
            }
        }
        
        // Compteur de mots
        function updateWordCount(textarea, countId) {
            const text = textarea.value.trim();
            const wordCount = text === '' ? 0 : text.split(/\s+/).length;
            document.getElementById(countId).textContent = `${wordCount} mots`;
            
            // Changer la couleur si dépassement
            const maxWords = parseInt(textarea.placeholder.match(/max\. (\d+) mots/)?.[1] || 300);
            const countElement = document.getElementById(countId);
            
            if (wordCount > maxWords) {
                countElement.classList.remove('text-gray-500');
                countElement.classList.add('text-red-600', 'font-bold');
            } else {
                countElement.classList.remove('text-red-600', 'font-bold');
                countElement.classList.add('text-gray-500');
            }
        }
        
        // Gestion du téléversement de fichier
        document.getElementById('file-upload').addEventListener('change', function(e) {
            const fileNameDisplay = document.getElementById('file-name');
            const fileNameSpan = fileNameDisplay.querySelector('span');
            
            if (this.files.length > 0) {
                const file = this.files[0];
                fileNameSpan.textContent = `${file.name} (${(file.size / 1024 / 1024).toFixed(2)} MB)`;
                fileNameDisplay.classList.remove('hidden');
            } else {
                fileNameDisplay.classList.add('hidden');
            }
        });
        
        // Soumission du formulaire
        document.getElementById('abstractForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validation basique
            let isValid = true;
            const requiredFields = this.querySelectorAll('[required]');
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('border-red-500');
                    
                    // Retirer la classe après 3 secondes
                    setTimeout(() => {
                        field.classList.remove('border-red-500');
                    }, 3000);
                }
            });
            
            if (!isValid) {
                alert('Veuillez remplir tous les champs obligatoires.');
                return;
            }
            
            // Afficher le message de confirmation
            this.classList.add('hidden');
            document.getElementById('confirmationMessage').classList.remove('hidden');
            
            // Faire défiler jusqu'au message de confirmation
            document.getElementById('confirmationMessage').scrollIntoView({ behavior: 'smooth' });
            
            // Simuler l'envoi des données (dans une vraie application, vous enverriez ici les données au serveur)
            console.log('Formulaire soumis avec succès');
        });
        
        // Réinitialiser le formulaire
        function resetForm() {
            document.getElementById('abstractForm').reset();
            document.getElementById('abstractForm').classList.remove('hidden');
            document.getElementById('confirmationMessage').classList.add('hidden');
            
            // Réinitialiser les compteurs de mots
            document.querySelectorAll('[id$="-count"]').forEach(el => {
                el.textContent = '0 mots';
                el.classList.remove('text-red-600', 'font-bold');
                el.classList.add('text-gray-500');
            });
            
            // Réinitialiser les champs de co-auteurs
            const coauteursContainer = document.getElementById('coauteurs-container');
            coauteursContainer.innerHTML = `
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
            `;
            coauteurCount = 1;
            
            // Réinitialiser le fichier uploadé
            document.getElementById('file-name').classList.add('hidden');
            
            // Faire défiler jusqu'au début du formulaire
            document.getElementById('abstractForm').scrollIntoView({ behavior: 'smooth' });
        }
        
        // Initialisation des compteurs de mots
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('textarea').forEach(textarea => {
                const countId = textarea.id === 'introduction' ? 'intro-count' :
                              textarea.id === 'objectifs' ? 'obj-count' :
                              textarea.id === 'methodes' ? 'meth-count' :
                              textarea.id === 'resultats' ? 'res-count' :
                              textarea.id === 'conclusion' ? 'concl-count' :
                              textarea.id === 'abstract_complet' ? 'full-count' : '';
                
                if (countId) {
                    updateWordCount(textarea, countId);
                }
            });
        });
    </script>
</x-app-layout>