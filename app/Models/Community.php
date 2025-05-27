<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    protected $fillable = [
        
        'nome',
        'cognome',
        'nomeEpic',
        'email',
        'piattaforma',
        'description',
        'likes', 
        'imgPost', 
        'imgProfile', 


    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
