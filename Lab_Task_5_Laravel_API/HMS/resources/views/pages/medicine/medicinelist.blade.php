@extends('layouts.app')
@section('content')
    <table class="table table-borded">
        <h2 class="text-center">Manage Pharmacist</h2>
        <tr>
            <th>Medicine Id</th>
            <th>Medicine Name</th>
            <th>Medicine Price</th>
            <th>Action</th>
            <th></th>
        </tr>
        @foreach($medicines as $medicine )
            <tr>
                <td>{{$medicine ->id}}</td>
                <td>{{$medicine ->name}}</td>
                <td>{{$medicine->price}}</td>
               
                <td>
                    <a href="/medicine/edit/{{$medicine->id}}/{{$medicine->name}}" class="btn btn-success">Edit</a>
                    <a href="/medicine/delete/{{$medicine->id}}/{{$medicine->name}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection