<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageControllerSatu extends Controller
{
    //
    public function index(){
        return view('welcome');
    }
    public function satu(){
       // return "data pertama";
       $arrBuah =["pisang","rambutan","Anggur","jambu"];
       return view('pasarBuah')->with('pasarBuah',$arrBuah);
    }
}
