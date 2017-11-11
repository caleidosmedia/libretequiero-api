<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDenunciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denuncias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('animal_id')->unsigned()->nullable();
            $table->foreign('animal_id')->references('id')->on('animals');
            $table->string('animal');
            $table->integer('cantidad')->unsigned();
            $table->tinyInteger('condicion');
            $table->string('descripcion');
            $table->string('coordenadas');
            $table->string('denunciante');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE denuncias ADD imagen LONGBLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('denuncias');
    }
}
