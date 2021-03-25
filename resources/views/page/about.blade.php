@extends('base') 
<!--on appel le template de base-->
    @section('title','About Us | '. config('app.name'))


@section('content')
    <body>
        
        <img src="{{ asset('images/aboutus.jpg') }}" alt="about us FLAG">

        <p>First test with Laravel &hearts;</p>    

        <p><a href="{{route('app_home')}}">Return at home.</a></p>

@endsection
