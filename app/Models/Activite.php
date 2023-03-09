<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Activite extends Model
{
    use HasFactory;

                /**
     * accesseur
     *
     * retourne un string de 60 caractères
     */
    public function getDescriptionLimiterAttribute(){
        return Str::limit($this->texte, 60);
    }
}
