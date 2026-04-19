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
        Schema::create('conference_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('conference_id')->constrained();
            $table->foreignId('patient_id')->constrained();
            $table->text('detail')->nullable();
            $table->text('next_action')->nullable();
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['conference_id', 'patient_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('conference_records', function (Blueprint $table) {
            $table->dropForeign(['conference_id']);
            $table->dropForeign(['patient_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
        });
        Schema::dropIfExists('conference_records');
    }
};
