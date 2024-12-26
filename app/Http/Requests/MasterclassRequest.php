<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MasterclassRequest extends FormRequest
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
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'ville' => 'required|string|max:255',
            'secteur' => 'required|string|in:public,liberal,chu',
            'phone' => 'required|string|max:15|unique:masterclasses',
            'email' => 'required|email|max:255|unique:masterclasses',
            'adresse' => 'required|string|max:255',
            'objectif' => 'required|string|max:500',
        ];
    }

    /**
     * Get the custom error messages for validation.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'firstname.required' => "Le prénom est requis.",
            'firstname.string' => "Le prénom doit être une chaîne de caractères.",
            'firstname.max' => "Le prénom ne doit pas dépasser 255 caractères.",

            'lastname.required' => "Le nom de famille est requis.",
            'lastname.string' => "Le nom de famille doit être une chaîne de caractères.",
            'lastname.max' => "Le nom de famille ne doit pas dépasser 255 caractères.",

            'ville.required' => "La ville est requise.",
            'ville.string' => "La ville doit être une chaîne de caractères.",
            'ville.max' => "La ville ne doit pas dépasser 255 caractères.",

            'secteur.required' => "Le secteur est requis.",
            'secteur.string' => "Le secteur doit être une chaîne de caractères.",
            'secteur.in' => "Le secteur doit être l'un des suivants : public, liberal, chu.",

            'phone.required' => "Le numéro de téléphone est requis.",
            'phone.string' => "Le numéro de téléphone doit être une chaîne de caractères.",
            'phone.max' => "Le numéro de téléphone ne doit pas dépasser 15 caractères.",
            'phone.unique' => "Le numéro de téléphone a déjà été pris.",

            'email.required' => "L'email est requis.",
            'email.email' => "L'email doit être une adresse email valide.",
            'email.max' => "L'email ne doit pas dépasser 255 caractères.",
            'email.unique' => "L'email a déjà été pris.",

            'adresse.required' => "L'adresse est requise.",
            'adresse.string' => "L'adresse doit être une chaîne de caractères.",
            'adresse.max' => "L'adresse ne doit pas dépasser 255 caractères.",

            'objectif.required' => "L'objectif est requis.",
            'objectif.string' => "L'objectif doit être une chaîne de caractères.",
            'objectif.max' => "L'objectif ne doit pas dépasser 500 caractères.",
        ];
    }
}
