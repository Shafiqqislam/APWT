<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    
    public function home(){
        return view('pages.home');
    }
    public function contact(){
        return view('pages.contact');
    }
   
    public function myProfile(){
        $name = "ISLAM MD SHAFIKUL";
        $id = "18-38348-2";
        $dob = "03-08-1997";
        return view('pages.myprofile')
        ->with('name',$name)
        ->with('id',$id)
        ->with('dob',$dob);
       
    }
   
   
}
