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
        Schema::create('voitures', function (Blueprint $table) {
            $table->id();
            $table->string('Nom_voiture');
            $table->string('marque_voiture');
            $table->string('numero_matricule');
            $table->binary('image')->nullable();
            $table->string('EstDisponible');
            $table->string('etat');
            $table->string('prix');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       
        Schema::dropIfExists('voitures');
        
    }
};
