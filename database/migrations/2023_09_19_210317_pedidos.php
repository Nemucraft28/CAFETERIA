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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('mesa');
            $table->string('estado');
            $table->string('forma_pago');
            $table->integer('total'); // Campo de precio decimal
            $table->timestamps(); // Campos de fecha y hora de creación y modificación
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Schema::dropIfExists('pedidos');
    }
};
