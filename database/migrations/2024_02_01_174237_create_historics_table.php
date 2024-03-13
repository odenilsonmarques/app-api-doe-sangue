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
        Schema::create('historics', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('blood_center_id')->constrained('blood_centers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('scheduling_id')->constrained('schedulings')->onDelete('cascade')->onUpdate('cascade');
            $table->date('donation_date');
            $table->string('quantity_blood');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historics');
    }
};
