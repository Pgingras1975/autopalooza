<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utype extends Model
{
    use HasFactory;

                    /**
     * Relation avec le modèle User (plusieurs-à-un)
     */
    public function user(){
        return $this->belongsTo(User::class);
    }
}
