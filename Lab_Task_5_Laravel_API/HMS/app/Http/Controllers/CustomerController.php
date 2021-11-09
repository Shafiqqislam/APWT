<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;



class CustomerController extends Controller
{
    //
    public function myOrders(){

        $customer_id = session()->get('user');
        $orders = Order::where('customer_id',$customer_id)->get();
        return view('pages.customer.myorder')->with('orders',$orders);
    }
    public function orderdetails(Request $request){
        $id = $request->id;
        $order=order::where('id',$id)->first();
        // return $order->medicines;
        return view('pages.customer.orderdetails')->with('order',$order);
    }
   
}
