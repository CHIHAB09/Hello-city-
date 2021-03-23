@extends('base')

    @section('title')

        Hello City

    @stop



@section('content')

    <h1>Hello from Belgium!!</h1>

    <p>It's currently {{date('h:i A')}}.</p>

@endsection 
