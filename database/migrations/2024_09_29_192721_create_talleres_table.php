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
        Schema::create('talleres', function (Blueprint $table) {
            $table->id('id_talleres');
            $table->unsignedBigInteger('id_municipios');
            $table->unsignedBigInteger('id_usuarios');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('correo');
            $table->foreign('id_municipios')->references('id_municipios')->on('municipios');
            $table->foreign('id_usuarios')->references('id_usuarios')->on('usuarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('talleres');
    }
};
