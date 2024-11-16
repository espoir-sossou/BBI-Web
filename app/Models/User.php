<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

     // Nom explicite de la table utilisée (celle de NestJS)
     protected $table = 'User';  // Le nom de la table est `User` ici (utilisé par NestJS)

     // Définir la clé primaire si elle n'est pas `id` et est différente
     protected $primaryKey = 'user_id'; // Assurez-vous que c'est bien la clé primaire de votre table

     // Optionnel : Si la table n'a pas de colonnes `created_at` et `updated_at`, désactivez-les
     public $timestamps = false;  // Si vous n'utilisez pas les timestamps dans NestJS

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
        'password' => 'hashed',
    ];
}
