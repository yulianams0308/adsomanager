<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    use HasFactory;
    
    //relacion 1 a muchos resultado
    public function result(){
        return $this->belongsTo('App\Models\Result');
    }

    public function datasheets(){
        return $this->belongsToMany('App\Models\Datasheet');
    }
}
