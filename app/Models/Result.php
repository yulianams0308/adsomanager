<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    ////relacion 1 a muchos competencia
    public function competence(){
        return $this->belongsTo('App\Models\Competence');
    }

    public function instructor(){
        return $this->belongsTo('App\Models\Instructor');
    }

    
}
