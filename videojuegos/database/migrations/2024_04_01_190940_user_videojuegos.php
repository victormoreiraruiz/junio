<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user_videojuegos', function (Blueprint $table) {
            $table->unsignedBigInteger('videojuego_id');
            $table->unsignedBigInteger('user_id');

            // Definición de las claves foráneas
            $table->foreign('videojuego_id')->references('id')->on('videojuegos')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // Definición de la clave primaria compuesta
            $table->primary(['videojuego_id', 'user_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_videojuegos');
    }
};
