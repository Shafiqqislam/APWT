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
    public function about(){
        return view('pages.about');
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
    public function service(){
        $names = array("REPAIR COMPUTER","REPAIR MOBILE","REPAIR LAPTOP");
        $price = array("650$","850$","1000$");
        return view('pages.service')
        ->with('names',$names)
        ->with('price',$price);
    }
    public function team(){
        $names = array("Alexender Gary","Mellissa Munoz","John Abraham");
        $position = array("CEO & Founder","Chief Engineer","Technical Manager");
        return view('pages.team')
        ->with('names',$names)
        ->with('position',$position);
    }
}
