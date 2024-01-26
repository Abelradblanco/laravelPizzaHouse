@extends('layouts.app')

@section('content')
  <div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>
    <form action="/pizzas" method="POST" class="pizza-form">
      @csrf
      <div class="form-group">
        <label for="name">Your Name:</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
      </div>
      <div class="form-group">
        <label for="type">Choose Pizza Type:</label>
        <select name="type" id="type" class="form-control" required>
          <option value="margarita">Margarita</option>
          <option value="hawaiian">Hawaiian</option>
          <option value="veg supreme">Veg Supreme</option>
          <option value="volcano">Volcano</option>
        </select>
      </div>
      <div class="form-group">
        <label for="base">Choose Base Type:</label>
        <select name="base" id="base" class="form-control" required>
          <option value="cheesy crust">Cheesy Crust</option>
          <option value="garlic crust">Garlic Crust</option>
          <option value="thin & crispy">Thin & Crispy</option>
          <option value="thick">Thick</option>
        </select>
      </div> 
      <fieldset class="form-group">
        <legend>Extra toppings:</legend>
        <div class="topping-checkboxes">
          <div class="topping-checkbox">
            <input type="checkbox" name="toppings[]" value="mushrooms" id="mushrooms">
            <label for="mushrooms">Mushrooms</label>
          </div>
          <div class="topping-checkbox">
            <input type="checkbox" name="toppings[]" value="peppers" id="peppers">
            <label for="peppers">Peppers</label>
          </div>
          <div class="topping-checkbox">
            <input type="checkbox" name="toppings[]" value="onions" id="onions">
            <label for="onions">Onions</label>
          </div>
          <div class="topping-checkbox">
            <input type="checkbox" name="toppings[]" value="bacon" id="bacon">
            <label for="bacon">Bacon</label>
          </div>
        </div>
      </fieldset>
      <button type="submit" class="order-btn">Order Pizza</button>
    </form>
  </div>
@endsection
