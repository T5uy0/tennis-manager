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
        Schema::create('tennis_courts', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nom ou numéro du court (e.g., "Court 6", "Court 7")
            $table->enum('location', ['indoor', 'outdoor'])->default('indoor'); // Localisation (intérieur ou extérieur)
            $table->boolean('is_active')->default(true); // Statut actif/inactif pour la réservation
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tennis_courts');
    }
};
