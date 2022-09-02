<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    <h2>Aquí la navbar</h2>
    <div class="container">
        @yield('content')
    </div>
    <h2>Aquí el footer</h2>    
</body>
</html> 