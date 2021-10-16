<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelGradHorario extends Model
{
    //use HasFactory;
    protected $table = 'GradHorarios';

    protected $fillable = [
        'Codigo',
        'Nome',
        'Turma',
        'id_turma',
        'horarios',
        
        
    ];


    public function Disciplinas(){
        return $this->hasOne('App\Models\ModelTurma','id','id_turma');


    }

}
