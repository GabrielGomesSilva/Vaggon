<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelHorario extends Model
{
    //use HasFactory;
    protected $table = 'Horarios';
    protected $fillable = [
        'Codigo',
        'Disciplina',
        'Professor',
        'Dia_semana',
        'horario_inicio',
        'horario_fim',
        //gradehorario
        
    ];

}
