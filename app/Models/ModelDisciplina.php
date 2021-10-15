<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelDisciplina extends Model
{
    //use HasFactory;
    protected $table = 'Disciplina';
    protected $fillable = [
        'Codigo',
        'Nome',
        'Professores',
        
        
    ];
}
