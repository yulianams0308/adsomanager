<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    ////relacion 1 a muchos competencia
    public function competences(){
        return $this->hasMany('App\Models\Competence');
    }

    
}
