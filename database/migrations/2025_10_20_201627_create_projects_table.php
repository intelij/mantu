<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('client_name')->nullable();
            $table->string('location')->nullable();
            $table->text('scope')->nullable();
            $table->date('start_date')->nullable();
            $table->date('expected_end_date')->nullable();
            $table->decimal('total_budget', 14, 2)->default(0);
            $table->text('payment_schedule')->nullable();
            $table->tinyInteger('progress')->default(0); // 0-100
            $table->enum('status', ['not_started','in_progress','on_hold','completed','cancelled'])->default('not_started');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
