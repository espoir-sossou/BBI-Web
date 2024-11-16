<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');  // ID de l'utilisateur (auto-incrémenté)
            $table->string('nom')->nullable();  // Nom de l'utilisateur
            $table->string('prenom')->nullable();  // Prénom de l'utilisateur
            $table->string('username')->nullable();  // Nom d'utilisateur (optionnel)
            $table->string('sexe')->nullable();  // Sexe de l'utilisateur
            $table->string('email')->unique();  // Email de l'utilisateur, doit être unique
            $table->string('password');  // Mot de passe
            $table->string('role')->nullable();  // Rôle de l'utilisateur (admin, médecin, etc.)
            $table->string('telephone')->nullable();  // Numéro de téléphone de l'utilisateur
            $table->string('adresse')->nullable();  // Adresse de l'utilisateur
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
