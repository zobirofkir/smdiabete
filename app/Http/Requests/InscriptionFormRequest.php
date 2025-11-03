<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InscriptionFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'mail' => 'required|email|max:255',
            'telephone' => 'required|string|max:255',
            'statut' => 'required|string|max:255',
            'custom_status' => 'nullable|string|max:255',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'nom.required' => 'Le nom est obligatoire.',
            'nom.string' => 'Le nom doit être une chaîne de caractères.',
            'nom.max' => 'Le nom ne doit pas dépasser 255 caractères.',
            'prenom.required' => 'Le prénom est obligatoire.',
            'prenom.string' => 'Le prénom doit être une chaîne de caractères.',
            'prenom.max' => 'Le prénom ne doit pas dépasser 255 caractères.',
            'mail.required' => 'L\'adresse mail est obligatoire.',
            'mail.email' => 'L\'adresse mail doit être valide.',
            'mail.max' => 'L\'adresse mail ne doit pas dépasser 255 caractères.',
            'telephone.required' => 'Le téléphone est obligatoire.',
            'telephone.string' => 'Le téléphone doit être une chaîne de caractères.',
            'telephone.max' => 'Le téléphone ne doit pas dépasser 255 caractères.',
            'statut.required' => 'Le statut est obligatoire.',
            'statut.string' => 'Le statut doit être une chaîne de caractères.',
            'statut.max' => 'Le statut ne doit pas dépasser 255 caractères.',
        ];
    }
}
