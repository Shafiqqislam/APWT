@extends('layouts.app')
@section('content')
<br>
<h2>Product Update</h2>
<form action="{{route('edit')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$product->id}}">
        <div class="col-md-4 form-group">
            <span>Product Id</span>
            <input type="text" name="p_id" value="{{$product->P_id}}"class="form-control">
            @error('p_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-4 form-group">
            <span>Product Name</span>
            <input type="text" name="p_name" value="{{$product->p_name}}" class="form-control">
            @error('p_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-md-4 form-group">
            <span>Product Qty</span>
            <input type="text" name="p_qty" value="{{$product->p_qty}}" class="form-control">
            @error('p_qty')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Price</span>
            <input type="text" name="p_price" value="{{$product->p_price}}" class="form-control">
            @error('p_price')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Description</span>
            <input type="text" name="description" value="{{$product->description}}" class="form-control">
            @error('description')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
       
        <div class="col-md-4 form-group pt-3">
            <input type="submit" class="btn btn-success" value="Update" >
        </div>
    </form>
@endsection