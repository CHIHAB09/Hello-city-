<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello City</title>

    </head>
    <body>

        <p>First test with Laravel &hearts;</p>    
        <p><a href="/">Return at home.</a></p>

        <footer>
            <p>&copy; Copyright {{date('Y')}}</p>
        </footer>
    </body>
</html>
