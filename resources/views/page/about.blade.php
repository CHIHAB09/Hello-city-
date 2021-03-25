@extends('layout.base',['pageTitle'=> 'About Us']) 
<!--on appel le template de base-->

@section('content')
    <body>
        
        <img src="{{ asset('images/aboutus.jpg') }}" alt="about us FLAG"class="my-12 rounded-full shadow-md">

        <h2 class="mb-5 text-gray-700">
            First test with Laravel <span class="text-pink-500">&hearts;</span>
        </h2>    

        <p>
        <a href="{{route('app_home')}}"class="text-indigo-500 hover:text-indigo-700 underline">
        Return at home.</a>
        </p>

@endsection
