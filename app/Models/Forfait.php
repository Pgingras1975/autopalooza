<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forfait extends Model
{
    use HasFactory;

    /**
     * Relation avec le modèle Reservation (un-à-plusieurs)
     */
    public function reservation(){
        return $this->hasMany(Reservation::class);
    }
}
