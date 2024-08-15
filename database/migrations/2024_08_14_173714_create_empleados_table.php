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
        Schema::create('empleados', function (Blueprint $table) {
            $table->string('codigo', 6);
            $table->string('rtn', 14)->unique();
            $table->string('nombre', 150);
            $table->string('direccion', 255);
            $table->string('telefono', 30)->nullable();
            $table->string('genero', 30);
            $table->string('correo', 200);
            $table->string('estado', 50)->default('ACTIVO');
            $table->primary('codigo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
