<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EstablecimientosEducativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establecimientos_educativos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('codigo');
            $table->string('region');
            $table->string('municipio');
            $table->string('zona');
            $table->string('numero_estudiantes')->nullable()->default(null);
            $table->string('direccion')->nullable()->default(null);
            $table->string('telefono')->nullable()->default(null);
            $table->string('nombre_rector')->nullable()->default(null);
            $table->string('email_rector')->nullable()->default(null);
            $table->string('telefono_rector')->nullable()->default(null);
            $table->string('nombre_docente')->nullable()->default(null);
            $table->string('email_docente')->nullable()->default(null);
            $table->string('telefono_docente')->nullable()->default(null);
            $table->string('aula_informatica')->nullable()->default(null);
            $table->string('cerradura')->nullable()->default(null);
            $table->string('internet')->nullable()->default(null);
            $table->string('calidad_internet')->nullable()->default(null);
            $table->string('energia_electrica')->nullable()->default(null);
            $table->string('computadores_totales')->nullable()->default(null);
            $table->string('computadores_regulares')->nullable()->default(null);
            $table->string('computadores_buenos')->nullable()->default(null);
            $table->string('computadores_malos')->nullable()->default(null);
            $table->string('tabletas_totales')->nullable()->default(null);
            $table->string('tabletas_regulares')->nullable()->default(null);
            $table->string('tabletas_buenos')->nullable()->default(null);
            $table->string('tabletas_malos')->nullable()->default(null);
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
        Schema::dropIfExists('establecimientos_educativos');
    }
}
