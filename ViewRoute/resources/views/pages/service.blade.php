@extends('layouts.app')
@section('content')
        <h1 class="text-center">Our Repair Services</h1>
        <div  class=".d-flex p-2 bg-primary text-white">
      <div class="names">
           <table>
             @foreach($names as $n)
             <tr><td>{{$n}}</td></tr> 
             @endforeach
          </table>
     </div>
     <div class="price">
         <table>
           @foreach($price as $n)
          <tr><td>{{$n}}</td></tr> 
          @endforeach
        </table>
     </div>
   </div>
@endsection