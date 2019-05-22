<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DiagnosticoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnostico', function (Blueprint $table) {
            $table->increments('id');
            $table->string('municipio');
            $table->string('nombre');
            $table->string('numero_estudiantes');
            $table->string('dereccion');
            $table->string('telefono');
            $table->string('nombre_rector');
            $table->string('email_rector');
            $table->string('telefono_rector');
            $table->string('nombre_docente');
            $table->string('email_docente');
            $table->string('telefono_docente');
            $table->string('aula_informatica');
            $table->string('cerradura');
            $table->string('internet');
            $table->string('calidad_internet');
            $table->string('energia_electrica');
            $table->string('computadores_totales');
            $table->string('computadores_regulares');
            $table->string('computadores_buenos');
            $table->string('computadores_malos');
            $table->string('tabletas_totales');
            $table->string('tabletas_regulares');
            $table->string('tabletas_buenos');
            $table->string('tabletas_malos');
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
        Schema::dropIfExists('diagnostico');
    }
}
