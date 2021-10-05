@extends('layouts.app')
@section('content')
    <table class="table table-borded">
        <tr>
            <th>Product Id</th>
            <th>Product Name</th>
            <th>Product Qty</th>
            <th>Product Price</th>
            <th>Description</th>
            <th></th>
        </tr>
        @foreach($products as $product )
            <tr>
                <td>{{$product ->P_id}}</td>
                <td>{{$product ->p_name}}</td>
                <td>{{$product->p_qty}}</td>
                <td>{{$product->p_price}}</td>
                <td>{{$product->description}}</td>
                <td>
                    <a href="/product/edit/{{$product->id}}/{{$product->p_name}}" class="btn btn-success">Edit</a>
                    <a href="/product/delete/{{$product->id}}/{{$product->p_name}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection