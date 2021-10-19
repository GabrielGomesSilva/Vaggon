<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Alunos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Codigo');
            $table->string('Nome');
            $table->integer('Cpf'); //->unique();
            $table->date('Data_nascimento');
            $table->integer('id_Turma')->unsigned();
            $table->foreign('id_Turma')->references('id')->on('turmas')->onDelete('cascade')->onUpdate('cascade'); //->unique();;
            

            
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
        Schema::dropIfExists('Alunos');
    }
}
