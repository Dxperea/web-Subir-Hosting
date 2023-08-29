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
        Schema::create('registro_viaje', function (Blueprint $table) {
            $table->id();
            $table->string('direccion', 100);
            $table->date('fecha_entrega');
            $table->date('fecha_carga');
            $table->bigInteger('id_tipo_carga')->unsigned();
            $table->bigInteger('id_municipio_origen')->unsigned();
            $table->bigInteger('id_municipio_destino')->unsigned();
            $table->bigInteger('id_usuario')->unsigned();
            $table->bigInteger('id_cotizacion_cliente')->unsigned();
            $table->bigInteger('id_vehiculo')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_viaje');
    }
};
