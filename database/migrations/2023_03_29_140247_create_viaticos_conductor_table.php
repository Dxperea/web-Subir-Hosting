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
        Schema::create('viaticos_conductor', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 70);
            $table->integer('costo');
            $table->date('fecha');
            $table->text('evidencia');
            $table->string('tipo', 70);
            $table->bigInteger('id_registro_viaje')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biaticos_conductor');
    }
};
