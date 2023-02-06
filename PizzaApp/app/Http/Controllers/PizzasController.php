<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pizza;

class PizzasController extends Controller
{
    /*public function __construct(){  
      $this->middleware('auth');
    }*/


  public function index(){

   $pizzas = pizza::all();
    // $pizzas = pizza::OrderBy('name')->get();
      //$pizzas = pizza::where('type','hawaiian')->get();
        // $pizzas = pizza::latest()->get();
        return view('pizzas.index', ['pizzas'=> $pizzas]);

  }
  public function show($id){
    $pizza = pizza::findOrFail($id);
    return view('pizzas.show',['pizza'=>$pizza]);
  }
public function create(){

  return view('pizzas.create');
}
public function store(){
   $pizza = new pizza();

   $pizza->name = request('name');
   $pizza->type = request('type');
   $pizza->base = request('base');
   $pizza->toppings = request('toppings');
   
   $pizza->save();
return redirect('/')->with('mssg','Thanks for your order');
}
public function destroy($id){
  $pizza = Pizza::findOrFail($id);
  $pizza->delete();

  return redirect('/pizzas');

}

}
