<?php

namespace App\Http\Controllers;

use App\Models\Datasheet;

use Illuminate\Http\Request;

class DatasheetController extends Controller
{
    public function index(){
        
       
  
    }
    
    public function create(){
        return view('datasheets.create');
    }

    public function store(Request $request){
        
        $datasheet=new Datasheet();
        $datasheet->numero_ficha=$request->numero_ficha;
        $datasheet->programa=$request->programa;
             

        $datasheet->save();       
     
      }

}
