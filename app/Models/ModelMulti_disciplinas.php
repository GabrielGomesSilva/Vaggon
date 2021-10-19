<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelMulti_disciplinas extends Model
{
    //use HasFactory;
    public $table = 'multi_disciplinas';

    public $fillable = [
        'id_disciplinas',
        'id_professores',
        
        
        
        
        
    ];

    public function Professores(){

        return $this->hasMany(ModelDisciplina::class);

    }

}
