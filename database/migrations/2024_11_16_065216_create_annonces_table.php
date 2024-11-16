<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->id('annonce_id'); // ID de l'annonce
            $table->string('titre');
            $table->text('description');
            $table->string('typePropriete');
            $table->float('montant');
            $table->float('superficie');
            $table->integer('nbChambres');
            $table->integer('nbSalleDeDouche');
            $table->integer('veranda');        // Retiré la valeur par défaut
            $table->integer('terrasse');      // Retiré la valeur par défaut
            $table->integer('cuisine');       // Retiré la valeur par défaut
            $table->integer('dependance');    // Retiré la valeur par défaut
            $table->integer('piscine');       // Retiré la valeur par défaut
            $table->integer('garage');        // Retiré la valeur par défaut
            $table->integer('titreFoncier');  // Retiré la valeur par défaut
            $table->string('localite');
            $table->string('localisation');
            $table->text('details')->nullable();
            $table->string('typeTransaction'); // Vente ou Location
            $table->string('visite360')->nullable();
            $table->dateTime('dateCreation')->default(now());
            $table->boolean('validee')->default(false);
            $table->string('video')->nullable();

            $table->string('image');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annonces');
    }
};
