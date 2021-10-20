<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelProf extends Model
{
    //use HasFactory;
    protected $table = 'Professores';

    protected $fillable = [
        'Nome',
        'Codigo',
        'Cpf',
        'Data_nascimento',
        //'Disciplina',
        'id_disciplina',
        
    ];

    /*public function Disciplinas(){

        return $this->hasMany(ModelDisciplina::class, 'id','id_disciplina');

    }*/

    public function MultiDisciplinas(){

        return $this->hasMany(ModelDisciplina::class, 'id','id_disciplina');

    }



}
