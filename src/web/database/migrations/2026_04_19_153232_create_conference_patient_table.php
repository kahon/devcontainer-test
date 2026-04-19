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
        Schema::create('conference_patient', function (Blueprint $table) {
            $table->foreignId('conference_id')->constrained();
            $table->foreignId('patient_id')->constrained();

            $table->primary(['conference_id', 'patient_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('conference_patient', function (Blueprint $table) {
            $table->dropForeign(['conference_id']);
            $table->dropForeign(['patient_id']);
        });
        Schema::dropIfExists('conference_patient');
    }
};
