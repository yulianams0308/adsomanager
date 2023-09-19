<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    use HasFactory;
    
    //relacion 1 a muchos resultado
    public function results(){
        return $this->hasMany('App\Models\Result');
    }

    public function datasheets(){
        return $this->belongsToMany('App\Models\Datasheet');
    }
}
