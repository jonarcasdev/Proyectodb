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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();

            $table->string('identificacion')->unique(); // Número de identificación único
            $table->string('nombre');
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('telefono')->unique(); // Telefono único
            $table->string('email')->unique(); // Email único
            $table->string('foto');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
