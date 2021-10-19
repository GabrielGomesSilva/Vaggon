<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelAluno extends Model
{
    //use HasFactory;
    protected $table = 'Alunos';
    protected $fillable = [
        'Codigo',
        'Nome',
        'Cpf',
        'Data_nascimento',
        'id_Turma',
        
    ];

    public function AlunoTurma(){

        return $this->hasOne(ModelTurma::class , 'id', 'id_Turma' );

    }


}
