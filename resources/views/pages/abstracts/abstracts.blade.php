<x-app-layout>
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- En-tête du congrès -->
            @include('components.abstracts.abstract-header')

            <!-- Formulaire principal -->
            @include('components.abstracts.abstract-form')

            <!-- Message de confirmation (caché initialement) -->
            @include('components.abstracts.abstract-message')

            <!-- Instructions -->
            @include('components.abstracts.abstract-insctruction')
            
        </div>
    </div>

    <script>
        /**
         * Gestion des co-auteurs
        */
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
            
            /**
             * Afficher le bouton de suppression pour le premier champ
            */
            if (coauteurCount === 2) {
                document.querySelector('.coauteur-field:first-child button').classList.remove('hidden');
            }
        }
        
        function removeCoauteur(button) {
            const field = button.closest('.coauteur-field');
            field.remove();
            
            /**
             * Cacher le bouton de suppression du premier champ s'il est le seul restant
            */
            const remainingFields = document.querySelectorAll('.coauteur-field');
            if (remainingFields.length === 1) {
                remainingFields[0].querySelector('button').classList.add('hidden');
            }
        }
        
        /**
         * Compteur de mots
        */
        function updateWordCount(textarea, countId) {
            const text = textarea.value.trim();
            const wordCount = text === '' ? 0 : text.split(/\s+/).length;
            document.getElementById(countId).textContent = `${wordCount} mots`;
            
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
        
        /**
         * Gestion du téléversement de fichier
        */
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
        
        /**
         * Soumission du formulaire
        */
        document.getElementById('abstractForm').addEventListener('submit', function(e) {
            // Remove preventDefault to allow actual form submission
            // e.preventDefault();
            
            /**
             * Validation basique
            */
            let isValid = true;
            const requiredFields = this.querySelectorAll('[required]');
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('border-red-500');
                    
                    setTimeout(() => {
                        field.classList.remove('border-red-500');
                    }, 3000);
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                alert('Veuillez remplir tous les champs obligatoires.');
                return;
            }
            
            // Form will submit normally to the server
        });
        
        /**
         * Réinitialiser le formulaire
        */
        function resetForm() {
            document.getElementById('abstractForm').reset();
            document.getElementById('abstractForm').classList.remove('hidden');
            document.getElementById('confirmationMessage').classList.add('hidden');
            
            /**
             * Réinitialiser les compteurs de mots
            */
            document.querySelectorAll('[id$="-count"]').forEach(el => {
                el.textContent = '0 mots';
                el.classList.remove('text-red-600', 'font-bold');
                el.classList.add('text-gray-500');
            });
            
            /**
             * Réinitialiser les champs de co-auteurs
            */
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
            
            document.getElementById('file-name').classList.add('hidden');
            
            document.getElementById('abstractForm').scrollIntoView({ behavior: 'smooth' });
        }
        
        /**
         * Initialisation des compteurs de mots
        */
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