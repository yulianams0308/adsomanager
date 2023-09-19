<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use App\Models\User;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function index(){
        
       
  
    }

   
    public function create(){
    
        $users = User::all();
     

        return view('instructors.create', ['user'=>$users ]);      
        return view('instructors.create');
        
       
    }

    public function store(Request $request){
        
        $instructor=new Instructor();
        $instructor->profesion=$request->profesion;
        $instructor->user_id=$request->user_id;

        $instructor->save();       
     
    }
}
