<?php

namespace App\Models;

use App\Models\ContestPost;
use Illuminate\Database\Eloquent\Model;

class ContestPost extends Model
{
       protected $fillable = [
        
        'nome_giocatore',
        'cognome',
        'nome_epic',
        'email',
        'piattaforma',
        'img', 
  


    ];


}
