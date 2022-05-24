<footer class="text-gray-400">
    <p>Build with <span class="text-pink-500">&hearts;</span > &copy; Coyright {{date('Y')}} 
     @if(! Route::is('app_about'))
     &middot;  <a href="{{route('app_about')}}" class="text-indigo-300 hover:text-indigo-500 underline">About us</a>
     @endif
 </p>
</footer>