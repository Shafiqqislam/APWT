@extends('layouts.app')
@section('content')
<br>
<h2>Product Update</h2>
<form action="{{route('edit')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$medicine->id}}">
        <div class="col-md-4 form-group">
            <span>Medicine Id</span>
            <input type="text" name="id" value="{{$medicine->id}}"class="form-control">
            @error('id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-4 form-group">
            <span>Medicine Name</span>
            <input type="text" name="name" value="{{$medicine->name}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-md-4 form-group">
            <span>Medicine Price</span>
            <input type="text" name="price" value="{{$medicine->price}}" class="form-control">
            @error('price')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Medicine Image</span>
            <input type="file" name="image" value="{{$medicine->image}}" class="form-control">
            @error('image')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
       
        <div class="col-md-4 form-group pt-3">
            <input type="submit" class="btn btn-success" value="Update" >
        </div>
    </form>
@endsection