<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudesSepTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes_sep', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_spanish_ci';
            $table->increments('id');
            $table->string('num_cta', 9);
            $table->string('nombre_completo', 200);
            $table->string('nivel', 2);
            $table->string('cve_carrera', 10);
            $table->DateTime('fec_emision_tit');
            $table->string('libro', 4);
            $table->string('foja', 4);
            $table->string('folio', 15);
            $table->text('datos')->nullable();
            $table->text('errores')->nullable();
            $table->char('status',2)->nullable();
            $table->DateTime('fecha_lote')->nullable();
            $table->unsignedInteger('user_id');
            $table->timestamps();
            //Llaves foraneas
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitudes_sep');
    }
}
