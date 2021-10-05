@extends('layouts.app')

@section('content')
    <br>
    <h2>Product Add</h2>
    <form action="{{route('product')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        
        <div class="col-md-4 form-group">
            <span>Product Id</span>
            <input type="text" name="p_id" value="{{old('p_id')}}"class="form-control">
            @error('p_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-4 form-group">
            <span>Product Name</span>
            <input type="text" name="p_name" value="{{old('p_name')}}" class="form-control">
            @error('p_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-md-4 form-group">
            <span>Product Qty</span>
            <input type="text" name="p_qty" value="{{old('p_qty')}}" class="form-control">
            @error('p_qty')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Produt price</span>
            <input type="text" name="p_price" value="{{old('p_price')}}" class="form-control">
            @error('p_price')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Description</span>
            <input type="text" name="description"  class="form-control">
            @error('description')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
       
        <div class="col-md-4 form-group pt-3">
            <input type="submit" class="btn btn-success" value="Add" >
        </div>
    </form>
@endsection