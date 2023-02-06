@extends('layouts.app')

@section('content')
        <div >
            <div><img src="/img/pizzahouse.jpeg" alt="hill" class="img1"></div>
            <h4>The North's Best Pizza </4> 
    </div>
    <p class="mssg">{{ session('mssg') }}</p>
    <a href="/pizzas/create">Order a Pizza</a>
   
@endsection
