<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datasheet extends Model
{
    use HasFactory;

    //relacion 1 a muchos aprendices
    public function apprentices(){
        return $this->hasMany('App\Models\Apprentice');
    }

    public function sessions(){
        return $this->hasMany('App\Models\Session');
    }
//relacion muchs a muchos instructor
    public function instructors(){
        return $this->belongsToMany('App\Models\Instructor');
    }
    //relacion muchs a muchos competences
    public function competences(){
        return $this->belongsToMany('App\Models\Competence');
    }

    
}
