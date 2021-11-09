@extends('layouts.app')

@section('content')
    <form  enctype="multipart/form-data" action="{{route('medicine')}}" class="" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        
        <div class="col-md-4 form-group">
            <span>Medicine Id</span>
            <input type="text" name="id" value="{{old('id')}}"class="form-control">
            @error('id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-4 form-group">
            <span>Medicine Name</span>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-md-4 form-group">
            <span>Medicine Price</span>
            <input type="text" name="price" value="{{old('price')}}" class="form-control">
            @error('price')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Upload Image</span>
            <input type="file" name="image" value="{{old('image')}}" class="form-control">
            @error('image')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
       
        <div class="col-md-4 form-group pt-3">
            <input type="submit" class="btn btn-success" value="Submit" >
        </div>
    </form>
@endsection