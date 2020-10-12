<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="https://kit.fontawesome.com/104915c1ae.js" crossorigin="anonymous"></script>
    </head>
    <body>
       @yield('content')
    </body>
</html>
