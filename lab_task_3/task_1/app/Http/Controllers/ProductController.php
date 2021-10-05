<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function product(){
        return view('pages.Product');
    }

    public function productSubmit(Request $request){
        //using requests validate method
        $validate = $request->validate(
            [
                'p_id'=>'required',
                'p_name'=>'required|min:5|max:10',
                'p_qty'=>'required',
                'p_price'=>'required',
                'description'=>'required'
                
            ],
            [
                'p_id.required'=>"Product ID Required",
                'p_name.required'=>"Product Name Required",
                'p_qty.required'=>"Product Quantity Required",
                'p_price.required'=>"Product Price Required",
                'p_description.required'=>"Product Description Required"
            ]
        );

            $var = new Product();
            $var->p_id= $request->p_id;
            $var->p_name= $request->p_name;
            $var->p_qty= $request->p_qty;
            $var->p_price= $request->p_price;
            $var->description = $request->description;
            $var->save();


            return redirect()->route('list');
    }

    public function list(){
        $products = Product::all();
        return view('pages.list')->with('products',$products);
    }
   
    public function edit(Request $request){
        $id = $request->id;
        $product = Product::where('id',$id)->first();
        return view('pages.editProduct')->with('product',$product);

    }
    public function editSubmit(Request $request){
        $validate = $request->validate(
            [
                'p_id'=>'required',
                'p_name'=>'required|min:5|max:10',
                'p_qty'=>'required',
                'p_price'=>'required',
                'description'=>'required'
                
            ],
            [
                'p_id.required'=>"Product ID Required",
                'p_name.required'=>"Product Name Required",
                'p_qty.required'=>"Product Quantity Required",
                'p_price.required'=>"Product Price Required",
                'p_description.required'=>"Product Description Required"
            ]
        );
        $var = Product::where('id',$request->id)->first();
        $var->p_id= $request->p_id;
        $var->p_name= $request->p_name;
        $var->P_qty= $request->p_qty;
        $var->P_price= $request->p_price;
        $var->description = $request->description;
        $var->save();
        return redirect()->route('list');

    }

    public function delete(Request $request){
        $var = Product::where('id',$request->id)->first();
        $var->p_id= $request->p_id;
        $var->delete();
        return redirect()->route('list');
    }
}
