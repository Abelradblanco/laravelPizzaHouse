<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
  
  //apply middleware to all functions(routes)
  // public function __construct(){
  //   $this->middleware('auth');
  // }

  public function index() {
    
   //$pizzas = Pizza::all();
   //$pizzas = Pizza::orderBy('name', 'desc')->get();
  //$pizzas = Pizza::where('type', 'hawaiian')->get();
   $pizzas = Pizza::latest()->get();

    return view('pizzas.index', [
      'pizzas' => $pizzas,
    ]);
  }

  public function show($id) {

    $pizza = Pizza::findOrFail($id);

    // use the $id variable to query the db for a record
    return view('pizzas.show', ['pizza' => $pizza]);
  }

  public function showCreate(){
    return view('pizzas.create');
  }

  public function store(Request $request){

     // Validation rules
     $rules = [
      'name' => 'required|min:3', // 'name' is required and must have a minimum length of 3 characters
      'type' => 'required',
      'base' => 'required',
      'toppings' => 'required|array|min:1', // 'toppings' is required and must be an array with at least one element
  ];

  // Validate the request data
  $request->validate($rules);

  // Create a new Pizza instance
  $pizza = new Pizza();

  // Set the pizza properties based on the validated data
  $pizza->name = $request->input('name');
  $pizza->type = $request->input('type');
  $pizza->base = $request->input('base');
  $pizza->toppings = $request->input('toppings');

  // Save the pizza instance to the database
  $pizza->save();

  // Redirect to the home page with a success message
  return redirect('/')->with('mssg', 'Thank you for your order');
  }

  public function delete($id) {
    $pizza = Pizza::findOrFail($id);
    $pizza->delete();
    return redirect('/pizzas')->with('mssg', "Completed {$pizza->name}'s order");
    
  }

}
