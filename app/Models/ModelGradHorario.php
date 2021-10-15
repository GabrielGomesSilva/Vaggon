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
        'id_Turma',
        'horarios',
        
        
    ];


    public function relUsers(){
        return $this->hasOne('App\Models\Turma','id','id_turma');


    }

}
