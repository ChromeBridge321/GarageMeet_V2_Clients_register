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
        Schema::create('empleados_talleres', function (Blueprint $table) {
            $table->id('id_empleados');
            $table->unsignedBigInteger('id_personas');
            $table->unsignedBigInteger('id_puestos');
            $table->unsignedBigInteger('id_talleres');
            $table->foreign('id_personas')->references('id_personas')->on('personas');
            $table->foreign('id_talleres')->references('id_talleres')->on('talleres');
            $table->foreign('id_puestos')->references('id_puestos')->on('puestos_talleres');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados_talleres');
    }
};
