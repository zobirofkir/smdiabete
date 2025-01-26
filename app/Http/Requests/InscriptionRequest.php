<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InscriptionRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        $rules = [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'nullable|email|max:255|unique:inscriptions',
            'secteur' => 'required|string|in:public,private',
            'type' => 'required|string|in:specialiste,resident',
            'specialite' => 'required|string|max:255',
            'ville' => 'required|string|max:255',
            'sex' => 'required|string|in:dr,pr',
            'departure_date' => 'required|date',
            'payment_method' => 'required|string|in:laboratoire,virement,invite',
        ];

        if ($this->input('payment_method') === 'virement') {
            $rules['rib_pdf'] = 'required|file|mimes:pdf';
        }

        return $rules;
    }

    /**
     * Get custom error messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'rib_pdf.required' => 'Le fichier PDF du RIB est obligatoire pour le paiement par virement.',
            'rib_pdf.mimes' => 'Le fichier doit être un PDF valide.',
            'rib_pdf.max' => 'Le fichier PDF ne doit pas dépasser 2 Mo.',
            'rib_pdf.file' => 'Le fichier PDF doit avoir une extension PDF.',
            'rib_pdf.required_with' => 'Le fichier PDF du RIB est obligatoire pour le paiement par virement.',
            'rib_pdf.required_with_all' => 'Le fichier PDF du RIB est obligatoire pour le paiement par virement.',
            'firstname.required' => 'Le prénom est requis.',
            'lastname.required' => 'Le nom de famille est requis.',
            'phone.required' => 'Le numéro de tелефone est requis.',
            'email.required' => 'L\'email est requis.',
            'secteur.required' => 'Le secteur est requis.',
            'type.required' => 'Le type est requis.',
            'specialite.required' => 'La specialité est requise.',
            'ville.required' => 'La ville est requise.',
            'sex.required' => 'Le sexe est requis.',
            'departure_date.required' => 'La date de sortie est requise.',
            'payment_method.required' => 'Le moyen de paiement est requis.',
            'payment_method.in' => 'Le moyen de paiement doit être "laboratoire", "virement" ou "invite".',
            'email.unique' => 'Cet email est deja utilisé.',
            'phone.unique' => 'Cet numéro de tелефone est deja utilisé.',
            'rib_pdf.required_with_all' => 'Le fichier PDF du RIB est obligatoire pour le paiement par virement.',
            'rib_pdf.required_with' => 'Le fichier PDF du RIB est obligatoire pour le paiement par virement.',
            'rib_pdf.required_without' => 'Le fichier PDF du RIB est obligatoire pour le paiement par virement.',
            'rib_pdf.required_without_all' => 'Le fichier PDF du RIB est obligatoire pour le paiement par virement.',
        ];
    }
}
