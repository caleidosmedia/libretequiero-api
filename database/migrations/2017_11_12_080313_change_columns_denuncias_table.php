<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnsDenunciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('denuncias', function (Blueprint $table) {
            $table->dropForeign(['animal_id']);
            $table->dropColumn('animal_id');
            $table->dropColumn('animal');
            $table->dropColumn('cantidad');
            $table->dropColumn('condicion');
            $table->dropColumn('denunciante');

            $table->string('almacenamiento');
            $table->string('clase');
            $table->string('direccion');
            $table->string('estado');
            $table->string('grupo');
            $table->string('tipo_locacion');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('denuncias', function (Blueprint $table) {
            //
        });
    }
}
