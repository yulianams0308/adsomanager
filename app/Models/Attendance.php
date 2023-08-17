<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    //Relacion Uno a Uno sesion
    public function session(){
        return $this->belongsTo('App\Models\Session');
    }
}
