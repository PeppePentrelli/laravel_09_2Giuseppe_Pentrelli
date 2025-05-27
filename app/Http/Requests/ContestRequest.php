<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContestRequest extends FormRequest
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
'nome_giocatore' => 'required | min:3' ,
'cognome' => 'required' ,
'nome_epic' => 'required' ,
'email' => 'required' ,
'piattaforma' => 'required' ,
'img' => 'required' ,
];
    }


public function messages() { 

    return[

        'nome_giocatore.required' => 'ti sei dimenticato di inserire il nome' ,
        'nome_giocatore.min' => 'Il Nome deve contenere almeno 3 caratteri' ,
        'cognome.required' => 'Ti sei dimenticato di inserire il cognome.',
        'nome_epic.required' => 'Ti sei dimenticato di inserire il nome Epic.',
        'email.required' => 'Ti sei dimenticato di inserire l’email.',
        'piattaforma.required' => 'Seleziona una piattaforma.',
        'img.required' => 'Carica un’immagine per partecipare.',


    ];
}
 
}
