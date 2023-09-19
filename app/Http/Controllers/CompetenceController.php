<?php

namespace App\Http\Controllers;

use App\Models\Competence;
use Illuminate\Http\Request;

class CompetenceController extends Controller
{
    public function index(){
        
       return view('competences.create');
  
    }
    
    public function create(){
        return view('competences.create');
    }

    public function store(Request $request){
        
        $competence=new Competence();
        $competence->nombre_competencia=$request->nombre_competencia;
        $competence->descripcion=$request->descripcion;
        $competence->anexo=$request->anexo;
       

        $competence->save();  
     
      }
}
