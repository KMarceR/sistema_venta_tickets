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
        Schema::create('usuario_sistema', function (Blueprint $table) {
            $table->id('id_usuario');
            $table->string('nombre_usuario', 255);
            $table->string('email', 200);
            $table->string('password', 100);
            #$table->unsignedInteger('id_tipo_usuario');
            $table->timestamps();

            $table->foreignId('id_tipo_usuario')->nullable()->constrained('tipo_usuario', 'id_tipo_usuario');
            #$table->foreign('id_tipo_usuario')->references('id_tipo_usuario')->on('tipo_usuario');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
