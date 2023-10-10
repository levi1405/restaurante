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
        Schema::create('detalle_platillos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_platillo')->unsigned();
            $table->foreign('id_platillo')->references('id')->on('platillos');
            $table->bigInteger('id_ingrediente')->unsigned();
            $table->foreign('id_ingrediente')->references('id')->on('ingredientes');
            $table->double('mano_obra');
            $table->double('total');
            $table->double('precio_venta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_platillos');
    }
};
