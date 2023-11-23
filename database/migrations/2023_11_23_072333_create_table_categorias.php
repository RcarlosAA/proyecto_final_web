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
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nombre",50);
            $table->string("descripcion",150);
            $table->string("img",150);
            $table->unsignedBigInteger('marca_id');  
            $table->foreign('marca_id')->references('id')->on('marcas');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias');
    }
};
