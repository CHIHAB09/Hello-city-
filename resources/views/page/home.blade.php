@extends('base')

    @section('title')

    {{config('app.name')}}

    @stop



@section('content')
    {{-- asset() ajoute le nom de domaine au chemin et permet d accelerer la performance et la rapiditer du chargement (CDN) --}}
    <img src="{{ asset('images/europe.jpg') }}" alt="europe FLAG">

    <h1>Hello from Belgium!!</h1>

    <p>It's currently {{date('h:i A')}}.</p>

@endsection 
