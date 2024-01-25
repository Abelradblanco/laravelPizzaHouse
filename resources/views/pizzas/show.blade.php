@extends('layouts.app')

@section('content')
<div class="wrapper pizza-details">
    <div class="pizza-header">
        <h1>Order for {{$pizza->name}}</h1>
    </div>

    <div class="pizza-info">
        <div class="pizza-type">
            <p>Type - {{$pizza->type}}</p>
        </div>
        <div class="pizza-base">
            <p>Base - {{$pizza->base}}</p>
        </div>
        <div class="pizza-toppings">
            <p>Extra toppings:</p>
            <ul>
                @foreach($pizza->toppings as $topping)
                <li>{{$topping}}</li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="pizza-actions">
        <div class="button-container">
            <form  action="/pizzas" method="GET">
                @csrf
                <button type="submit" class="view-all-pizzas-btn" onclick="submitForm()">View all pizzas</button>
            </form>
            
            <form action="{{ route('pizzas.delete', $pizza->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="complete-order-btn">Complete Order</button>
            </form>
            
            
        </div>
    </div>
</div>
@endsection
