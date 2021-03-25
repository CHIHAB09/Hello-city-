<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', config('app.name'))</title>
    </head>
    <body>

        @yield('content')
        
            

        <footer>
                <p>
                
                    &copy; Copyright {{date('Y')}} 
                    {{-- On dit que si on est pas sur about on affiche le liens faciliter pour afficher sur plusieur page  --}}
                    @if(!Route::is('app_about'))
                    &middot; <a href="{{route('app_about')}}">About Us</a>
                    @endif

                </p>
        </footer>
    </body>
</html>
