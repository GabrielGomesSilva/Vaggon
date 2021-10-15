<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelGradHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GradHorarios', function (Blueprint $table) {
            $table->increments('id');        
            $table->string('Codigo');
            $table->string('Nome');
            $table->string('Turma'); //->unique();
            $table->integer('id_Turma')->unsigned(); //->unique();
            $table->foreign('gradhorarios_id_turma_foreign')->references('id')->on('turmas')->onDelete('cascade')->onUpdate('cascade'); //->unique();
            $table->time('horarios'); //Chave estrageira
            
            
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
        Schema::dropIfExists('GradHorarios');
    }
}
