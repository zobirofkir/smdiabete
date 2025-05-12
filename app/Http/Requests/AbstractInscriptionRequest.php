<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AbstractInscriptionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'firstname' => 'required|string|min:5|max:255',
            'lastname' => 'required|string|min:5|max:255',
            'email' => 'required|string|min:3|max:255',
            'file' => 'required|file|mimes:pdf|max:10240',
        ];
    }

    public function messages(): array
    {
        return [
            'firstname.required' => 'Le prénom est obligatoire.',
            'lastname.required' => 'Le nom de famille est obligatoire.',
            'file.required' => 'Le fichier est obligatoire.',
            'file.mimes' => 'Le fichier doit être au format PDF.',
            'file.max' => 'Le fichier ne doit pas dépasser :max kilo-octets.',
            'email.required' => 'Le médecin responsable est obligatoire.',
            'email.string' => 'Le médecin responsable doit être une chaîne de caractères.',
            'email.min' => 'Le médecin responsable doit contenir au moins :min caractères.',
            'email.max' => 'Le médecin responsable ne doit pas dépasser :max caractères.',
        ];
    }
}
