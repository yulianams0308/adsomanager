<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    
    //Relacion Uno a Uno ambiente
    public function room(){
        return $this->belongsTo('App\Models\Room');
    }
    //Relacion Uno a Uno asistencia
    public function attendance(){
        return $this->hasOne('App\Models\Attendance'); 
   
    }

    //relacion 1 a muchos ficha
    public function datasheet(){
        return $this->belongsTo('App\Models\Datasheet');
    }

}
