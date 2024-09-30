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
        Schema::create('citas', function (Blueprint $table) {
            $table->id('id_citas');
            $table->unsignedBigInteger('id_talleres');
            $table->unsignedBigInteger('id_tipos_citas');
            $table->unsignedBigInteger('id_clientes');
            $table->foreign('id_talleres')->references('id_talleres')->on('talleres');
            $table->foreign('id_tipos_citas')->references('id_tipos_citas')->on('tipo_citas');
            $table->foreign('id_clientes')->references('id_clientes')->on('clientes_talleres');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
