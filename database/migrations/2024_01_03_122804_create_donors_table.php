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
        Schema::create('donors', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid'); //esse atributo gera um sequencia de caracteres dinamicos para cada insert. optou-se por usá-lo ao inves de mostrar os id(primary key) de cada registro
            $table->string('name')->unique();
            $table->string('cpf')->unique();
            $table->string('phone')->unique();
            $table->date('date_birth');
            $table->integer('age');
            $table->string('sex');
            $table->string('address');
            $table->string('profession');
            $table->string('bllod_type')->nullable();
            $table->string('location')->nullable();
            $table->string('Photograph')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donors');
    }
};
