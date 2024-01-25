<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        {{-- <link href="../resources/css/app.css" rel="stylesheet"> --}}
        <link href="/css/main.css" rel="stylesheet">
    </head>
    <body>

      @yield('content')

      <footer>
        <div class="container">
          <p>&copy; {{ date('Y') }} PizzaHouse. Created by: Abel Blanco</p>
      </div>
      </footer>
    </body>
</html>