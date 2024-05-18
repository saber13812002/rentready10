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
        Schema::create('solution_benefits', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('description')->nullable();

            $table->boolean('have_buttons')->default(false);

            $table->boolean('enabled')->default(true);
            $table->integer('order')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solution_benefits');
    }
};