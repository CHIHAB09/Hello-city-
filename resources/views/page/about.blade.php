@extends('base') 
<!--on appel le template de base-->
    @section('title','About Us | '. config('app.name'))


@section('content')
    <body>

        <p>First test with Laravel &hearts;</p>    

        <p><a href="{{route('app_home')}}">Return at home.</a></p>

@endsection
