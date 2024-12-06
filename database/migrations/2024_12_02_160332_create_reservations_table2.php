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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id(); // ID unique pour chaque réservation
            $table->foreignId('tennis_court_id')->constrained('tennis_courts')->onDelete('cascade'); // Lien avec la table tennis_courts
            $table->date('reservation_date'); // Date de la réservation
            $table->time('start_time'); // Heure de début de réservation
            $table->time('end_time'); // Heure de fin de réservation
            $table->string('reserved_by')->nullable(); // Nom ou identifiant de la personne ayant réservé
            $table->boolean('is_confirmed')->default(false); // Statut de confirmation de la réservation
            $table->timestamps(); // Champs created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
