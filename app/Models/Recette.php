<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    public function ingredient()
    {
        return $this->belongsToMany('App\Models\ingredient')->withPivot('quantite');
    }
}
