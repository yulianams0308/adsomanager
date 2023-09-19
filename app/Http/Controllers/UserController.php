<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;


class UserController extends Controller
{
    public function index(){
        
        
  
    }

   
    public function create(){
        $roles = Role::all();
      //  return $roles; // Carga todos los roles desde tu modelo Role
        return view('users.create', ['role'=>$roles]);
        return view('users.create');
        
       
    }

    public function store(Request $request){
        
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->email_verified_at= now();
        $user->role_id=$request->role_id;

        $user->save();       
     
    }
}
