<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = 'materias';
    protected $primaryKey = 'id';
    protected $fillable = ['materia_1','materia_2','materia_3', 'materia_4', 'materia_5'];
}
