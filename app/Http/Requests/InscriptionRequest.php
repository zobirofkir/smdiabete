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
            'ville' => 'required|string|max:255',
            'secteur' => 'required|string|in:public,liberal,chu',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255|unique:inscriptions',
            'adresse' => 'required|string|max:255',
            'objectif' => 'required|string|max:500',
        ];
    }
}
