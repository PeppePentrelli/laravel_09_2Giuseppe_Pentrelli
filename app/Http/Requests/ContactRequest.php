<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
    
    'name' => 'required',
    'email' => 'required',
    'description' => 'required',

        ];
    }

    public function messages() {

        return [

'name.required' => 'Hai dimenticato di inserire il nome',
'email.required' => "Hai dimenticato di inserire l'email",
'description.required' => 'Hai dimenticato di inserire il messaggio'


        ];
    }
}
