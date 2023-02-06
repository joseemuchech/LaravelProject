@extends('layouts.app')

@section('content')
       <div class="wrapper create-pizza">
       <h1>Create a New Pizza</h1>
       <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name" required>
        <label for="type">Choose Pizza Type:</label>
        <select name="type" id="type">
           <option value="margarita">Margarita</option>
           <option value="hawaiian">Hawaiian</option>
           <option value="veg supreme">Veg supreme</option>
           <option value="volcano">Volcano</option>
        </select>
        <label for="base">Choose Base Type:</label>
        <select name="base" id="base">
           <option value="cheesy crust">Cheesy crust</option>
           <option value="garlic crust">Garlic crust</option>
           <option value="thin & cripsy">Thin & cripsy</option>
           <option value="thick">Thick</option>
        </select>
        <fieldset>
         <label>Extra toppings</label>
         <input type="checkbox" name="toppings[]" value="mushrooms">Mushroom<br />
         <input type="checkbox" name="toppings[]" value="peppers">Peppers<br />
         <input type="checkbox" name="toppings[]" value="garlic">Garlic<br />
         <input type="checkbox" name="toppings[]" value="olives">Olives<br />

        </fieldset>
        <input type="submit" value="Order pizza">
       </form>
</div>
   @endsection