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
            $table->string('kingdom')->nullable();
            $table->string('class')->nullable();
            $table->string('order')->nullable();
            $table->string('family')->nullable();
            $table->string('genus')->nullable();
            $table->string('authority')->nullable();
            $table->integer('published_year')->nullable();
            $table->boolean('marine_system')->nullable();
            $table->boolean('freshwater_system')->nullable();
            $table->boolean('terrestrial_system')->nullable();
            $table->integer('depth_upper')->nullable();
            $table->integer('depth_lower')->nullable();
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
        Schema::dropIfExists('animals');
    }
}
