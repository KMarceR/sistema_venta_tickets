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
        Schema::create('evento', function (Blueprint $table) {
            $table->id('id_evento');
            $table->string('nombre_evento', 255);
            $table->string('titulo_evento', 255);
            $table->string('descripcion_evento', 255);
            $table->date('fecha_evento');
            $table->integer('capacidad_persona');
            $table->string('ubicacion_evento', 255);
            $table->string('enlace_evento', 255);
            #$table->unsignedInteger('id_usuario');
            #$table->unsignedInteger('id_estado_evento');
            #$table->unsignedInteger('id_tipo_evento');
            $table->timestamps();

            #$table->foreign('id_usuario')->references('id_usuario')->on('usuario');
            #$table->foreign('id_estado_evento')->references('id_estado_evento')->on('estado_evento');
            #$table->foreign('id_tipo_evento')->references('id_tipo_evento')->on('tipo_evento');
            $table->foreignId('id_usuario')->nullable()->constrained('usuario_sistema', 'id_usuario');
            $table->foreignId('id_estado_evento')->nullable()->constrained('estado', 'id_estado');
            $table->foreignId('id_tipo_evento')->nullable()->constrained('tipo_evento', 'id_tipo_evento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
