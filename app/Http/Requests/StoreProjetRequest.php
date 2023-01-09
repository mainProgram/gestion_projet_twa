<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nom' => "required|min:5|max:150",
            'description' => 'required|min:10',
            'date_debut' => 'required',
            'date_fin' => 'required|after:date_debut',
        ];
    }

    public function messages()
{
    return [
        'nom.required' => 'Le nom est requis',
        'description.required' => 'La description est requise',
        'date_debut.required' => 'La date de début est requise',
        'date_fin.required' => 'La date de fin est requise',
        'date_fin.after' => 'La date de fin doit être supérieure à la date de début',
    ];
}
}
