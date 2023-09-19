<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        
       
  
    }
    
    public function create(){
        return view('roles.create');
    }

    public function store(Request $request){
        
        $role=new Role();
        $role->nombre_rol=$request->nombre_rol;
       
             

        $role->save();       
     
      }
}
