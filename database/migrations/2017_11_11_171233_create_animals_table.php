<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('taxonid');
            $table->string('scientific_name');
            $table->string('common_name')->nullable();
            $table->string('category');
            $table->string('kingdom');
            $table->string('class');
            $table->string('order');
            $table->string('family');
            $table->string('genus');
            //$table->string('authority');
            $table->integer('published_year');
            $table->tinyInteger('marine_system');
            $table->tinyInteger('freshwater_system');
            $table->tinyInteger('terrestrial_system');
            $table->integer('depth_upper')->nullable();
            $table->integer('depth_lower')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
