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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('codigo', 12)->nullable();
            $table->foreignId('categoria_id')->constrained('categorias');
            $table->foreignId('unidad_medida_id')->constrained('unidad_medidas');
            $table->double('precio_compra', 10, 2);
            $table->double('precio_venta', 10, 2);
            $table->string('informacion', 250)->nullable();
            $table->boolean('estado')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
