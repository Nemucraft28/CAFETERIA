<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('referencia');
            $table->integer('precio'); // Campo de precio decimal
            $table->integer('peso'); // Campo de stock como número entero
            $table->string('categoria');
            $table->integer('stock'); // Campo de stock como número entero
            $table->timestamps(); // Campos de fecha y hora de creación y modificación
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Schema::dropIfExists('productos');
    }
};
