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
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->increments("id");
            $table->string("Nombre");
            $table->string("Apellidos");
            $table->string("Tipo_de_identificacion");
            $table->string("Numero_identificacion");
            $table->string("Telefono");
            $table->string("Profesion");
            $table->string("Email");
            $table->string("Asunto");
            $table->string("Descripcion");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitudes');
    }
};
