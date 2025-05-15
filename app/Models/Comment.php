<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function community()
    {
        return $this->belongsTo(Community::class);
    }
}
