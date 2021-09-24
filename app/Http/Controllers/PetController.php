<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetController extends Controller
{
  public function index(){
      return view('site.CadastroPet');
  }

  public function save(Request $request){
    
  } 


}

