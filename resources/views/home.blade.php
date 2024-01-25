@extends('layouts.app')

@section('content')
<div class="dashboard-container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    @auth
        <div class="dashboard-welcome">
            <h1 class="welcome-text">Welcome</h1>
            <p class="user-info">
                <script>
                    var hour = new Date().getHours();
                    var greeting = '';

                    if (hour >= 0 && hour < 12) {
                        greeting = 'Good morning';
                    } else if (hour >= 12 && hour < 17) {
                        greeting = 'Good afternoon';
                    } else {
                        greeting = 'Good evening';
                    }

                    document.write('<span>' + greeting + ', {{ Auth::user()->name }}.</span>');
                </script>
                <br>You are logged in!
            </p>
        </div>
    @else
        <div class="not-logged-in">
            {{ __('You are not logged in.') }}
        </div>
    @endauth

    <div class="action-link">
        <a href="/pizzas" class="btn btn-primary btn-lg">View All Pizza Orders</a>
    </div>
</div>
@endsection
