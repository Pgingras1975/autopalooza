<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

            /**
     * Relation avec le modèle User (plusieurs-à-un)
     */
    public function user(){
        return $this->belongsTo(User::class);
    }

            /**
     * Relation avec le modèle Forfait (plusieurs-à-un)
     */
    public function forfait(){
        return $this->belongsTo(Forfait::class);
    }

}
