<?php

namespace App\Http\Controllers;

use App\Models\ContestPost;
use Illuminate\Http\Request;
use App\Http\Requests\ContestRequest;

class ContestController extends Controller
{
    public function paginaContestFunction() {
        
        return view('Contest');



    }


    public function GalleriaFunction() {
        


$contestPost = ContestPost::all(); 
return view('Galleria', compact('contestPost'));
   

    return view('Galleria', compact('contestPost')); 

    }


    public function store(ContestRequest $request) {


        $nome_giocatore = $request->nome_giocatore;
        $cognome = $request->cognome;
        $nome_epic = $request->nome_epic;
        $email = $request->email;
        $piattaforma = $request->piattaforma;
        $img = $request->file('img')->store('img_contest','public');

   


ContestPost::create([

    'nome_giocatore' => $nome_giocatore,
     'cognome' => $cognome,
     'cognome' => $cognome,
     'nome_epic' => $nome_epic,
     'email' => $email,
     'piattaforma' => $piattaforma,
     'img' => $img,

     
]);
     
     return redirect()->route('paginaGalleria');


}
}