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
        Schema::create('venta_talleres', function (Blueprint $table) {
            $table->id('id_ventas');
            $table->unsignedBigInteger('id_clientes');
            $table->unsignedBigInteger('id_servicios');
            $table->unsignedBigInteger('id_empleados');
            $table->unsignedBigInteger('id_talleres');
            $table->timestamp('fecha_venta');
            $table->foreign('id_clientes')->references('id_clientes')->on('clientes_talleres');
            $table->foreign('id_servicios')->references('id_servicios')->on('servicios_talleres');
            $table->foreign('id_empleados')->references('id_empleados')->on('empleados_talleres');
            $table->foreign('id_talleres')->references('id_talleres')->on('talleres');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venta_talleres');
    }
};
