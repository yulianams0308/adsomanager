<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Session;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index(){
        
       
  
    }
    
    public function create(){
        $sessions = Session::all();
        return view('attendances.create', ['session'=>$sessions]);
        return view('attendances.create');
    }

    public function store(Request $request){
        
        $attendance=new Attendance();     
        $attendance->sesion_id=$request->sesion_id;
       
        $attendance->save();
       
     
       
     
      }
}
