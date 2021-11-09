@extends('layouts.app')
@section('content')
<h2 class="text-center">Welcome To Your Dashboard </h2>
<div class="container">
<section class="container overflow-hidden mt-5 catagories">
            <div class="row g-5 ">
              <div class="col">
               <div class="p-3 rounded bg-warning d-flex align-items-center justify-content-around">
                   <span class="text-white">TotalOrder</span>
                   <h1 class="text-white">{{$TotalOrder}}</h1>
                 </div>
              </div>
              <div class="col">
                <div  class="p-3 rounded bg-success d-flex align-items-center justify-content-around">
                <span class="text-white">TotalMedicine</span>
                    <h1 class="text-white">{{$TotalMedicine}}</h1>
                  </div>
               </div>
               <div class="col">
                <div class="p-3 rounded bg-primary d-flex align-items-center justify-content-around">
               
                  </div>
               </div>
             
            </div>
          </section>
@endsection