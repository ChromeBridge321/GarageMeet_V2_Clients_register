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
        Schema::create('clientes_talleres', function (Blueprint $table) {
            $table->id('id_clientes');
            $table->unsignedBigInteger('id_personas');
            $table->unsignedBigInteger('id_talleres');
            $table->timestamp('fecha_registro');
            $table->foreign('id_talleres')->references('id_talleres')->on('talleres');
            $table->foreign('id_personas')->references('id_personas')->on('personas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes_talleres');
    }
};
