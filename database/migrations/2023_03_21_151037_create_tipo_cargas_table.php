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
        Schema::create('tipo_cargas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',45);
            $table->double('peso',2,1);
            $table->string('tipo', 70);
            $table->integer('valor_flete');
            $table->integer('valor_seguro');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_cargas');
    }
};
