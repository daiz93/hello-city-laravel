@extends('layouts.base')

@section('title','About us | '.config('project.variable'))

@section('content')
       <H1>About US</H1>
       <p> It's currently {{ date('h:i A')}}</p>

       <p><a href="{{route('app_home')}}">Back</a></p>
              

@endsection