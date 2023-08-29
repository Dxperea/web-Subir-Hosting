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
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->integer('numero_identificacion');
            $table->string('genero');
            $table->integer('numero_telefono');
            $table->string('direccion_residencia', 100);
            $table->string('correo', 45)->unique();
            $table->string('contraseña');
            $table->bigInteger('id_tipo_documento')->unsigned();
            $table->bigInteger('id_cargo')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};
