<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title', config('app.name'))</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
       

    </head>
    <body class="antialiased">
            
        @yield('content')

        {{config('project.slogan')}}
       <footer>
           <p>&copy; Coyright 2022 &middot; <a href="/about-us">About us</a> </p>
       </footer>
    </body>
</html>
   