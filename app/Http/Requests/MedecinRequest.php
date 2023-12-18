<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedecinRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'genre' => 'required|string',
            'adresse' => 'required|string',
            'date_naiss' => 'required|date|before_or_equal:' . now()->format('Y-m-d'),
            'telephone' => 'required|unique:users,telephone',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:4',
            'service_id' => 'required|exists:services,service_id',
            'specialite' => 'required|string',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validation de l'avatar
        ];
    }
}
