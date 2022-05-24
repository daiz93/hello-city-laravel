<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title', config('app.name'))</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">

        
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="flex flex-col justify-between m-h-screen items-center">
        <main class="flex flex-col center" role="main">
            @yield('content')
        </main>         
        

        {{config('project.slogan')}}
       <footer class="text-gray-400">
           <p>Build with <span class="text-pink-500">&hearts;</span > &copy; Coyright {{date('Y')}} 
            @if(! Route::is('app_about'))
            &middot;  <a href="{{route('app_about')}}" class="text-indigo-300 hover:text-indigo-500 underline">About us</a>
            @endif
        </p>
       </footer>
    </body>
</html>
   