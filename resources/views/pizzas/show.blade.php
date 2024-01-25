@extends('layouts.app')

@section('content')
  <div class="wrapper pizza-details">
    <div class="pizza-header">
      <h1 class="order-title">Order for <span class="customer-name">{{ $pizza->name }}</span></h1>
    </div>

    <div class="pizza-info">
      <div class="pizza-type">
        <p class="info-text">Type: <span class="info-value">{{ $pizza->type }}</span></p>
      </div>
      <div class="pizza-base">
        <p class="info-text">Base: <span class="info-value">{{ $pizza->base }}</span></p>
      </div>
      <div class="pizza-toppings">
        <p class="info-text">Extra toppings:</p>
        <ul class="toppings-list">
          @foreach($pizza->toppings as $topping)
            <li>{{ $topping }}</li>
          @endforeach
        </ul>
      </div>
    </div>

    <div class="pizza-actions">
      <div class="button-container">
        <form action="/pizzas" method="GET">
          @csrf
          <button type="submit" class="view-all-pizzas-btn">View all pizzas</button>
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
