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
        Schema::create('proveedors', function (Blueprint $table) {
            $table->id();
            $table->string('razon_social', 100);
            $table->foreignId('tipo_documento_id')->constrained('tipo_documentos');
            $table->string('numero_documento', 15);
            $table->string('persona_contacto', 100);
            $table->string('telefono', 20);
            $table->string('email', 100);
            $table->string('direccion', 250);
            $table->boolean('estado')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedors');
    }
};
