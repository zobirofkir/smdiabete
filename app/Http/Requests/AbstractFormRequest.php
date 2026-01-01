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
            'email' => 'required|email|max:150',
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
            
            'declaration_original' => 'required|accepted',
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
            'prenom.required' => 'Le prénom est obligatoire.',
            'email.required' => 'L\'adresse email est obligatoire.',
            'email.email' => 'Veuillez saisir une adresse email valide.',
            'institution.required' => 'L\'institution est obligatoire.',
            'ville.required' => 'La ville est obligatoire.',
            'pays.required' => 'Le pays est obligatoire.',
            'abstract_titre.required' => 'Le titre de l\'abstract est obligatoire.',
            'presentation_type.required' => 'Le type de présentation est obligatoire.',
            'presentation_type.in' => 'Le type de présentation doit être "oral" ou "poster".',
            'langue.required' => 'La langue de soumission est obligatoire.',
            'langue.in' => 'La langue doit être "francais" ou "anglais".',
            'abstract_file.mimes' => 'Le fichier doit être au format Word (.doc, .docx) ou PDF (.pdf).',
            'abstract_file.max' => 'Le fichier ne doit pas dépasser 10 Mo.',
            'declaration_original.required' => 'Vous devez certifier que l\'abstract est original.',
            'declaration_original.accepted' => 'Vous devez certifier que l\'abstract est original.',
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
            'declaration_original' => 'déclaration d\'originalité',
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
            'declaration_original' => $this->has('declaration_original'),
            'declaration_approval' => $this->has('declaration_approval'),
            'declaration_conditions' => $this->has('declaration_conditions'),
        ]);

        if ($this->has('coauteurs') && is_array($this->coauteurs)) {
            $coauteurs = array_filter(array_map(fn($item) => is_string($item) ? trim($item) : $item, $this->coauteurs));
            $this->merge(['coauteurs' => $coauteurs]);
        }
    }
}