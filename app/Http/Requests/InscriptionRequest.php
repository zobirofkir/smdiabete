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
        return [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255|unique:inscriptions',
            'secteur' => 'required|string|in:specialiste,residant',
            'type' => 'required|string|max:255',
            'specialite' => 'required|string|max:255',
            'ville' => 'required|string|max:255',
            'paye' => 'required|string|max:255',

            'sex' => 'required|string|in:dr,pr',
            'arrival_date' => 'required|date',
            'departure_date' => 'required|date',
            'payment_method' => 'required|string|in:laboratoire,virement,invite',
        ];
    }
}
