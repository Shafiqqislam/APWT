<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;

class medicineApiController extends Controller
{
    //
    public function list(){
        $medicines=Medicine::all();
        return $medicines;
    }
    public function add(Request $req){
    $m=new Medicine();
    $m->name=$req->name;
    $m->image=$req->image;
    $m->price=$req->price;
    $m->save();
    }
}
