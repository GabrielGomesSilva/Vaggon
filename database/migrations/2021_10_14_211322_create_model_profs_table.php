<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelProfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Professores', function (Blueprint $table) {
            $table->increments('id');        
            $table->string('Nome');
            $table->string('Codigo');
            
            $table->bigInteger('Cpf'); //->unique();
            $table->date('Data_nascimento');
            $table->string('Disciplina')->nullable();;
            
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
        Schema::dropIfExists('Professores');
    }
}
