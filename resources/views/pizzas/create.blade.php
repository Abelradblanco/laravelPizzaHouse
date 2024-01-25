@extends('layouts.app')


@section('content')
<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>
    <form action="/pizzas" method="POST">
      @csrf
      <label>Your Name:</label>
      <input type="text" name="name" id="name">
      <label for="type">Choose Pizza Type:</label>
      <select name="type" id="type">
        <option value="margarita">Margarita</option>
        <option value="hawaiian">Hawaiian</option>
        <option value="veg supreme">Veg Supreme</option>
        <option value="volcano">Volcano</option>
      </select>
      <label for="base">Choose Base Type:</label>
      <select name="base" id="base">
        <option value="cheesy crust">Cheesy Crust</option>
        <option value="garlic crust">Garlic Crust</option>
        <option value="thin & crispy">Thin & Crispy</option>
        <option value="thick">Thick</option>
      </select>
      <fieldset>
        <label>Extra toppings:</label>
        <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms <br/>
        <input type="checkbox" name="toppings[]" value="peppers">Peppers <br/>
        <input type="checkbox" name="toppings[]" value="onions">Onions <br/>
        <input type="checkbox" name="toppings[]" value="bacon">Bacon <br/>
      </fieldset>
      <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection
