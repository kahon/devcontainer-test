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
        Schema::create('message_tag_patient_message', function (Blueprint $table) {
            $table->foreignId('patient_message_id')->constrained();
            $table->foreignId('message_tag_id')->constrained();

            $table->primary(['patient_message_id', 'message_tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('message_tag_patient_message', function (Blueprint $table) {
            $table->dropForeign(['patient_message_id']);
            $table->dropForeign(['message_tag_id']);
        });
        Schema::dropIfExists('message_tag_patient_message');
    }
};
