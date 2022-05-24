@extends('base')

@section('title')


@section('content')
       <H1>{{config('app.name')}}</H1>
  
       <p> By Desmond KPOHIZOUN</p>
       <p><a href="{{route('app_about')}}">About us</a></p>
              
@endsection