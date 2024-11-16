<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IUser extends Model
{
    use HasFactory;
    // Indiquer le nom exact de la table Prisma
    protected $table = 'User';

    // Clé primaire de la table Prisma
    protected $primaryKey = 'user_id';

    // Empêcher Laravel de gérer automatiquement les colonnes timestamps
    public $timestamps = false;

    // Colonnes modifiables via Eloquent
    protected $fillable = [
        'nom',
        'prenom',
        'username',
        'sexe',
        'email',
        'password',
        'role',
        'telephone',
        'adresse',
        'dateInscription',
    ];

    /**
     * Relation avec le modèle Annonce.
     */
    public function assignedAnnonces()
    {
        return $this->hasMany(Annonce::class, 'assigned_admin_id', 'user_id');
    }
}
