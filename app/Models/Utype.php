<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utype extends Model
{
    use HasFactory;

    /**
     * Relation avec le modèle User (un-à-plusieurs)
     */
    public function user(){
        return $this->hasMany(User::class);
    }
}
