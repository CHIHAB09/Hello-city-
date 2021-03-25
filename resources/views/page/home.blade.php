@extends('base')

    @section('title')

    {{config('app.name')}}

    @stop



@section('content')

    {{-- asset() ajoute le nom de domaine au chemin et permet d accelerer la performance et la rapiditer du chargement (CDN) --}}
    <img src="{{ asset('images/europe.jpg') }}" alt="europe FLAG" class="mt-12 rounded shadow-md h-32">

    <h1 class="mt-5 text-3xl sm:text-5xl text-5xl font-semi-bold text-indigo-600">Hello from Belgium!!</h1>

    <p class= text-lg text-gray-800>It's currently {{date('h:i A')}}.</p>

@endsection 
