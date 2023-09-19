<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use App\Models\Datasheet;
use App\Models\User;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    public function index(){
        
       
  
    }

   
    public function create(){
        $datasheets = Datasheet::all();
        $users = User::all();
     

        return view('apprentices.create', ['datasheet'=>$datasheets,'user'=>$users ]);      
        return view('apprentices.create');
        
       
    }

    public function store(Request $request){
        
        $apprentice=new Apprentice();
        $apprentice->estado=$request->estado;
        $apprentice->etapa=$request->etapa;
        $apprentice->ficha_id=$request->ficha_id;
        $apprentice->user_id=$request->user_id;

        $apprentice->save();       
     
    }
}
