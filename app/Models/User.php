<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

            /**
     * Relation avec le modèle Reservation (un-à-plusieurs)
     */
    public function reservation(){
        return $this->hasMany(Reservation::class);
    }

            /**
     * Relation avec le modèle Usertype (un-à-plusieurs)
     */
    public function uType(){
        return $this->hasMany(Utype::class);
    }

        /**
     * Accesseur pour récupérer le nom complet de l'utilisateur
     */
    public function getNomCompletAttribute(){
        return $this->prenom . " " . $this->nom;
    }
}
