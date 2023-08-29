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
        Schema::create('autorizacion', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->integer('valor_compra');
            $table->text('evidencia');
            $table->bigInteger('id_orden_compra')->unsigned();
            $table->bigInteger('id_usuario')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_autorizacion');
    }
};
