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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();

            $table->string('address');
            $table->string('phone');
            $table->string('linkedin');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('logo');

            $table->boolean('terms_show');
            $table->boolean('privacy_show');
            $table->boolean('contact_us_show');
            $table->boolean('become_pro_show');

            $table->boolean('become_pro_link');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};
