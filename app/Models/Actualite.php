<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Actualite extends Model
{
    use HasFactory;

            /**
     * accesseur
     *
     * retourne un string de 255 caractères
     */
    public function getDescriptionLimiterAttribute(){
        return Str::limit($this->description, 50);
    }

    /**
     * Accesseur pour formatter la date et la traduire en français
     *
     * @return void
     */
    public function getDateFormatteAttribute(){
        $date = Carbon::parse($this->created_at);
        Carbon::setLocale('fr');
        return $date->isoFormat('D MMMM YYYY');
    }

    // public function getDateFormatteAttribute(){
    //     return Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d F Y');
    // }

    // public function getCreatedAtAttribute($date){
    //     return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d F Y');
    // }
}
