<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {   
        // MUNICIPIOS
         Schema::table('municipios', function (Blueprint $table) {
            $table->foreign('id_departamento')->references('id')->on('departamentos');
        });
        // ORDEN DE COMPRA
        Schema::table('orden_compra', function (Blueprint $table) {
            $table->foreign('id_usuario')->references('id')->on('usuario');
        });
        // MANTENIMIENTOS
        Schema::table('mantenimientos', function (Blueprint $table) {
            $table->foreign('id_vehiculo')->references('id')->on('vehiculos');
        });
        // AUTORIZACION
        Schema::table('autorizacion', function (Blueprint $table) {
            $table->foreign('id_orden_compra')->references('id')->on('orden_compra');
            $table->foreign('id_usuario')->references('id')->on('usuario');
        });
        // COMPRA
        Schema::table('compra', function (Blueprint $table) {
            $table->foreign('id_autorizacion')->references('id')->on('autorizacion');
        });
        // PROVEEDOR
        Schema::table('proveedor', function (Blueprint $table) {
            $table->foreign('id_compra')->references('id')->on('compra');
        });
        // USUARIOS
        Schema::table('usuario', function (Blueprint $table) {
            $table->foreign('id_tipo_documento')->references('id')->on('tipo_documentos');
            $table->foreign('id_cargo')->references('id')->on('cargos');
        });
        //  VIATICOS DEL CONDUCTOR
        Schema::table('viaticos_conductor', function (Blueprint $table) {
            $table->foreign('id_registro_viaje')->references('id')->on('registro_viaje');
        });
        // COTIZACION DEL CLIENTE
        Schema::table('cotizacion_cliente', function (Blueprint $table) {
            $table->foreign('id_usuario')->references('id')->on('usuario');
            $table->foreign('id_tipo_carga')->references('id')->on('tipo_cargas');
            $table->foreign('id_municipio_destino')->references('id')->on('municipios');
            $table->foreign('id_minicipio_origen')->references('id')->on('municipios');
        });
        // REGISTRO DE VIAJE
        Schema::table('registro_viaje', function (Blueprint $table) {
            $table->foreign('id_tipo_carga')->references('id')->on('tipo_cargas');
            $table->foreign('id_municipio_origen')->references('id')->on('municipios');
            $table->foreign('id_municipio_destino')->references('id')->on('municipios');
            $table->foreign('id_usuario')->references('id')->on('usuario');
            $table->foreign('id_cotizacion_cliente')->references('id')->on('cotizacion_cliente');
            $table->foreign('id_vehiculo')->references('id')->on('vehiculos');
        });
        //  FACTURAS
        Schema::table('facturas', function (Blueprint $table) {
            $table->foreign('id_registro_viaje')->references('id')->on('registro_viaje');
        });
    
    

    /**
     * Reverse the migrations.
     */
}
    public function down(): void
    {
        //
    }
};
