@extends('layouts.app')

@section('content')
  <div class="wrapper pizza-index">
    <div class="pizza-header">
      <h1>Pizza Orders</h1>
    </div>

    <div class="pizza-list">
      @if(count($pizzas) > 0)
        @foreach($pizzas as $pizza)
          <div class="pizza-item">
            <div class="pizza-image">
              <img src="/img/pizza.png" alt="pizza icon">
            </div>
            <div class="pizza-details">
              <h4><a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }}</a></h4>
            </div>
          </div>
        @endforeach
      @else
        <p class="no-pizzas">No pizza orders at this time.</p>
      @endif
    </div>

  </div>
@endsection
