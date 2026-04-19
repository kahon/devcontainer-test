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
        Schema::create('conference_user', function (Blueprint $table) {
            $table->foreignId('conference_id')->constrained();
            $table->foreignId('user_id')->constrained();

            $table->primary(['conference_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('conference_user', function (Blueprint $table) {
            $table->dropForeign(['conference_id']);
            $table->dropForeign(['user_id']);
        });
        Schema::dropIfExists('conference_user');
    }
};
