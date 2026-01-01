// Gestion des co-auteurs
let coauteurCount = 1;

function addCoauteur() {
    coauteurCount++;
    const container = document.getElementById('coauteurs-container');
    const newField = document.createElement('div');
    newField.className = 'coauteur-field mb-4';
    newField.innerHTML = `
        <div class="flex">
            <input type="text" name="coauteurs[]"
                    class="flex-grow px-4 py-3 border border-gray-300 rounded-l-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                    placeholder="Nom, Prénom – Institution">
            <button type="button" onclick="removeCoauteur(this)" class="bg-red-500 text-white px-4 rounded-r-lg hover:bg-red-600 transition duration-200">
                <i class="fas fa-times"></i>
            </button>
        </div>
    `;
    container.appendChild(newField);
}

function removeCoauteur(button) {
    if (coauteurCount > 1) {
        button.closest('.coauteur-field').remove();
        coauteurCount--;
    }
}

// Compteur de mots
function updateWordCount(textarea, counterId) {
    const text = textarea.value.trim();
    const wordCount = text === '' ? 0 : text.split(/\s+/).length;
    document.getElementById(counterId).textContent = wordCount + ' mots';
}

// Gestion du fichier uploadé
document.getElementById('file-upload').addEventListener('change', function(e) {
    const file = e.target.files[0];
    const fileNameDiv = document.getElementById('file-name');
    
    if (file) {
        fileNameDiv.querySelector('span').textContent = file.name;
        fileNameDiv.classList.remove('hidden');
    } else {
        fileNameDiv.classList.add('hidden');
    }
});

// Validation du formulaire
document.getElementById('abstractForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const introduction = document.getElementById('introduction').value.trim();
    const abstractComplet = document.getElementById('abstract_complet').value.trim();
    
    if (!introduction && !abstractComplet) {
        alert('Veuillez remplir au moins les sections structurées ou le texte complet de l\'abstract.');
        return false;
    }
    
    // Vérification des limites de mots
    const fields = [
        {id: 'introduction', max: 50},
        {id: 'objectifs', max: 50},
        {id: 'methodes', max: 100},
        {id: 'resultats', max: 100},
        {id: 'conclusion', max: 50},
        {id: 'abstract_complet', max: 300}
    ];
    
    for (let field of fields) {
        const textarea = document.getElementById(field.id);
        const text = textarea.value.trim();
        if (text) {
            const wordCount = text.split(/\s+/).length;
            if (wordCount > field.max) {
                alert(`Le champ "${textarea.previousElementSibling.textContent}" dépasse la limite de ${field.max} mots (${wordCount} mots actuellement).`);
                textarea.focus();
                return false;
            }
        }
    }
    
    // Soumission AJAX
    const formData = new FormData(this);
    
    fetch(this.action, {
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showModal();
            this.reset();
            document.getElementById('file-name').classList.add('hidden');
            coauteurCount = 1;
            document.getElementById('coauteurs-container').innerHTML = `
                <div class="coauteur-field mb-4">
                    <input type="text" name="coauteurs[]" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200" 
                           placeholder="Nom, Prénom – Institution">
                </div>
            `;
        }
    })
    .catch(error => {
        console.error('Erreur:', error);
        alert('Une erreur est survenue lors de la soumission.');
    });
});

// Fonctions pour le modal
function showModal() {
    const modal = document.getElementById('successModal');
    const content = document.getElementById('modalContent');
    
    modal.classList.remove('hidden');
    setTimeout(() => {
        content.classList.remove('scale-95', 'opacity-0');
        content.classList.add('scale-100', 'opacity-100');
    }, 10);
}

function closeModal() {
    const modal = document.getElementById('successModal');
    const content = document.getElementById('modalContent');
    
    content.classList.remove('scale-100', 'opacity-100');
    content.classList.add('scale-95', 'opacity-0');
    
    setTimeout(() => {
        modal.classList.add('hidden');
    }, 300);
}

// Fonction pour fermer le modal de deadline et activer le formulaire
function closeDeadlineModal() {
    const modal = document.getElementById('deadlineModal');
    const form = document.getElementById('abstractForm');
    
    modal.style.display = 'none';
    form.classList.remove('opacity-50', 'pointer-events-none');
    form.removeAttribute('disabled');
}