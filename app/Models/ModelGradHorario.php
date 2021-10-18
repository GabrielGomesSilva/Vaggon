<?php

//namespace App\Models\ModelTurma;
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


    public function turmas(){
        
        return $this->belongsTo(turmas::class);


    }

}
