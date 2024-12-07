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
        Schema::create('court_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->timestamps();
        });

        Schema::table('court', function (Blueprint $table) {
            $table->foreignId('court_status_id')->nullable()->constrained('court_statuses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('court', function (Blueprint $table) {
            $table->dropForeign(['court_status_id']);
            $table->dropColumn('court_status_id');
        });

        Schema::dropIfExists('court_status');
    }
};
