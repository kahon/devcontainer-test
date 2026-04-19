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
        Schema::create('patient_task_user', function (Blueprint $table) {
            $table->foreignId('patient_task_id')->constrained();
            $table->foreignId('user_id')->constrained();

            $table->primary(['patient_task_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('patient_task_user', function (Blueprint $table) {
            $table->dropForeign(['patient_task_id']);
            $table->dropForeign(['user_id']);
        });
        Schema::dropIfExists('patient_task_user');
    }
};
