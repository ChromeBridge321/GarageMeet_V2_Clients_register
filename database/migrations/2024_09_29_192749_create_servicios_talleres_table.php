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
        Schema::create('servicios_talleres', function (Blueprint $table) {
            $table->id('id_servicios');
            $table->unsignedBigInteger('id_talleres');
            $table->string('nombre');
            $table->foreign('id_talleres')->references('id_talleres')->on('talleres');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicios_talleres');
    }
};
