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
        Schema::create('runner_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('service_type');
            $table->string('other_service')->nullable();
            $table->string('location');
            $table->string('ownership')->default('mine');
            $table->string('other_person')->nullable();
            $table->string('job_date')->nullable(); // asap / this_week / later
            $table->date('specific_date')->nullable();
            $table->text('description')->nullable();
            $table->boolean('has_budget')->default(false);
            $table->decimal('budget', 10, 2)->nullable();
            $table->json('contact_method')->nullable();
            $table->string('attachment_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('runner_requests');
    }
};
