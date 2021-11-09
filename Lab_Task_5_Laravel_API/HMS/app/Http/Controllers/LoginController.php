<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Pharmacist;
use App\Models\Medicine;
use App\Models\Order;

class LoginController extends Controller
{
    //
    public function login(){
        return view('pages.login.login');
    }
    public function loginSubmit(Request $req){
        $c = Customer::where('name',$req->name)
                  ->where('password',md5($req->password))
                  ->first();
          
        if($c){
            session()->put('user',$c->name);
            return redirect()->route('dashboard');
        }
        return redirect()->route('login');
      

    }
    public function logout(){
        session()->flush();
        return redirect()->route('login');
    }
    public  function dashboard(){
       
        $TotalOrder =Order::count();
        $TotalMedicine =Medicine::count();
        return view('dashboard',[
            'TotalOrder' => $TotalOrder,
            'TotalMedicine'=> $TotalMedicine
           
        ]);
    }
}
