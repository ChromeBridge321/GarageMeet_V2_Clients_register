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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id('id_vehiculos');
            $table->unsignedBigInteger('id_marcas');
            $table->unsignedBigInteger('id_modelos');
            $table->string('nombre');
            $table->foreign('id_marcas')->references('id_marcas')->on('marcas');
            $table->foreign('id_modelos')->references('id_modelos')->on('modelos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
