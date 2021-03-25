@extends('base')

    @section('title')

    {{config('app.name')}}

    @stop



@section('content')

    <img src="/images/europe.jpg" alt="europe FLAG">

    <h1>Hello from Belgium!!</h1>

    <p>It's currently {{date('h:i A')}}.</p>

@endsection 
