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
            'laboratoire_status' => 'nullable|string|in:encours,confirme',
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'laboratoire' => 'nullable|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => [
                'required',
                'email',
                'max:255',
                function ($attribute, $value, $fail) {
                    $allowedEmails = [
                        'Cabinet.drelalaoui@gmail.com',
                        'dm.rabie@gmail.com',
                        'zobirofkir19@gmail.com',
                        'sonabahou@yahoo.fr',
                    ];
                    if (!in_array($value, $allowedEmails) && \App\Models\Inscription::where('email', $value)->exists()) {
                        $fail('Cet email a déjà été utilisé pour une inscription.');
                    }
                },
            ],
            'other_laboratoire' => 'nullable|string|max:255',
            'other_specialite' => 'nullable|string|max:255',
            'secteur' => 'required|string|in:public,private',
            'type' => 'required|string|in:specialiste,resident',
            'specialite' => [
                'required',
                'string',
                'max:255',
                function ($attribute, $value, $fail) {
                    if ($value === 'Autres' && empty(request('other_specialite'))) {
                        $fail('Veuillez entrer votre spécialité si vous sélectionnez "Autres".');
                    }
                },
            ],
            'other_specialite' => 'nullable|string|max:255',
            'ville' => 'required|string|max:255',
            'inscription_type' => 'required|string|in:seule,hebergement',
            'arrival_date' => 'nullable|date|in:2025-05-29,2025-05-30,2025-05-31',
            'departure_date' => 'nullable|date|in:2025-05-30,2025-05-31,2025-06-01',
            'payment_method' => 'nullable|string',
            'payment_choice' => 'required|string|in:yes,no',
            'rib_pdf' => 'nullable|file|mimes:pdf|max:2048',
        ];

        // Add conditional validation for RIB PDF when payment_choice is 'yes'
        if (request('payment_choice') === 'yes') {
            $rules['rib_pdf'] = 'required|file|mimes:pdf|max:2048';
        }

        return $rules;
    }

    /**
     * Get custom error messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'attendance_status.required' => 'Le statut d\'attestation est requis.',
            'attendance_status.string' => 'Le statut d\'attestation doit être une chaîne de caractères.',
            'attendance_status.in' => 'Le statut d\'attestation doit être sur-place ou en-ligne.',

            'firstname.required' => 'Le prénom est requis.',
            'firstname.string' => 'Le prénom doit être une chaîne de caractères.',
            'firstname.max' => 'Le prénom ne peut pas dépasser 255 caractères.',

            'lastname.required' => 'Le nom est requis.',
            'lastname.string' => 'Le nom doit être une chaîne de caractères.',
            'lastname.max' => 'Le nom ne peut pas dépasser 255 caractères.',

            'phone.required' => 'Le numéro de téléphone est requis.',
            'phone.string' => 'Le numéro de téléphone doit être une chaîne de caractères.',
            'phone.max' => 'Le numéro de téléphone ne peut pas dépasser 15 caractères.',

            'email.email' => 'L\'email doit être une adresse email valide.',
            'email.max' => 'L\'email ne peut pas dépasser 255 caractères.',
            'email.unique' => 'Cet email est déjà utilisé.',

            'secteur.required' => 'Le secteur est requis.',
            'secteur.string' => 'Le secteur doit être une chaîne de caractères.',
            'secteur.in' => 'Le secteur doit être soit "public", soit "privé".',

            'type.required' => 'Le type est requis.',
            'type.string' => 'Le type doit être une chaîne de caractères.',
            'type.in' => 'Le type doit être soit "specialiste", soit "resident".',

            'specialite.required' => 'La spécialité est requise.',
            'specialite.string' => 'La spécialité doit être une chaîne de caractères.',
            'specialite.max' => 'La spécialité ne peut pas dépasser 255 caractères.',
            'specialite.function' => 'Veuillez entrer votre spécialité si vous sélectionnez "Autres".',

            'other_specialite.string' => 'La spécialité "Autres" doit être une chaîne de caractères.',
            'other_specialite.max' => 'La spécialité "Autres" ne peut pas dépasser 255 caractères.',

            'ville.required' => 'La ville est requise.',
            'ville.string' => 'La ville doit être une chaîne de caractères.',
            'ville.max' => 'La ville ne peut pas dépasser 255 caractères.',

            'inscription_type.required' => 'Le type d\'inscription est requis.',
            'inscription_type.string' => 'Le type d\'inscription doit être une chaîne de caractères.',
            'inscription_type.in' => 'Le type d\'inscription doit être "seule" ou "hebergement".',

            'arrival_date.date' => 'La date d\'arrivée doit être une date valide.',
            'arrival_date.in' => 'La date d\'arrivée doit être l\'une des dates suivantes : 2025-05-29, 2025-05-30, 2025-05-31.',

            'departure_date.date' => 'La date de départ doit être une date valide.',
            'departure_date.in' => 'La date de départ doit être l\'une des dates suivantes : 2025-05-30, 2025-05-31, 2025-06-01.',

            'payment_method.required' => 'Le mode de paiement est requis.',
            'payment_method.string' => 'Le mode de paiement doit être une chaîne de caractères.',
            'payment_method.in' => 'Le mode de paiement doit être "laboratoire", "virement", ou "invite".',

            'rib_pdf.required' => 'Le fichier RIB est requis pour le mode de paiement "virement".',
            'rib_pdf.file' => 'Le fichier RIB doit être un fichier.',
            'rib_pdf.mimes' => 'Le fichier RIB doit être au format PDF.',
            'rib_pdf.max' => 'Le fichier RIB ne doit pas dépasser 2 MB.',
        ];
    }
}
