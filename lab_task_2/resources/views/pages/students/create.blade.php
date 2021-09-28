@extends('layouts.app')
@section('content')
<div class="container">
<form action="" class="col-md-6" method="get">
    <div class="col-md-4 form-group">
        <span>Name</span>
        <input type="text" class="form-control">
    </div>
    <div class=" col-md-4 form-group">
        <span>Id</span>
        <input type="text" class="form-control">
    </div>
    <div class="col-md-4 form-group">
        <span>Email</span>
        <input type="email" class="form-control">
    </div>
    <div class="col-md-4 form-group">
        <span>Date</span>
        <input type="date" class="form-control">
    </div>
    <input type="submit" value="Add" class="btn btn-danger">
</form>
</div>

@endsection