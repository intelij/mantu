<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhasesTable extends Migration
{
    public function up()
    {
        Schema::create('phases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->text('description')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->tinyInteger('progress')->default(0);
            $table->enum('status', ['not_started','in_progress','completed'])->default('not_started');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('phases');
    }
}
