<!DOCTYPE html>
{{--str_replace va remplacer les '_' en '-' et le app_local va prendre la langue qu on a initier sur app.php --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', config('app.name'))</title>
        {{-- template css importer avec le cdn https://tailwindcss.com --}}
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    </head>
    <body class="py-6 flex flex-col justify-between items-center min-h-screen">

    <main role="main"class="flex flex-col justify-center items-center">
        @yield('content')
    </main>
            

        <footer>
                <p class="text-gray-400">
                
                    &copy; Copyright {{date('Y')}} 
                    {{-- On dit que si on est pas sur about on affiche le liens faciliter pour afficher sur plusieur page  --}}
                    @if(!Route::is('app_about'))
                    &middot; <a href="{{route('app_about')}}"class="text-indigo-500 
                    hover:text-indigo-700 underline"> About Us</a>
                    @endif

                </p>
        </footer>
    </body>
</html>
