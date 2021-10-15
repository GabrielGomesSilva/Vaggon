<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Horarios', function (Blueprint $table) {
            $table->increments('id');        
            $table->string('Codigo');
            $table->string('Disciplina');
            $table->integer('Professor'); //->unique();
            $table->String('dia_semana');
            $table->time('horario_inicio');
            $table->time('horario_fim');
            
            
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
        Schema::dropIfExists('Horarios');
    }
}
