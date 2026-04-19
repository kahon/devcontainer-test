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
        Schema::create('message_read_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_message_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->timestamp('read_at');

            $table->unique(['patient_message_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('message_read_logs', function (Blueprint $table) {
            $table->dropForeign(['patient_message_id']);
            $table->dropForeign(['user_id']);
        });
        Schema::dropIfExists('message_read_logs');
    }
};
