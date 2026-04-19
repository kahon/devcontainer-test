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
        Schema::create('patient_conditions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admission_id')->constrained();
            $table->string('diagnosis');
            $table->foreignId('risk_level_id')->constrained();
            $table->text('notes')->nullable();
            $table->foreignId('created_by')->constrained('users');
            $table->timestamp('created_at');
        });

        Schema::create('patient_nutrition_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admission_id')->constrained();
            $table->foreignId('diet_type_id')->constrained();
            $table->foreignId('meal_texture_id')->constrained();
            $table->json('food_restrictions')->nullable();
            $table->json('supplements')->nullable();
            $table->boolean('is_enteral_nutrition')->default(false);
            $table->text('enteral_nutrition_detail')->nullable();
            $table->foreignId('created_by')->constrained('users');
            $table->timestamp('created_at');
        });

        Schema::create('patient_measurements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admission_id')->constrained();
            $table->decimal('height', 5, 2)->nullable();
            $table->decimal('weight', 5, 2)->nullable();
            $table->foreignId('created_by')->constrained('users');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('patient_measurements', function (Blueprint $table) {
            $table->dropForeign(['admission_id']);
            $table->dropForeign(['created_by']);
        });
        Schema::dropIfExists('patient_measurements');

        Schema::table('patient_nutrition_orders', function (Blueprint $table) {
            $table->dropForeign(['admission_id']);
            $table->dropForeign(['diet_type_id']);
            $table->dropForeign(['meal_texture_id']);
            $table->dropForeign(['created_by']);
        });
        Schema::dropIfExists('patient_nutrition_orders');

        Schema::table('patient_conditions', function (Blueprint $table) {
            $table->dropForeign(['admission_id']);
            $table->dropForeign(['risk_level_id']);
            $table->dropForeign(['created_by']);
        });
        Schema::dropIfExists('patient_conditions');
    }
};
