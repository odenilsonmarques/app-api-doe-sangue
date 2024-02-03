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
        Schema::create('blood_centers', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid'); 
            $table->string('name');
            $table->string('location');
            $table->string('opening_hours');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('blood_supply');
            $table->string('city');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blood_centers');
    }
};
