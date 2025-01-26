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
        ];
    }
}
