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
        Schema::create('request_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('code')->unique();
            $table->integer('sort_order');
        });

        Schema::create('job_type_change_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('before_job_type_id')->constrained('job_types');
            $table->foreignId('after_job_type_id')->constrained('job_types');
            $table->foreignId('request_status_id')->constrained('request_statuses');
            $table->foreignId('approved_by')->nullable()->constrained('users');
            $table->text('reject_reason')->nullable();
            $table->timestamp('requested_at');
            $table->timestamp('resolved_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_type_change_requests');
        Schema::dropIfExists('request_statuses');
    }
};