<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariossesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table){
            $table->id();
            $table->string('Contenido');
            $table->unsignedBigInteger('productos');
            $table->foreign('productos')->references('id')->on('productos');           
            $table->timestamps();  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            $table->id();
            $table->string('Contenido');
            $table->unsignedBigInteger('productos');
            $table->foreign('productos')->references('id')->on('productos');            
        Schema::dropIfExists('comentarios');
    }
}
