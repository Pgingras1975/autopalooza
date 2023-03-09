<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Forfait extends Model
{
    use HasFactory;

    /**
     * Relation avec le modèle Reservation (un-à-plusieurs)
     */
    public function reservation(){
        return $this->hasMany(Reservation::class);
    }

        /**
     * accesseur
     *
     * retourne un string de 60 caractères
     */
    public function getDescriptionLimiterAttribute(){
        return Str::limit($this->description, 60);
    }
}
