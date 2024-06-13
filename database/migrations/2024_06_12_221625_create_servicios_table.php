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
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            
            $table->string('origen');
            $table->string('destino');
            $table->string('ciudad');
            $table->text('descripcion');
            $table->enum('tipo_transporte',['selecciona','moto', 'carro', 'camion'])->default('selecciona');
            $table->integer('numero_paquete');
            $table->enum('estado_paquete', ['selecciona', 'solicitado','recogido', 'entregado'])->default('seleciona');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicios');
    }
};
