<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\Order;
use App\Models\Orderdetail;

class MedicineController extends Controller
{
    //
        public function list(){
        
            $medicines = Medicine::all();
            return view('pages.medicine.list')->with('medicines',$medicines);
    }
    public function addtocart(Request $req){
        $id = $req->id;
        $m = Medicine::where('id',$id)->first();
        $cart=[];
      
        if(session()->has('cart')){
            $cart = json_decode(session()->get('cart'));
        }
        $medicine = array('id'=>$id,'qty'=>2,'name'=>$m->name,'price'=>$m->price,'image'=>$m->image);
        $cart[] = (object)($medicine);
        $jsonCart = json_encode($cart);
        session()->put('cart',$jsonCart);
        // return session()->get('cart');
        return redirect()->route('medicines.list');
    }
    public function emptycart(){
        session()->forget('cart');
        if(!session()->has('cart')){
            return "Cart is empty";
        }
        return session('cart');
        
    }
    public function mycart(){
        $cart = json_decode(session()->get('cart'));
        return view('pages.medicine.cart')->with('cart',$cart);
    }
    public function checkout(Request $req){
       if(!session()->has('user')){
       return redirect()->route('login');
       }
        $medicines = json_decode(session()->get('cart'));
        //creating order
        $customer_id = session()->get('user');
        $order = new Order();
        $order->customer_id = $customer_id;
        $order->status="Ordered";
        $order->price = $req->total_price;
        $order->save();

        //creating order details
        foreach($medicines as $m){
            $o_d = new Orderdetail();
            $o_d->order_id = $order->id;
            $o_d->medicine_id = $m->id;
            $o_d->qty = $m->qty;
            $o_d->unit_price = $m->price;
            $o_d->save();
        }
        session()->forget('cart');
        return "added to db";
}
public function medicine(){
    return view('pages.medicine.medicine');
}
public function medicineSubmit(Request $request){
    //using requests validate method
    $validate = $request->validate(
        [
            'id'=>'required',
            'name'=>'required|min:5|max:30',
            'price'=>'required',
            'image'=> 'required|mimes:jpg,png,pdf,docx,xlsx,xlx|max:2048'
            
        ],
        [
            'id.required'=>"ID Required",
            'name.required'=>"Name Required",
            'price.required'=>"Price Required",
            'image.required'=>"Image Required"
        ]
    );
   

        $var = new Medicine();
        $var->id= $request->id;
        $var->name= $request->name;
        $var->price= $request->price;
        $var->image = $request->image;
        $var->save();


        return redirect()->route('medicinelist');
}
public function medicinelist(){
    $medicines = Medicine::all();
    return view('pages.medicine.medicinelist')->with('medicines',$medicines);
}

public function edit(Request $request){
    $id = $request->id;
    $medicine = Medicine::where('id',$id)->first();
    return view('pages.medicine.editProduct')->with('medicine',$medicine);

}
public function editSubmit(Request $request){
    $validate = $request->validate(
        [
            'id'=>'required',
            'name'=>'required|min:5|max:30',
            'price'=>'required',
            'image'=>'required',
            
        ],
        [
          'id.required'=>"ID Required",
          'name.required'=>"Name must be Required",
          'price.required'=>"Price Required",
          'image.required'=>"Image Required"
        ]
    );
    $var = Medicine::where('id',$request->id)->first();
    $var->id= $request->id;
    $var->name= $request->name;
    $var->price= $request->price;
    $var->image = $request->image;
    $var->save();
    return redirect()->route('medicinelist');

}

public function delete(Request $request){
   
    $var = Medicine::where('id',$request->id)->first();
    $var->id= $request->id;
    $var->delete();
    return redirect()->route('medicinelist');
}
}