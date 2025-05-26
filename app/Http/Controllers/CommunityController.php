<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Community;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
public function CommunityFunction() { 
    $userPost = Community::all();

    return view('Community' , ['userPost' => $userPost]);
}

public function send_post(Request $request)  { 

    $nome = $request->nome;
    $cognome = $request->cognome;
    $nomeEpic = $request->nomeEpic;
    $email = $request->email;
    $piattaforma = $request->piattaforma;
    $description = $request->description;


    $post = new Community();
    $post->nome = $nome;
    $post->cognome = $cognome;
    $post->nomeEpic = $nomeEpic;
    $post->email = $email;
    $post->piattaforma = $piattaforma;
    $post->description = $description;

 dd($request->all());

    $post->save();

    return redirect()->back();

}

public function add_like($id)
{
    $community = Community::findOrFail($id);
    $community->likes += 1;
    $community->save();

    return redirect()->back();
}


public function add_comment(Request $request, $id)
{
    $request->validate([
        'autore' => 'required|string|max:255',
        'contenuto' => 'required|string|max:2000',
    ]);

    $comment = new Comment();
    $comment->community_id = $id;
    $comment->autore = $request->autore;
    $comment->contenuto = $request->contenuto;
    $comment->save();

    return redirect()->back();
}

 }