<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelTurma extends Model
{
    //use HasFactory;
    public $table = 'turmas';

    public $fillable = [
        'Codigo',
        'Nome',
        
        
        
        
    ];

    public function GradHorario(){

        return $this->belongsTo(ModelGradHorario::class);

    }
    
    public function AlunoTurma(){

        return $this->belongsTo(ModelAluno::class);

    }

}
