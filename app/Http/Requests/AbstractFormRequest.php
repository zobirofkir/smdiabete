<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AbstractFormRequest extends FormRequest
{
    /**
     * Détermine si l'utilisateur est autorisé à faire cette requête.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Obtient les règles de validation qui s'appliquent à la requête.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom' => 'required|string|max:100',
            'prenom' => 'required|string|max:100',
            'titre' => 'nullable|in:Dr,Pr,M.,Mme',
            'email' => 'required|email|max:150|unique:abstract_forms,email',
            'telephone' => 'nullable|string|max:20',
            'institution' => 'required|string|max:200',
            'ville' => 'required|string|max:100',
            'pays' => 'required|string|max:100',
            
            'coauteurs' => 'nullable|array',
            'coauteurs.*' => 'string|max:500',
            
            'abstract_titre' => 'required|string|max:300',
            'presentation_type' => 'required|in:oral,poster',
            
            'introduction' => 'required_without:abstract_complet|string|max:1000',
            'objectifs' => 'nullable|string|max:1000',
            'methodes' => 'nullable|string|max:2000',
            'resultats' => 'nullable|string|max:2000',
            'conclusion' => 'nullable|string|max:1000',
            
            'abstract_complet' => 'required_without:introduction|string|max:3000',
            
            'langue' => 'required|in:francais,anglais',
            
            'abstract_file' => 'nullable|file|mimes:doc,docx,pdf|max:10240', 
            
            'declaration_approval' => 'required|accepted',
            'declaration_conditions' => 'required|accepted',
        ];
    }

    /**
     * Obtient les messages personnalisés pour les erreurs de validation.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'nom.required' => 'Le nom est obligatoire.',
            'nom.max' => 'Le nom ne doit pas dépasser 100 caractères.',
            'prenom.required' => 'Le prénom est obligatoire.',
            'prenom.max' => 'Le prénom ne doit pas dépasser 100 caractères.',
            'email.required' => 'L\'adresse email est obligatoire.',
            'email.email' => 'Veuillez saisir une adresse email valide.',
            'email.unique' => 'Cette adresse email est déjà utilisée pour un autre abstract.',
            'telephone.max' => 'Le téléphone ne doit pas dépasser 20 caractères.',
            'institution.required' => 'L\'institution est obligatoire.',
            'institution.max' => 'L\'institution ne doit pas dépasser 200 caractères.',
            'ville.required' => 'La ville est obligatoire.',
            'ville.max' => 'La ville ne doit pas dépasser 100 caractères.',
            'pays.required' => 'Le pays est obligatoire.',
            'pays.max' => 'Le pays ne doit pas dépasser 100 caractères.',
            'coauteurs.*.max' => 'Chaque co-auteur ne doit pas dépasser 500 caractères.',
            'abstract_titre.required' => 'Le titre de l\'abstract est obligatoire.',
            'abstract_titre.max' => 'Le titre ne doit pas dépasser 300 caractères.',
            'presentation_type.required' => 'Le type de présentation est obligatoire.',
            'presentation_type.in' => 'Le type de présentation doit être "oral" ou "poster".',
            'introduction.max' => 'L\'introduction ne doit pas dépasser 1000 caractères.',
            'objectifs.max' => 'Les objectifs ne doivent pas dépasser 1000 caractères.',
            'methodes.max' => 'Les méthodes ne doivent pas dépasser 2000 caractères.',
            'resultats.max' => 'Les résultats ne doivent pas dépasser 2000 caractères.',
            'conclusion.max' => 'La conclusion ne doit pas dépasser 1000 caractères.',
            'abstract_complet.max' => 'Le texte complet ne doit pas dépasser 3000 caractères.',
            'langue.required' => 'La langue de soumission est obligatoire.',
            'langue.in' => 'La langue doit être "francais" ou "anglais".',
            'abstract_file.mimes' => 'Le fichier doit être au format Word (.doc, .docx) ou PDF (.pdf).',
            'abstract_file.max' => 'Le fichier ne doit pas dépasser 10 Mo.',
            'declaration_approval.required' => 'Vous devez confirmer que tous les auteurs ont approuvé la soumission.',
            'declaration_approval.accepted' => 'Vous devez confirmer que tous les auteurs ont approuvé la soumission.',
            'declaration_conditions.required' => 'Vous devez accepter les conditions du congrès.',
            'declaration_conditions.accepted' => 'Vous devez accepter les conditions du congrès.',
            'introduction.required_without' => 'Veuillez remplir au moins les sections structurées ou le texte complet.',
            'abstract_complet.required_without' => 'Veuillez remplir au moins les sections structurées ou le texte complet.',
        ];
    }

    /**
     * Obtient les attributs personnalisés pour les erreurs de validation.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'nom' => 'nom',
            'prenom' => 'prénom',
            'titre' => 'titre',
            'email' => 'adresse email',
            'telephone' => 'téléphone',
            'institution' => 'institution',
            'ville' => 'ville',
            'pays' => 'pays',
            'coauteurs' => 'co-auteurs',
            'abstract_titre' => 'titre de l\'abstract',
            'presentation_type' => 'type de présentation',
            'introduction' => 'introduction',
            'objectifs' => 'objectifs',
            'methodes' => 'méthodes',
            'resultats' => 'résultats',
            'conclusion' => 'conclusion',
            'abstract_complet' => 'texte complet',
            'langue' => 'langue de soumission',
            'abstract_file' => 'fichier abstract',
            'declaration_approval' => 'approbation des auteurs',
            'declaration_conditions' => 'conditions du congrès',
        ];
    }

    /**
     * Prépare les données pour la validation.
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'nom' => trim($this->nom ?? ''),
            'prenom' => trim($this->prenom ?? ''),
            'email' => trim($this->email ?? ''),
            'ville' => trim($this->ville ?? ''),
            'pays' => trim($this->pays ?? ''),
            'abstract_titre' => trim($this->abstract_titre ?? ''),
            'declaration_approval' => $this->has('declaration_approval'),
            'declaration_conditions' => $this->has('declaration_conditions'),
        ]);

        if ($this->has('coauteurs') && is_array($this->coauteurs)) {
            $coauteurs = array_filter(array_map(fn($item) => is_string($item) ? trim($item) : $item, $this->coauteurs));
            $this->merge(['coauteurs' => $coauteurs]);
        }
    }
}