<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AbstractForm extends Model
{
    use SoftDeletes;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'prenom',
        'titre',
        'email',
        'telephone',
        'institution',
        'ville',
        'pays',
        'coauteurs',
        'abstract_titre',
        'presentation_type',
        'introduction',
        'introduction_word_count',
        'objectifs',
        'objectifs_word_count',
        'methodes',
        'methodes_word_count',
        'resultats',
        'resultats_word_count',
        'conclusion',
        'conclusion_word_count',
        'abstract_complet',
        'abstract_complet_word_count',
        'langue',
        'fichier_path',
        'fichier_nom',
        'fichier_taille',
        'fichier_mime',
        'declaration_original',
        'declaration_approval',
        'declaration_conditions',
        'statut',
        'reference',
        'date_soumission',
        'date_evaluation',
        'commentaires_evaluateur',
        'user_id',
        'ip_address',
        'user_agent',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'coauteurs' => 'array',
        'declaration_original' => 'boolean',
        'declaration_approval' => 'boolean',
        'declaration_conditions' => 'boolean',
        'date_soumission' => 'datetime',
        'date_evaluation' => 'datetime',
        'fichier_taille' => 'integer',
        'introduction_word_count' => 'integer',
        'objectifs_word_count' => 'integer',
        'methodes_word_count' => 'integer',
        'resultats_word_count' => 'integer',
        'conclusion_word_count' => 'integer',
        'abstract_complet_word_count' => 'integer',
        'deleted_at' => 'datetime',
    ];
    
    /**
     * Get the validation rules for the model.
     */
    public static function rules($id = null)
    {
        return [
            'email' => 'required|email|unique:abstract_forms,email' . ($id ? ',' . $id : ''),
        ];
    }
}