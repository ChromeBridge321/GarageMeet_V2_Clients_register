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
        Schema::create('vehiculos_clientes', function (Blueprint $table) {
            $table->id('id_vehiculo_clientes');
            $table->unsignedBigInteger('id_vehiculos');
            $table->unsignedBigInteger('id_clientes');
            $table->foreign('id_vehiculos')->references('id_vehiculos')->on('vehiculos');
            $table->foreign('id_clientes')->references('id_clientes')->on('clientes_talleres');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos_clientes');
    }
};
