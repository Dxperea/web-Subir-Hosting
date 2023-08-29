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
        Schema::create('cotizacion_cliente', function (Blueprint $table) {
            $table->id();
            $table->integer('valor');
            $table->bigInteger('id_usuario')->unsigned();
            $table->bigInteger('id_tipo_carga')->unsigned();
            $table->bigInteger('id_municipio_destino')->unsigned();
            $table->bigInteger('id_minicipio_origen')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cotizacion_cliente');
    }
};
