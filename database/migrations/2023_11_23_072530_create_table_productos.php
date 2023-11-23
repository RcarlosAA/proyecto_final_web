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
            $table->timestamps();
            $table->string("nombre", 50);
            $table->string("color", 50);
            $table->string("descripcion", 50);
            $table->string("peso", 50);
            $table->string("altura", 50);
            $table->string("ancho", 50);
            $table->string("profundidad", 50);
            $table->string("img");
            $table->decimal("precio", 6,2);
            $table->unsignedInteger("stock");            
            $table->boolean("estado")->default(1);
            $table->unsignedBigInteger('categoria_id');                      
            $table->foreign('categoria_id')->references('id')->on('categorias');
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
