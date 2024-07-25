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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('usuario', 20);
            $table->string('nombre', 20);
            $table->char('sexo', 1);
            $table->tinyInteger('nivel');
            $table->string('email', 50);
            $table->string('telefono', 20);
            $table->string('marca', 20);
            $table->string('compañia', 20);
            $table->float('saldo');
            $table->boolean('activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
