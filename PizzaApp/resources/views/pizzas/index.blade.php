@extends('layouts.app')

@section('content')
        <div class="wrapper pizza-index">
          <h1>Pizza Order</h1>
        @foreach($pizzas as $pizza)
       <div class="pizza-item">
       
         <img src="/img/pizza.jpeg" alt="pizza icon" class="img1">
         <h5><a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }} >></a> </h5>
       
       </div>
        @endforeach
        </div>
   @endsection